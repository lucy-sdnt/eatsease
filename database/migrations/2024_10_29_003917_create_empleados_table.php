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
        Schema::create('empleados', function (Blueprint $table) {
            $table->uuid('pk_empleado')->primary();
            $table->uuid('fk_persona');
            $table->string('puesto');
            $table->decimal('salario', 10, 2);
            $table->date('fecha_contratacion');
            $table->timestamps();
    
            $table->foreign('fk_persona')->references('pk_persona')->on('personas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
