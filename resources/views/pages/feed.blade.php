@extends('app')

@section('title')
    Feed
@endsection

@section('content')
    <button class="action_button button_as_title">
        Лента открытых записей
    </button>

    <div class="content">
        @foreach($thoughts as $thought)
            <div class="content_element">
                <h2 class="content_element_title">Пользователь id:{{ $thought->user_id }}</h2>
                <p class="content_element_text">{{ $thought->text }}</p>
            </div>
        @endforeach
    </div>
@endsection
