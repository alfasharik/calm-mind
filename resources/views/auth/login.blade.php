@extends('app')

@section('title')
    Login
@endsection

@section('content')
    <div class="content">
        <button class="action_button button_as_title">
            Вход
        </button>
        <form class="letter_form" method="POST" action="{{ route('login') }}">
            @csrf

            <p class="letter_form_elem_desc">E-Mail address</p>
            <input type="email" class="letter_form_title" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            <p class="letter_form_elem_desc">Password</p>
            <input type="password" class="letter_form_title" name="password" required autocomplete="current-password">

            <button class="letter_form_submit" type="submit" wfd-id="16">Войти</button>
        </form>
    </div>
@endsection
