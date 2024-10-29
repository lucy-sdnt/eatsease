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
        Schema::create('ventas', function (Blueprint $table) {
            $table->uuid('pk_venta')->primary();
            $table->uuid('fk_cliente');
            $table->uuid('fk_empleado');
            $table->decimal('total', 10, 2);
            $table->timestamps();
    
            $table->foreign('fk_cliente')->references('pk_cliente')->on('clientes')->onDelete('cascade');
            $table->foreign('fk_empleado')->references('pk_empleado')->on('empleados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
