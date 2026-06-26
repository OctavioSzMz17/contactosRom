<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Hace nullable contrasena y correo en contacts
     * para permitir contactos sin autenticación.
     */
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('contrasena')->nullable()->change();
            $table->string('correo')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('contrasena')->nullable(false)->change();
            $table->string('correo')->nullable(false)->change();
        });
    }
};
