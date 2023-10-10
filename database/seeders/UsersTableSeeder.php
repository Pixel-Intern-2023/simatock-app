<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'tes',
            'username' => 'tes',
            'gender' => 'l',
            'address' => 'Jl. Ikan Paus',
            'email' => 'tes@email.com',
            'phone_number' => '0895410440214',
            'password' => bcrypt('12345678')
        ]);
    }
}
