<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>SUPERKIDS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

<header class="bg_animate">
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- -------- anime css ------ -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- --------- tiny slider css ------ -->
  <link rel="stylesheet" href="assets/css/tiny-slider.css">
  <!-- --------- font awsome css ------ -->
  <link rel="stylesheet" href="assets/css/all.css">
  <!-- -------- venobox css ------- -->
  <link rel="stylesheet" href="assets/css/venobox.css" type="text/css" media="screen" />
  <!-- ---- Bootstrap css--- -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- ---------- default css --------- -->
  <link rel="stylesheet" href="assets/css/default.css">
  <!-- --- style css -->
  <link rel="stylesheet" href="assets/css/style.css">
        <div class="header_nav">
            <div class="contenedor">
                <h1></h1>
                
            </div>
        </div>
</head>

<body>
  <!-- --------- preloader ------------ -->
  <div class="preloader">
    <div class="loader">
      <div class="spinner">
        <div class="spinner-container">
          <div class="spinner-rotator">
            <div class="spinner-left">
              <div class="spinner-circle"></div>
            </div>
            <div class="spinner-right">
              <div class="spinner-circle"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-------   Header star ------>
  <header class="header-area">
    <div class="navbar-area">
      <!---- navbar star--->
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img class="image" src="assets/img/header/logo/logo.jpeg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link active" data-scroll-nav="0" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-scroll-nav="2" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-scroll-nav="1" href="#">Videos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-scroll-nav="3" href="#">Contáctanos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-scroll-nav="5" href="#">FAQ</a>
                </li>
                
                <li class="nav-item">
                <nav>
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('users.index') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"></a>
                        @endif
                    @endauth
                </div>
            @endif
                </nav>
                </li>  
                
                </li>


              </ul>

            </div>
          </div>
        </nav>
      </div>
    </div>
    <!---- navbar end--->
    <div class="header-hero" data-scroll-index="0">
      <!---- home star ------>
      <div class="shape shape-1"></div>
      <div class="shape shape-2"></div>
      <div class="shape shape-3"></div>
      <div class="shape shape-4"></div>
      <div class="shape shape-5"></div>
      <div class="shape shape-6"></div>
      <div class="container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
          <div class="col-lg-6 col-md-10">
            <div class="header-hero-content">
              <h1 class="header-title wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.2s"><span>BIENVENIDOS A 
            </span> <br> S U P E R K I D S</h1>
              <p class="text wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.4s">Este es un portal de educación 
                   para niños de 3 a 7 años que aborda el aprendizaje a través de juegos educativos y videos. 
                   Los juegos y los videos ha sido una estrategia efectiva para el aprendizaje infantil. 
                   Ahora, con la presencia de la tecnología en la vida cotidiana, los juegos interactivos 
                   junto con los videos ofrecen una innovadora y divertida manera para construir las bases educativas de los 
                   pequeños mientras adquieren información acerca de los virus.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-7">
            <div class="header-image">
              <img src="assets/img/header/cosito.png" alt="" class="image-1  wow fadeInRightBig"
                data-wow-duration="3s" data-wow-delay="0.5s">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="header-shape-1"></div>
        <div class="header-shape-2">
          <img src="assets/img/header/header-shape-2.svg" alt="">
        </div>
      </div>
    </div>
    <!---- home star ------>
  </header>
  <!--------   Header End ----  -->

  <!-- ----------- About Section Start --------- -->
  <section class="about-area pt-90 pb-90" data-scroll-index="2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-image wow fadeInLeftBig" data-wow-duration="3s" data-wow-delay="0.5s">
            <img src="assets/img/about/nurse-app.jpg" alt="" class="app">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="about-content mt-50 wow fadeInRightBig" data-wow-duration="3s" data-wow-delay="0.5s">
            <div class="section-title">
              <h1 class="title">Acerca de</h1>
              <p class="text">Todos los recursos audiovisuales y juegos están basados en la teoría 
                  de las inteligencias múltiples, y refuerzan los conceptos básicos de 
                  ciencia y salud, además de proporcionar un ambiente en el que el niño 
                  o niña participa activamente tomando 
                   decisiones y recibiendo retroalimentación inmediata. 
                   Los padres pueden confiar en la calidad de nuestros recursos 
                   ya que todos fueron desarrollados por un equipo
                   calificado y complementan los contenidos abarcados por las
                    instituciones educativas.
                    <a>
                <a> A todos los padres y educadores que llegaron a esta plataforma 
                buscando soluciones para sus hijos aprendan acerca de los virus y de como cuidarse, los invito a que 
                compartan nuestros juegos gratuitos y recursos audiovisuales con los niños y 
                niñas en sus vidas. La educación de calidad es una de las herramientas más 
                poderosas que cualquiera puede tener y con SuperKids buscamos contribuir a la 
                construcción de una educación de calidad accesible a todos los niños y niñas de habla hispana.</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ----------- About Section End --------- -->

    <!-- ------- Videos Section Start ---------- -->
    <section class="feature-section pt-80" data-scroll-index="1">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7">
          <div class="section-title text-center mb-30">
            <h1 class="mb-25  wow fadeInUp" data-wow-delay=".2s">VID<span>EOS</span></h1>
            <p class="wow fadeInUp" data-wow-delay=".4s"></p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="single-feature wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.2s">
            <div class="icon color-1">
              <i class="fas fa-hand-pointer"></i>
            </div>
            <div class="content">
              <h3>¿Qué son los virus?</h3>
              <a href="https://youtu.be/asISyCoRiUA"  target="_blank" class="btn btn-outline-danger">VER VIDEO</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-feature wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.4s">
            <div class="icon color-2">
              <i class="fas fa-hand-pointer"></i>
            </div>
            <div class="content">
              <h3>El sistema inmunológico</h3>
              <a href="https://youtu.be/eRIV66-s78o"  target="_blank" class="btn btn-outline-danger">VER VIDEO</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-feature wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.6s">
            <div class="icon color-3">
              <i class="fas fa-hand-pointer"></i>
            </div>
            <div class="content">
              <h3>Virus vs Bacterias</h3>
              <a href="https://youtu.be/-3mE3YaRNLU"  target="_blank" class="btn btn-outline-danger">VER VIDEO</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-feature wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.2s">
            <div class="icon color-1">
              <i class="fas fa-hand-pointer"></i>
            </div>
            <div class="content">
              <h3>¿Qué es el coronavirus?</h3>
              <a href="https://www.youtube.com/watch?v=0f77DoVhDZg"  target="_blank" class="btn btn-outline-danger">VER VIDEO</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-feature wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.4s">
            <div class="icon color-2">
              <i class="fas fa-hand-pointer"></i>
            </div>
            <div class="content">
              <h3>Lavado de manos en 10 pasos</h3>
              <a href="https://www.youtube.com/watch?v=zalaUAf8KbY"  target="_blank" class="btn btn-outline-danger">VER VIDEO</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-feature wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.6s">
            <div class="icon color-3">
              <i class="fas fa-hand-pointer"></i>
            </div>
            <div class="content">
              <h3>Higiene corporal para niños</h3>
              <a href="https://youtu.be/AJdfEgkbCts"  target="_blank" class="btn btn-outline-danger">VER VIDEO</a>
              </p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>
  <!-- ------- Videos Section End ---------- -->

  <!-- ----------- Contact Section Start ------- -->
