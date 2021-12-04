<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactionHeader', function (Blueprint $table) {
            $table->bigIncrements('id',10);
            $table->UnsignedbigInteger('paymentId');
            $table->String('address', 255);
            $table->Date('transactionDate');
            $table->Double('total',10);
            
            $table->foreign('paymentId')->references('id')->on('payment');
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
