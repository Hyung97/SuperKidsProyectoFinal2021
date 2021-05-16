@extends('layouts.main', ['activePage' => 'videos', 'titlePage' => 'Videos'])
@section('content')
<div class="content">

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title">Conozcamos sobre los virus </h3>
        <p class="card-text">¿Sabías que los virus no son seres vivos? No pueden cumplir con la función vital de reproducción por sí mismos, a diferencia de las células.</p>
        <a href="{{ route('videos.conozcamos') }}" class="btn btn-primary">Ver</a>
      </div>
    </div>
  </div>
</div>
</div>
@endsection