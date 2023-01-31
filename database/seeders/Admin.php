<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin11111',
            'email' => 'admin11111@gmail.com',
            'img' => 'user.png',
            'status' => 1,
            'password' => Hash::make('admin11111'),
        ]);
        User::create([
            'name' => 'admin22222',
            'email' => 'admin22222@gmail.com',
            'img' => 'user.png',
            'status' => 1,
            'password' => Hash::make('admin22222'),
        ]);
        User::create([
            'name' => 'admin33333',
            'email' => 'admin33333@gmail.com',
            'img' => 'user.png',
            'status' => 1,
            'password' => Hash::make('admin33333'),
        ]);
        User::create([
            'name' => 'admin44444',
            'email' => 'admin44444@gmail.com',
            'img' => 'user.png',
            'status' => 1,
            'password' => Hash::make('admin44444'),
        ]);
        User::create([
            'name' => 'admin55555',
            'email' => 'admin55555@gmail.com',
            'img' => 'user.png',
            'status' => 1,
            'password' => Hash::make('admin55555'),
        ]);

        Teacher::create([
            'name' => 'teacher11111',
            'email' => 'teacher11111@gmail.com',
            'img' => 'user.png',
            'status' => 0,
            'password' => Hash::make('teacher11111'),
        ]);
        Teacher::create([
            'name' => 'teacher22222',
            'email' => 'teacher22222@gmail.com',
            'img' => 'user.png',
            'status' => 0,
            'password' => Hash::make('teacher22222'),
        ]);
        Teacher::create([
            'name' => 'teacher33333',
            'email' => 'teacher33333@gmail.com',
            'img' => 'user.png',
            'status' => 0,
            'password' => Hash::make('teacher33333'),
        ]);
        Teacher::create([
            'name' => 'teacher44444',
            'email' => 'teacher44444@gmail.com',
            'img' => 'user.png',
            'status' => 0,
            'password' => Hash::make('teacher44444'),
        ]);
        Teacher::create([
            'name' => 'teacher55555',
            'email' => 'teacher55555@gmail.com',
            'img' => 'user.png',
            'status' => 0,
            'password' => Hash::make('teacher55555'),
        ]);


        Client::create([
            'name' => 'client11111',
            'email' => 'client11111@gmail.com',
            'img' => 'user.png',
            'status' => 0,
            'password' => Hash::make('client11111'),
        ]);
        Client::create([
            'name' => 'client22222',
            'email' => 'client22222@gmail.com',
            'img' => 'user.png',
            'status' => 0,
            'password' => Hash::make('client22222'),
        ]);
        Client::create([
            'name' => 'client33333',
            'email' => 'client33333@gmail.com',
            'img' => 'user.png',
            'status' => 0,
            'password' => Hash::make('client33333'),
        ]);
        Client::create([
            'name' => 'client44444',
            'email' => 'client44444@gmail.com',
            'img' => 'user.png',
            'status' => 0,
            'password' => Hash::make('client44444'),
        ]);
        Client::create([
            'name' => 'client55555',
            'email' => 'client55555@gmail.com',
            'img' => 'user.png',
            'status' => 0,
            'password' => Hash::make('client55555'),
        ]);
    }
}
