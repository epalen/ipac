<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Notifications\ProposalCreateNotification;
use App\Notifications\UserProposalNotification;
use App\Document;
use App\Proposal;
use App\Province;
use App\ProposalsTopics;
use App\User;
use App\Admin;
use Auth;
use DB;

class ProposalController extends Controller
{    
    public function province()
    {
        //$provinces = Province::orderBy('id', 'asc')->pluck('name', 'id');

        $provinces = DB::table('provinces')->pluck('name', 'id')->all();

        return view('propuestas.proponer.inicio', compact('provinces'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {   
        //$proposal = Proposal::all();

        $provinces = DB::table('provinces')->pluck('name', 'id')->all();

        //dd($provinces);

        return view('propuestas.proponer.inicio', compact('provinces', 'municipalities'));
    }

    /**
     * Show the application selectAjax.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectAjax(Request $request)
    {
        if($request->ajax()){
            $municipalities = DB::table('municipalities')->where('province_id',$request->province_id)->pluck("name","id")->all();

            $data = view('propuestas.proponer.incluir.steps.ajax-select',compact('municipalities'))->render();

            return response()->json(['options' => $data]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {  
        $rules = [
            'topic_id'                  => 'required',
            'title'                     => 'required',
            'province_id'               => 'required',
            'municipalities'            => 'required',
            'description'               => 'required',            
        ];

        $messages = [
            'topic_id.required'                 => 'Debe seleccionar al menos una mesa.',
            'title.required'                    => 'Agregue un título descriptivo.',
            'province_id.required'              => 'Seleccione una provincia.',
            'municipalities.required'           => 'Seleccione un municipio.',
            'description.required'              => 'Debe agregar una descripción sobre la formulación de su propuesta.',
        ];

        $this->validate($request, $rules, $messages);        

        /*$table = Table::create([
            'purchases'             => $request->has('purchases') ? 1 : 0,
            'civil_services'        => $request->has('civil_services') ? 1 : 0,
            'financial_management'  => $request->has('financial_management') ? 1 : 0,
            'access_information'    => $request->has('access_information') ? 1 : 0,
            'infrastructure'        => $request->has('infrastructure') ? 1 : 0,
            'health'                => $request->has('health') ? 1 : 0,
            'education'             => $request->has('education') ? 1 : 0,
            'energy'                => $request->has('energy') ? 1 : 0,
            'water'                 => $request->has('water') ? 1 : 0,
            'watchdogs'             => $request->has('watchdogs') ? 1 : 0,
        ]);*/   

        /*foreach ($request->input('topic_id') as $topics){
            $topic = new ProposalsTopics;
            $topic->topic_id = $topics;
            $topic->save();
        }*/

        //dd($topic);

        $proposal = Proposal::create([
            'prefix'                => $request->get('prefix'),
            'order'                 => $request->get('order'),
            'user_id'               => $request->get('user_id'),            
            'admin_id'              => $request->get('admin_id'),
            'institution_id'        => $request->get('institution_id'),
            'title'                 => $request->get('title'),
            'province_id'           => $request->get('province_id'),
            'municipalities'        => $request->get('municipalities'),
            'address'               => $request->get('address'),
            'description'           => $request->get('description'),
            'status'                => $request->get('status'),
        ]);
        
        foreach ($request->input('topic_id') as $topics){
            $topic = new ProposalsTopics;
            $topic->topic_id = $topics;
            $topic->proposal_id = $proposal->id;
            $topic->save();
        }

        $archivos = $request->file('avatar'); 

        //dd($topic);

        try {
            if(isset($archivos)){
                foreach ($archivos as $archivo) 
                {
                    /*$rules = array(
                        'avatar' => 'required|mimes:doc,pdf,docx,png,gif,jpeg,jpg|max:20000'
                    );

                    $validator = \Validator::make(array('avatar'=> $archivo), $rules);
                    if (! $validator->passes())
                    {
                        return redirect()->back()->withErrors($validator);
                    }*/ 

                    $extension = $archivo->getClientOriginalExtension();
                    $filename = uniqid() . '.' . $extension;
                    $path = public_path() . '/uploads/propuestas/';

                    //Move file into uploads folder 
                    $archivo->move($path, $filename);

                    //Insert file name in db
                    $archivo = Document::create([ 
                        'name'          => $filename,
                        'proposal_id'   => $proposal->id,
                        'user_id'       => $proposal->user_id,
                        'document_type' => $request->get('document_type'),
                    ]);
                } 
            }

        } catch (Exception $e) {
            report($e);
    
            return false;
        }

        $usernotify = Admin::find(1);
        $userproposalnotify = Auth::user();

        $usernotify->notify(new ProposalCreateNotification($proposal, $userproposalnotify));
        $userproposalnotify->notify(new UserProposalNotification($proposal));

        //$proposal->save();

        //Hacer un return con Ajax para que no refresque la página.

        return redirect()->action('ProposalController@consultar')
                        ->with('success','Su propuesta fue registrada y le será asignado un analista para fines de evaluación y respuesta...');;
    }

    public function consultar(Request $request)
    {
        //$data = Proposal::where('user_id', '=', Auth::id())->get();

        $data = Proposal::name($request->get('criteria'))->where('user_id', '=', Auth::id())->orderBy('id','asc')->paginate(5);

        //dd($data);

        return view('propuestas.consultar.inicio',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
