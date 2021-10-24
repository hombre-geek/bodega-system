
<div class="card w-75 mx-auto mt-5">
    <div class="card-body">

        @if ($resource->exists)
            <form method="POST"  action="{{ route('resources.update', $resource) }}" >
                @method('PUT')
        @else
            <form method="POST" action="{{ route('resources.store') }}" >
        @endif
            @csrf
            <div class="row mb-4">
                <div class=" col-6">
                    <label for="category" class="form-label @error('category_id') text-danger @enderror requerido">Categoría:</label>

                    <select class="form-select form-control" name="category_id" aria-label="Default select example" id="category">
                                        
                        @if(isset($resource->id))
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" 
                                        {{ ($resource->category_id == $category->id) ? ('selected="true"') : '' }}">
                                        {{ $category->name }}
                                </option>                                      
                            @endforeach
                            
                        @else 
                                <option selected="true" disabled="disabled">Seleccionar una categoría</option>
                                {{-- @dd($categories) --}}
                                @foreach ($categories as $category)
                                    
                                    @if (old('category_id') == $category->id)
                                        <option value="{{ old('category_id') }}" selected="true">
                                            {{ $category->name }}
                                        </option>                                      
                                    @else                                 
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                       
                                    @endif

                                @endforeach

                        @endif
                    </select>                   


                    @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    
                </div>
            </div>

            <div class="row">
                <div class="mb-4 col-6">
                    <label for="code" class="form-label @error('code') text-danger @enderror requerido">Código:</label>
                    <input type="text" 
                        class="form-control @error('code') is-invalid @enderror" 
                        id="code" 
                        name="code"
                        value="{{ old('code', $resource->code) }}">
                    @error('code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="mb-4 col-6">
                    <label for="name" class="form-label @error('name') text-danger @enderror requerido">Nombre:</label>
                    <input type="text" 
                        name="name" 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name"
                        value="{{ old('name', $resource->name) }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="row">
                <div class="mb-4 col-6">
                    <label for="brand" class="form-label @error('brand') text-danger @enderror requerido">Marca:</label>
                    <input type="text" 
                        class="form-control @error('brand') is-invalid @enderror" 
                        id="brand" 
                        name="brand"
                        value="{{ old('brand', $resource->brand) }}">
                    @error('brand')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="mb-4 col-6">
                    <label for="serie" class="form-label @error('serie') text-danger @enderror requerido">Serie:</label>
                    <input type="text" 
                        name="serie" 
                        class="form-control @error('serie') is-invalid @enderror" 
                        id="serie"
                        value="{{ old('serie', $resource->serie) }}">
                    @error('serie')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
           


            <button type="submit" class="btn btn-primary float-right ml-2">{{ __('Save') }}</button>
            <a href="{{ route('resources.index') }}" class="btn btn-danger float-right ">{{ __('Cancel') }}</a>
        </form>
    </div>
</div>

