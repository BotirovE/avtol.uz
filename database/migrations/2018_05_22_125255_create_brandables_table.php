<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brandables', function (Blueprint $table) {
            $table->integer('brand_id')->unsigned();
            $table->integer('brandable_id')->unsigned();
            $table->string('brandable_type', 20);
            $table->index(['brand_id', 'brandable_id', 'brandable_type']);
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
        Schema::dropIfExists('brandables');
    }
}
