<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'description', 'image_path', 'slug'
    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];
}
