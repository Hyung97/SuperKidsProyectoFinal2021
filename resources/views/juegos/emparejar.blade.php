@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Juegos'])
@section('content')
<div class="content">
<iframe src="https://wordwall.net/es/embed/ff58e346df784bb1816d514aa8c3d744?themeId=1&templateId=38" 
width="1000" height="500" frameborder="0" allowfullscreen></iframe>
<a href="{{ route('juegos.index') }}" class="btn btn-info">Volver</a>
@endsection