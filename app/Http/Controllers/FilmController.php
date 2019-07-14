<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Category;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::orderBy("release_year", "asc")->get();
        return view("film_index", compact("films"));
    }

    public function create()
    {
        $category = Category::all();
        return view("film_create", compact("category"));

    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        "title" => "bail|required|max:255",
        "release_year" => "required|numeric|between:1900,2019",
        "vote" => "required|numeric|between:1,10",
        // "category_id" => "required",
      ]);

      $new_film = new Film();

      $new_film->fill($request->all());
      $new_film->save();
      return redirect()->route("films.index");
    }

    public function show($film_id)
    {
        $film = Film::find($film_id);
        return view ("film_show", compact("film"));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
