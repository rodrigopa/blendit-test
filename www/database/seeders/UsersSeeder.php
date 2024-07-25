<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Secretaria',
            'email' => 'secretaria@blendit.test',
            'password' => Hash::make('123'),
            'role' => 1,
        ]);
        
        User::create([
            'name' => 'Assistente',
            'email' => 'assistente@blendit.test',
            'password' => Hash::make('123'),
            'role' => 2,
        ]);
        
        User::create([
            'name' => 'Cadastro',
            'email' => 'cadastro@blendit.test',
            'password' => Hash::make('123'),
            'role' => 3,
        ]);
    }
}
