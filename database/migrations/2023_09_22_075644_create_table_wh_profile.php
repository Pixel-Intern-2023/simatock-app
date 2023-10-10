<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_wh_profile', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('warehouse_name');
            $table->timestamps();
        });
        Artisan::call('db:seed', [
            '--class' => 'WarehouseTableSeeder',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_wh_profile');
    }
};
