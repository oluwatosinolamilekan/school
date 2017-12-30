<?php

namespace App\Http\Controllers;

use DB;
use App\Pin;
use Illuminate\Http\Request;

class PinsController extends Controller
{
    //
    public function enterpin()
    {
        $numbers=Pin::paginate(10);
        return view ('adminpanel.enterpin',compact('numbers',$numbers));
    }

   
    public function create(Request $request )
    {   

        // $pins = DB::table('usedpin')
            // where('pin_id', Auth::pin()->id)
            // ->get();

        // // post not be more than 3 times for users
        // if($pins->status <= 3)
        // {
        //     //validate the form request and save

        // }
        $numbers=[];
        $validatedData = $request->validate([
            'random' => 'required',      
        ]);
        $rand=(integer)$request->random;
        for($i=0; $i<$rand; $i++)
        {
            $rand_num=str_random(15);

        $pin = new Pin;

        $pin->numbers= $rand_num;
        $pin->save();
        }
        // dd($numbers);
        
        // $save= \DB::table('pins')->insert('$numbers');
    }
    

    public function enter()
    {
        // if($pin->user_id)
        // {
        //     //check if pin exist

        //     return redirect()->route('posts.enter', compact('pins',$pins));
        // }
        return view ('posts.enter');
    }
}
