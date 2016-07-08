<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WspStanzmianowy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wsp_stanzmianowy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wsp_id')->nullable()->default(null);
            $table->integer('stanzmianowy_id')->nullable()->default(null);
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
        Schema::drop('wsp_stanzmianowy');
    }
}
