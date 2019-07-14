<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $topics = ["Adventure", "Sci-Fi", "Musical", "Documentary"];
        foreach ($topics as $topic) {
          $new_topic = new Category();
          $new_topic->name = $topic;
          $new_topic->save();
        }
    }
}
