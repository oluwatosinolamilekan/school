<?php

namespace App\Http\Controllers;

Use App\Message;
Use Validator;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    

    public function create(Request $request)
    {
        //validate request

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
               
        ]);

        // dd($request);

        // save messages
        
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');

        $message->save();


        //redirect 
        return redirect('/')->with('success', 'Message Sent');
    }
}
