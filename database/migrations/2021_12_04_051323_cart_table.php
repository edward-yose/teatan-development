<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->bigIncrements('id',10);
            $table->String('email', 255);
            $table->Double('total',10);
            $table->unsignedbigInteger('productId');
            $table->bigInteger('quantity');
            $table->string('note',255);
            $table->foreign('productId')->references('id')->on('product')->onDelete('cascade');;
            $table->foreign('email')->references('email')->on('users');
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
