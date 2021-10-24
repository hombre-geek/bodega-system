@extends('theme.layouts.backend')
@section('titlePage', 'Crear Nuevo Recurso')
@section('sectionTitle', 'Creación de Recurso')
@section('btnHeading')
    <a href="{{ route('resources.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i>
        <span class="ml-1">Regresar a la Lista</span>

    </a>
@endsection

@section('content')
    @include('backend.resource.form',[ $resource, $categories])
@endsection
