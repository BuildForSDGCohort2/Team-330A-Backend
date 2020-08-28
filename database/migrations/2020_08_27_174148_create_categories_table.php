<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            // id (pk)
            // slug
            // name
            // description
            // display_image_url
            // created_at (date)
            // updated_at (date)
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *ima
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
