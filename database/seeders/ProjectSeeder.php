<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
            'organisation_id' => 1,
            'project_code_name' => 'project bloom',
            'project_official_name' => 'star bud',
            'project_version' => '0.0.1',
            'project_git_url' => '',
            'project_status' => 'development',
            'project_is_public' => 1,
        ]);
        $project = DB::table('projects')->insert([
            'organisation_id' => 1,
            'project_code_name' => 'project flower',
            'project_official_name' => 'project tracker',
            'project_version' => '0.0.1',
            'project_git_url' => '',
            'project_status' => 'development',
            'project_is_public' => 1,
        ]);

        /*['project_id' => $project->id, 
        'project_asset_name' => 'pt-logo',
        'project_asset_location' => '/storage/project/1',
        'project_asset_version' => '1.0', 
        'project_asset_type' => 'image',
        'project_asset_tags' => ['favicon', 'logo'],
        ]*/
    }
}
