<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function index ()
    {
        return view('juegos.index');
    }

    public function juego1 ()
    {
        return view('juegos.memoria');
    }

    public function juego2 ()
    {
        return view('juegos.emparejar');
    }

    public function juego3 ()
    {
        return view('juegos.popurri');
    }

    public function juego4 ()
    {
        return view('juegos.persecusion');
    }

    public function juego5 ()
    {
        return view('juegos.conecta');
    }

    public function juego6 ()
    {
        return view('juegos.une');
    }
}
