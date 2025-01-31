<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Home - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('layout.header')
        <!-- Page header with logo and tagline-->
      
        <!-- Page content-->
        <div class="container">
          
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                @yield('content')
                <!-- Side widgets-->
                <div class="col-lg-4">
                @section('sidebar')
                    @include('layout.sidebar')
                @show
                    </div>
              
            </div>

        </div>
       <!--Footer-->
       @include('layout.footer')
    </body>
</html>
