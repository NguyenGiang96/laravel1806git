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
            $table->increments('products_code');
            $table->string('product_name');
            $table->integer('products_line');
            $table->string('products_scale');
            $table->string('products_vendor');
            $table->string('product_description');
            $table->integer('quantily_instock');
            $table->integer('buy_price');
            $table->integer('msrp');
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
