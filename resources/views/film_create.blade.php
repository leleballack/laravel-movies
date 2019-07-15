@extends('app')

@section('content')
  <div class="container">
    <h1>Insert Movie</h1>
    @include('html.form_error')
    <form action="{{route("films.store")}}" method="post">
      @csrf
      <div class="form-row">
        <div class="col">
          <label>Film Title</label>
          <input name="title" value="{{ old("title") }}" type="text" class="form-control" placeholder="Film Title">
          @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col">
          <label>Film Release Year</label>
          <input name="release_year" value="{{ old("release_year") }}" type="number" class="form-control" placeholder="Release Year">
          <small class="form-text text-muted">(Example: 1999)</small>
          @error('release_year')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col">
          <label>Vote: 1-10</label>
          <input name="vote" value="{{ old("vote") }}" type="number" class="form-control" placeholder="Vote">
          <small class="form-text text-muted">From 1 to 10: 1 is horrible and 10 is outstanding</small>
          @error('vote')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col">
          <label>Category</label>
          <select class="form-control" name="category_id">
            <option value="">Select A Category</option>
            @foreach ($category as $value)
              <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Insert Movie</button>
    </form>
  </div>
@endsection

@section('page_title')
  Insert New Movie
@endsection
