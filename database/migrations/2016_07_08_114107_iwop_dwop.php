<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IwopDwop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iwop_dwop', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iwop_id')->nullable()->default(null);
            $table->integer('dwop_id')->nullable()->default(null);
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
        Schema::drop('iwop_dwop');
    }
}
