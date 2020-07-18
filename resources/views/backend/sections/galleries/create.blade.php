@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Nuevo Registro</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Crear Galeria</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Ingrese un nombre" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" placeholder="Ingrese una descripción" class="form-control @error('description') is-invalid @enderror" rows="2" >{{ old('description') }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Destacado</p>
                        <div class="form-check">
                            <input type="radio" name="outstanding" id="outstanding_0" class="form-check-input" value="0" checked>
                            <label for="outstanding_0">No</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="outstanding" id="outstanding_1" class="form-check-input" value="1">
                            <label for="outstanding_1">Si</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <p>Tipo</p>
                        <div class="form-check">
                            <input type="radio" name="type" id="type_photos" class="form-check-input" value="Fotos">
                            <label for="type_photos">Fotos</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="type" id="type_videos" class="form-check-input" value="Videos">
                            <label for="type_videos">Videos</label>
                        </div>
                    </div>
                    <div id="div_images" style="display: none;">
                        <div class="form-group">
                            <label for="images">Imagenes</label>
                            <input type="file" name="images[]" id="images" class="form-control" multiple>
                            @error('images')
                            <span style="width: 100%;margin-top: 0.25rem;font-size: 80%;color: #e74a3b;">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div id="div_videos" style="display: none;">
                        <button id="add_video" type="button" class="btn btn-info btn-block" style="margin-bottom: 25px;">
                            <span class="fa fa-plus"></span> Agregar Video
                        </button>

                        <div id="video_items" style="margin-bottom:25px;"></div>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('galleries.index') }}" class="btn btn-warning">Volver</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {
            $('input[name="type"]').change(function () {
                var type_value = $(this).val();

                if (type_value == 'Fotos'){
                    $('#div_images').show(500);
                    $('#div_videos').hide(500);
                } else if (type_value == 'Videos'){
                    $('#div_videos').show(500);
                    $('#div_images').hide(500);
                }
            });

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
                $('#video_items').append('<div class="div-video row" style="margin-top: 10px;"><div class="col-lg-11"><input class="form-control" placeholder="Introduzca link de YouTube" name="videos[]" type="text"></div><div class="col-lg-1"><button type="button" class="btn btn-danger delete-video" title="Eliminar">X</button></div></div>');
            });

            $('#video_items').on('click', '.delete-video', function () {
                $(this).closest('.div-video').remove();
            });
        });
    </script>
@endsection


