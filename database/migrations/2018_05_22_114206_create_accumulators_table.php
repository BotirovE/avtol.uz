<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccumulatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accumulators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20)->nullable();
            $table->double('price');
            // $table->double('voltage');
            $table->double('capacity');
            $table->double('height');
            $table->double('width');
            $table->double('length');
            $table->string('comment', 50)->nullable();
            // $table->string('image_path', 50)->nullable();
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
        Schema::dropIfExists('accumulators');
    }
}
