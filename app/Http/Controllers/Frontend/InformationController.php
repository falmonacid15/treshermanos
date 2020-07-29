<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function all()
    {
        $information = Information::orderBy('id', 'DESC')->paginate(4);

        return view('frontend.sections.information.all', compact('information'));
    }

    public function show($slug)
    {
        $information = Information::where('slug', $slug)->first();

        return view('frontend.sections.information.show', compact('information'));
    }
}
