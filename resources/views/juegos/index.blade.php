@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Juegos'])
@section('content')
<div class="content">
<div class="card-group">
  <div class="card">
    <img src="https://az779572.vo.msecnd.net/res/content/images/template_icons/5/25.png" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title">Pares iguales</h5>
      <p class="card-text">Toca un par de fichas a la vez para revelar si son iguales.</p>
      <a href="{{ route('juegos.memoria') }}" class="btn btn-info">Jugar</a>
    </div>
  </div>
  <div class="card">
    <img src="https://az779572.vo.msecnd.net/res/content/images/template_icons/5/38.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Anagrama</h5>
      <p class="card-text">Arrastra las letras hacia sus posiciones correctas para ordenar la palabra o frase.</p>
      <a href="{{ route('juegos.emparejar') }}" class="btn btn-info">Jugar</a>
    </div>
  </div>
  <div class="card">
    <img src="https://az779572.vo.msecnd.net/res/content/images/template_icons/5/69.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Juego de concurso</h5>
      <p class="card-text">Un cuestionario de opción múltiple con límite de tiempo, líneas de vida y una ronda de bonos.</p>
      <a href="{{ route('juegos.popurri') }}" class="btn btn-info">Jugar</a>
    </div>
  </div>
</div>
<div class="card-group">
  <div class="card">
    <img src="https://az779572.vo.msecnd.net/res/content/images/template_icons/5/49.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Persecución en laberinto</h5>
      <p class="card-text">Corre hacia la zona de respuesta correcta, evitando los enemigos.</p>
      <a href="{{ route('juegos.persecusion') }}" class="btn btn-info">Jugar</a>
    </div>
  </div>
  <div class="card">
    <img src="https://az779572.vo.msecnd.net/res/content/images/template_icons/5/72.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Reordenar</h5>
      <p class="card-text">Arrastra y suelta palabras para reordenar cada oración en su orden correcto.</p>
      <a href="{{ route('juegos.conecta') }}" class="btn btn-info">Jugar</a>
    </div>
  </div>
  <div class="card">
    <img src="https://az779572.vo.msecnd.net/res/content/images/template_icons/5/3.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Une las correspondencias</h5>
      <p class="card-text">Arrastra y suelta cada palabra junto a su definición.</p>
      <a href="{{ route('juegos.une') }}" class="btn btn-info">Jugar</a>
    </div>
  </div>
</div>

@endsection