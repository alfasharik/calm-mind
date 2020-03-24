@extends('app')

@section('title')
    Register
@endsection

@section('content')
    <div class="content">
        <button class="action_button button_as_title">
            Регистрация
        </button>
        <form class="letter_form" method="POST" action="{{ route('register') }}">
            @csrf

            <p class="letter_form_elem_desc">Name</p>
            <input type="text" class="letter_form_title" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus>

            <p class="letter_form_elem_desc">E-Mail address</p>
            <input type="email" class="letter_form_title" name="email" value="{{ old('email') }}" required autocomplete="email">

            <p class="letter_form_elem_desc">Password</p>
            <input type="password" class="letter_form_title" name="password" required autocomplete="new-password">

            <p class="letter_form_elem_desc">Confirm Password</p>
            <input type="password" class="letter_form_title" name="password_confirmation" required autocomplete="new-password">

            <button class="letter_form_submit" type="submit" wfd-id="16">Зарегистрироваться</button>
        </form>
    </div>
@endsection

