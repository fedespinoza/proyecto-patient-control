<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('nacimiento')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('escuela')->nullable();
            $table->integer('dni')->nullable();
            $table->integer('afiliado')->nullable();
            $table->string('diagnostico')->nullable();
            $table->string('foto')->nullable();
            // $table->unsignedBigInteger('id_obra');
            $table->timestamps();

            // $table->foreign('id_obra')->references('id')->on('work_socials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
