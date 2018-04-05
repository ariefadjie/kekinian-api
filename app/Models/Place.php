<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Place extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'location',
        'description',
        'img_profile',
        'img_cover',
    ];
}
