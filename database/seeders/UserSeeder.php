<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    
    public function run(): void
    {
        
        DB::table('users')->insert([
            // 'name' => Str::random(10),
            // 'email' => Str::random(10).'@example.com',
            // 'password' => Hash::make('password'),
            // 'name' => 'Admin',
            // 'email' => 'admin@admin.com',
            // 'password' => Hash::make('123456'),

            [
                'name' => 'Admin',
                'email' => 'info@juststart.co.in',
                'password' => Hash::make('Juststart@123#'),
            ],
            [
                'name' => 'Admin',
                'email' => 'info@trygon.in',
                'password' => Hash::make('Trygon@123'),
            ],
        ]);
        

        // \App\Models\User::factory(5)->create();

    }
}
