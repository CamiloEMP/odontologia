<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'first_name' => 'Camilo Esteban',
            'last_name' => 'Mora Paez',
            'email' => 'camilo.mora1707@gmail.com',
            'password' => 'camilo123',
            'document_type' => 'cc',
            'document_number' => '1025141565'
        ])->assignRole('Patient');

        User::create([
            'first_name' => 'Carlos',
            'last_name' => 'Perez',
            'email' => 'morapaezc@gmail.com',
            'password' => 'camilo123',
            'document_type' => 'cc',
            'document_number' => '53117225'
        ])->assignRole('Patient');

        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'document_type' => 'cc',
            'document_number' => '53117225'
        ])->assignRole('Admin');
    }
}
