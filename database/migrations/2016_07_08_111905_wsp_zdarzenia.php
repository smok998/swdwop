<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WspZdarzenia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wsp_zdarzenia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wsp_id')->nullable()->default(null);
            $table->integer('zdarzenia_id')->nullable()->default(null);
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
        Schema::drop('wsp_zdarzenia');
    }
}
