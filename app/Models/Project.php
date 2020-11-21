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
        'organisation_id',
        'project_code_name',
        'project_official_name',
        'project_version',
        'project_git_url',
        'project_status',
        'project_is_public',
    ];

    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

     
}
