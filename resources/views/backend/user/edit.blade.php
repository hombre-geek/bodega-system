@extends('theme.layouts.backend')
@section('titlePage', 'Editar Usuario')
@section('sectionTitle', 'Modificar Usuario')
@section('btnHeading')
    <a href="{{ route('users.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i>
        <span class="ml-1">Regresar a la Lista</span>

    </a>
@endsection

@section('content')
    @include('backend.user.form', $user)
@endsection
