<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{

  protected $fillable = ["title", "release_year", "vote", "category_id"];


    public function category() {
      return $this->belongsTo("App\Category");
    }
}
