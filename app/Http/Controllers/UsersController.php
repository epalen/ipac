<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Proposal;
use App\Table;
use App\User;
use bcrypt;
use Mail;

class UsersController extends Controller
{
     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user = new User;
        $user->name         = Input::get('name');
        $user->lastname     = Input::get('lastname');
        $user->doc_type     = Input::get('doc_type');
        $user->doc_number   = Input::get('doc_number');
        $user->phone        = Input::get('phone');
        $user->phone_work   = Input::get('phone_work');
        $user->phone_mobile = Input::get('phone_mobile');
        $user->gender       = Input::get('gender');
        $user->email        = Input::get('email');
        $user->password     = bcrypt('password');

        $user->save();      

        return redirect()->route('propuestas.crear');        
    }   
}
