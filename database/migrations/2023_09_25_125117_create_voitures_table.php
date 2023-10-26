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
        Schema::create('voitures', function (Blueprint $table) {
            $table->bigIncrements('idv');
            $table->string('marque',50);
            $table->string('model', 100);
            $table->string('plaque_immatriculation');
            $table->string('aménagement');
            $table->integer('nombre_de_place');
            $table->integer('prix_location_journalier');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->text('image');
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
        Schema::dropIfExists('voitures');
    }
};
