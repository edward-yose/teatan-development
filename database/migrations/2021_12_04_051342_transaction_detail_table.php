<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactionDetail', function (Blueprint $table) {
            $table->bigIncrements('id',10);
            $table->unsignedbiginteger('productId');
            $table->bigInteger('quantity');
            $table->double('totalPrice',10);
            $table->string('note',255);

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
