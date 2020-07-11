<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'type', 'slug', 'outstanding'
    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }
}
