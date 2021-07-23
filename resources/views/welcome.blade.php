<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">



    <div class="container">
        <div class="row d-flex align-content-md-between"  style="vertical-align: center;padding-top: 300px">
            <div class="col-6 justify-content-end" >
                <a href="login/patience" class="btn btn-outline-primary">Login for patience</a>
            </div>
            <div class="col-6" >
                <a href="login/health_worker" class="btn btn-outline-primary">Login for Health workers</a>
            </div>

        </div>


    </div>

</div>
</body>
</html>
