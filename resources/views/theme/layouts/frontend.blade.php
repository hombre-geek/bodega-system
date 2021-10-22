<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bodega System - @yield('titlePage', 'Dasboard')</title>  


    @include('theme.layouts._partials.css')
    
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                @yield('content')
            </div>
        </div>
        
            
    </div>

   @include('theme.layouts._partials.js')
</body>

</html>