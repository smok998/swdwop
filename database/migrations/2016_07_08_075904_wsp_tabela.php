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
        Schema::create('wsp', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('dwop_id');
            $table->Integer('kategoria_id');
            $table->Integer('przeznaczenie_id');
            $table->Integer('rodzaj_id');
            $table->Integer('pojazdy_id');
            $table->Integer('sprzet_id');
            $table->Integer('zdarzenia_id');
            $table->Integer('strazacy_id');
            $table->Integer('stanzmianowy_id');
            $table->char('jednostka,255');
            $table->enum('typ', ['DWOP','SSP','ZRG']);
            $table->enum('ksrg', ['TAK','NIE']);
            $table->char('nazwa_skrot,255');
            $table->char('miejscowosc,255');
            $table->tinyInteger('etat_pracownicy');
            $table->tinyInteger('etat_strazacy');
            $table->tinyInteger('etat_zolnierze');
            $table->string('tel_alarmowy,15');
            $table->string('tel_sluzbowy,15');
            $table->string('tel_komorka_komendant,15');
            $table->string('tel_sluzbowy_komendant,15');
            $table->string('tel_oficer_dyzurny_jednostki,15');
            $table->string('tel_fax_dowodca,15');
            $table->string('tel_dowodca,15');
            $table->string('komendant_wsp,100');
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
        Schema::drop('wsp');
    }
}
