<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Zdarzenia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zdarzenia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dwop_id')->nullable()->default(null);
            $table->integer('wsp_id')->nullable()->default(null);
            $table->integer('strazacy_id')->nullable()->default(null);
            $table->integer('pojazdy_id')->nullable()->default(null);
            $table->integer('sprzet_id')->nullable()->default(null);
            $table->date('data_wyjazdu');
            $table->date('data_powrotu');
            $table->time('godzina_wyjazdu');
            $table->time('godzina_powrotu');
            $table->enum('rodzaj', ['POŻ','INNE','ZAB','MZ']);
            $table->enum('teren', ['MON','CYW']);
            $table->enum('straty_wojsko', ['TAK','NIE']);
            $table->enum('straty_cywine', ['TAK','NIE']);
            $table->text('opis_straty_wojsko');
            $table->text('opis_straty_cywilne');
            $table->text('opis');
            $table->string('numer,20');
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
        Schema::drop('zdarzenia');
    }
}
