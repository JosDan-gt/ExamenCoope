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
        Schema::create('asociados', function (Blueprint $table) {
            $table->id('id_asociado');
            $table->unsignedBigInteger('id_cliente'); // Referencia al cliente
            $table->unsignedBigInteger('id_users')->nullable();
            $table->date('fecha_contacto')->nullable();
            $table->string('acuerdo')->nullable();
            $table->timestamps();

            $table->foreign('id_cliente')->references('id_cli')->on('clientes');
            $table->foreign('id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
