<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AyudaController extends Controller
{
    public function index ()
    {
        return view('ayuda.ayuda');
    }

    public function video1 ()
    {
        return view('ayuda.superkids');
    }

    public function video2 ()
    {
        return view('ayuda.pregunta2');
    }

    public function video3 ()
    {
        return view('ayuda.pregunta3');
    }

    public function video4 ()
    {
        return view('ayuda.pregunta4');
    }

    public function video5 ()
    {
        return view('ayuda.pregunta5');
    }
}
