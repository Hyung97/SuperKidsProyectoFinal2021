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

    public function video2()
    {
        return view('videos.lavarse'); 
    }

    public function video3()
    {
        return view('videos.eljuego'); 
    }

    public function video4()
    {
        return view('videos.coronavirus'); 
    }

    public function video5()
    {
        return view('videos.diferencia'); 
    }

    public function video6()
    {
        return view('videos.save'); 
    }

    public function musica()
    {
        return view('reproductormusic.reproductor'); 
    }

    
}
