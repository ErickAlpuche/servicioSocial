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
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('clave');
            $table->string('nombre');
            $table->unsignedBigInteger('cambio')->nullable();
            $table->unsignedBigInteger('teoricas')->default(0);
            $table->unsignedBigInteger('practicas')->default(0);
            $table->string('programa_date')->nullable();
            $table->longText('caracterizacion')->nullable();
            $table->longText('didactia')->nullable();
            $table->longText('general')->nullable();
            $table->longText('previas')->nullable();
            $table->longText('detalle_evento')->nullable();

            $table->longText('laboratorio')->nullable();
            $table->longText('proyecto')->nullable();
            $table->longText('evaluacion_competencias')->nullable();
            $table->longText('fuentes')->nullable();

            $table->json('whole_object')->nullable();
            $table->json('whole_object_two')->nullable();
            $table->json('whole_object_three')->nullable();

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
        Schema::dropIfExists('asignaturas');
    }
};
