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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->boolean("status_or");
            $table->date("date_ord");
            $table->unsignedBigInteger("table_id");
            $table->unsignedBigInteger("staff_id");
            $table->unsignedBigInteger("payment_id");
            $table->timestamps();
            $table->foreign("table_id")
            ->references("id")
            ->on("tables");
            $table->foreign("staff_id")
            ->references("id")
            ->on("staff");
            $table->foreign("payment_id")
            ->references("id")
            ->on("payment");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};