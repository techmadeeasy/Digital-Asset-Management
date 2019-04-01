<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string("country", 30)->nullable()->change();
            $table->integer("chargeback")->nullable()->change();
            $table->decimal("amount", 10, 2)->change();
            $table->decimal("percentage", 10, 2)->change();
            $table->decimal("payout", 10, 2)->change();
            $table->integer("contributor_id")->unsigned()->after("album_id");
            $table->integer("image_id")->after("imagename")->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}
