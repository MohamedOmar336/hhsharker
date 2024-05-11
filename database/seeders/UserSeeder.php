<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->truncate();
        User::create([
            'user_name' => 'mohammedomar',
            'email' => 'Momar@mail.com',
            'password' => Hash::make('12345678'),
            'active' => 1,
            'first_name'=> 'Mohammed' ,
            'last_name'=> 'omar' ,
            'email_verified_at'=> null ,
            'phone'=> '01111847065' ,
            'role_id'=> null,
            'image'=> null,
            'slug'=> 'mohammedomar',
        ]);
    }
}
