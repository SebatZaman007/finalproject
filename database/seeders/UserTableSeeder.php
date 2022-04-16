<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'user',
            'email'=>'user@user.com',
            'user_type'=>0,
            'phone'=>'01731446881',
            'password'=>Hash::make(12345678),
            'address'=>'bangladesh'
        ]);

        User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'user_type'=>1,
            'phone'=>'01985562600',
            'password'=>Hash::make(12345678),
            'address'=>'bangladesh'
        ]);
    }
}
