<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserStableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // db:seed buat masukin atribut dibawah ke database

        User::create([
            'name'=>'SIDAN',
            'email'=>'sidan@gmail.com',
            'password'=> Hash::make('12345kocak')
        ]);
    }
}
