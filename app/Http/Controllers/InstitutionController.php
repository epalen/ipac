<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Institution;
USE App\Province;
use App\Admin;
use DB;

class InstitutionController extends Controller
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
        $data = Institution::name($request->get('criteria'))->orderBy('id','ASC')->paginate(10);

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

        return view('administracion.instituciones.inicio',compact('data', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Institution::orderBy('id', 'asc')->pluck('name', 'id');

        $provinces = Province::orderBy('id', 'asc')->pluck('name', 'id');

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

        return view('administracion.instituciones.crear',compact('data', 'provinces', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
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
            'acronym'          => 'required',
            'province_id'          => 'required',
            'category'          => 'required',
            'address'          => 'required',
        ];

        $messages = [
            'name.required'         => 'El campo nombre es requerido',
            'acronym.required'     => 'El campo acronimo o sigla es requerido',
            'province_id.required'     => 'El provincia apellido es requerido',
            'category.required'     => 'El campo categoria es requerido',
            'address.required'     => 'El campo dirección es requerido',
        ];

        $this->validate($request, $rules, $messages);
        
        $input = $request->all();

        $instituciones = Institution::create($input);

        return redirect()->action('InstitutionController@index')
                        ->with('success','Institución creada correctamente...');
    }

    public function edit($id)
    {
        $instituciones = Institution::findorFail($id);

        $provinces = Province::orderBy('id', 'asc')->pluck('name', 'id');

        //dd($instituciones, $provinces);

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

        return view('administracion.instituciones.editar',compact('instituciones', 'provinces', 'male', json_encode($male,JSON_NUMERIC_CHECK), 'female', json_encode($female,JSON_NUMERIC_CHECK), 'datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
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
            'acronym'          => 'required',
            'province_id'          => 'required',
            'category'          => 'required',
            'address'          => 'required',
        ];

        $messages = [
            'name.required'         => 'El campo nombre es requerido',
            'acronym.required'     => 'El campo acronimo o sigla es requerido',
            'province_id.required'     => 'El provincia apellido es requerido',
            'category.required'     => 'El campo categoria es requerido',
            'address.required'     => 'El campo dirección es requerido',
        ];

        $this->validate($request, $rules, $messages);

        $instituciones = Institution::find($id);

        $instituciones->name            = $request->input('name');
        $instituciones->acronym         = $request->input('acronym');
        $instituciones->address         = $request->input('address');
        $instituciones->category        = $request->input('category');
        $instituciones->business_hours  = $request->input('business_hours');
        $instituciones->province_id     = $request->input('province_id');
        $instituciones->number          = $request->input('number');

        $instituciones->save();

        return redirect()->action('InstitutionController@index')
                        ->with('success','Institución actualizada correctamente...');
    }

    public function destroy($id)
    {
        $institucion = Institution::findOrFail($id);       

        $institucion->delete();

        return redirect()->action('InstitutionController@index')
                        ->with('success','Institución eliminada correctamente...');
    }
}
