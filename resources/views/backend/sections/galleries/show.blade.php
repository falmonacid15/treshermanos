@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Vista Previa <span class="badge badge-primary">{{ $gallery->name }}</span></h1>

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
                                <th scope="col" style="width: 20%;">Fotos/Videos</th>
                                <th scope="col" style="width: 80%;">
                                    @if($gallery->type == 'Fotos')
                                        <div class="row">
                                            @foreach ($gallery->files as $image)
                                                <div class="col-md-4">
                                                    <img
                                                        src="{{ asset($image->path) }}"
                                                        alt="{{ $gallery->name }}"
                                                        class="rounded"
                                                        style="width: 400px; height: 230px; margin-bottom: 10px;"
                                                    >
                                                </div>
                                            @endforeach
                                        </div>
                                    @elseif ($gallery->type == 'Videos')
                                        <div class="row">
                                            @foreach ($gallery->files as $video)
                                                <div class="col-md-6">
                                                    <iframe style="width: 100%; height: 300px;" src="{{ $video->getYoutubeEmbedUrl() }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" style="width: 20%;">Nombre</th>
                                <th scope="col" style="width: 80%;">{{ $gallery->name }}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="width: 20%;">Descripción</th>
                                <th scope="col" style="width: 80%;">{{ $gallery->description }}</th>
                            </tr>
                            <tr>
                                <th scope="col" style="width: 20%;">Destacado</th>
                                <th scope="col" style="width: 80%;">
                                    @if($gallery->outstanding)
                                        <span class='badge badge-success rounded'>Si</span>
                                    @else
                                        <span class='badge badge-danger rounded'>No</span>
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" style="width: 20%;">Tipo</th>
                                <th scope="col" style="width: 80%;">
                                    @if($gallery->type == 'Fotos')
                                        <span class='badge badge-info rounded'><i class="fa fa-images"></i> Fotos</span>
                                    @elseif ($gallery->type == 'Videos')
                                        <span class='badge badge-info rounded'><i class="fa fa-video"></i> Videos</span>
                                    @endif
                                </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>

                <a href="{{ route('galleries.index') }}" class="btn btn-warning">Volver</a>
            </div>
        </div>
    </div>
@endsection
