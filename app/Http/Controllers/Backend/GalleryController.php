<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function datatable()
    {
        $galleries = Gallery::all();

        return datatables()
            ->of($galleries)
            ->addColumn('outstanding', function ($data){
                $data->outstanding ? $span = "<span class='badge badge-success rounded'>Si</span>" : $span = "<span class='badge badge-danger rounded'>No</span>";

                return $span;
            })
            ->addColumn('actions', function ($data){
                $show="<a href='".route('galleries.show', $data->id)."' class='btn btn-sm btn-info' title='Ver'><span class='fa fa-eye'></span></a>";
                $edit="<a href='".route('galleries.edit', $data->id)."' class='btn btn-sm btn-warning' title='Editar'><span class='fa fa-pen'></span></a>";
                $delete="<a href='#' class='btn btn-sm btn-danger btn-delete' data-route='".route('galleries.destroy', $data->id)."' title='Eliminar'><span class='fa fa-trash'></span></a>";

                return "{$show} {$edit} {$delete}";
            })
            ->rawColumns(['actions', 'outstanding'])
            ->toJson();
    }

    public function index()
    {
        return view('backend.sections.galleries.index');
    }


    public function create()
    {
        return view('backend.sections.galleries.create');
    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function deleteFile($id)
    {

    }
}
