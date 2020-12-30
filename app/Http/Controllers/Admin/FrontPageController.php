<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\BannerAdmin;
use App\ContentAdmin;
use Image;
use DB;

class FrontPageController extends Controller
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
    public function bannerIndex(Request $request)
    {
        $data = BannerAdmin::name($request->get('criteria'))->orderBy('id','asc')->paginate(5);
        
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

    	return view('administracion.banners.inicio', compact('data', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)))->with('i', ($request->input('page', 1) - 1) * 5);
    }    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bannerCreate()
    {
        $data = BannerAdmin::orderBy('id', 'asc')->pluck('name', 'id');

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

        return view('administracion.banners.crear',compact('data', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bannerStore(Request $request)
    {
        $rules = [
            'name'                     => 'required',
            'avatar'                   => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];

        $messages = [
            'name.required'                    => 'Agregue un título descriptivo.',
            'avatar.required'                  => 'Debe agregar una imagen para mostrar en la portada con un formato válido.'
        ];

        $this->validate($request, $rules, $messages); 

        $data = new BannerAdmin();

        $data->name         = $request->input('name');
        $data->admin_id     = $request->input('admin_id');
        $data->starting_at  = $request->input('starting_at');
        $data->ending_at    = $request->input('ending_at');
        $data->status       = $request->has('status') ? 1 : 0;

        //dd($data);
        
        $data->save();

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(1000, 450)->save( public_path('uploads/banners/' . $filename ) );

            $data->avatar = $filename;

            //dd($data, $avatar);

            $data->save();
        }

        return redirect()->route('banners.inicio')
                        ->with('success','Banner agregado!!!');
    }

    public function bannerEdit($id)
    {
        $banner = BannerAdmin::find($id);

        //dd($banner);

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

        return view('administracion.banners.editar',compact('banner', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
    }

    public function bannerUpdate(Request $request, $id)
    {
        $banner = BannerAdmin::find($id);

        //dd($banner);

        $banner->name         = $request->input('name');
        $banner->starting_at  = $request->input('starting_at');
        $banner->ending_at    = $request->input('ending_at');
        $banner->status       = $request->input('status') ? 1 : 0;

        if($request->hasFile('avatar')){
            // add the new photo
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(1000, 450)->save(public_path('uploads/banners/' . $filename));
            $oldFilename = $banner->avatar;
            // update the database
            $banner->avatar = $filename;
            // delete the old photo
            //unlink(public_path('uploads/banners/') . $oldFilename);

            if ($banner->avatar) 
            {
                if(file_exists(public_path('uploads/banners/') . $oldFilename))
                {
                    unlink(public_path('uploads/banners/') . $oldFilename);
                }
            }
        }

        $banner->save();

        return redirect()->route('banners.inicio')
                        ->with('success','Banner actualizado!!!');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contentIndex(Request $request)
    {
        $data = ContentAdmin::name($request->get('criteria'))->orderBy('id','asc')->paginate(5);

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

        return view('administracion.contenido.inicio', compact('data', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contentCreate()
    {
        $data = ContentAdmin::orderBy('id', 'asc')->pluck('detail_proposed_form', 'id');

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

        //dd($data);

        return view('administracion.contenido.agregarcontenido',compact('data', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contentStore(Request $request)
    {
        $input = $request->all();

        //dd($input);

        $contenido = ContentAdmin::create($input);

        return redirect()->action('Admin\FrontPageController@contentIndex')
                        ->with('success','Contenido agregado correctamente...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProposalComments  $proposalComments
     * @return \Illuminate\Http\Response
     */
    public function bannerDestroy($id)
    {
        $admin = BannerAdmin::findOrFail($id);

        if ($admin->avatar) 
        {
            if(file_exists(public_path('uploads/banners/') . $admin->avatar))
            {
                unlink(public_path('uploads/banners/') . $admin->avatar);
            }
        }
        
        $admin->delete();        

        return redirect()->route('banners.inicio')
                ->with('success','Banner eliminado correctamente...');
    }
}
