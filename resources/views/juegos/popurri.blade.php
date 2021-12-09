@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Juegos'])
@section('content')
<div class="content">

<iframe src="https://wordwall.net/es/embed/f89e5b88934e4a8a8895eebf113d0727?themeId=21&templateId=69" 
width="1000" height="500" frameborder="0" allowfullscreen></iframe>
<a href="{{ route('juegos.index') }}" class="btn btn-info">Principal</a>

@endsection