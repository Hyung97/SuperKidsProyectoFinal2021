@extends('layouts.main', ['activePage' => 'videos', 'titlePage' => 'Videos'])
@section('content')
<div class="content">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
      <p></p>
      <p></p>
      <img src="{{ asset('/img/portada.png') }}" width="200px" height="200px" class="avatar">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">Conozcamos sobre los virus </h3>
          <p class="card-text">¿Sabías que los virus no son seres vivos? No pueden cumplir con la función vital de reproducción por sí mismos, a diferencia de las células.</p>
          <a href="{{ route('videos.conozcamos') }}" class="btn btn-info">Ver</a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
      <p></p>
      <img src="{{ asset('/img/portada.png') }}" width="200px" height="200px" class="avatar">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">Cómo lavarse las manos - Lavado de manos en 10 pasos</h3>
          <p class="card-text">Lavarse las manos a menudo es muy importante para evitar contagiar a los demás y a nosotros mismos con microorganismos como virus o bacterias.</p>
          <a href="{{ route('videos.lavarse') }}" class="btn btn-info">Ver</a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
      <p></p>
      <img src="{{ asset('/img/portada.png') }}" width="200px" height="200px" class="avatar">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">¿Qué son las bacterias? - Explicación para niños </h3>
          <p class="card-text">Con este vídeo, los niños conocerán más sobre las bacterias, sus consecuencias y lo más importante... ¡qué hacer para evitar el contagio! 😷🤒 </p>
          <a href="{{ route('videos.coronavirus') }}" class="btn btn-info">Ver</a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
      <p></p>
      <img src="{{ asset('/img/portada.png') }}" width="200px" height="200px" class="avatar">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">¿Cuál es la diferencia entre virus y bacterias?</h3>
          <p class="card-text">Los dos son pequeñitos y siempre que pensamos en ellos pensamos en enfermedades, pero virus y bacterias son muy diferentes.</p>
          <a href="{{ route('videos.diferencia') }}" class="btn btn-info">Ver</a>
        </div>
      </div>
    </div>
  </div>

  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
      <p></p>
      <img src="{{ asset('/img/portada.png') }}" width="200px" height="200px" class="avatar">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h3 class="card-title">¿Cómo salva tu vida tu sistema inmune?</h3>
          <p class="card-text">¿Cómo funciona tu sistema inmune? ¿Cómo le hace para recordar a los patógenos que lo atacaron antes? ¿Por qué hay enfermedades autoinmunes?</p>
          <a href="{{ route('videos.save') }}" class="btn btn-info">Ver</a>
        </div>
      </div>
    </div>
  </div>



</div>
@endsection