@extends('layouts.main', ['activePage' => 'videos', 'titlePage' => '¿Cómo salva tu vida tu sistema inmune?'])
@section('content')
<div class="content">
<h2 class="card-title"></h2>

<video width="600" height="400" controls>
    <source src="{{ asset('/video/save.mp4') }}" type="video/mp4">
</video>
<br>
<a href="{{ route('videos.video') }}" class="btn btn-info">Volver</a>
<a href="{{ route('videos.diferencia') }}" class="btn btn-info">Anterior</a>
<a href="{{ route('videos.conozcamos') }}" class="btn btn-info">Siguiente</a>

@endsection