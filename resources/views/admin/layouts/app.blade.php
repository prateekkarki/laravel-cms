<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/circular-std/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/vector-map/jqvmap.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/jvectormap/jquery-jvectormap-2.0.2.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/daterangepicker/daterangepicker.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <title>{{ config('app.name', 'Admin Section') }}</title>

    <!-- Styles -->
    <!-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div class="dashboard-main-wrapper" id="app">
        @include('admin/shared/navbar')
        <div class="dashboard-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        @include('shared/alerts')

                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->

    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ asset('/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('/assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/charts/chartist-bundle/Chartistjs.js') }}"></script>
    <script src="{{ asset('/assets/vendor/charts/chartist-bundle/chartist-plugin-threshold.js') }}"></script>
    <!-- chart C3 js -->
    <script src="{{ asset('/assets/vendor/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
    <!-- chartjs js -->
    <script src="{{ asset('/assets/vendor/charts/charts-bundle/Chart.bundle.js') }}"></script>
    <script src="{{ asset('/assets/vendor/charts/charts-bundle/chartjs.js') }}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('/assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <!-- dashboard finance js -->
    <script src="{{ asset('/assets/libs/js/dashboard-finance.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('/assets/libs/js/main-js.js') }}"></script>
    <!-- gauge js -->
    <script src="{{ asset('/assets/vendor/gauge/gauge.min.js') }}"></script>
    <!-- daterangepicker js -->
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });
    </script>
</body>
</html>
