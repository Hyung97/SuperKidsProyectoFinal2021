@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Juegos'])
@section('content')
<div class="content">

<iframe src="https://wordwall.net/embed/fe9b376542604196b58203821f3cfe1a?themeId=3&templateId=25" 
width="1000" 
height="500" 
frameborder="0" 
allowfullscreen></iframe>
<a href="{{ route('juegos.index') }}" class="btn btn-info">Volver</a>

@endsection