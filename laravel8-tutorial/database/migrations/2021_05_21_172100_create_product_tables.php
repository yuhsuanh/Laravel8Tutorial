<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); //same as bigIncrements
            $table->string('name', 255)->comment('The product name');
            $table->string('code', 10)->comment('The product code');
            $table->text('description')->comment('The product description');
            $table->decimal('price', 9,3)->comment('The product price');
            $table->integer('stock')->comment('The left number of product in stock');
            $table->timestamps();
            $table->softDeletes(); //can get trash data
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
