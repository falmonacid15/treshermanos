@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Nuevo Registro</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Crear Galeria</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data" id="form-store">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Ingrese un nombre" class="form-control">
                        <span class="form-error" id="error_name" style="display:none; width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e74a3b;"></span>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" placeholder="Ingrese una descripción" class="form-control" rows="2" ></textarea>
                        <span class="form-error" id="error_description" style="display:none; width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e74a3b;"></span>
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
                        <span class="form-error" id="error_type" style="display:none; width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e74a3b;"></span>
                    </div>
                    <div id="div_images" style="display: none;">
                        <div class="form-group">
                            <label for="images">Imagenes</label>
                            <input type="file" name="images[]" id="images" class="form-control" multiple>
                            <span class="form-error" id="error_images" style="display:none; width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e74a3b;"></span>
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>

    <script>
        var video_count = 0;

        function cleanAndHideErrors() {
            $('#form-store').find('.form-error').html('');
            $('#form-store').find('.form-error').hide();
        }

        function showFormErrors(res) {
            $.each(res.responseJSON.errors, function (key, value) {
                var span = document.getElementById('error_' + key);
                span.innerHTML = '<strong>' + value + '</strong>';
                span.style.display = 'block';
            });
        }

        $(function () {
            $('input[name="type"]').change(function () {
                var type_value = $(this).val();

                if (type_value == 'Fotos'){
                    $('#div_images').show(500);
                    $('#div_videos').hide(500);
                    $('#video_items').html('');
                } else if (type_value == 'Videos'){
                    $('#div_videos').show(500);
                    $('#div_images').hide(500);
                    $('#error_images').html('');
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
                $('#video_items').append('<div class="div-video row" style="margin-top: 10px;"><div class="col-lg-11"><input class="form-control" placeholder="Introduzca link de YouTube" name="videos[]" type="text"><span class="form-error" id="error_videos.'+video_count+'" style="display:none; width: 100%; margin-top: 0.25rem; font-size: 80%; color: #e74a3b;"></span></div><div class="col-lg-1"><button type="button" class="btn btn-danger btn-block delete-video" title="Eliminar">X</button></div></div>');
                video_count++;
            });

            $('#video_items').on('click', '.delete-video', function () {
                $(this).closest('.div-video').remove();
                video_count--;
            });

            $('#form-store').submit(function (e) {
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
                        window.location.replace('/admin/galleries?store-gallery');
                    },
                    error: function (res) {
                        showFormErrors(res);
                    }
                });
            });
        });
    </script>
@endsection


