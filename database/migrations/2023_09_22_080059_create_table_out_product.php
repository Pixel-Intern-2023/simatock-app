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
        Schema::create('tb_out_product', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('picker');
            // define uuid
            $table->uuid('products_id');
            $table->uuid('user_id');
            $table->integer('total');
            $table->integer('amount_out');
            $table->timestamps();
            // define foreign
            $table->foreign('products_id')->references('id')->on('tb_products');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_out_product');
    }
};
