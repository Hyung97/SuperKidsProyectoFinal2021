@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Musica'])
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>Reproductor de Musica</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    
</head>

<body>
    
    <div class="player">
        <div id="info" class="info">
            <span class="artist">SuperKids</span>
            <span class="name">Canciones</span>
            <div class="progress-bar">
                <div class="bar"></div>
            </div>
        </div>   

        <div id="control-panel" class="control-panel">
            <div class="album-art">
                <img src="img/Fondo.jpg" alt="">
            </div>
            <div class="controls">
                <div class="prev"></div>
                <div class="play" id="play"></div>
                <div class="next"></div>
            </div>
        </div>
    </div>

    <audio id="Music" controls style="display: none;">
        <source  src="audio/SinCopy1.mp3" type="audio/mpeg">
    </audio>

</body>

<script src="js/main.js"></script>

</html>


@endsection