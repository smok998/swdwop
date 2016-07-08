<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pojazdy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pojazdy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dwop_id')->nullable()->default(null);
            $table->integer('wsp_id')->nullable()->default(null);
            $table->integer('zdarzenia_id')->nullable()->default(null);
            $table->string('rejestracja,255');
            $table->string('marka,255');
            $table->string('typ,255');
            $table->enum('rodzaj', ['LEKKI','ŚREDNI','CIĘŻKI','LOTNISKOWY']);
            $table->string('norma,255');
            $table->integer('rokprodukcji');
            $table->integer('resus');
            $table->integer('rokwycofania');
            $table->enum('etat', ['LEKKI','ŚREDNI','CIĘŻKI','LOTNISKOWY',' ']);
            $table->enum('zbedny', ['LEKKI','ŚREDNI','CIĘŻKI','LOTNISKOWY',' ']);
            $table->enum('potrzeba', ['LEKKI','ŚREDNI','CIĘŻKI','LOTNISKOWY',' ']);
            $table->enum('obsada', ['1','2','3','4','5','6']);
            $table->enum('podwozie', ['MIEJSKIE','UTERENOWIONE','TERENOWE']);
            $table->enum('zestaw_rat_tech', ['TAK','NIE']);
            $table->enum('agregat_proszkowy', ['TAK','NIE']);
            $table->enum('agregat_pradotworczy', ['TAK','NIE']);
            $table->enum('agregat_sniegowy', ['TAK','NIE']);
            $table->enum('dzialko', ['TAK','NIE']);
            $table->enum('wciagarka', ['TAK','NIE']);
            $table->enum('gotowosc', ['TAK','NIE']);
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
        Schema::drop('pojazdy');
    }
}
