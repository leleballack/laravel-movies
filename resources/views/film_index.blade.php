@extends('app')

@section('content')

  <div class="container">
    <div class="heading text-center">
      <h1>Best Films of All Times</h1>
      <a href="{{route("films.create")}}" class="btn btn-success insert col-2">Insert Movie</a>
    </div>
    <table class="table table-striped table-sm text-center">
      <thead class="thead-dark">
        <tr>
          <th>Title</th>
          <th>Year</th>
          <th>Rating</th>
          <th>Category</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($films as $film)
          <tr>
            <th>{{ $film->title }}</th>
            <td>{{ $film->release_year }}</td>
            <td>{{ $film->vote ? $film->vote : "no rating yet" }}</td>
            <td>{{ $film->category ? $film->category->name : "N/A" }}</td>
            <td>
              <a href="{{ route("films.show", $film->id) }}" class="btn btn-primary">Show</a>
              <a href="{{ route("films.edit", $film->id) }}" class="btn btn-warning">Update</a>
              @include('html.delete_button')
            </td>
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
