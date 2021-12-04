<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartDetail', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->unsignedbigInteger('cartId');
            $table->unsignedbigInteger('productId');
            $table->bigInteger('quantity');
            $table->string('note',255);

            $table->foreign('cartId')->references('id')->on('cart');
            $table->foreign('productId')->references('id')->on('product'); 
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
