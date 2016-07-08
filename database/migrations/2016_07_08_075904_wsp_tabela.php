<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WspTabela extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('"wsp"', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('dwop_id');
            $table->tinyInteger('kategoria_id');
            $table->tinyInteger('przeznaczenie_id');
            $table->tinyInteger('rodzaj_id');
            $table->mediumInteger('pojazdy_id');
            $table->mediumInteger('sprzet_id');
            $table->integer('zdarzenia_id');
            $table->mediumInteger('strazacy_id');
            $table->integer('stanzmianowy_id');
            $table->char('jednostka');
            $table->char('typ'); //z lity
            $table->char('ksrg'); //z lity TAK lub NIE
            $table->char('nazwa_skrot');
            $table->char('miejscowosc');
            $table->tinyInteger('etat_pracownicy');
            $table->tinyInteger('etat_strazacy');
            $table->tinyInteger('etat_zolnierze');
            $table->integer('tel_alarmowy');
            $table->integer('tel_sluzbowy');
            $table->integer('tel_komorka_komendant');
            $table->integer('tel_sluzbowy_komendant');
            $table->integer('tel_oficer_dyzurny_jednostki');
            $table->integer('tel_fax_dowodca');
            $table->integer('tel_dowodca');
            $table->char('komendant_wsp');
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
        Schema::drop('"wsp"');
    }
}
