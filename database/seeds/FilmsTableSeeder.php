<?php

use Illuminate\Database\Seeder;
use App\Film;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      $films = [
        [
        "title" => "Apollo 13",
        "release_year" => "1995",
        "vote" => "5",
        ],
        [
        "title" => "Iron Man",
        "release_year" => "2008",
        "vote" => "8",
        ],
        [
        "title" => "E.T.",
        "release_year" => "1982",
        "vote" => "6",
        ]
      ];

      foreach ($films as $film) {
      $new_film = new Film();
      $new_film->fill($film);
      $new_film->save();
      }

    }
}
