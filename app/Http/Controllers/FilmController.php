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
        "title" => "bail|required|unique:films|max:255",
        "release_year" => "required|numeric|between:1900,2019",
        "vote" => "required|numeric|between:1,10",
        // "category_id" => "required",
      ]);

      $new_film = new Film();
      $info = $request->all();
      $new_film->fill($info);
      $new_film->save();

      return redirect()->route("films.index");
    }

    public function show($film_id)
    {
        $film = Film::find($film_id);
        return view ("film_show", compact("film"));
    }

    public function edit($film_id)
    {
        $film = Film::find($film_id);
        $category = Category::all();
        return view("film_edit", compact("film", "category"));
        // return view ("film_edit")->with(compact("film", "category"));
        // return view ("film_edit", ["film" => $film, "category" => $category]);
    }

    public function update(Request $request, $film_id)
    {
          $validatedData = $request->validate([
          "title" => "bail|required|max:255",
          "release_year" => "required|numeric|between:1900,2019",
          "vote" => "required|numeric|between:1,10",
          // "category_id" => "required",
        ]);

        $info = $request->all();

        $film = Film::find($film_id);
        $film->update($info);
        return redirect()->route("films.index");
    }

    public function destroy($film_id)
    {
      $film = Film::find($film_id);
      $film->delete();
      return redirect()->route("films.index");
    }
}
