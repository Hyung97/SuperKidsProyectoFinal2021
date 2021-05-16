@extends('layouts.main', ['activePage' => 'videos', 'titlePage' => 'Cómo lavarse las manos - Lavado de manos en 10 pasos'])
@section('content')
<div class="content">
<h2 class="card-title"></h2>

<iframe width="660" height="415" src="https://www.youtube.com/embed/flSL2LvfUm0" 
title="YouTube video player" frameborder="0" 
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen></iframe>
<p>
</p>
<a href="{{ route('videos.video') }}" class="btn btn-info">Volver</a>
@endsection