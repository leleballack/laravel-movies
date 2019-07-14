<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFilmsTable extends Migration
{

    public function up()
    {
        Schema::table('films', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->after("id")->nullable();
            $table->foreign("category_id")->references("id")->on("categories");
        });
    }

    public function down()
    {
        Schema::table('films', function (Blueprint $table) {
          $table->dropColumn("category_id");
          $table->dropForeign("films_category_id_foreign");
        });
    }
}
