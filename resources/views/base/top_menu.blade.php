@section('top_menu')
    <nav class="main_nav">
        <ul class="top_menu">
            <li>
                <a class="top_menu_link" href="{{ route('letters.create') }}">Письмо</a>
            </li>
            <li>
                <a class="top_menu_link" href="{{ route('thoughts.create') }}">Мысль</a>
            </li>
            <li>
                <a class="top_menu_link" href="/feed">Лента</a>
            </li>
            <li>
                <a class="top_menu_link" href="/blog">Блог</a>
            </li>
            <li>
                <a class="top_menu_link" href="/about">Об авторе</a>
            </li>
        </ul>
        <ul class="right_menu">
            <li>
                <a class="right_menu_link" href="/account">Личный кабинет</a>
            </li>
            <li>
                <a class="right_menu_link" href="/admin">Админ</a>
            </li>
        </ul>
    </nav>
@show
