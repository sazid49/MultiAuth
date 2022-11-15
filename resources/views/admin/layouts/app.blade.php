<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" >
        <!--Page title-->
        <title>Admin easy Learning</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!--font awesome-->
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
        <!-- metis menu -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css') }}">
        <!-- chart -->
   
        <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
        <!--Custom CSS-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body id="page-top">
        <!-- preloader -->
        <div class="preloader">
            <img src="{{ asset('assets/images/preloader.gif') }}" alt="">
        </div>
        <!-- wrapper -->
        <div class="wrapper">
            @include('admin.includes.header')
            
            <!-- sidebar area -->
            @include('admin.includes.sidebar')
            <!-- /sidebar Area-->

<div class="content_wrapper">
    <!--middle content wrapper-->
     @yield('content')
    <!--/middle content wrapper-->
</div>
<!--/ content wrapper -->

        </div><!--/ wrapper -->
        <!-- jquery -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <!-- popper Min Js -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap Min Js -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <!-- Fontawesome-->
        <script src="{{ asset('assets/js/all.min.js') }}"></script>
        <!-- metis menu -->
        <script src="{{ asset('assets/plugins/metismenu-3.0.4/assets/js/metismenu.js') }}"></script>
        <script src="{{ asset('assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js') }}"></script>
        <!-- nice scroll bar -->
        <script src="{{ asset('assets/plugins/scrollbar/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/scrollbar/scroll.active.js') }}"></script>
        <!-- counter -->
        <script src="{{ asset('assets/plugins/counter/js/counter.js') }}"></script>
        <!-- chart -->
       <script src="{{ asset('assets/plugins/chartjs-bar-chart/Chart.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/chartjs-bar-chart/chart.js') }}"></script>
        <!-- pie chart -->
        <script src="{{ asset('assets/plugins/pie_chart/chart.loader.js') }}"></script>
        <script src="{{ asset('assets/plugins/pie_chart/pie.active.js') }}"></script>
        <!-- Main js -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @if (Session::has('success'))
            <script>
                toastr.success("{!! Session::get('success') !!}");
            </script>
        @endif
    </body>
</html>