@extends('theme.layouts.backend')
@push('css')
{{-- <link href="http://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
<link href="{{ asset('backend/css/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endpush
@section('titlePage','Recursos Asignados')
@section('sectionTitle','Listado de Recursos Asignados')
@section('btnHeading')
    <a href="{{ route('assigments.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
         <i class="fas fa-boxes fa-sm text-white-50"></i>
         <span class="ml-1">Nueva Asignación</span>        
    </a>        
@endsection

@section('content')


 <!-- DataTales Example -->
 <div class="card shadow mb-4">
    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Recurso</th>
                        <th>Fecha de Asignación</th>
                        <th>Acciones</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>                        
                        <th>Usuario</th>
                        <th>Recurso</th>
                        <th>Fecha de Asignación</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    
                    @foreach ( $userResources as $user )

                      @foreach ( $user->resources as $resource )
                        <tr>                            
                            
                            <td>{{ $user->name }} {{ $user->last_name }}</td>
                            <td>{{ $resource->name}}</td>    
                            <td>{{ $resource->asigned_at }}</td>                            
                            <td>                            
                                <a href="{{ route('resources.edit', [$resource, $user]) }}" class="btn  text-success" data-toggle="tooltip" data-placement="top" title="{{ __('Edit') }}">
                                    <i class="fas fa-edit"></i>
                                </a>                            
                                <form action="{{ route('resources.destroy', $resource)}}" method="post" style="display:inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ __('Delete') }}"
                                            class="btn text-danger"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>                                
                            </td>                    
                        </tr>
                      @endforeach
                       
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