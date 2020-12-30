<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\ContactFormNotification;
use App\ContactForm;
use Response;

class ContactFormController extends Controller
{
    protected $message;

    public function index()
    {
    	return view('contacto.inicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {          

        $request->validate([
            'name'              => 'required',
            'email'             => 'required',
            'phone'             => 'required',
            'subject'           => 'required'
        ]);

        try {

            $contact = new ContactForm();
            $contact->name           = $request->input('name');
            $contact->email          = $request->input('email');
            $contact->subject        = $request->input('subject');
            $contact->content        = $request->input('content');

            //return response()->json([$contact],200);

            $contact->save();

            //$message .= $contact->notify(new ContactFormNotification($contact));
            
            //$contact->save();

            //$notify->notify(new ContactFormNotification($contact));

            //dd($contact);

            return response()->json(['success' => 'Gracias ' . $request->get('name') . ' por contactarnos, evaluaremos sus comentarios y en la brevedad nos pondremos en contacto...', 'transaction_message' =>  $message], 200);            

        } catch (Exception $e) {

            return response()->json(['success' => 'Hubo un problema...'], 400);

        }
        
    }


}
