
<div class="card w-75 mx-auto mt-5">
    <div class="card-body">

        @if ($user->exists)
            <form method="POST"  action="{{ route('users.update', $user) }}" >
            @method('PUT')
        @else
            <form method="POST" action="{{ route('users.store') }}" >
        @endif
          @csrf

            <div class="row mb-4">
                <div class=" col-6">
                    <label for="dni" class="form-label @error('dni') text-danger @enderror requerido" >Documento Nacional de Identificación (DNI):</label>
                    <input type="text" 
                            class="form-control @error('dni') is-invalid @enderror" 
                            id="dni" 
                            name="dni"
                            value="{{ old('dni', $user->dni) }}">
                    @error('dni')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">

                <div class="mb-4 col-6">
                    <label for="name" class="form-label @error('name') text-danger @enderror requerido">Nombres:</label>
                    <input type="text" 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        name="name"
                        value="{{ old('name', $user->name) }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="mb-4 col-6">
                    <label for="las_tname" class="form-label @error('last_name') text-danger @enderror requerido">Apellidos:</label>
                    <input type="text" 
                        name="last_name" 
                        class="form-control @error('last_name') is-invalid @enderror" 
                        id="last_name"
                        value="{{ old('last_name', $user->last_name) }}">
                    @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="mb-4 col-12">
                    <label for="exampleInputEmail1" class="form-label @error('email') text-danger @enderror requerido">Correo Electrónico:</label>
                    <input type="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        id="exampleInputEmail1" 
                        name="email"
                        value="{{ old('email', $user->email) }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <button type="submit" class="btn btn-primary float-right ml-2">{{ __('Save') }}</button>
            <a href="{{ route('users.index') }}" class="btn btn-danger float-right ">{{ __('Cancel') }}</a>
      </form>

    </div>
</div>