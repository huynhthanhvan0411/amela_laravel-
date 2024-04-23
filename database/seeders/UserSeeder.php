<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => \Hash::make('12345678'),
                'role' => 1,
                'created_at'=> now(),

            ],
            [
                'name' => 'van',
                'email' => 'van@example.com',
                'password' => \Hash::make('12345678'),
                'role' => 2,
                'created_at'=> now(),
            ],
            [
                'name' => 'huy',
                'email' => 'huy@example.com',
                'password' => \Hash::make('12345678'),
                'role' => 2,
                'created_at'=> now(),
            ],
            [
                'name' => 'tuan',
                'email' => 'tuan@example.com',
                'password' => \Hash::make('12345678'),
                'role' => 2,
                'created_at'=> now(),
            ],
            [
                'name' => 'khoa',
                'email' => 'khoa@example.com',
                'password' => \Hash::make('12345678'),
                'role' => 2,
                'created_at'=> now(),
            ],
            [
                'name' => 'long',
                'email' => 'long@example.com',
                'password' => \Hash::make('12345678'),
                'role' => 2,
                'created_at'=> now(),
            ],
            [
                'name' => 'vu',
                'email' => 'vu@example.com',
                'password' => \Hash::make('12345678'),
                'role' => 2,
                'created_at'=> now(),
            ],
            [
                'name' => 'chau',
                'email' => 'chau@example.com',
                'password' => \Hash::make('12345678'),
                'role' => 2,
                'created_at'=> now(),
            ]
        ]);
    }
}