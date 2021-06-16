<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SuperKids</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Roboto', 'Sans serif', 'Century Gothic';
}

.contenedor{
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

.bg_animate{
    width: 100%;
    height: 100vh;
    background: linear-gradient(to right, #ff6000, #e66b19);
    position: relative;
    overflow: hidden;
}

.header_nav{
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}

.header_nav .contenedor{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
}

.header_nav h1{
    color: #fff;
    font-family: 'Gagalin';
}

.header_nav nav a{
    color: #fff;
    text-decoration: none;
    margin-right: 10px;
}

.banner{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
}

.banner_title h2{
    color: #fff;
    font-size: 60px;
    font-weight: 800;
    margin-bottom: 20px;
}

.banner_title .llamanos{
    color: #fff;
    font-size: 20px;
    text-decoration: none;
    display: inline-block;
    background: #1A2849;
    padding: 20px;
}

.banner_img{
    animation: movimiento 2.5s linear infinite;
}

.banner_img img{
    width: 600px;
    display: block;
}

/* burbujas */

.burbuja{
    border-radius: 50%;
    background: #fff;
    opacity: .3;

    position: absolute;
    bottom: -150;
    
    animation: burbujas 3s linear infinite ;
}

.burbuja:nth-child(1){
    width: 80px;
    height: 80px;
    left: 5%;
    animation-duration: 3s;
    animation-delay: 3s;
}

.burbuja:nth-child(2){
    width: 100px;
    height: 100px;
    left: 35%;
    animation-duration: 3s;
    animation-delay: 5s;
}

.burbuja:nth-child(3){
    width: 20px;
    height: 20px;
    left: 15%;
    animation-duration: 1.5s;
    animation-delay: 7s;
}

.burbuja:nth-child(4){
    width: 50px;
    height: 50px;
    left: 90%;
    animation-duration: 6s;
    animation-delay: 3s;
}

.burbuja:nth-child(5){
    width: 70px;
    height: 70px;
    left: 65%;
    animation-duration: 3s;
    animation-delay: 1s;
}

.burbuja:nth-child(6){
    width: 20px;
    height: 20px;
    left: 50%;
    animation-duration: 4s;
    animation-delay: 5s;
}

.burbuja:nth-child(7){
    width: 20px;
    height: 20px;
    left: 50%;
    animation-duration: 4s;
    animation-delay: 5s;
}

.burbuja:nth-child(8){
    width: 100;
    height: 100px;
    left: 52%;
    animation-duration: 5s;
    animation-delay: 5s;
}

.burbuja:nth-child(9){
    width: 65px;
    height: 65px;
    left: 51%;
    animation-duration: 3s;
    animation-delay: 2s;
}

.burbuja:nth-child(10){
    width: 40px;
    height: 40px;
    left: 35%;
    animation-duration: 3s;
    animation-delay: 4s;
}


@keyframes burbujas{
    0%{
        bottom: 0;
        opacity: 0;
    }
    30%{
        transform: translateX(30px);
    }
    50%{
        opacity: .4;
    }
    100%{
        bottom: 100vh;
        opacity: 0;
    }
}

@keyframes movimiento{
    0%{
        transform: translateY(0);
    }
    50%{
        transform: translateY(30px);
    }
    100%{
        transform: translateY(0);
    }
}
</style>
    </head>
    <body>
    <header class="bg_animate">
        <div class="header_nav">
            <div class="contenedor">
                <h1>SuperKids</h1>
                <nav>
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif
                </nav>
            </div>
        </div>

        <section class="banner contenedor">
            <secrion class="banner_title">
                <h2>Confía en ti y confía en nosotros</h2>
            </secrion>
            <div class="banner_img">
                <img src="{{ asset('/img/cosito.png') }}" alt="">
            </div>
        </section>

        <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
        </div>
    </header>

        <div class="flex-center position-ref full-height">
            

            <div class="content">
                
                <div class="title m-b-md">
                <nav class="navbar navbar-light bg-main">
                  <div class="container p-4">
                      <a class="navbar-brand m-auto" href="#">
                  </a>
                  </div>
               </nav>
                </div>
            </div>
        </div>
    </body>
</html>