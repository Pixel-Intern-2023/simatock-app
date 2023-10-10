<?php

namespace Database\Seeders;

use App\Models\Profile_wh;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile_wh::create([
            'warehouse_name' => 'New Warehouse'
        ]);
    }
}
