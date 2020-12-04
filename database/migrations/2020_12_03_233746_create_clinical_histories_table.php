<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinical_histories', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('terapia');
            $table->unsignedBigInteger('id_profesional');
            $table->unsignedBigInteger('id_paciente');
            $table->timestamps();

            $table->foreign('id_paciente')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('id_profesional')->references('id')->on('professionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinical_histories');
    }
}
