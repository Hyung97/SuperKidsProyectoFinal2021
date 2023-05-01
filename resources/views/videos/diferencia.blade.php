@extends('layouts.main', ['activePage' => 'videos', 'titlePage' => '¿Cuál es la diferencia entre virus y bacterias?'])
@section('content')
<div class="content">
<h2 class="card-title"></h2>

<video width="600" height="400" controls>
    <source src="{{ asset('/video/diferencia.mp4') }}" type="video/mp4">
</video>
<br>
<a href="{{ route('videos.video') }}" class="btn btn-info">Volver</a>
<a href="{{ route('videos.lavarse') }}" class="btn btn-info">Anterior</a>
<a href="{{ route('videos.save') }}" class="btn btn-info">Siguiente</a>
@endsection