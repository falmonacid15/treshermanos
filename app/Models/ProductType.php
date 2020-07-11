<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'slug'
    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
