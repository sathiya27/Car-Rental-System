<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'sathiya',
            'email' => 'sathiyaseelan_16@yahoo.com',
            'userType' => 'user',
            'password' => Hash::make('test123')
        ]);

        User::create([
            'name' => 'admin1',
            'email' => 'admin@the-afc.com',
            'userType' => 'admin',
            'password' => Hash::make('test123')
        ]);
    }
}
