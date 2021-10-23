<div class="sidebar" data-color="orange" data-background-color="orange" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <div class="logo">
    <a href="/home" class="simple-text logo-normal">
      {{ __('SuperKids') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
    <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">home</i>
            <p>Home</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('videos.video') }}">
          <i class="material-icons">videocam</i>
          <p>{{ __('Videos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('juegos.index') }}">
          <i class="material-icons">sports_esports</i>
            <p>{{ __('Juegos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('posts.index') }}">
          <i class="material-icons">forum</i>
            <p>{{ __('Bitácora') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('downloads.download')}}">
          <i class="material-icons">download</i>
          <p>{{ __('Descargas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('ayuda.ayuda') }}">
          <i class="material-icons">info</i>
          <p>{{ __('Ayuda') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
