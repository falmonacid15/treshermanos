<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductType\StoreRequest;
use App\Http\Requests\ProductType\UpdateRequest;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductTypeController extends Controller
{
    public function datatable()
    {
        $productTypes=ProductType::all();

        return datatables()
            ->of($productTypes)
            ->addColumn('actions', function ($data){
                $show="<a href='".route('product-types.show', $data->id)."' class='btn btn-sm btn-info' title='Ver'><span class='fa fa-eye'></span></a>";
                $edit="<a href='".route('product-types.edit', $data->id)."' class='btn btn-sm btn-warning' title='Editar'><span class='fa fa-pen'></span></a>";
                $delete="<a href='#' class='btn btn-sm btn-danger btn-delete' data-route='".route('product-types.destroy', $data->id)."' title='Eliminar'><span class='fa fa-trash'></span></a>";

                return "{$show} {$edit} {$delete}";
            })
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function index()
    {
        return view('backend.sections.product-types.index');
    }


    public function create()
    {
        return view('backend.sections.product-types.create');
    }


    public function store(StoreRequest $request)
    {
        ProductType::create([
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name'), '-')
        ]);

        $request->session()->flash('status', '¡Registro creado exitosamente!');

        return redirect()->route('product-types.index');
    }


    public function show(ProductType $productType)
    {
        return view('backend.sections.product-types.show', compact('productType'));
    }


    public function edit(ProductType $productType)
    {
        return view('backend.sections.product-types.edit', compact('productType'));
    }


    public function update(ProductType $productType ,UpdateRequest $request)
    {
        $productType->update([
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name'), '-')
        ]);

        $request->session()->flash('status', '¡Registro actualizado exitosamente!');

        return redirect()->route('product-types.index');
    }


    public function destroy(ProductType $productType, Request $request)
    {
        $productType->delete();

        $request->session()->flash('status', '¡Registro eliminado exitosamente!');

        return redirect()->route('product-types.index');
    }
}
