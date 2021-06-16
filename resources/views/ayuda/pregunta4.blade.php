@extends('layouts.main', ['activePage' => 'ayuda', 'titlePage' => __('¿Cómo descargo los juegos?')]) 
@section('content')
<div class="content">
    <div class="card text-center">
      <div class="card-header">
      </div>
      <div class="card-body">
        <video  autoplay controls src="{{ asset('/video/pregunta3.mp4') }}" width="640" height="480" loop></video>
            <p class="card-text"></p>
      </div> 
  </div>
</div>

<a href="{{ route('ayuda.ayuda') }}" class="btn btn-info">Volver</a>

@endsection

