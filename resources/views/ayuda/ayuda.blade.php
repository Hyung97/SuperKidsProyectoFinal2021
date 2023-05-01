@extends('layouts.main', ['activePage' => 'ayuda', 'titlePage' => 'Ayuda'])
@section('content')
<div class="content">

<div class="main-container">
  <div class="heading-container">
  </div>
  <div class="card-container">
    <div class="card card-1">
      <h2 class="card__title">¿Qué es SuperKids?</h2>
      <p class="card__apply"><a href="{{ route('ayuda.superkids') }}">Leer mas</a></p>
    </div>
    <div class="card card-2">
      <h2 class="card__title">¿Qué puedo hacer aquí?</h2>
      <p class="card__apply"><a href="{{ route('ayuda.pregunta2') }}">Leer mas</a></p>
    </div>
    <div class="card card-3">
      <h2 class="card__title">No puedo ingresar a los juegos</h2>
      <p class="card__apply"><a href="{{ route('ayuda.pregunta3') }}">Leer mas</a></p>
    </div>
    <div class="card card-4">
      <h2 class="card__title">¿Cómo descargo los juegos?</h2>
      <p class="card__apply"><a href="{{ route('ayuda.pregunta4') }}">Leer mas</a></p>
    </div>
    <div class="card card-5">
      <h2 class="card__title">¿En qué navegadores puedo usar la plataforma?</h2>
      <p class="card__apply"><a href="{{ route('ayuda.pregunta5') }}">Leer mas</a></p>
    </div>
  </div>
  
<df-messenger
  intent="WELCOME"
  chat-title="Kiddy"
  agent-id="f9bd974d-c6f2-49ae-bdd7-37bff256124f"
  language-code="es"
></df-messenger>
<!-- EndChatbot-->
</div>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
    Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.heading-container {
  text-align: center;
}

.heading {
  font-weight: 600;
}

.credit {
  margin: 10px 0px;
  color: #ffffff;
  font-size: 25px;
  transition: all 0.5s;
}

.credit a {
  color: inherit;
}

a,
.card__exit,
.card__icon {
  position: relative;
  text-decoration: none;
  color: rgba(255, 255, 255, 0.9);
}

a::after {
  position: absolute;
  top: 25px;
  left: 0;
  content: "";
  width: 0%;
  height: 3px;
  background-color: rgba(255, 255, 255, 0.6);
  transition: all 0.5s;
}

a:hover::after {
  width: 100%;
}

.main-container {
  padding: 30px;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.card {
  margin: 20px;
  padding: 20px;
  width: 500px;
  min-height: 200px;
  display: grid;
  grid-template-rows: 20px 50px 1fr 50px;
  border-radius: 10px;
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.5s;
}

.card:hover {
  box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
  transform: scale(1.01);
}

.card__exit {
  grid-row: 1/2;
  justify-self: end;
}

.card__icon {
  grid-row: 2/3;
  font-size: 30px;
}

.card__title {
  grid-row: 3/4;
  font-weight: 400;
  color: #ffffff;
}

.card__apply {
  grid-row: 4/5;
  align-self: center;
}

.card-1 {
  background: radial-gradient(#FF8303, #FF8303);
}

.card-2 {
  background: radial-gradient(#39A6A3, #39A6A3);
}

.card-3 {
  background: radial-gradient(#511281, #511281);
}

.card-4 {
  background: radial-gradient(#194350, #194350);
}

.card-5 {
  background: radial-gradient(#E5707E, #E5707E);
}

@media (max-width: 1600px) {
  .card-container {
    justify-content: center;
  }
}
</style>
</div>
@endsection