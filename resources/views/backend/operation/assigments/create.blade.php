@extends('theme.layouts.backend')
@push('css')
    <link href="{{ asset('backend/css/select2/select2.min.css') }}" rel="stylesheet">
@endpush
@section('titlePage', 'Asignación de Recursos')
@section('sectionTitle', 'Asignar Recurso')
@section('btnHeading')
    <a href="{{ route('assigments.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-arrow-left fa-sm text-white-50"></i>
        <span class="ml-1">Regresar a la Lista</span>      
    </a>        
@endsection
@section('content')


    <div class="card w-75 mx-auto mt-5">
        <div class="card-body">


            <form method="POST" action="{{ route('assigments.store') }}">

                @csrf
                <div class="row mb-5">

                    <div class=" col-6">
                        <label for="users"
                            class="form-label @error('user_id') text-danger @enderror requerido">
                            Usuario:
                        </label>

                        <select class="form-select form-control users-list" name="user_id"
                            aria-label="Default select example" id="users">

                            <option selected="true" disabled="disabled">Seleccione un Usuario</option>

                            @foreach ($users as $user)

                                @if (old('user_id') == $user->id)
                                    <option value="{{ old('user_id') }}" selected="true">
                                        {{ $user->name }} {{ $user->last_name }}
                                    </option>                                      
                                @else                                 
                                    <option value="{{ $user->id }}">{{ $user->name }} {{ $user->last_name }}</option>
                                
                                @endif
                            @endforeach

                            
                        </select>

                        @error('user_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>

                    <div class=" col-6">
                        <label for="resource"
                            class="form-label @error('resourcesArray') text-danger @enderror requerido">
                            Recurso(s) para asignar:
                        </label>

                        <select class="form-select form-control resources-list" name="resourcesArray[]" 
                                id="resource" multiple="multiple">

                                {{-- @if (old('user_id') == $user->id)
                                    <option value="{{ old('user_id') }}" selected="true">
                                        {{ $user->name }} {{ $user->last_name }}
                                    </option>                                      
                                @else                                 
                                    <option value="{{ $user->id }}">{{ $user->name }} {{ $user->last_name }}</option>
                                
                                @endif --}}


                            @foreach ($resources as $resource)
                                <option {{ collect( old( 'resourcesArray', $user->resources ) )->contains($resource->id) ? 
                                                    'selected' : '' }} 
                                    value="{{ $resource->id }}">
                                        {{ $resource->name }}
                                </option>

                            @endforeach

                            {{-- @foreach ($tags as $tag)
                            <option {{ collect(old('tags', $post->tags->pluck('id')) )->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">
                                    {{ $tag->name }}
                            </option>
                        @endforeach --}}
                            
                        </select>
                        @error('resourcesArray')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                </div>

                <div class="row mb-5">

                    <div class="col-12">
                        <label for="nota" class="form-label @error('note') text-danger @enderror">Nota:</label>
                        <textarea class="form-control" name="note" id="nota" rows="3">{{ old('note') }}</textarea>
                        @error('note')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                   
                </div>

                <button type="submit" class="btn btn-primary float-right ml-2">{{ __('Save') }}</button>
                <a href="{{ route('resources.index') }}" class="btn btn-danger float-right ">{{ __('Cancel') }}</a>
            </form>
        </div>
    </div>



@endsection

@push('js')

    <script src="{{ asset('backend/js/select2/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('.users-list').select2();
            
            $('.resources-list').select2({
                placeholder: "Selecione uno o varios recursos",
            });

        });
    </script>

@endpush
