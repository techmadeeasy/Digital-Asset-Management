<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributors', function (Blueprint $table) {
            $table->increments("contrib code");
            $table->string("name");
            $table->char("email");
            $table->integer("phone");
            $table->string("role");
            $table->string("title");
            $table->string("signed");
            $table->date("issued");
            $table->char("percentage");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contributors');
    }
}
