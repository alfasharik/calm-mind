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

    <div class="wrapper">
        <div class="content">
            <h1>Что это за сайт?</h1>
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
            <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</p>
            @yield('content')
        </div>
    </div>

    @section('footer')
        <div class="footer">
            <p class="socials">VK</p>
            <p class="socials">Twitter</p>
            <p class="socials">Email</p>
            <p class="copyright">Developed by Alfasharik 2020 &copy;</p>
        </div>
    @show
</body>
</html>
