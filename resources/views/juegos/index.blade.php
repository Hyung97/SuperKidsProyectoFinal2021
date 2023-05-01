@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Juegos'])
@section('content')
<div class="content">
<div class="card-group">
  <div class="card bg-info">
    <img src="https://i.ibb.co/djPTVbW/Paresigual.jpg" class="card-img-top" alt="">
    <div class="card-body">
      <h5 class="card-title h1">Pares iguales</h5>
      <p class="card-text h4">Toca un par de fichas a la vez para revelar si son iguales.</p>
      <a href="{{ route('juegos.memoria') }}" class="btn btn-warning h4">Jugar</a>
    </div> 
  </div>
  <div class="card">
    <img src="https://i.ibb.co/WKX2SV4/Anagrama.png" class="card-img-top" alt="...">
    <div class="card-body bg-warning">
      <h5 class="card-title h1">Anagrama</h5>
      <p class="card-text h4">Arrastra las letras hacia sus posiciones correctas para ordenar la palabra o frase.</p>
      <a href="{{ route('juegos.emparejar') }}" class="btn btn-info h4">Jugar</a>
    </div>
  </div>
 <!-- <div class="card">
   <img src="https://i.ibb.co/QM26j78/Popurr.png" class="card-img-top" alt="...">
    <div class="card-bod ">
      <h5 class="card-title h2">Juego de concurso</h5>
      <p class="card-text h4">Un cuestionario de opción múltiple con límite de tiempo, líneas de vida y una ronda de bonos.</p>
      <a href="{{ route('juegos.popurri') }}" class="btn btn-success h5">Jugar</a>
    </div>
  </div> -->
</div>
<div class="card-group">
  <div class="card">
    <img src="https://i.ibb.co/jwxB390/Laberinto.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title h1">Persecución en laberinto</h5>
      <p class="card-text h4">Corre hacia la zona de respuesta correcta, evitando los enemigos.</p>
      <a href="{{ route('juegos.persecusion') }}" class="btn btn-info h4">Jugar</a>
    </div>
  </div>
  <div class="card">
    <img src="https://i.ibb.co/FHT4Sry/Reorden.jpg" class="card-img-top" alt="...">
    <div class="card-body bg-warning">
      <h5 class="card-title h1">Reordenar</h5>
      <p class="card-text h3">Arrastra y suelta palabras para reordenar cada oración en su orden correcto.</p>
      <a href="{{ route('juegos.conecta') }}" class="btn btn-success">Jugar</a>
    </div>
  </div>
 <!-- <div class="card">
    <img src="https://i.ibb.co/NVSRCyN/Une.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title h2">Une las correspondencias</h5>
      <p class="card-text h3">Arrastra y suelta cada palabra junto a su definición.</p>
      <a href="{{ route('juegos.une') }}" class="btn btn-warning h4">Jugar</a>
    </div> -->
  </div>
  
<df-messenger
  intent="WELCOME"
  chat-title="Kiddy"
  agent-id="f9bd974d-c6f2-49ae-bdd7-37bff256124f"
  language-code="es"
></df-messenger>
<!-- EndChatbot-->
</div>

@endsection