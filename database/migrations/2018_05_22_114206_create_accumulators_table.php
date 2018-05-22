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
            $table->string('name',30);
            $table->double('price');
            $table->double('voltage');
            $table->double('capacity');
            $table->string('size',20);
            $table->string('image_path', 50)->nullable();
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
