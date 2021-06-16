@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Chats'])
@section('content')
<div class="content">


<div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">UNIRSE A LAS DIVERSAS COMUNIDADES PARA CHATEAR</h5>
        <p class="card-text">Sean Bienvenidos a las comunidades para padres</p>
        <a href="{{ route('chat.comunidad') }}" class="btn btn-info">UNIRSE</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">UNIRSE AL CHAT</h5>
        <p class="card-text">Bienvenidos al chat general para padres</p>
        <a href="{{ route('chat.index') }}" target="_blank" class="btn btn-info">UNIRSE</a>
      </div>
    </div>
  </div>

</div>
@endsection