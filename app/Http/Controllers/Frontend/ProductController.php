<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all()
    {
        $products = Product::with('productType')->orderBy('id', 'DESC')->paginate(4);

        return view('frontend.sections.products.all', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::with('productType')->where('slug', $slug)->first();

        return view('frontend.sections.products.show', compact('product'));
    }
}
