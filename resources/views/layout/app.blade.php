<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
{{--    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('semantic-UI/semantic.min.css') }}" rel="stylesheet">
    <style type="text/css">
        @yield('stylesheet')
    </style>
</head>
<body>
    <div class="ui container">
        <div class="ui inverted segment">
            <div class="ui labeled icon inverted secondary pointing pointing menu">
                <a class="{{$page=='controllers'?'active':''}} item" href="{{url('/controllers')}}">
                    <i class="gamepad icon"></i>
                    Controllers
                </a>
                <a class="{{$page=='sensors'?'active':''}} item" href="{{url('/sensors')}}">
                    Sensor
                </a>
                <a class="{{$page=='actuators'?'active':''}} item" href="{{url('/actuators')}}">
                   Actuators
                </a>
                <a class="item left">
                    Settings
                </a>
            </div>
        </div>
        @yield('content')
    </div>

    <script src="{{ asset('js/jquery-3.4.0.min.js') }}"></script>
    <script src="{{ asset('semantic-UI/semantic.min.js') }}"></script>
{{--    <script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
    <script src="{{ asset('js/test.js') }}"></script>
    @yield('scripts')
</body>
</html>
