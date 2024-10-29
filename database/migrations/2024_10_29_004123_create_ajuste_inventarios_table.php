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
        Schema::create('ajustes_inventario', function (Blueprint $table) {
            $table->uuid('pk_ajuste_inventario')->primary();
            $table->uuid('fk_inventario');
            $table->integer('cantidad_ajustada');
            $table->enum('motivo', ['compra', 'venta', 'devolución', 'ajuste']);
            $table->uuid('fk_empleado');
            $table->timestamps();
    
            $table->foreign('fk_inventario')->references('pk_inventario')->on('inventario')->onDelete('cascade');
            $table->foreign('fk_empleado')->references('pk_empleado')->on('empleados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajuste_inventarios');
    }
};
