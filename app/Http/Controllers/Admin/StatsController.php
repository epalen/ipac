<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProposalsTopics;
use App\Proposal;
use App\Province;
use DB;

class StatsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showMap()
    {
        $datacount = DB::table('provinces')
            ->leftJoin('proposals', 'provinces.id', '=', 'proposals.province_id')
            ->select('provinces.id as prid', 'provinces.name as prname', 'provinces.define as prdefine', 'provinces.code as prcode', 'proposals.province_id', \DB::raw('count(province_id) as total'))
            ->groupBy('provinces.id', 'provinces.name', 'provinces.define', 'provinces.code', 'proposals.province_id')
            ->orderBy('province_id', 'desc')
            ->get();
        
        return view('estadisticas.mapageografico.inicio', compact('datacount'));
    }

    public function showTopics()
    {
        $datacount = DB::table('topics')
            ->leftJoin('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
            ->select('topics.name as tpname', 'proposals_topics.topic_id', \DB::raw('count(topic_id) as total'))
            ->groupBy('topics.name', 'proposals_topics.topic_id')
            ->orderBy('topic_id', 'desc')
            ->get();
        
        /*$datacount = DB::table('topics')
            ->leftJoin('proposals_topics', 'topics.id', '=', 'proposals_topics.topic_id')
            ->select('proposals_topics.topic_id', \DB::raw('count(topic_id) as total'))
            ->groupBy('proposals_topics.topic_id')
            ->orderBy('topic_id', 'desc')
            ->get();*/
        
        /*$datacount = ProposalsTopics::select( \DB::raw('count(topic_id) as total'))
            ->orderBy('topic_id')
            ->groupBy(DB::raw('proposals_topics(topic_id)'))
            ->get()->toArray();*/
        
        //$datacount = ProposalsTopics::all();
        

        //dd(json_encode($datacount,JSON_NUMERIC_CHECK));

        return view('estadisticas.ejetematico.inicio', compact('datacount', json_encode($datacount,JSON_NUMERIC_CHECK)));
    }

    public function showTop()
    {
        $pending = \DB::table('proposals')
            ->select('status as re_status',\DB::raw('count(status) as total'))
            ->where('status', '=', 3)
            ->groupBy('status')
            ->orderBy('status', 'desc')
            ->get();

        $finished = \DB::table('proposals')
            ->select('status as re_status',\DB::raw('count(status) as total'))
            ->where('status', '=', 1)
            ->groupBy('status')
            ->orderBy('status', 'desc')
            ->get();
        
        $process = \DB::table('proposals')
            ->select('status as re_status',\DB::raw('count(status) as total'))
            ->where('status', '=', 2)
            ->groupBy('status')
            ->orderBy('status', 'desc')
            ->get();
        
        $total = DB::table('proposals')->count();

        //dd($total);

        return view('estadisticas.respuestaspendientes.inicio', compact('pending', json_encode($pending,JSON_NUMERIC_CHECK), 'finished', json_encode($finished,JSON_NUMERIC_CHECK), 'process', json_encode($process,JSON_NUMERIC_CHECK), 'total', json_encode($total,JSON_NUMERIC_CHECK)));
    }
}
