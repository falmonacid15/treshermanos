<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ProductType;
use Intervention\Image\Facades\Image as ImageIntervention;

class ProductController extends Controller
{
    public function datatable()
    {
        $products = Product::with('productType')->orderBy('id', 'DESC')->get();

        return datatables()
            ->of($products)
            ->addColumn('image_path', function ($data){
                return "<img src='".asset($data->image_path)."' class='rounded' width='90' alt='".$data->name."' >";
            })
            ->addColumn('outstanding', function ($data){
                $data->outstanding ? $span = "<span class='badge badge-success rounded'>Si</span>" : $span = "<span class='badge badge-danger rounded'>No</span>";

                return $span;
            })
            ->addColumn('actions', function ($data){
                $show="<a href='".route('products.show', $data->id)."' class='btn btn-sm btn-info' title='Ver'><span class='fa fa-eye'></span></a>";
                $edit="<a href='".route('products.edit', $data->id)."' class='btn btn-sm btn-warning' title='Editar'><span class='fa fa-pen'></span></a>";
                $delete="<a href='#' class='btn btn-sm btn-danger btn-delete' data-route='".route('products.destroy', $data->id)."' title='Eliminar'><span class='fa fa-trash'></span></a>";

                return "{$show} {$edit} {$delete}";
            })
            ->rawColumns(['actions', 'image_path', 'outstanding'])
            ->toJson();
    }
    public function index()
    {
        return view('backend.sections.products.index');
    }


    public function create()
    {
        $productTypes = ProductType::select('id', 'name')->get();
        return view('backend.sections.products.create', compact('productTypes'));
    }


    public function store(StoreRequest $request)
    {
        $image = $request->file('image_path');
        $thumbnailImage = ImageIntervention::make($image)->orientate();
        $thumbnailPath = public_path() . '/uploads/products/';
        $imageName = time() . $image->getClientOriginalName();
        $thumbnailImage->save($thumbnailPath.$imageName, 80);

        Product::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'image_path' => "uploads/products/{$imageName}",
            'slug' => Str::slug($request->get('name'), '-'),
            'outstanding' => $request->get('outstanding'),
            'product_type_id' => $request->get('product_type_id')
        ]);

        $request->session()->flash('status', '¡Registro creado exitosamente!');

        return redirect()->route('products.index');
    }


    public function show(Product $product)
    {
        return view('backend.sections.products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        $productTypes = ProductType::select('id', 'name')->get();
        return view('backend.sections.products.edit', compact('product', 'productTypes'));
    }


    public function update(UpdateRequest $request, Product $product)
    {
        if ($request->has('image_path')) {
            $image = $request->file('image_path');
            $thumbnailImage = ImageIntervention::make($image)->orientate();
            $thumbnailPath = public_path() . '/uploads/products/';
            $imageName = time() . $image->getClientOriginalName();
            $thumbnailImage->save($thumbnailPath.$imageName, 80);

            $product->update([
                'image_path' => "uploads/sliders/{$imageName}"
            ]);
        }

        $product->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'slug' => Str::slug($request->get('name'), '-'),
            'outstanding' => $request->get('outstanding'),
            'product_type_id' => $request->get('product_type_id')
        ]);

        $request->session()->flash('status', '¡Registro actualizado exitosamente!');

        return redirect()->route('products.index');
    }


    public function destroy(Product $product, Request $request)
    {
        $product->delete();

        $request->session()->flash('status', '¡Registro eliminado exitosamente!');

        return redirect()->route('products.index');
    }
}
