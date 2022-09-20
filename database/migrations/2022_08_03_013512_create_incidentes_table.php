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
        Schema::create('incidentes', function (Blueprint $table) {
           
            $table->id();
            $table->time('hora');
            $table->date('fecha');

            $table->unsignedBigInteger('ambiente_id');
            $table->foreign('ambiente_id')->references('id')->on('ambientes');

            $table->text('descripcion');

            $table->unsignedBigInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->time('horaRespuesta')->nullable();
            $table->date('fechaRespuesta')->nullable();
            $table->time('horaProg')->nullable();
            $table->date('fechaProg')->nullable();
            $table->text('observacion')->nullable();
            
            $table->time('horaSolucion')->nullable();
            $table->date('fechaSolucion')->nullable();
            $table->text('solucionImplementada')->nullable();

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
        Schema::dropIfExists('incidentes');
    }
};