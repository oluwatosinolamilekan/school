<?php

namespace App\Http\Controllers;
use App\Qoute;
Use Validator;
use Illuminate\Http\Request;

class QoutesController extends Controller
{
    //
     public function quote(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
               
        ]);

        dd($request);
        // save request

        // $quote = new Qoute;
        // $qoute->name = $request->input('name');
        // $qoute->email = $request->input('email');     
        
        // $qoute->save();


        return redirect('/')->with('success','Email Conform');


    }
}
