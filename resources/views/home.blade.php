@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Home')]) 
@section('content')
<div class="content">
    <div class="card text-center">
      <div class="card-header">
         B I E N V E N I D O S
      </div>
      <div class="card-body">
        <h5 class="card-title">Sean bienvenidos peques a</h5>
          <img src="{{ asset('/img/superkids.png') }}">
            <p class="card-text"></p>
      </div> 
  </div>
</div>

@endsection
