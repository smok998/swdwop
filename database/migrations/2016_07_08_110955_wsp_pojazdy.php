<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WspPojazdy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wsp_pojazdy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wsp_id')->nullable()->default(null);
            $table->integer('pojazdy_id')->nullable()->default(null);
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
        Schema::drop('wsp_pojazdy');
    }
}
