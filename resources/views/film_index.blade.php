@extends('app')

@section('content')

  <div class="container">
    <div class="heading text-center">
      <h1>Best Films of All Times</h1>
      <a href="{{route("films.create")}}" class="btn btn-warning col-2">Insert Movie</a>
    </div>
    <table class="table table-striped table-sm text-center">
      <thead class="thead-dark">
        <tr>
          <th>Title</th>
          <th>Year</th>
          <th>Rating</th>
          <th>Category</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($films as $film)
          <tr>
            <th>{{ $film->title }}</th>
            <td>{{ $film->release_year }}</td>
            <td>{{ $film->vote ? $film->vote : "no rating yet" }}</td>
            <td>{{ $film->category ? $film->category->name : "N/A" }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>


    {{-- <ul>
    @foreach ($films as $film)
      <li><strong>Title: </strong>{{ $film->title }} - <strong>Year: </strong> {{ $film->release_year }} - <strong>Rating: </strong>{{ $film->vote }} - <strong>Category: </strong>{{ $film->category ? $film->category->name : "N/A" }} </li>
    @endforeach
    </ul> --}}
  </div>
@endsection