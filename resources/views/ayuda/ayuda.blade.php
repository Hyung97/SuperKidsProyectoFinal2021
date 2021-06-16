@extends('layouts.main', ['activePage' => 'ayuda', 'titlePage' => 'Ayuda'])
@section('content')
<div class="content">

<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">¿Qué es SuperKids? </h5>
      <a href="#" class="btn btn-info">Ver más</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">¿Qué puedo hacer aquí?</h5>
      <a href="#" class="btn btn-info">Ver más</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">¿Cómo descargo los juegos?</h5>
      <a href="#" class="btn btn-info">Ver más</a>
    </div>
  </div>
</div>
<div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">¿Con qué navegadores es compatible SuperKids?</h5>
      <a href="#" class="btn btn-info">Ver más</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">No puedo ingresar a los juegos.</h5>
      <a href="#" class="btn btn-info">Ver más</a>
    </div>
  </div>
</div>

</div>
@endsection