<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategoria', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('kategoria', ['I','II','III','I LOT','II LOT','III LOT','I POL','II POL','III POL','INNE']);
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
        Schema::drop('kategoria');
    }
}
