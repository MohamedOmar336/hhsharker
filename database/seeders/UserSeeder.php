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
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate the table
        DB::table('users')->truncate();

        // Enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Seed the table
        User::create([
            'user_name' => 'super_admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345678'),
            'active' => 1,
            'first_name'=> 'super',
            'last_name'=> 'admin',
            'email_verified_at'=> null,
            'phone'=> '01111847065',
            'role_id'=> null,
            'image'=> null,
            'slug'=> 'super-admin',
            'gender'=>'male'
        ]);
    }
}
