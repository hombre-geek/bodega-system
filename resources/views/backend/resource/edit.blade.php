@extends('theme.layouts.backend')
@push('css')
    <link href="{{ asset('backend/css/select2/select2.min.css') }}" rel="stylesheet">
@endpush
@section('titlePage', 'Editar Recurso')
@section('sectionTitle', 'Modificar Recurso')
@section('btnHeading')
    <a href="{{ route('resources.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i>
        <span class="ml-1">Regresar a la Lista</span>

    </a>
@endsection

@section('content')
    @include('backend.resource.form', [$resource, $categories, $users])
@endsection

@push('js')

    <script src="{{ asset('backend/js/select2/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('.users-list').select2();
            
            $('.category-list').select2();

        });
    </script>

@endpush
