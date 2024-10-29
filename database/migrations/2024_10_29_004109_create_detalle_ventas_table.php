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
        Schema::create('detalles_venta', function (Blueprint $table) {
            $table->uuid('pk_detalle_venta')->primary();
            $table->uuid('fk_venta');
            $table->uuid('fk_producto_menu');
            $table->integer('cantidad');
            $table->decimal('precio', 10, 2);
            $table->timestamps();
    
            $table->foreign('fk_venta')->references('pk_venta')->on('ventas')->onDelete('cascade');
            $table->foreign('fk_producto_menu')->references('pk_producto_menu')->on('productos_menu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_ventas');
    }
};
