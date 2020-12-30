<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Notifications\ProposalUpdateNotification;
use App\Notifications\ProposalCloseNotification;
//use Carbon\Carbon;
use Entrust;
use App\Institution;
use App\AdminProposal;
use App\ProposalComments;
use App\ProposalsTopics;
use App\Admin;
use App\User;
use App\Document;
use Auth;
use DB;
use App\Proposal;
use App\Topic;

class ProposalController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->hasRole(['manager', 'institutional_analyst'])){
            // $data = AdminProposal::name($request->get('criteria'))->orderBy('id','asc')->paginate(5);
            // dd($data);
             $male = DB::table('users')
             ->where('gender', '=', 'Masculino')
             ->count();

            $data = Proposal::topicsByProposals();
            //dd($data);
            $female = DB::table('users')
                ->where('gender', '=', 'Femenino')
                ->count();
            
            $datacount = DB::table('topics')
                ->leftJoin('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
                ->select('topics.name as tpname', 'proposals_topics.topic_id', \DB::raw('count(topic_id) as total'))
                ->groupBy('topics.name', 'proposals_topics.topic_id')
                ->orderBy('topic_id', 'desc')
                ->get();
            
                /********* */

                $topicount = DB::table('topics')
                ->Join('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
                ->select('topics.name as tpname')                
                ->groupBy('topics.name')
                ->get();

                //$topicount = $data->topics

                //$topicount = App\Proposal::topicsByProposals();

            return view('administracion.propuestas.inicio', compact('data', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK), 'topicount', json_encode($topicount,JSON_NUMERIC_CHECK)))->with('i', ($request->input('page', 1) - 1) * 5);
        }
        elseif(Auth::user()->hasRole(['admin', 'analyst_institutions'])){
            //$data = AdminProposal::name($request->get('criteria'))->where('admin_id','=', Auth::id())->orderBy('id','asc')->paginate(5);
            $data = Proposal::topicByProposal($request->get('criteria'))->where('admin_id','=', Auth::id())->orderBy('id','desc')->paginate(5);
            //$data = Proposal::topicsByProposals();
            //dd($data);
            
            $male = DB::table('users')
            ->where('gender', '=', 'Masculino')
            ->count();
        
            $female = DB::table('users')
                ->where('gender', '=', 'Femenino')
                ->count();

            $datacount = DB::table('topics')
                ->leftJoin('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
                ->select('topics.name as tpname', 'proposals_topics.topic_id', \DB::raw('count(topic_id) as total'))
                ->groupBy('topics.name', 'proposals_topics.topic_id')
                ->orderBy('topic_id', 'desc')
                ->get();
                            
            $topicount = DB::table('topics')
                ->Join('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
                ->select('topics.name as tpname')
                ->groupBy('topics.name')
                ->get();

            return view('administracion.propuestas.inicio', compact('data', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK), 'topicount', json_encode($topicount,JSON_NUMERIC_CHECK)))->with('i', ($request->input('page', 1) - 1) * 5);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pcomments = ProposalComments::find($id);

        $propuestas = AdminProposal::find($id);

        $admins = Admin::orderBy('id', 'desc')->pluck('name', 'id');

        $proposalcomments = DB::table('admins')
            ->join('proposal_comments', 'admins.id', '=', 'proposal_comments.admin_id')
            ->join('institutions', 'admins.institution_id', '=', 'institutions.id')
            ->select('admins.id as aid', 'admins.name as adname', 'admins.lastname as adlastname', 'institutions.name as in', 'proposal_comments.comments as pcc', 'proposal_comments.created_at as pcca')            
            ->groupBy('admins.id', 'admins.name', 'admins.lastname', 'institutions.name', 'proposal_comments.comments', 'proposal_comments.created_at')
            ->where('proposal_comments.proposal_id', '=', $id)
            ->orderBy('proposal_comments.created_at', 'desc')
            ->get();
        
        $userdocs = DB::table('documents')
            ->join('proposals', 'documents.proposal_id', '=', 'proposals.id')
            ->join('users', 'documents.user_id', '=', 'users.id')            
            ->select('documents.proposal_id as prop', 'documents.name as docname', 'documents.user_id as docuserid', 'documents.document_type as doctype', 'documents.created_at as docdate', 'users.name as username', 'users.lastname as userlastname')           
            ->where('proposals.id', '=', $id)
            ->groupBy('documents.proposal_id', 'documents.name', 'documents.user_id', 'documents.document_type', 'documents.created_at', 'users.name', 'users.lastname')
            ->get();
        
        $admindocs = DB::table('documents')
            ->join('proposals', 'documents.proposal_id', '=', 'proposals.id')
            ->join('admins', 'documents.admin_id', '=', 'admins.id')            
            ->select('documents.proposal_id as prop', 'documents.name as docname', 'documents.admin_id as docadminid', 'documents.document_type as doctype', 'documents.created_at as docdate', 'admins.name as adminname', 'admins.lastname as adminlastname')           
            ->where('proposals.id', '=', $id)
            ->groupBy('documents.proposal_id', 'documents.name', 'documents.admin_id', 'documents.document_type', 'documents.created_at', 'admins.name', 'admins.lastname')
            ->get();
        
        $male = DB::table('users')
            ->where('gender', '=', 'Masculino')
            ->count();
        
        $female = DB::table('users')
            ->where('gender', '=', 'Femenino')
            ->count();

        $datacount = DB::table('topics')
            ->leftJoin('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
            ->select('topics.name as tpname', 'proposals_topics.topic_id', \DB::raw('count(topic_id) as total'))
            ->groupBy('topics.name', 'proposals_topics.topic_id')
            ->orderBy('topic_id', 'desc')
            ->get();
        
        
        $topicount = DB::table('topics')
            ->Join('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
            ->select('topics.name as tpname')
            ->groupBy('topics.name')
            ->get();

        //dd($userdocs, $admindocs, $proposalcomments);
        
        $proposal = Proposal::findOrFail($id);
        
        $data = $proposal->topics;

        return view('administracion.propuestas.detalle', compact('data','propuestas', 'admins', 'proposalcomments', 'userdocs', 'admindocs', 'pcomments', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK), 'topicount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $propuestas = AdminProposal::find($id);

        //dd($propuestas);

        $proposalcomments = ProposalComments::find($id);

        $admins = Admin::orderBy('id', 'asc')->pluck('name', 'id');

        $instituciones = DB::table('institutions')->pluck('name', 'id')->all();

        /*$documents = DB::table('documents')
            ->join('proposals', 'documents.proposal_id', '=', 'proposals.id')
            ->where('proposals.id', '=', $id)
            ->orderBy('proposal_id', 'desc')
            ->get();*/
        
        $userdocs = DB::table('documents')
            ->join('proposals', 'documents.proposal_id', '=', 'proposals.id')
            ->join('users', 'documents.user_id', '=', 'users.id')            
            ->select('documents.proposal_id as prop', 'documents.name as docname', 'documents.document_type as doctype', 'documents.created_at as docdate', 'users.name as username', 'users.lastname as userlastname') 
            ->where('proposals.id', '=', $id)          
            ->groupBy('documents.proposal_id', 'documents.name', 'documents.document_type', 'documents.created_at', 'users.name', 'users.lastname')
            ->get();
        
        $admindocs = DB::table('documents')
            ->join('proposals', 'documents.proposal_id', '=', 'proposals.id')
            ->join('admins', 'documents.admin_id', '=', 'admins.id')            
            ->select('documents.proposal_id as prop', 'documents.name as docname', 'documents.document_type as doctype', 'documents.created_at as docdate', 'admins.name as adminname', 'admins.lastname as adminlastname')           
            ->where('proposals.id', '=', $id)
            ->groupBy('documents.proposal_id', 'documents.name', 'documents.document_type', 'documents.created_at', 'admins.name', 'admins.lastname')
            ->get();
        
        $male = DB::table('users')
            ->where('gender', '=', 'Masculino')
            ->count();
        
        $female = DB::table('users')
            ->where('gender', '=', 'Femenino')
            ->count();

        $datacount = DB::table('topics')
            ->leftJoin('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
            ->select('topics.name as tpname', 'proposals_topics.topic_id', \DB::raw('count(topic_id) as total'))
            ->groupBy('topics.name', 'proposals_topics.topic_id')
            ->orderBy('topic_id', 'desc')
            ->get();
        
        $allTopics = Topic::all();
            
        $proposalTopics = Proposal::findOrFail($id)->topics;
      
        //dd($documents);

        //dd($datacount);

        //dd($topicount);

        return view('administracion.propuestas.editar', compact('propuestas', 'admins', 'instituciones', 'proposalcomments', 'userdocs', 'admindocs', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK), 'allTopics', 'proposalTopics'));
    }

    /**
     * Show the application selectAjax.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectAjax(Request $request)
    {
        if($request->ajax()){
            $admins = DB::table('admins')->where('institution_id',$request->institution_id)->pluck("name","id")->all();

            $data = view('administracion.propuestas.incluir.herramientas.ajax-select',compact('admins'))->render();

            return response()->json(['options' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $topic = ProposalsTopics::find($id);
        
        $proposals = AdminProposal::find($id);
        
        $inputs=Input::all();

        //dd($inputs);

        /*$tables->purchases              = $request->get('purchases') ? 1 : 0;
        $tables->civil_services         = $request->get('civil_services') ? 1 : 0;
        $tables->financial_management   = $request->get('financial_management') ? 1 : 0;
        $tables->access_information     = $request->get('access_information') ? 1 : 0;
        $tables->infrastructure         = $request->get('infrastructure') ? 1 : 0;
        $tables->health                 = $request->get('health') ? 1 : 0;
        $tables->education              = $request->get('education') ? 1 : 0;
        $tables->energy                 = $request->get('energy') ? 1 : 0;
        $tables->water                  = $request->get('water') ? 1 : 0;
        $tables->watchdogs              = $request->get('watchdogs') ? 1 : 0;*/

        // dd($topic);

        $proposals->prefix              = $request->get('prefix');
        $proposals->institution_id      = $request->get('institution_id');
        $proposals->admin_id            = $request->get('admin_id');
        $proposals->status              = $request->get('status');

        //dd($proposals->admin_id);

        $proposalcomments = new ProposalComments;
        
        $proposalcomments->proposal_id      = $request->id;
        $proposalcomments->admin_id         = $request->admins;
        $proposalcomments->comments         = $request->comments;

        //dd($proposalcomments);

        if($archivos = $request->file('avatar')){
            foreach ($archivos as $archivo) 
            {
                $rules = array(
                    'avatar' => 'required|mimes:doc,pdf,docx,png,gif,jpeg,jpg|max:20000'
                );

                $validator = \Validator::make(array('avatar'=> $archivo), $rules);
                if (! $validator->passes())
                {
                    return redirect()->back()->withErrors($validator);
                }

                $extension = $archivo->getClientOriginalExtension();
                $filename = uniqid() . '.' . $extension;
                $path = public_path() . '/uploads/propuestas/';

                //Move file into uploads folder 
                $archivo->move($path, $filename);

                //Insert file name in db
                $archivo = Document::create([ 
                    'name'          => $filename,
                    'proposal_id'   => $proposals->id,
                    'admin_id'      => $request->admins,
                    'document_type' => $request->get('document_type'),
                ]);
            }  
        } 

        //dd($archivo);
        //dd($topic);
        $topic->update();

        $proposals->update();

        $proposalcomments->save();

        $usernotify = Admin::find(1);

        $assigneduser = $proposals->admin_id;

        $assign = Admin::find($assigneduser);

        if (!empty($assign) ) {
            $assign->notify(new ProposalUpdateNotification($proposals, $proposalcomments));
        }       

        $usernotify->notify(new ProposalUpdateNotification($proposals, $proposalcomments));

        return redirect()->action('Admin\ProposalController@index')
                        ->with('success','Asignación y cambios a propuesta realizados correctamente...');
    }

    public function cierre(Request $request, $id)
    {
        $propuestas = AdminProposal::find($id);

        $proposalcomments = DB::table('admins')
                ->join('proposal_comments', 'admins.id', '=', 'proposal_comments.admin_id')
                ->where('proposal_comments.proposal_id', '=', $id)
                ->orderBy('admin_id', 'asc')
                ->get();
        //dd($propuestas);

        $male = DB::table('users')
            ->where('gender', '=', 'Masculino')
            ->count();
        
        $female = DB::table('users')
            ->where('gender', '=', 'Femenino')
            ->count();

        $topicount = DB::table('topics')
            ->Join('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
            ->select('topics.name as tpname')
            ->where('proposals_topics.proposal_id', '=', $id) 
            ->groupBy('topics.name')
            ->get();

        $datacount = DB::table('topics')
            ->leftJoin('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
            ->select('topics.name as tpname', 'proposals_topics.topic_id', \DB::raw('count(topic_id) as total'))
            ->groupBy('topics.name', 'proposals_topics.topic_id')
            ->orderBy('topic_id', 'desc')
            ->get();

        return view('administracion.propuestas.cerrar', compact('data', 'propuestas', 'proposalcomments', 'topicount', 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK), 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK)));
    } 
    
    public function cierrepropuesta(Request $request, $id)
    {
        $proposals = AdminProposal::find($id);

        $admins = Admin::orderBy('id', 'asc')->pluck('name', 'id');

        $proposals->prefix              = $request->get('prefix');
        //$proposals->admin_id            = $request->admins;
        $proposals->status              = $request->get('status');

        //dd($proposals);

        $proposalcomments = new ProposalComments;
        
        $proposalcomments->proposal_id      = $request->id;
        $proposalcomments->admin_id         = $request->admins;
        $proposalcomments->comments         = $request->comments;

        //dd($proposalcomments);        

        $proposals->update();

        $proposalcomments->save();

        $usernotify = Admin::find(1);

        $usernotify->notify(new ProposalCloseNotification($proposals, $proposalcomments));

        return redirect()->action('Admin\ProposalController@index')
                        ->with('success','Proceso de evaluación de propuesta cerrado...');
    }
}
