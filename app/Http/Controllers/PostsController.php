<?php

namespace App\Http\Controllers;

use App\Usedpin;
use App\Post;
use App\Pin;
use Validator;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index']);
    // }

    public function index()
    {
        return  view ('posts.index');
    }

    public function enter()
    {

        return view ('posts.enter');
    }


    public function enterstore(Request $request)
    {

            //validate the form request and save
            $validatedData = $request->validate([
            'random' => 'required',
               
            ]);
            $pin = Pin::where('numbers', $request->random)->first();
            if($pin)
            {
                // dd('true');
                return view('posts.create')->with('pin',$pin);
            }else{
                return back()->with('error','Invalid Pin');

                // dd('false');
            }


    }

    


    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $pins = Usedpin::where('pin_id', Auth::pin()->id)->get();
         $validatedData = $request->validate([
            'title' => 'required',
            'imagePath' => 'required',
            'body' => 'required',
               
            ]);

        
            // post not be more than 3 times for users
            // if($pins->status <= 3)
            // {   

                // //validate the form request and save
                // $validatedData = $request->validate([
                // 'title' => 'required',
                // 'imagePath' => 'required',
                // 'body' => 'required',
                
                // ]);
                
                
                    //user can create a post 
            // $post = new Post;

            // $post->title = $request->input('tile');
            // $post->imagePath = $request->input('imagePath');
            // $post->body = $request->input('body');
            // $post->user_id = auth()->id();
            // $post->save();
        

        // }


        //validate request

        
        //save question

        // $post->title = $request->input('tile');
        // $post->imagePath = $request->input('imagePath');
        // $post->body = $request->input('body');
        // $post->user_id = auth()->id();
        // $post->save();
        
        //redirect
        
        
        //sign them in

        // auth()->login($user);

        // return redirect()->route('post.create')->with('success','Welcome To Metrobasicmaths');



        // dd($request);
    }

    public function home()
    {
        return view('posts.home');
    }


}
