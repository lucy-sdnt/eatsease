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
        Schema::create('productos_menu', function (Blueprint $table) {
            $table->uuid('pk_producto_menu')->primary();
            $table->uuid('fk_categoria_producto_menu');
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 8, 2);
            $table->timestamps();
    
            $table->foreign('fk_categoria_producto_menu')->references('pk_categoria_producto_menu')->on('categorias_productos_menu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_menus');
    }
};
