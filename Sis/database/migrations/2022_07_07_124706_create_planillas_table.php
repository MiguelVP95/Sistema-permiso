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
        Schema::create('planillas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('id_funcionario');
            $table->string('nombre');
            $table->string('dependencia');
            $table->string('sede');
            $table->string('cod_motivo');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->string('obs');
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
        Schema::dropIfExists('planillas');
    }
};
