<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Information;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::orderBy('id', 'DESC')->take(5)->get();
        $jsonSlider = $this->makeSliderJson($slider);
        $information = Information::orderBy('id', 'DESC')->first();
        $products = Product::orderBy('id', 'DESC')->where('outstanding', true)->take(7)->get();
        $galleryPhotos = Gallery::with('files')->orderBy('id', 'DESC')->where('outstanding', true)->where('type', 'Fotos')->take(4)->get();
        $galleryVideos = Gallery::with('files')->orderBy('id', 'DESC')->where('outstanding', true)->where('type', 'Videos')->take(3)->get();

        return view('frontend.home', compact('slider', 'jsonSlider', 'information', 'products', 'galleryPhotos', 'galleryVideos'));
    }

    private function makeSliderJson($slider)
    {
        $json = [];

        foreach ($slider as $item){
            $json[] = ['name' => $item->title, 'src' => $item->image_path];
        }

        return $json;
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }

    public function contactForm()
    {
        return view('frontend.contact');
    }

    public function contactSend(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // send mail

        // return json response
    }
}
