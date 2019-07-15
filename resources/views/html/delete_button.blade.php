<form class="delete_btn" action="{{ route("films.destroy", $film->id) }}" method="post">
  @method("DELETE")
  @csrf
  <input type="submit" class="btn btn-danger" value="Delete">
</form>
