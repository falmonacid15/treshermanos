<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::orderBy('id', 'DESC')->take(5)->get();

        $jsonSlider = [];
        foreach ($slider as $item){
            $jsonSlider[] = ['name' => $item->title, 'src' => $item->image_path];
        }


        return view('frontend.home', compact('slider', 'jsonSlider'));
    }
}
