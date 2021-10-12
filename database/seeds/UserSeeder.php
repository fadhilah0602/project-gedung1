<?php

use App\GroupUser;
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     $admin = User::create([
    //         'name' => 'Kasubbag Umum',
    //         'email' => 'kasubbagumum@gmail.com',
    //         'password' =>bcrypt('12345678')
    //     ]);
    //     $admin->assignRole('admin');

    //     $user = $request->hasRole('role');
    //     if ($user->$request->hasRole('admin'))
    //     $group_user->$group_user = User::create([
    //         'name' => 'UKM Robotik',
    //         'email' => 'robotik@gmail.com',
    //         'password' =>bcrypt('56781234')
    //     ]);
    //     $group_user->assignRole('group_user');
    // }
}
