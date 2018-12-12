<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @auth
        <meta name="api-token" content="{{ auth()->user()->api_token }}">
    @endauth

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
    <div id="app">
        <div class="wrap">
            <div class="header"> 
                <div class="logo">
                    <a href="{{ route('home') }}"> </a>
                </div>
                @include('shared/navbar')
            </div>
        </div>
        <div class="slider">
            <div class="wrap"> 
                <div class="slider-left">
                    <h1>Laravel Blog Demo</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <label>Join our mailling list!</label>
                    <form>
                        <input type="text" class="textbox" value="Email address.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address..';}"><input type="submit" value="Sign up" />
                    </form>
                </div>
                <div class="slider-right">
                    <img src="{{ asset('images/slider-img.png') }}" alt="" />
                </div>
                <div class="clear"> </div>
            </div>
        </div>

        <div class="container">
            @include('shared/alerts')

            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>

        @include('shared/footer')
    </div>

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
    @stack('inline-scripts')
</body>
</html>
