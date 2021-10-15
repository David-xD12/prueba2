<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;


class MessagesController extends Controller
{
    public function store(){

      $message = request()->validate([
          'name' => 'required', 
          'email' => 'required|email',
          'subject' => 'required', 
          'content' => 'required|min:5', 
        ]);

        Mail::to('2119200725@soy.utj.edu.mx')->queue(new MessageReceived($message));
        return back()->with('status', 'Recibimos tu mensaje, responderemos dentro de 24 hrs');
    }
}
