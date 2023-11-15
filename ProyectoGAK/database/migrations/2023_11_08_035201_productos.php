<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->text('descripcion');
            $table->float('precio');
            $table->integer('stock');
            $table->timestamps(); // Si se desea incluir las marcas de tiempo (created_at, updated_at)
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};