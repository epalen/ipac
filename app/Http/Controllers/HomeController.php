<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BannerAdmin;
use App\ContentAdmin;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = BannerAdmin::all();

        $content = ContentAdmin::all();

        $user = DB::table('users')->get();

        $proposal = DB::table('proposals')->get();

        //dd($user, $proposal);

        return view('inicio', compact('user', 'proposal', 'banner', 'content'));
    }
}
