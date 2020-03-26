@extends('app')

@section('title')
    Logout
@endsection

@section('content')
    <div class="content">
        <div class="content_element">
            @guest
            <h2 class="content_element_title">
                Вы вышли из аккаунта.
            </h2>
            @else
            <h2 class="content_element_title">
                Привет, {{ Auth::user()->name }}
            </h2>
            @endguest
        </div>
    </div>
@endsection
