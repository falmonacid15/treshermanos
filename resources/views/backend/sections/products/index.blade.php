@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Producto</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Listado de registros</h6>
                <a href="{{ route('products.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Agregar</a>
            </div>
            <div class="card-body">
                @include('backend.partials.status')
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="datatable">
                        <thead>
                        <tr>
                            <th>Imagén</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Destacado</th>
                            <th>Tipo</th>
                            <th></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <form id="form-delete" action="#" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
@endsection

@section('scripts')
    <script>
        const routeDatatable = '{{ route('products.datatable') }}';

        $(function () {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: routeDatatable,
                columns: [
                    {data: 'image_path', name: 'image_path', orderable: false, searchable: false},
                    {data: 'name', name: 'name', orderable: true, searchable: true},
                    {data: 'description', name: 'description', orderable: true, searchable: true},
                    {data: 'outstanding', name: 'outstanding', orderable: true, searchable: true},
                    {data: 'product_type.name', name: 'product_type.name', orderable: true, searchable: true},
                    {data: 'actions', orderable: false, searchable: false}
                ],
                language: {
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                }
            });

            $('#datatable').on('click', '.btn-delete', function () {
                var route = $(this).data('route');
                $('#form-delete').attr('action', route);

                if (confirm('¿Eliminar registro?')) {
                    $('#form-delete').submit();
                }
            });
        });
    </script>
@endsection
