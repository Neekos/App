@extends('layouts.app')

@section('content')
	    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Laravel</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
          @foreach($posts as $value)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                	<h3><a href="posts/{{$value->id}}">{{$value->title}}</a></h3>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">{{$value->created_at}}</small>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Добавление ссылок для перехода пагинации -->
      <center>{{$posts->links()}}</center> 
    </main>
@endsection