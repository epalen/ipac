<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
use DB;

class PermissionController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$data = Permission::name($request->get('criteria'))->orderBy('id','ASC')->paginate(5);

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
            ->leftJoin('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
            ->select('topics.name as tpname')
            ->groupBy('topics.name')
            ->get();

    	return view('administracion.permisos.inicio', compact('data', 'male', 'female', 'datacount', 'topiccount'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Permission::orderBy('id', 'asc')->pluck('name', 'id');

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

        return view('administracion.permisos.crear',compact('data', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), json_encode($female,JSON_NUMERIC_CHECK), 'datacount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required',
            'description' => 'required',
        ]);

        $permission = new Permission();
        $permission->name = $request->input('name');
        $permission->display_name = $request->input('display_name');
        $permission->description = $request->input('description');
        //dd($permission);
        $permission->save();

        return redirect()->route('permisos.inicio')
                        ->with('success','Permiso creado correctamente!!!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::findOrFail($id); 

        //dd($permission);

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

        return view('administracion.permisos.editar', compact('permission', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), json_encode($female,JSON_NUMERIC_CHECK), 'datacount'));
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
        $permission = Permission::findOrFail($id);

        //dd($permission);

        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'display_name' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        //dd($input);

        $permission->fill($input)->save();

        return redirect()->route('permisos.inicio')
                        ->with('success','Permiso actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::find($id)->delete();

        return redirect()->route('permisos.inicio')
                        ->with('success','Permiso eliminado correctamente!');
    }
}
