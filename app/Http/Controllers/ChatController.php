<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index ()
    {
        return view('chat.indexchat');
    }

    public function chat ()
    {
        return view('chat.index');
    }

    public function comunidad ()
    {
        return view('chat.comunidad');
    }

    public function chatbox ()
    {
        return view('chat.chatbox');
    }
}
