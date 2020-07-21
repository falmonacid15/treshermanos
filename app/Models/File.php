<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'path', 'gallery_id'
    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    function getYoutubeEmbedUrl()
    {
        $urlParts = explode('/', $this->path);
        $videoId = explode('&', str_replace('watch?v=', '', end($urlParts)));

        return 'https://www.youtube.com/embed/' . $videoId[0];
    }
}
