<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function admin()
    {
        return view ('adminpanel.admin');
    }

    public function generate()
    {
        return view ('adminpanel.generate');
    }

    public function generatepin()
    {
        $pin_array = array();
        

    }
    
}
