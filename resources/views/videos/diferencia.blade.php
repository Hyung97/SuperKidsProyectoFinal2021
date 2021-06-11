@extends('layouts.main', ['activePage' => 'videos', 'titlePage' => '¿Cuál es la diferencia entre virus y bacterias?'])
@section('content')
<div class="content">
<h2 class="card-title"></h2>

<iframe width="660" height="415" src="https://www.youtube.com/embed/9jqYw4uyuHs" 
title="YouTube video player" frameborder="0" 
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen></iframe>
<p>
</p>
<a href="{{ route('videos.video') }}" class="btn btn-info">Volver</a>
<a href="{{ route('videos.coronavirus') }}" class="btn btn-info">Anterior</a>
<a href="{{ route('videos.save') }}" class="btn btn-info">Siguiente</a>
@endsection