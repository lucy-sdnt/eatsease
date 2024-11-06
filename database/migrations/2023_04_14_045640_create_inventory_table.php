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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string("name_in");
            $table->integer("quantity_in");
            $table->date("expire_date");
            $table->decimal("unity_price");
            $table->unsignedBigInteger("supplier_id");
            $table->timestamps();
            $table->foreign("supplier_id")
            ->references("id")
            ->on("suppliers");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
