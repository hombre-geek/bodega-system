@if ($category->exists)
    <form method="POST"  action="{{ route('categories.update', $category) }}" >
        @method('PUT')
@else
    <form method="POST" action="{{ route('categories.store') }}" >
@endif

@csrf

<div class="card w-75 mx-auto mt-5">
    <div class="card-body">

      <form action="{{ route('categories.store') }}" method="POST">
          @csrf

         
            <div class="row">

                <div class="mb-4 col-6">
                    <label for="name" class="form-label @error('name') text-danger @enderror requerido">Nombre de la Categoría:</label>
                    <input type="text" 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        name="name"
                        value="{{ old('name', $category->name) }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="mb-4 col-6">
                    <label for="description" class="form-label @error('description') text-danger @enderror">Descripción:</label>
                    <input type="text" 
                        name="description" 
                        class="form-control @error('description') is-invalid @enderror" 
                        id="description"
                        value="{{ old('description', $category->description) }}">
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
           


            <button type="submit" class="btn btn-primary float-right ml-2">{{ __('Save') }}</button>
            <a href="{{ route('categories.index') }}" class="btn btn-danger float-right ">{{ __('Cancel') }}</a>
      </form>

    </div>
</div>