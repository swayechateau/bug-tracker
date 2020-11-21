<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //
        DB::table('users')->insert(['name' => 'Demo Admin', 'email' => 'admin@pt.test', 'password' => Hash::make('admin'), 'demo_user' => 1]);
        DB::table('users')->insert(['name' => 'Demo User', 'email' => 'user@pt.test','password' => Hash::make('demo'),'demo_user' => 1]);
    }
}
