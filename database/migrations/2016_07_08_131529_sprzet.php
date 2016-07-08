<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sprzet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprzet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dwop_id')->nullable()->default(null);
            $table->integer('wsp_id')->nullable()->default(null);
            $table->integer('zdarzenia_id')->nullable()->default(null);
            $table->string('nazwa,255');
            $table->enum('gotowosc', ['TAK','NIE']);
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
        Schema::drop('sprzet');
    }
}
