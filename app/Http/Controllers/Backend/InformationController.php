<?php

namespace App\Http\Controllers\Backend;

use Intervention\Image\Facades\Image as ImageIntervention;
use App\Http\Requests\Information\UpdateRequest;
use App\Http\Requests\Information\StoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
use Illuminate\Support\Str;

class InformationController extends Controller
{
    public function datatable()
    {
        $information = Information::orderBy('id', 'DESC')->get();

        return datatables()
            ->of($information)
            ->addColumn('image_path', function ($data){
                return "<img src='".asset($data->image_path)."' class='rounded' width='90' alt='".$data->title."' >";
            })
            ->addColumn('actions', function ($data){
                $show="<a href='".route('information.show', $data->id)."' class='btn btn-sm btn-info' title='Ver'><span class='fa fa-eye'></span></a>";
                $edit="<a href='".route('information.edit', $data->id)."' class='btn btn-sm btn-warning' title='Editar'><span class='fa fa-pen'></span></a>";
                $delete="<a href='#' class='btn btn-sm btn-danger btn-delete' data-route='".route('information.destroy', $data->id)."' title='Eliminar'><span class='fa fa-trash'></span></a>";

                return "{$show} {$edit} {$delete}";
            })
            ->rawColumns(['actions', 'image_path'])
            ->toJson();
    }

    public function index()
    {
        return view('backend.sections.information.index');
    }

    public function create()
    {
        return view('backend.sections.information.create');
    }

    public function store(StoreRequest $request)
    {
        $image = $request->file('image_path');
        $thumbnailImage = ImageIntervention::make($image)->orientate();
        $thumbnailPath = public_path() . '/uploads/information/';
        $imageName = time() . $image->getClientOriginalName();
        $thumbnailImage->save($thumbnailPath.$imageName, 80);

        Information::create([
            'image_path' => "uploads/information/{$imageName}",
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'slug' => Str::slug($request->get('title'), '-')
        ]);

        $request->session()->flash('status', '¡Registro creado exitosamente!');

        return redirect()->route('information.index');
    }

    public function show(Information $information)
    {
        return view('backend.sections.information.show', compact('information'));
    }

    public function edit(Information $information)
    {
        return view('backend.sections.information.edit', compact('information'));
    }

    public function update(UpdateRequest $request, Information $information)
    {
        if ($request->has('image_path')) {
            $image = $request->file('image_path');
            $thumbnailImage = ImageIntervention::make($image)->orientate();
            $thumbnailPath = public_path() . '/uploads/information/';
            $imageName = time() . $image->getClientOriginalName();
            $thumbnailImage->save($thumbnailPath.$imageName, 80);

            $information->update([
                'image_path' => "uploads/information/{$imageName}"
            ]);
        }

        $information->update([
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'slug' => Str::slug($request->get('title'), '-')
        ]);

        $request->session()->flash('status', '¡Registro actualizado exitosamente!');

        return redirect()->route('information.index');
    }

    public function destroy(Information $information, Request $request)
    {
        $information->delete();

        $request->session()->flash('status', '¡Registro eliminado exitosamente!');

        return redirect()->route('information.index');
    }
}
