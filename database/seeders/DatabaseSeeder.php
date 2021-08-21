<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
                [
                    'id' => 1,
                    'name' => 'Anish Shrestha',
                    'email' => 'anishshrestha71@gmail.com',
                    'password' => Hash::make('12345678'),
                    
                    'remember_token' => Str::random(10),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
                );
    }
}
