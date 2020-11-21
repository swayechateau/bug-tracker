<?php

namespace App\Models;
use App\Helper;
use Illuminate\Database\Eloquent\Model;
class Organisation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'demo_org',
        'organisation_logo',
        'organisation_name',
        'organisation_join_code',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($org) {
            $org->organisation_join_code = (string) Helper::RandOrgCode();
        });
    }

    public function projects()
    {
        return $this->hasMany(Projects::class);
    }  
}
