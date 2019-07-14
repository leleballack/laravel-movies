@extends ('app')

@section('content')
  <div class="container text-center">
    <h1><strong>"{{ $film->title }}"</strong> </h1>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://s.studiobinder.com/wp-content/uploads/2017/12/Movie-Poster-Template-Dark-with-Image.jpg?x81279" alt="Card image cap">
      <div class="card-body">
        <li><strong> Title: </strong><em>{{ $film->title }}</em></li></li>
        <li><strong> Year: </strong><em>{{ $film->release_year }}</em></li></li>
        <li><strong> Rating: </strong><em>{{ $film->vote ? $film->vote : "no rating yet" }}</em></li></li>
        <li><strong> Category: </strong><em>{{ $film->category ? $film->category->name : "N/A" }}</em></li></li>
      </div>
    </div>
    <a href="{{ route("films.index") }}" class="btn btn-success">Homepage</a>
    
    {{-- <ul class="show">
      <li><img src="https://s.studiobinder.com/wp-content/uploads/2017/12/Movie-Poster-Template-Dark-with-Image.jpg?x81279" alt=""></li>
      <li><strong> Title: </strong><em>{{ $film->title }}</em></li></li>
      <li><strong> Year: </strong><em>{{ $film->release_year }}</em></li></li>
      <li><strong> Rating: </strong><em>{{ $film->vote ? $film->vote : "no rating yet" }}</em></li></li>
      <li><strong> Category: </strong><em>{{ $film->category ? $film->category->name : "N/A" }}</em></li></li>
    </ul> --}}
  </div>
@endsection
