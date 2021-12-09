@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Juegos'])
@section('content')
<div class="content">

<iframe src="https://wordwall.net/es/embed/76e29a1220614008843e65a790739537?themeId=23&templateId=49" 
width="1000" height="500" 
frameborder="0" allowfullscreen></iframe>
<a href="{{ route('juegos.index') }}" class="btn btn-info">Principal</a>

@endsection