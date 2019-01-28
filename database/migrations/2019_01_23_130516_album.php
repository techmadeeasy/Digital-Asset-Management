<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Album extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album', function(Blueprint $table){

            $table->increments('id')->unique();
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->string('category');
            $table->string('featured')->nullable();
            $table->string('edition');
            $table->string('photographer')->nullable();
            $table->string('writer')->nullable();
            $table->string('location')->nullable();
            $table->string('homeowner')->nullable();
            $table->longText('selling_terms')->nullable();
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
        //
    }
}
