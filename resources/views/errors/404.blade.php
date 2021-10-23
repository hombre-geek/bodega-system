@extends('theme.layouts.frontend')
@section('titlePage', 'Iniciar Sesión')

@section('content')


<div class="container vh-100 bg-light d-flex align-items-center justify-content-center ">

    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">{{ __('Page Not Found') }}</p>
        <p class="text-gray-500 mb-0">{{ __('It looks like you found a glitch in the matrix...') }}</p>
        <a href="{{ route('dashboard') }}">{{ __('← Back to Dashboard') }}</a>
    </div>

</div>

{{-- <div class="card">
    <div class="card-body">
        <div class="container-fluid">

            <!-- 404 Error Text -->
            <div class="text-center">
                <div class="error mx-auto" data-text="404">  </br></div>
                <p class="lead text-gray-800 mb-5">Page Not Found</p>
                <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                <a href="index.html">&larr; Back to Dashboard</a>
            </div>

        </div>
    </div>
  </div> --}}




@endsection