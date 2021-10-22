<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bodega System - @yield('titlePage', 'Dasboard')</title>  
    <!-- Styles -->
    @include('theme.layouts._partials.css')
    @stack('css')

</head>
<body id="page-top">

    <div id="wrapper">
        @include('theme.layouts._partials.sideBar')

        
        <div id="content-wrapper" class="d-flex flex-column">

            
            <div id="content">

                @include('theme.layouts._partials.topBar')

                <div class="container-fluid">
                    @include('theme.layouts._partials.pageHeading')

                    @yield('content')

                </div>

            </div>

            @include('theme.layouts._partials.footer')


        </div>
        

    </div>
     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('theme.layouts._partials.logoutModal')

   @include('theme.layouts._partials.js')
   @stack('js')
   
</body>
</html>