<section class="testimonial-section" data-scroll-index="3">
    <div class="container">
      <div class="row justify-content-center testimonial-active-wrapper">
        <div class="col-xl-6 col-lg-7">
          <div class="section-title text-center mb-60">
            <h1 class="mb-25 text-white wow fadeInUp" data-wow-delay=".2s">Contáctanos</h1>
            <p class="text-white wow fadeInUp" data-wow-delay=".4s">¿Cómo podemos ayudarte? Obtén más información sobre nuestra metodología y formas de trabajo.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8">
            <div class="testimonial-active">
              <div class="testimonial-wrapper">
                <div class="single-testimonial">
                  <div class="info">
                    <div class="image-2">
                      <img src="assets/img/testemonial/youtube.png" alt="">
                    </div>
                    <h4>YouTube</h4>
                    <p>SuperKids</p>
                    <div class="quote">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="content">
                    <P>"Todos los aprendizajes más importantes de la vida se hacen jugando"</P>
                    <a href="https://youtube.com/channel/UCmjjYuRWEmVVZ_B8MoE2s2w"  target="_blank" class="btn btn-outline-danger">Canal de YouTube</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-wrapper">
                <div class="single-testimonial">
                  <div class="info">
                    <div class="image-2">
                      <img src="assets/img/testemonial/whatsapp.png" alt="">
                    </div>
                    <h4>WhatsApp</h4>
                    <p>SuperKids</p>
                    <div class="quote">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="content">
                      <p>"No cambies la salud por la riqueza, ni la libertad por el poder"</p>
                      <a href="https://api.whatsapp.com/send?phone=50364438885&text=%E3%85%A4"  target="_blank" class="btn btn-outline-danger">WhatsApp</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-wrapper">
                <div class="single-testimonial">
                  <div class="info">
                    <div class="image-2">
                      <img src="assets/img/testemonial/instagram.png" alt="">
                    </div>
                    <h4>Instragram</h4>
                    <p>SuperKids</p>
                    <div class="quote">
                      <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="content">
                      <p>"El que tiene salud, tiene esperanza; el que tiene esperanza, lo tiene todo"</p>
                      <a href="https://instagram.com/super.kids_yt?utm_medium=copy_link"  target="_blank" class="btn btn-outline-danger">Instagram</a>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- ----------- Contact Section End ------- -->

  <!-- ----------- FAQ Section Start --------- -->
  <section class="faq-section pt-120" data-scroll-index="5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-7">
          <div class="section-title text-center mb-60">
            <h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">PREGUNTAS <span> FRECUENTES</span></h1>
            <p class="mb-25 wow fadeInUp" data-wow-delay=".4s">Bienvenidos al Servicio de Atención al Cliente de SuperKids. 
                ¿En qué podemos ayudarte?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="accordion wow fadeInLeftBig" id="accordionExample" data-wow-duration="3s" data-wow-delay="0.5s">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    ¿Qué es SuperKids?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                  SuperKids es una aplicación educativa enfocada en el aprendizaje, es súper eficiente, simple y segura. 
                  Puedes contactar con SuperKids en todas sus redes sociales
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿En qué navegadores puedo usar la plataforma?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                  Nuestra plataforma funciona en cualquier dispositivo con conexión a Internet y 
                  es compatible con los siguientes navegadores: Safari, Firefox, Chrome, Microsoft Edge
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Está SuperKids basado en investigación educativa?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                  Nuestro material didáctico está diseñado siguiendo los más destacados 
                  modelos de educación infantil y está nivelado y secuenciado para asegurar 
                  resultados positivos en cualquier niño. Nuestros juegos educativos y recursos
                  audiovisuales combinan múltiples percepciones sensoriales para poder ser 
                  enfocados a los diferentes estilos de aprendizaje.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="faq-image wow fadeInRightBig" data-wow-duration="3s" data-wow-delay="0.5s">
              <img src="assets/img/faq/faq-img.svg" alt="">
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- ----------- FAQ Section End --------- -->
  
  <!-- --------------Footer Section Start ------- -->
  <footer class="footer-area">
    <div class="footer-shape shape-1"></div>
    <div class="footer-shape shape-2"></div>
    <div class="footer-shape shape-3"></div>
    <div class="footer-shape shape-4"></div>
    <div class="footer-shape shape-5"></div>
    <div class="footer-shape shape-6"></div>
    <div class="footer-widget pt-30 pb-80">
      <div class="container">
        <div class="row">
          
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row justify-content-center">
          <div class="lo-lg-12">
            <div class="copyright">
              <div class="copyright-text text-center">
                <p class="text">Copyright &#169; 2021 <a href="">SuperKids - DarkSnowy</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- --------------Footer Section End ------- -->





  <!-- ---- jquery Js ---- -->
  <script src="assets/js/jquery-1.12.4.min.js"></script>
  <!-- -------- venobox js ------ -->
  <script type="text/javascript" src="assets/js/venobox.min.js"></script>
  <!-- ---------- wow js ---------- -->
  <script src="assets/js/wow.min.js"></script>
  <!-- ---------- tiny slider js --------- -->
  <script src="assets/js/tiny-slider.js"></script>
  <!-- ---------- scrollit js ---------- -->
  <script src="assets/js/scrollIt.min.js"></script>
  <!-- -------- font awsome js --------- -->
  <script src="assets/js/all.js"></script>
  <!-- ---- Bootstrap Js ---- -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- ---- main js --- -->
  <script src="assets/js/main.js"></script>
  <!--ChatBoot -->
  <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>

<df-messenger
  intent="WELCOME"
  chat-title="Kiddy"
  agent-id="f9bd974d-c6f2-49ae-bdd7-37bff256124f"
  language-code="es"
></df-messenger>
<!-- EndChatbot-->
</body>

</html>