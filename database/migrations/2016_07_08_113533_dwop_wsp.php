<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DwopWsp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dwop_wsp', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dwop_id')->nullable()->default(null);
            $table->integer('wsp_id')->nullable()->default(null);
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
        Schema::drop('dwop_wsp');
    }
}
