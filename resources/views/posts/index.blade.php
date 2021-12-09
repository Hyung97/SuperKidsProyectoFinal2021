@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Posts'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-info">
            <h4 class="card-title">Mis Post</h4>
            <p class="card-category">Lista de mis post realizados</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-dark">Añadir post</a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> Post </th>
                
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($posts as $post)
                  <tr>
              
                    <td>{{ $post->title }}</td>
                    <td class="td-actions text-right">
                      <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning"> <i
                          class="material-icons">edit</i> </a>
                      <form action="{{ route('posts.destroy', $post->id) }}" method="post"
                        onsubmit="return confirm('ESTA SEGURO DE ELIMINA ESTE POST?')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn bg-secondary">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $posts->links() }}
          </div>
          <!--End footer-->
        </div>
      </div>
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
@endsection