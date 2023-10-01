<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_prod');
            $table->unsignedBigInteger('id_cli');
            $table->unsignedBigInteger('id_categ');
            $table->string('descripcion');
            $table->timestamps();


            $table->foreign('id_categ')->references('id_categ')->on('categoria_prod');
            $table->foreign('id_cli')->references('id_cli')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
