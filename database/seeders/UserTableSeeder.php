<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Lucas',
            'email' => 'teste@1.com',
            'password' => Hash::make('123')
        ]);

        User::create([
            'name' => 'Norman Vaughan',
            'email' => 'teste@2.com',
            'password' => Hash::make('123')
        ]);

        User::create([
            'name' => 'Confucius',
            'email' => 'teste@3.com',
            'password' => Hash::make('123')
        ]);

    }
}
