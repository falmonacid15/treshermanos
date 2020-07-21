@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Editar Registro</h1>

        <div class="row">
            <div class="col-sm-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Información Básica</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('galleries.update', $gallery) }}" method="POST" enctype="multipart/form-data" id="form-update">
                            @method('PUT')
                            @csrf

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" placeholder="Ingrese un nombre" class="form-control" value="{{ $gallery->name }}">
                                <span class="form-error" id="error_name" style="display:none; width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e74a3b;"></span>
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea name="description" id="description" placeholder="Ingrese una descripción" class="form-control" rows="2">{{ $gallery->description }}</textarea>
                                <span class="form-error" id="error_description" style="display:none; width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e74a3b;"></span>
                            </div>

                            <div class="form-group">
                                <p>Destacado</p>
                                <div class="form-check">
                                    <input type="radio" name="outstanding" id="outstanding_0" class="form-check-input" value="0" {{ $gallery->outstanding == 0 ? 'checked' : '' }}>
                                    <label for="outstanding_0">No</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="outstanding" id="outstanding_1" class="form-check-input" value="1" {{ $gallery->outstanding == 1 ? 'checked' : '' }}>
                                    <label for="outstanding_1">Si</label>
                                </div>
                            </div>

                            @if ($gallery->type == 'Fotos')
                                <div class="form-group">
                                    <label for="images">Agregas Imágenes (Opcional)</label>
                                    <input type="file" name="images[]" id="images" class="form-control" multiple>
                                    <span class="form-error" id="error_images" style="display:none; width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e74a3b;"></span>
                                </div>
                            @elseif ($gallery->type == 'Videos')
                                <p>Agregas Videos (Opcional)</p>

                                <button id="add_video" type="button" class="btn btn-info btn-block" style="margin-bottom: 25px;">
                                    <span class="fa fa-plus"></span> Nuevo Video
                                </button>

                                <div id="video_items" style="margin-bottom:25px;"></div>
                            @endif

                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a href="{{ route('galleries.index') }}" class="btn btn-warning">Volver</a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Eliminar {{ $gallery->type }}</h6>
                    </div>
                    <div class="card-body">
                        @if(session()->has('success-delete-file'))
                            <div class="alert alert-success">
                                {{ session()->get('success-delete-file') }}
                            </div>
                        @endif
                        @if(session()->has('error-delete-file'))
                            <div class="alert alert-danger">
                                {{ session()->get('error-delete-file') }}
                            </div>
                        @endif

                        <table class="table table-bordered table-hover">
                            <tbody>
                            @if ($gallery->type == 'Fotos')
                                @foreach ($gallery->files as $image)
                                    <tr>
                                        <td style="width: 50%;">
                                            <img
                                                src="{{ asset($image->path) }}"
                                                alt="{{ $gallery->name }}"
                                                class="rounded"
                                                style="width: 250px; height: 150px;"
                                            >
                                        </td>
                                        <td align="center" style="width: 50%;">
                                            <a style="margin-top: 60px;" class="btn btn-sm btn-danger" href="{{ route('galleries.delete-file', $image->id) }}" onclick="return confirm('¿Eliminar?')"><i class="fa fa-trash"></i> Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @elseif ($gallery->type == 'Videos')
                                @foreach ($gallery->files as $video)
                                    <tr>
                                        <td style="width: 50%;">
                                            <div class="col-md-6">
                                                <iframe style="width: 320px; height: 200px;" src="{{ $video->getYoutubeEmbedUrl() }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            </div>
                                        </td>
                                        <td align="center" style="width: 50%;">
                                            <a style="margin-top: 80px;" class="btn btn-sm btn-danger" href="{{ route('galleries.delete-file', $video->id) }}" onclick="return confirm('¿Eliminar?')"><i class="fa fa-trash"></i> Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>

    <script>
        var video_count = 0;

        function cleanAndHideErrors() {
            $('#form-update').find('.form-error').html('');
            $('#form-update').find('.form-error').hide();
        }

        function showFormErrors(res) {
            $.each(res.responseJSON.errors, function (key, value) {
                var span = document.getElementById('error_' + key);
                span.innerHTML = '<strong>' + value + '</strong>';
                span.style.display = 'block';
            });
        }

        $(function () {
            $('#images').fileinput({
                fileActionSettings: {
                    showZoom: false
                },
                language: 'es',
                autoOrientImage: false,
                showUpload: false,
                showRemove: false,
                allowedFileExtensions: [
                    'jpg', 'jpeg', 'png'
                ]
            });

            $('#add_video').click(function () {
                $('#video_items').append('<div class="div-video row" style="margin-top: 10px;"><div class="col-lg-11"><input class="form-control" placeholder="Introduzca link de YouTube" name="videos[]" type="text"><span class="form-error" id="error_videos.'+video_count+'" style="display:none; width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e74a3b;"></span></div><div class="col-lg-1"><button type="button" class="btn btn-danger btn-block delete-video" title="Eliminar">X</button></div></div>');
                video_count++;
            });

            $('#video_items').on('click', '.delete-video', function () {
                $(this).closest('.div-video').remove();
                video_count--;
            });

            $('#form-update').submit(function (e) {
                e.preventDefault();
                cleanAndHideErrors();
                var formData = new FormData($(this)[0]);
                var url = $(this).attr('action');

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (res) {
                        cleanAndHideErrors();
                        window.location.replace('/admin/galleries?update-gallery');
                    },
                    error: function (res) {
                        showFormErrors(res);
                    }
                });
            });
        });
    </script>
@endsection
