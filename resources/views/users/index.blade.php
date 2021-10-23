@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Home')]) 
@section('content')
<div class="content">
    <div class="card text-center">
      <div class="card-header">
      </div>
      <div class="card-body">
        <video  autoplay controls src="{{ asset('/video/Bienvenidos.mp4') }}" width="640" height="480" loop></video>
            <p class="card-text"></p>
      </div> 
  </div>
</div>

@endsection
