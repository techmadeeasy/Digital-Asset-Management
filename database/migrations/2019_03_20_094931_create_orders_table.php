<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(/**
         * @param Blueprint $table
         */
            'orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("image_number")->unsigned();
            $table->string("imagename", 100)->unique();
            $table->integer("album_id")->unsigned()->nullable();
            $table->string("country");
            $table->decimal("amount", 5,4);
            $table->decimal("percentage", 5, 5);
            $table->decimal("payout", 5,5);
            $table->integer("chargeback");
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
        Schema::dropIfExists('orders');
    }
}
