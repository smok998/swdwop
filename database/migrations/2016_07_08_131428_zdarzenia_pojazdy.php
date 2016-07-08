<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ZdarzeniaPojazdy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zdarzenia_pojazdy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('zdarzenia_id')->nullable()->default(null);
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
        Schema::drop('zdarzenia_pojazdy');
    }
}
