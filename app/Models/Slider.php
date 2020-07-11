<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'image_path', 'title', 'description'
    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];
}
