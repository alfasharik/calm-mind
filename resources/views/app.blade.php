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
    @section('top_panel')
        <div class="top_panel">
            <h1>THERE IS THE WAY TO KEEP YOUR MIND CALM</h1>
            <p>Enter your account: </p>
            <img src="{{asset('icons/LK.png')}}" alt="Enter your account">
        </div>
    @show


    @section('top_menu')
        <div class="top_menu">
            <div class="top_menu_element">
                <a href="#">Письмо</a>
            </div>
            <div class="top_menu_element">
                <a href="#">Мысль</a>
            </div>
            <div class="top_menu_element">
                <a href="#">Лента</a>
            </div>
            <div class="top_menu_element">
                <a href="#">Блог</a>
            </div>
            <div class="top_menu_element">
                <a href="#">Об авторе</a>
            </div>
        </div>
    @show

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
