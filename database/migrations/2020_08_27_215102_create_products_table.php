<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('store_id')->references('id')->on('stores');
            $table->decimal('cost_price',9,3);
            $table->decimal('selling_price',9,3);
            $table->string('size');
            $table->string('color');
            $table->decimal('weight',9,3);
            $table->integer('sales_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
