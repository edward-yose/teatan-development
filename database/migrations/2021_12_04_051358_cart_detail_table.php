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
            $table->bigInteger('cartId',10);
            $table->bigInteger('productId',10);
            $table->bigInteger('quantity', 10);
            $table->string('note',255);

            $table->primary('cartId');
            $table->primary('productId');
            $table->foreign('cartId')->references('id')->on('cart');
            $table->foreign('productId')->references('id')->on('drink');
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
