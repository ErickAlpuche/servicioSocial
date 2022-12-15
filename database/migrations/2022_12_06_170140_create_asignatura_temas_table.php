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
        Schema::create('asignatura_temas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->string('tema')->nullable();
            $table->longText('tema_previas')->nullable();
            $table->longText('tema_especificas')->nullable();

            $table->longText('subtemas')->nullable();
            $table->longText('especificas_desarrollar')->nullable();
            $table->longText('genericas_desarrollar')->nullable();
            $table->longText('aprendizaje')->nullable();
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
        Schema::dropIfExists('asignatura_temas');
    }
};
