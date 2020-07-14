@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Editar Registro</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Modificar Slider</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" placeholder="Ingrese un título" value="{{ old('title', $slider->title) }}" class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" placeholder="Ingrese una descripción" class="form-control @error('description') is-invalid @enderror" rows="2" >{{ old('description', $slider->description) }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <p>Imagen Actual</p>
                                <img src="{{ asset($slider->image_path) }}" alt="{{ $slider->title }}" class="rounded" width="100%">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="image_path">Cambiar imagen (Opcional)</label>
                                <input type="file" name="image_path" id="image_path" class="form-control">
                                @error('image_path')
                                <span style="width: 100%;margin-top: 0.25rem;font-size: 80%;color: #e74a3b;">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('sliders.index') }}" class="btn btn-warning">Volver</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {
            $('#image_path').fileinput({
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
        });
    </script>

@endsection


