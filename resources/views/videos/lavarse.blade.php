@extends('layouts.main', ['activePage' => 'videos', 'titlePage' => 'Cómo lavarse las manos - Lavado de manos en 10 pasos'])
@section('content')
<div class="content">
<h2 class="card-title"></h2>
<video width="600" height="400" controls>
    <source src="{{ asset('/video/lavarse.mp4') }}" type="video/mp4">
</video>
<br>
<a href="{{ route('videos.video') }}" class="btn btn-info">Volver</a>
<a href="{{ route('videos.conozcamos') }}" class="btn btn-info">Anterior</a>
<a href="{{ route('videos.eljuego') }}" class="btn btn-info">Siguiente</a>
@endsection