<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Iwop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iwop', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('dwop_id')->nullable()->default(null);
            $table->char('nazwa,255');
            $table->string('adres,255');
            $table->string('tel_fax,15');
            $table->string('tel_sekretariat,15');
            $table->string('tel_szef,15');
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
        Schema::drop('iwop');
    }
}
