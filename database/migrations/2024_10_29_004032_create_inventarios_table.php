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
        Schema::create('inventario', function (Blueprint $table) {
            $table->uuid('pk_inventario')->primary();
            $table->uuid('fk_categoria_inventario');
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->integer('cantidad');
            $table->string('unidad_medida');
            $table->timestamps();
    
            $table->foreign('fk_categoria_inventario')->references('pk_categoria_inventario')->on('categorias_inventario')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
