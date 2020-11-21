<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class UserOrganisation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'organisation_id',
        'organisation_owner',
        'default',
    ];

}
