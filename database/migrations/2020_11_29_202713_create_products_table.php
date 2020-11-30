<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('title');
            $table->float('price');
            $table->integer('inStock');
            $table->string('code');
            $table->string('brand');
            $table->string('type');
            $table->string('model');
            $table->string('caliber');
            $table->float('weight');
            $table->float('length');
            $table->string('cartridgeNumber');
            $table->string('manufacturer');
            $table->integer('tight');
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
