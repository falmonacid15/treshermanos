<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\User;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;

class UserController extends Controller
{
    public function datatable()
    {
        $users = User::orderBy('id', 'DESC')->get();

        return datatables()
            ->of($users)
            ->addColumn('actions', function ($data){
                $show="<a href='".route('users.show', $data->id)."' class='btn btn-sm btn-info' title='Ver'><span class='fa fa-eye'></span></a>";
                $edit="<a href='".route('users.edit', $data->id)."' class='btn btn-sm btn-warning' title='Editar'><span class='fa fa-pen'></span></a>";
                $delete="<a href='#' class='btn btn-sm btn-danger btn-delete' data-route='".route('users.destroy', $data->id)."' title='Eliminar'><span class='fa fa-trash'></span></a>";

                return "{$show} {$edit} {$delete}";
            })
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function index()
    {
        return view('backend.sections.users.index');
    }


    public function create()
    {
        return view('backend.sections.users.create');
    }


    public function store(StoreRequest $request)
    {
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password'))
        ]);

        $request->session()->flash('status', '¡Registro creado exitosamente!');

        return redirect()->route('users.index');
    }


    public function show(User $user)
    {
        return view('backend.sections.users.show', compact('user'));
    }


    public function edit(User $user)
    {
        return view('backend.sections.users.edit', compact('user'));
    }


    public function update(UpdateRequest $request, User $user)
    {
        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password'))
        ]);

        $request->session()->flash('status', '¡Registro actualizado exitosamente!');

        return redirect()->route('users.index');
    }


    public function destroy(User $user, Request $request)
    {
        $user->delete();

        $request->session()->flash('status', '¡Registro eliminado exitosamente!');

        return redirect()->route('users.index');
    }
}
