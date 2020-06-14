<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home(){

        return view('home');
    }

    public function blog($myid){
        
    $posts = "test ";
    return view('posts.show',[
        'data' => $posts, 'id'=> $myid
    ]);
    
    }
}
