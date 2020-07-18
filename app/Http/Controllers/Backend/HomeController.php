<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Information;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliderQuantity = Slider::count();
        $productsQuantity = Product::count();
        $informationQuantity = Information::count();
        $galleryQuantity = Gallery::count();
        return view('backend.home', compact('sliderQuantity', 'productsQuantity', 'informationQuantity', 'galleryQuantity'));
    }

    public function profileView()
    {
        return view('backend.profile');
    }

    public function profileUpdate(Request $request, User $user)
    {
        $this->validate($request, [
            'name'=> 'required|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id.',id,deleted_at,NULL',
            'password' => 'nullable|min:6|confirmed'
        ]);

        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email')
        ]);

        if ($request->get('password')){
            $user->update([
                'password' => bcrypt($request->get('password'))
            ]);
        }

        $request->session()->flash('status', '¡Perfil actualizado con exito!');

        return redirect()->back();
    }
}
