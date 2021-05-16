<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{


    public function index ()
    {
        return view('videos.video');
    }

    public function video1()
    {
        return view('videos.conozcamos'); 
    }

    
}
