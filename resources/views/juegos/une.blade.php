@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Juegos'])
@section('content')
<div class="content">

<iframe src="https://wordwall.net/es/embed/1c6da2cafcbd40f1a5d4ec190dd89c96?themeId=1&templateId=3" 
width="1000" height="500" frameborder="0" allowfullscreen></iframe>
<a href="{{ route('juegos.index') }}" class="btn btn-info">Volver</a>
@endsection