<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailsController extends Controller
{
    //
    public function mail()
    {
        return view('emails.welcome');
    }
}
