<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename');
            $table->string('category')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('keywords')->nullable();
            $table->string('album')->nullable();
            $table->string('featured')->nullable();
            $table->string('edition')->nullable();
            $table->string('thumbnail', 500)->nullable();
            $table->string('s3')->nullable();
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
        Schema::dropIfExists('image');
    }
}
