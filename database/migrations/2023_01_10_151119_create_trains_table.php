<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            // Azienda
            // Stazione di partenza
            // Stazione di arrivo
            // Orario di partenza
            // Orario di arrivo
            // Codice Treno
            // Numero Carrozze
            // In orario
            // Cancellato
            $table->enum('azienda', ['TrenItalia', 'Italo']);
            $table->string('tipo_treno', 20);
            $table->string('num_treno', 10);
            $table->string('staz_part', 50);
            $table->string('staz_arr', 50);
            $table->tinyInteger('num_cambi')->unsigned()->default(0);
            $table->tinyInteger('num_carrozze')->unsigned();
            $table->tinyInteger('in_orario')->default(1);
            $table->tinyInteger('cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
};
