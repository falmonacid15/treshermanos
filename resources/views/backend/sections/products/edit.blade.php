@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Editar Registro</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Modificar Producto</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" placeholder="Ingrese un nombre" value="{{ old('name', $product->name) }}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" placeholder="Ingrese una descripción" class="form-control @error('description') is-invalid @enderror" rows="2" >{{ old('description', $product->description) }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="product_type_id">Tipo</label>
                        <select name="product_type_id" id="product_type_id" class="form-control @error('product_type_id') is-invalid @enderror">
                            <option value="">Seleccione</option>
                            @foreach($productTypes as $productType)
                                <option value="{{ $productType->id}}" {{ ($product->product_type_id == $productType->id) ? 'selected' : '' }}>{{ "{$productType->name}" }}</option>
                            @endforeach
                        </select>
                        @error('product_type_id')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Destacado</p>
                        <div class="form-check">
                            <input type="radio" name="outstanding" id="outstanding_0" class="form-check-input" value="0" {{ (! $product->outstanding) ? 'checked' : '' }}>
                            <label for="outstanding_0">No</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="outstanding" id="outstanding_1" class="form-check-input" value="1" {{ ($product->outstanding) ? 'checked' : '' }}>
                            <label for="outstanding_1">Si</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <p>Imagen Actual</p>
                                <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" class="rounded" width="100%">
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
                    <a href="{{ route('products.index') }}" class="btn btn-warning">Volver</a>
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


