<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/admin/vendor/fonts/circular-std/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendor/vector-map/jqvmap.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendor/jvectormap/jquery-jvectormap-2.0.2.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/custom-admin.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <title>Admin Section</title>

    <!-- Styles -->
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
    <script src="{{ asset('/admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('/admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('/admin/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('/admin/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/charts/chartist-bundle/Chartistjs.js') }}"></script>
    <script src="{{ asset('/admin/vendor/charts/chartist-bundle/chartist-plugin-threshold.js') }}"></script>
    <!-- chart C3 js -->
    <script src="{{ asset('/admin/vendor/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ asset('/admin/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
    <!-- chartjs js -->
    <script src="{{ asset('/admin/vendor/charts/charts-bundle/Chart.bundle.js') }}"></script>
    <script src="{{ asset('/admin/vendor/charts/charts-bundle/chartjs.js') }}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('/admin/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <!-- dashboard finance js -->
    <script src="{{ asset('/admin/libs/js/dashboard-finance.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('/admin/libs/js/main-js.js') }}"></script>
    <!-- gauge js -->
    <script src="{{ asset('/admin/vendor/gauge/gauge.min.js') }}"></script>
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
