<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWheelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wheels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20)->nullable();
            $table->double('price');
            // $table->string('category',20);
            $table->string('gap')->nullable();
            $table->double('diameter');
            $table->string('size',20);
            $table->string('color',30);
            $table->string('comment',50)->nullable();
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
        Schema::dropIfExists('wheels');
    }
}
