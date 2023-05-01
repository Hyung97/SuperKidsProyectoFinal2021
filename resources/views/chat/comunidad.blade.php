@extends('layouts.main', ['activePage' => 'index', 'titlePage' => 'Comunidad'])
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">



<div class="slide-container">

  <div class="wrapper">
    <div class="clash-card barbarian">
      <div class="clash-card__image clash-card__image--barbarian">
        <img src="{{ asset('img/facebook.png') }}" alt="barbarian" />
      </div> 
      <div class="clash-card__level clash-card__level--barbarian">么SuperKids么</div>
      <div class="clash-card__unit-name">F A C E B O O K</div>
      <div class="clash-card__unit-description">
        Bienvenidos sean al grupo oficial de Facebook de la comunidad para padres de familia de SuperKids.
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
      <a href="https://www.facebook.com/groups/992608851542796/"  target="_blank" class="btn btn-outline-danger">U N I R S E</a>
        <div class="one-third">
        </div>
        <div class="one-third">
        </div>
        <div class="one-third no-border">
        </div>
      </div>
    </div>
  </div> 

  <div class="wrapper">
    <div class="clash-card archer">
      <div class="clash-card__image clash-card__image--archer">
        <img src="{{ asset('img/disc.png') }}" alt="archer" />
      </div>
      <div class="clash-card__level clash-card__level--archer">么SuperKids么</div>
      <div class="clash-card__unit-name">D I S C O R D</div>
      <div class="clash-card__unit-description">
        Bienvenidos sean al canal oficial en Discord para la comunidad de padres de SuperKids.
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--archer clearfix">
      <a href="https://discord.gg/bTNcJBcgbG"  target="_blank" class="btn btn-outline-primary">U N I R S E</a>
        <div class="one-third">
        </div>
        <div class="one-third">
        </div>
        <div class="one-third no-border">
        </div>
      </div>
    </div>
  </div> 

  <div class="wrapper">
    <div class="clash-card giant">
      <div class="clash-card__image clash-card__image--giant">
        <img src="{{ asset('img/ln.png') }}" alt="giant" />
      </div>
      <div class="clash-card__level clash-card__level--giant">么SuperKids么</div>
      <div class="clash-card__unit-name">L I N E</div>
      <div class="clash-card__unit-description">
      Bienvenidos sean al grupo oficial de Line de la comunidad para padres de familia de SuperKids.
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--giant clearfix">
      <a href="https://line.me/R/ti/g/opQJFx1GdW"  target="_blank" class="btn btn-outline-warning">U N I R S E</a>
        <div class="one-third">
        </div>
        <div class="one-third">
        </div>
        <div class="one-third no-border">
        </div>
      </div>
    </div> 
  </div> 

   <div class="wrapper">
    <div class="clash-card goblin">
      <div class="clash-card__image clash-card__image--goblin">
        <img src="{{ asset('img/whats.png') }}" alt="goblin" />
      </div>
      <div class="clash-card__level clash-card__level--goblin">么SuperKids么</div>
      <div class="clash-card__unit-name">W H A T S A P P</div>
      <div class="clash-card__unit-description">
      Bienvenidos sean al grupo oficial de WhatsApp de la comunidad para padres de familia de SuperKids.
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--goblin clearfix">
      <a href="https://chat.whatsapp.com/DFzoj3It7td2ejVzOBehiI"  target="_blank" class="btn btn-outline-success">U N I R S E</a>
        <div class="one-third">
        </div>
        <div class="one-third">
        </div>
        <div class="one-third no-border">
        </div>
      </div>
    </div>
  </div> 

  <div class="wrapper">
    <div class="clash-card wizard">
      <div class="clash-card__image clash-card__image--wizard">
        <img src="{{ asset('img/tele.png') }}" alt="wizard" />
      </div>
      <div class="clash-card__level clash-card__level--wizard">么SuperKids么</div>
      <div class="clash-card__unit-name">T E L E G R A M</div>
      <div class="clash-card__unit-description">
      Bienvenidos sean al grupo oficial de Telegram de la comunidad para padres de familia de SuperKids.
      </div>
      <div class="clash-card__unit-stats clash-card__unit-stats--wizard clearfix">
      <a href="https://t.me/joinchat/qLi7ipLvFxVjOWUx"  target="_blank" class="btn btn-outline-info">U N I R S E</a>
        <div class="one-third">
        </div>
        <div class="one-third">
        </div>
        <div class="one-third no-border">
        </div>
      </div>
    </div>
  </div> 
 </div> <!-- end container -->
 
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
 
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js">
</script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"> </script>


@endsection