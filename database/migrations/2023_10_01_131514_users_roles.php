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
        Schema::create('users_roles', function(Blueprint $table){
            $table->id('id_user_role');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_rol');

            $table->foreign('id_users')->references('id_users')->on('usuarios');
            $table->foreign('id_rol')->references('id_rol')->on('rol_users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_roles');
    }
};
