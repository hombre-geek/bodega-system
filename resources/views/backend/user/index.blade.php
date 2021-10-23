@extends('theme.layouts.backend')
@push('css')
{{-- <link href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
<link href="{{ asset('backend/css/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endpush
@section('titlePage','Listado de Usuarios')
@section('sectionTitle','Listado de Usuarios')
@section('btnHeading')
    <a href="{{ route('users.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-user-plus fa-sm text-white-50"></i>
         <span class="ml-1">Nuevo Usuario</span>        
    </a>    
    
@endsection

@section('content')


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    {{-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div> --}}
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo Electrónico</th>
                        <th>Fecha de Creación</th>
                        <th>Acciones</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>DNI</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo Electrónico</th>
                        <th>Fecha de Creación</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $users as $user )
                        <tr>
                            <td>{{ $user->dni }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>                            
                            <td>
                               
                                <a href="{{ route('users.edit', $user) }}" class="btn  text-success" data-toggle="tooltip" data-placement="top" title="{{ __('Edit') }}">
                                    <i class="fas fa-user-edit"></i>
                                </a>
                               
                                <form action="{{ route('users.destroy', $user)}}" method="post" style="display:inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ __('Delete') }}"
                                            class="btn text-danger"><i class="fas fa-user-times"></i></i>
                                    </button>
                                </form>

                                
                            </td>
                        
                        </tr>
                    @endforeach
                   
                    
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

@push('js')

<script src="{{ asset('backend/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/js/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
<script src="{{ asset('backend/js/datatables-demo.js') }}"></script>

@endpush