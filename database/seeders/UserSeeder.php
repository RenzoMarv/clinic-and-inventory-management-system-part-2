<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'firstName' => 'Juan',
            'LastName' => 'Dela cruz',
            'middleName' => 'natoy',
            'nameExt' => 'Jr.',
            'email' => 'juandelacruz@gmail.com',
            'password' =>  Hash::make('juan12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $user->assignRole('user');
    }
}
