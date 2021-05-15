@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles del usuario'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <div class="card-title">Usuarios</div>
            <p class="card-category">Vista detallada del usuario {{ $user->name }}</p>
          </div>
          <!--body-->
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="success">
              {{ session('success') }}
            </div>
            @endif
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ asset('/img/gatito.jpg') }}" width="200px" height="200px" class="avatar">
              </div>
            <div class="col-md-8">
              <div class="card-body">
              <h5 class="title mt-3">{{ $user->name }}</h5>
                        </a>
                        <p class="description">
                        {{ $user->username }} <br>
                        {{ $user->email }} <br>
                        {{ $user->created_at }}
                        </p>
                        <div class="card-description">
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                    <a href="{{ route('users.index') }}" class="btn btn-sm btn-info mr-3"> Volver </a>
                    </div>
              </div>
             </div>
          </div>
      </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection