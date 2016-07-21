<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dwop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dwop', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('iwop_id')->nullable()->default(null);
            $table->Integer('wsp_id')->nullable()->default(null);
            $table->string('nazwa');
            $table->string('adres');
            $table->string('tel_fax,15');
            $table->string('tel_sekretariat,15');
            $table->string('tel_szef,15');
            $table->string('tel_spec,15');
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
        Schema::drop('dwop');
    }
}
