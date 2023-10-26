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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 16);
            $table->string('adresse')->nullable();
            $table->text('desc_site');
            $table->string('email');
            $table->text('flotte_de_voitures_variee');
            $table->text('tarifs_competitifs');
            $table->text('facilite_de_reservation_en_ligne');
            $table->text('service_clientele_exceptionnel');
            $table->text('assurance_et_securite');
            $table->text('programme_de_fidelite');
            $table->text('appel_a_laction');
            $table->string('marque');
            $table->string('personnel');
            $table->string('partenaire');
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
        Schema::dropIfExists('contacts');
    }
};
