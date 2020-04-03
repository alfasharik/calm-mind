@extends('app')

@section('title')
    Личный кабинет
@endsection

@section('content')
    <button class="action_button button_as_title">
        Редактирование записей {{ Auth::user()->name }}
    </button>
    <div class="content">
        <div class="wrapper_for_feed">
            <a class="feed_link" href="/lk?section=letter">Письма</a>
            <a class="feed_link" href="/lk?section=thought">Мысли</a>
        </div>
        @if ($section === 'thought')

            @foreach ($data as $datum)
                <div class="content_element">
                    <h2 class="content_element_title">Пользователь id:{{ $datum->user_id }}</h2>
                    <p class="content_element_text">{{ $datum->text }}</p>
                    <a class="content_element_link" href="/api/thought/delete/{{$datum->id}}">Удалить</a>
                </div>
            @endforeach

        @elseif ($section === 'letter')

            @foreach ($data as $datum)
                <div class="content_element">
                    <h2 class="content_element_title">Пользователь id:{{ $datum->user_id }}</h2>
                    <p class="content_element_text">{{ $datum->wrath_text }}</p>
                    <p class="content_element_text">{{ $datum->sad_text }}</p>
                    <p class="content_element_text">{{ $datum->fear_text }}</p>
                    <p class="content_element_text">{{ $datum->regret_text }}</p>
                    <p class="content_element_text">{{ $datum->love_text }}</p>
                    <a class="content_element_link" href="/api/letter/delete/{{$datum->id}}">Удалить</a>
                </div>
            @endforeach

        @endif
    </div>
@endsection
