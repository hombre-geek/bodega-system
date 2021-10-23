@extends('theme.layouts.backend')
@section('titlePage','Listado de Usuarios')
@section('sectionTitle','Listado de Usuarios')
@section('btnHeading')
    <a href="{{ route('users.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-user-plus fa-sm text-white-50"></i>
         <span class="ml-1">Nuevo Usuario</span>        
    </a>    
    
@endsection

@section('content')
<h1>Listado Usuario</h1>
@endsection