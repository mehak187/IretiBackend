<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fname' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone'=>"03000000000",
            'username' => 'admin',
            'password' => Hash::make('12345678'),
            'city'=> 'Daska',
            'role' => '0',
            'country' => 'Pakistan',

        ]);
    }
}
