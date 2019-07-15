@extends('app')

@section('content')
  <div class="container text-center">
    <h1>Update This Film: ""</h1>
    @include('html.form_error')
    <form class="edit" action="{{route("films.update", $film->id)}}" method="post">
      @method("PUT")
      @csrf
      <div class="form-row">

        <div class="col">
          <label>Film Title</label>
          <input name="title" value="{{$film->title}}" type="text" class="form-control" placeholder="Film Title">
        </div>

        <div class="col">
          <label>Film Release Year</label>
          <input name="release_year" value="{{$film->release_year}}" type="number" class="form-control" placeholder="Release Year">
          <small class="form-text text-muted">(Example: 1999)</small>
        </div>

        <div class="col">
          <label>Vote: 1-10</label>
          <input name="vote" value="{{$film->vote}}" type="number" class="form-control" placeholder="Vote">
          <small class="form-text text-muted">From 1 to 10: 1 is horrible and 10 is outstanding</small>
        </div>

        <div class="col">
          <label>Category</label>
          <select class="form-control" name="category_id">
            <option value="{{$film->category ? $film->category->id : 0}}">{{$film->category ? $film->category->name : "N/A"}}</option>
            @foreach ($category as $value)
              <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
          </select>
        </div>

      </div>
      <button type="submit" class="btn btn-success">Update Movie</button>
    </form>
  </div>
@endsection
