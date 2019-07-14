@extends('app')

@section('content')

  <div class="container">
    <h1>Best Films of All Times</h1>
    <a href="{{route("films.create")}}" class="btn btn-warning">Insert Movie</a>
    <ul>
    @foreach ($films as $film)
      <li><strong>Title: </strong>{{ $film->title }} - <strong>Year: </strong> {{ $film->release_year }} - <strong>Rating: </strong>{{ $film->vote }} - <strong>Category: </strong>{{ $film->category ? $film->category->name : "N/A" }} </li>
    @endforeach
    </ul>
  </div>
@endsection
