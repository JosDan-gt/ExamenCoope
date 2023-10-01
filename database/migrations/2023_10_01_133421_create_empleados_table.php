<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('id_emp');
            $table->integer('cod_empleado');
            $table->unsignedBigInteger('id_users');
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->bigInteger('dpi')->nullable();
            $table->string('sexo')->nullable();
            $table->string('direccion')->nullable();
            $table->date('fecha_nac')->nullable();
            $table->string('estado_civ')->nullable();
            $table->string('cargo');
            $table->timestamps();


            $table->foreign('id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
