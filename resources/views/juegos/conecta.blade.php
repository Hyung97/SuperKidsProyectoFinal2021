@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Juegos'])
@section('content')
<div class="content">

<iframe src="https://wordwall.net/es/embed/f179ed644ce8483892f2410c9be4fc02?themeId=45&templateId=72" 
width="1000" height="500" frameborder="0" allowfullscreen></iframe>
<a href="{{ route('juegos.index') }}" class="btn btn-info">Principal</a>
@endsection