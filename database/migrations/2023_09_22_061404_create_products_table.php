<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('products_name');
            $table->integer('quantity');
            // define uuid
            $table->uuid('category_id');
            $table->uuid('unit_id');
            $table->uuid('suplier_id');
            $table->integer('purch_price');
            $table->integer('cust_price');
            $table->date('receiving_date');
            $table->timestamps();
            // define foreign
            $table->foreign('category_id')->references('id')->on('tb_category');
            $table->foreign('unit_id')->references('id')->on('tb_unit');
            $table->foreign('suplier_id')->references('id')->on('tb_suplier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_products');
    }
};
