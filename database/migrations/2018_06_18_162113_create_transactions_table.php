<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paycom_transaction_id',25);
            $table->string('paycom_time',13);
            $table->dateTime('paycom_time_datetime');
            $table->dateTime('create_time');
            $table->dateTime('perform_time')->nulalble();
            $table->dateTime('cancel_time')->nulalble();
            $table->integer('amount');
            $table->tinyInteger('state');
            $table->tinyInteger('reason');
            $table->string('receivers',500)->nullable()->comment('JSON array of receivers');
            $table->integer('order_id');
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
        Schema::dropIfExists('transactions');
    }
}
