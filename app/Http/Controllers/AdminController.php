<?php

namespace App\Http\Controllers;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Notifications\AdminUserNotification;
use App\Institution;
use App\Admin;
use App\User;
use App\Role;
use Charts;
use Image;
use Hash;
use DB;

class AdminController extends Controller
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
        $data = Admin::name($request->get('criteria'))->orderBy('id','ASC')->paginate(5);

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

        return view('administracion.usuarios.inicio',compact('data', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($female,JSON_NUMERIC_CHECK)))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Institution::orderBy('id', 'asc')->pluck('name', 'id');

        $roles = Role::pluck('display_name','id');

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

        return view('administracion.usuarios.crear',compact('data', 'roles', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name'              => 'required',
            'lastname'          => 'required',
            'email'             => 'required',
            'institution_id'             => 'required',
            'area'             => 'required',
            'job_title'             => 'required',
            'phone'             => 'required',
            'extension'             => 'required',
            'movil'             => 'required',
            'password'             => 'required',
            'roles'             => 'required',
            'avatar'                   => 'mimes:jpeg,jpg,png,gif|max:10000',
        ];

        $messages = [
            'name.required'         => 'El campo nombre es requerido',
            'lastname.required'     => 'El campo apellido es requerido',
            'email.required'        => 'El campo email es requerido',
            'institution_id.required'        => 'El campo institucion es requerido',
            'area.required'        => 'El campo area es requerida',
            'job_title.required'        => 'Es campo posición es requerido',
            'phone.required'        => 'El campo telefono es requerido',
            'extension.required'        => 'La campo extension es requerida',
            'movil.required'        => 'El campo flota es requerido',
            'password.required'        => 'El campo contraseña es requerido',
            'roles.required'        => 'El rol es requerido',
        ];

        $this->validate($request, $rules, $messages);
        
        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

        //dd($input);

        $admins = Admin::create($input);
        
        foreach ($request->input('roles') as $key => $value) {
            $admins->attachRole($value);
        }

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 310)->save( public_path('uploads/avatars/' . $filename ) );

            //$user = Auth::user();
            $admins->avatar = $filename;
            $admins->save();
        }

        $admins->notify(new AdminUserNotification($admins));
        /*Debe ser reemplazado notify*/
        
        return redirect()->action('AdminController@index')
                        ->with('success','Usuario creado correctamente...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admins = Admin::find($id);

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

        return view('administracion.usuarios.detalle', compact('admins', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admins = Admin::findorFail($id);
        $roles = Role::pluck('display_name','id');
        $adminRole = $admins->roles->pluck('id','id')->toArray();

        $data = Institution::orderBy('id', 'asc')->pluck('name', 'id');

        //dd($admins, $data);

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

        return view('administracion.usuarios.editar',compact('admins', 'data', 'roles','adminRole', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name'              => 'required',
            'lastname'          => 'required',
            'email'             => 'required|unique:admins,email,'.$id,
            'institution_id'             => 'required',
            'area'             => 'required',
            'job_title'             => 'required',
            'phone'             => 'required',
            'extension'             => 'required',
            'movil'             => 'required',
            'password'             => 'required',
            'roles'             => 'required',
            'avatar'            => 'mimes:jpeg,jpg,png,gif|max:10000',
        ];

        $messages = [
            'name.required'         => 'El campo nombre es requerido',
            'lastname.required'     => 'El campo apellido es requerido',
            'email.required'        => 'El campo email es requerido',
            'institution_id.required'        => 'El campo institucion es requerido',
            'area.required'        => 'El campo area es requerida',
            'job_title.required'        => 'Es campo posición es requerido',
            'phone.required'        => 'El campo telefono es requerido',
            'extension.required'        => 'La campo extension es requerida',
            'movil.required'        => 'El campo flota es requerido',
            'password.required'        => 'El campo contraseña es requerido',
            'roles.required'        => 'El rol es requerido',
        ];

        $this->validate($request, $rules, $messages);
        
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }

        $admins = Admin::find($id);

        $admins->update($input);

        DB::table('role_user')->where('user_id',$id)->delete();

        //dd($admins);

        foreach ($request->input('roles') as $key => $value) {
            $admins->attachRole($value);
        }

        if($request->file('avatar')){

            $destinationpath = 'uploads/avatars/';

            $image = $request->file('avatar');

            if(isset($admins->avatar)){
                if(file_exists(public_path() . 'uploads/avatars/' . $admins->avatar)){
                    File::delete($destinationpath.$admins->avatar);
                    $img = $id.'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(300, 310)->save( public_path('uploads/avatars/' . $admins->avatar));
                    $admins->avatar = $img;
                    $admins->save();
                }
                else{
                    $img = $id.'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(300, 310)->save( public_path('uploads/avatars/' . $img));
                    $admins->avatar = $img;
                    $admins->save();
                }
            }
            else{
                $img = $id.'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300, 310)->save( public_path('uploads/avatars/' . $admins->avatar));
                $admins->avatar = $img;
                $admins->save();
            }
        }

        $admins->save();

        return redirect()->action('AdminController@index')
                        ->with('success','Usuario actualizado correctamente...');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);

        
        if ($admin->avatar) 
        {
            if(file_exists(public_path('uploads/avatars/') . $admin->avatar))
            {
                unlink(public_path('uploads/avatars/') . $admin->avatar);
            }
        }
       
        $admin->delete();

        return redirect()->action('AdminController@index')
                        ->with('success','Usuario eliminado correctamente...');
    }

    public function dashboard()
    {
        $user = DB::table('users')->get();

        $admins = DB::table('admins')->get();

        $institutions = DB::table('institutions')->get();

        $proposal = DB::table('proposals')->get();

        $approved = DB::table('proposals')->where(['status' => 1])->get();

        $proposals_in_process = DB::table('proposals')->where(['status' => 2])->get();        

        $pending_proposals = DB::table('proposals')->where(['status' => 3])->get();

        /*$male = DB::table('users')
            ->join('proposals', 'users.id', '=', 'proposals.user_id')
            ->select('users.id as uid', 'users.name as usname', 'users.lastname as uslastname')
            ->where('gender', '=', 'Masculino')
            ->groupBy('users.id', 'users.name', 'users.lastname')
            ->orderBy('user_id', 'desc')
            ->get();*/
        
        /*$male = DB::table('users')
            ->select('users.id as uid', 'users.name as usname', 'users.lastname as uslastname', 'users.gender', \DB::raw('sum(gender) as total'))
            ->where('gender', '=', 'Masculino')
            ->groupBy('users.id', 'users.name', 'users.lastname', 'users.gender')
            ->get();*/
        
        /*$male = DB::table('users')
            ->select(DB::raw('count(*) as count'))
            ->where('gender', '=', 'Masculino')
            ->groupBy('gender')
            ->get();*/
        
        
        
        /*$female = DB::table('users')
            ->select('users.id as uid', 'users.name as usname', 'users.lastname as uslastname', 'users.gender', \DB::raw('count(*) as total'))
            ->where('gender', '=', 'Femenino')
            ->groupBy('users.id', 'users.name', 'users.lastname', 'users.gender')
            ->get();*/

        /*$female = DB::table('users')
            ->select(DB::raw('count(*) as count'))
            ->where('gender', '=', 'Femenino')
            ->groupBy('gender')
            ->get();*/
        
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

        //dd($male, $female);

        return view('admin', compact('user', 'admins', 'institutions', 'proposal', 'approved', 'proposals_in_process', 'pending_proposals', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
        
        /*return view('admin')
            ->with('user', 'admins', 'institutions', 'proposal', 'approved', 'proposals_in_process', 'pending_proposals')
            ->with('male',json_encode($male,JSON_NUMERIC_CHECK));*/
    }
}
