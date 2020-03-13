<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'homepage')</title>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
    @include('base.top_panel')

    @include('base.top_menu')


    <div class="wrapper">
        @yield('content')
    </div>

    @include('base.footer')

    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
