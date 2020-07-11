@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Vista Previa <span class="badge badge-primary">{{ $user->name }}</span></h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Información</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col" style="width: 20%;">Nombre</th>
                                <th scope="col" style="width: 80%;">{{ $user->name }}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="width: 20%;">Email</th>
                                <th scope="col" style="width: 80%;">{{ $user->email }}</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                <a href="{{ route('users.index') }}" class="btn btn-warning">Volver</a>
            </div>
        </div>
    </div>
@endsection
