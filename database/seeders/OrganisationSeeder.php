<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('organisations')->insert(['organisation_name' => 'Demo Organisation', 'demo_org' => 1]);
        DB::table('user_organisations')->insert([
            'user_id' => 1,
            'organisation_id' => 1,
            'organisation_owner' => 1,
            'default' => 1,
        ]);
        DB::table('user_organisations')->insert([
            'user_id' => 2,
            'organisation_id' => 1,
            'organisation_owner' => 0,
            'default' => 1,
        ]);
    }
}
