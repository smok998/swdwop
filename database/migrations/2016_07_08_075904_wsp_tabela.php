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
            $table->Integer('dwop_id')->nullable()->default(null);
            $table->Integer('kategoria_id')->nullable()->default(null);
            $table->Integer('przeznaczenie_id')->nullable()->default(null);
            $table->Integer('rodzaj_id')->nullable()->default(null);
            $table->Integer('pojazdy_id')->nullable()->default(null);
            $table->Integer('sprzet_id')->nullable()->default(null);
            $table->Integer('zdarzenia_id')->nullable()->default(null);
            $table->Integer('strazacy_id')->nullable()->default(null);
            $table->Integer('stanzmianowy_id')->nullable()->default(null);
            $table->string('jednostka');
            $table->enum('typ', ['DWOP','SSP','ZRG']);
            $table->enum('ksrg', ['TAK','NIE']);
            $table->string('nazwa_skrot');
            $table->string('miejscowosc');
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
