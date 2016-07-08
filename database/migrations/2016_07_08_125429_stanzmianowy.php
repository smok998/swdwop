<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stanzmianowy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stanzmianowy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wsp_id')->nullable()->default(null);
            $table->string('stan,10');
            $table->dateTime('data_godzina');
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
        Schema::drop('stanzmianowy');
    }
}
