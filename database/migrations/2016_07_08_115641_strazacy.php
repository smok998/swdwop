<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Strazacy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('strazacy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stanowisko_id')->nullable()->default(null);
            $table->integer('dwop_id')->nullable()->default(null);
            $table->integer('wsp_id')->nullable()->default(null);
            $table->integer('zdarzenia_id')->nullable()->default(null);
            $table->string('stopien,10');
            $table->char('imie,20');
            $table->char('nazwisko,30');
            $table->enum('zmiana', ['ZMIANA I','ZMIANA II','ZMIANA III','ZMIANA IV','DZIENNY']);
            $table->enum('rodzaj', ['pracownik','strażak','żołnierz']);
            $table->date('kurs_podstawowy');
            $table->date('kurs_uzupelniajacy');
            $table->date('kurs_jednoetapowy');
            $table->date('kurs_kpp');
            $table->date('egzamin_kpp');
            $table->date('waznosc_kpp');
            $table->date('waznosc_badan');
            $table->enum('szkoly_psp',['TAK','NIE']);
            $table->string('szkola_psp,255');
            $table->date('zakonczenie_szkoly_psp');
            $table->enum('potrzeba_jednoetapowy',['TAK','NIE']);
            $table->text('opis');
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
        Schema::drop('strazacy');
    }
}
