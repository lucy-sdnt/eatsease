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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity_it");
            $table->string("special_instructions");
            $table->unsignedBigInteger("order_id");
            $table->unsignedBigInteger("menu_id");
            $table->timestamps();
            $table->foreign("order_id")
            ->references("id")
            ->on("orders");
            $table->foreign("menu_id")
            ->references("id")
            ->on("menu");   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
