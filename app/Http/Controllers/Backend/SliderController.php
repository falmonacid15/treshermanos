<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\StoreRequest;
use App\Http\Requests\Slider\UpdateRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as ImageIntervention;

class SliderController extends Controller
{
    public function datatable()
    {
        $sliders=Slider::all();

        return datatables()
            ->of($sliders)
            ->addColumn('image_path', function ($data){
                return "<img src='".asset($data->image_path)."' class='rounded' width='90' alt='".$data->title."' >";
            })
            ->addColumn('actions', function ($data){
                $show="<a href='".route('sliders.show', $data->id)."' class='btn btn-sm btn-info' title='Ver'><span class='fa fa-eye'></span></a>";
                $edit="<a href='".route('sliders.edit', $data->id)."' class='btn btn-sm btn-warning' title='Editar'><span class='fa fa-pen'></span></a>";
                $delete="<a href='#' class='btn btn-sm btn-danger btn-delete' data-route='".route('sliders.destroy', $data->id)."' title='Eliminar'><span class='fa fa-trash'></span></a>";

                return "{$show} {$edit} {$delete}";
            })
            ->rawColumns(['actions', 'image_path'])
            ->toJson();
    }

    public function index()
    {
        return view('backend.sections.sliders.index');
    }


    public function create()
    {
        return view('backend.sections.sliders.create');
    }


    public function store(StoreRequest $request)
    {
        $image = $request->file('image_path');
        $thumbnailImage = ImageIntervention::make($image)->orientate();
        $thumbnailPath = public_path() . '/uploads/sliders/';
        $imageName = time() . $image->getClientOriginalName();
        $thumbnailImage->save($thumbnailPath.$imageName, 80);

        Slider::create([
            'image_path' => "uploads/sliders/{$imageName}",
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);

        $request->session()->flash('status', '¡Registro creado exitosamente!');

        return redirect()->route('sliders.index');
    }


    public function show(Slider $slider)
    {
        return view('backend.sections.sliders.show', compact('slider'));
    }


    public function edit(Slider $slider)
    {
        return view('backend.sections.sliders.edit', compact('slider'));
    }


    public function update(UpdateRequest $request, Slider $slider)
    {
        if ($request->has('image_path')) {
            $image = $request->file('image_path');
            $thumbnailImage = ImageIntervention::make($image)->orientate();
            $thumbnailPath = public_path() . '/uploads/sliders/';
            $imageName = time() . $image->getClientOriginalName();
            $thumbnailImage->save($thumbnailPath.$imageName, 80);

            $slider->update([
                'image_path' => "uploads/sliders/{$imageName}"
            ]);
        }

        $slider->update([
            'title' => $request->get('title'),
            'description' => $request->get('description')
        ]);

        $request->session()->flash('status', '¡Registro actualizado exitosamente!');

        return redirect()->route('sliders.index');
    }


    public function destroy(Slider $slider, Request $request)
    {
        $slider->delete();

        $request->session()->flash('status', '¡Registro eliminado exitosamente!');

        return redirect()->route('sliders.index');
    }
}
