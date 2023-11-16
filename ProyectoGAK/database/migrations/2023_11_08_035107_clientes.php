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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();// Integer-Unsigned-Increment
            $table->String('Nombre');//varchar
            $table->String('Apellido');//varchar
            $table->String('Direccion');//varchar
            $table->String('Correo');//varchar
            $table->String('Telefono');//varchar
            $table->timestamps();//created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
