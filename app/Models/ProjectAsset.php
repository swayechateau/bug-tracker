<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Project extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'project_id', 'project_asset_name',
        'project_asset_version', 'project_asset_type',
        'project_asset_tags',
    ];

}
