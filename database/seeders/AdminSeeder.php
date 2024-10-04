<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'firstName' => 'admin',
            'LastName' => 'admin',
            'middleName' => 'admin',
            'nameExt' => 'admin',
            'email' => 'admin@gmail.com',
            'password' =>  Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $user->assignRole('admin');
    }
}