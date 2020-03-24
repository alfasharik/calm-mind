@section('top_panel')
    <section class="top_panel">
        <h1 class="top_panel_title">
            <a class="top_panel_link" href="/home">THERE IS THE WAY TO KEEP YOUR MIND CALM</a>
        </h1>
        <ul class="lk_buttons">
            @guest
                <li>
                    <a class="top_panel_link" href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a class="top_panel_link" href="{{ route('register') }}">Register</a>
                </li>

            @else
                <li>
                    <a class="top_panel_link">Привет, <b>{{ Auth::user()->name }}</b></a>
                </li>

                <li>
                    <a class="top_panel_link" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                </li>
            @endguest
        </ul>
        <form id="logout-form" method="post" action="{{ route('logout') }}" style="display: none">
            @csrf
        </form>
    </section>
@show
