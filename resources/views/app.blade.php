<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
    <header class="main_header">
        @include('base.top_panel')
        @include('base.top_menu')
    </header>

    <main class="container">
        @yield('content')
    </main>

    @include('base.footer')

    @yield('javascript')
</body>
</html>
