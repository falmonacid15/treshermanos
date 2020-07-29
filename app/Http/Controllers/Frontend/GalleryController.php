<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function all()
    {
        $galleries = Gallery::with('files')->orderBy('id', 'DESC')->paginate(4);

        return view('frontend.sections.galleries.all', compact('galleries'));
    }

    public function show($slug)
    {
        $gallery = Gallery::with('files')->where('slug', $slug)->first();

        return view('frontend.sections.galleries.show', compact('gallery'));
    }
}
