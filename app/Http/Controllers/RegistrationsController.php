<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
    //
    public  function signup()
    {
        return view ('users.signup');
    }

    public  function create(Request $request)
    {
        //validate request
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required|max:11',
            'password' => 'required|min:8|confirmed'
               
        ]);

        //dd($request);
        //save account
        $user= New User;

         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->number = $request->input('number');
         $user->password = $request->input('password');

         $user->save();

         //redirect

         return redirect ('/');
    }
}
