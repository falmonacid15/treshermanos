<?php

namespace App\Http\Controllers\Backend;

use Intervention\Image\Facades\Image as ImageIntervention;
use App\Http\Requests\Gallery\UpdateRequest;
use App\Http\Requests\Gallery\StoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Gallery;
use App\Models\File;

class GalleryController extends Controller
{
    public function datatable()
    {
        $galleries = Gallery::orderBy('id', 'DESC')->get();

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

    public function store(StoreRequest $request)
    {
        $gallery = Gallery::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'type' => $request->get('type'),
            'slug' => Str::slug($request->get('name'), '-'),
            'outstanding' => $request->get('outstanding')
        ]);

        $type = $request->get('type');

        if ($type == 'Fotos') {
            $this->saveImages($request->file('images'), $gallery);
        } else if ($type == 'Videos') {
            $this->saveVideos($request->get('videos'), $gallery);
        }

        return response()->json([
            'message' => 'ok'
        ]);
    }

    public function show(Gallery $gallery)
    {
        return view('backend.sections.galleries.show', compact('gallery'));
    }

    public function edit(Gallery $gallery)
    {
        return view('backend.sections.galleries.edit', compact('gallery'));
    }

    public function update(UpdateRequest $request, Gallery $gallery)
    {
        $gallery->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'slug' => Str::slug($request->get('name'), '-'),
            'outstanding' => $request->get('outstanding')
        ]);

        if ($gallery->type == 'Fotos') {
            $this->saveImages($request->file('images'), $gallery);
        } else if ($gallery->type == 'Videos') {
            $this->saveVideos($request->get('videos'), $gallery);
        }

        return response()->json([
            'message' => 'ok'
        ]);
    }

    public function destroy(Gallery $gallery, Request $request)
    {
        $gallery->files()->delete();
        $gallery->delete();

        $request->session()->flash('status', '¡Registro eliminado exitosamente!');

        return redirect()->route('galleries.index');
    }

    public function deleteFile($id, Request $request)
    {
        $file = File::findOrFail($id);
        $gallery = Gallery::findOrFail($file->gallery_id);

        if ($gallery->files->count() == 1) {
            $request->session()->flash('error-delete-file', '¡Debe tener al menos 1 registro!');

            return redirect()->back();
        }

        $file->delete();

        $request->session()->flash('success-delete-file', '¡Registro eliminado exitosamente!');

        return redirect()->back();
    }

    private function saveImages($images, Gallery $gallery)
    {
        if ($images) {
            foreach ($images as $image) {
                $thumbnailImage = ImageIntervention::make($image)->orientate();
                $thumbnailPath = public_path() . '/uploads/galleries/';
                $imageName = time() . $image->getClientOriginalName();
                $thumbnailImage->save($thumbnailPath.$imageName, 80);

                File::create([
                    'path' => "uploads/galleries/{$imageName}",
                    'gallery_id' => $gallery->id
                ]);
            }
        }
    }

    private function saveVideos($videos, Gallery $gallery)
    {
        if ($videos) {
            foreach ($videos as $video) {
                File::create([
                    'path' => $video,
                    'gallery_id' => $gallery->id
                ]);
            }
        }
    }
}
