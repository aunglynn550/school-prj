<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\User::create([
            'name' => 'aunglynn',
            'email' => 'aunglynn@gmail.com',
            'is_admin'=>1,
            'password' => Hash::make('12345678')
            ]);
            \App\Models\User::create([
                'name' => 'htet',
                'email' => 'htet@gmail.com',
                'is_admin'=>0,
                'password' => Hash::make('12345678')
                ]);
    }
}
