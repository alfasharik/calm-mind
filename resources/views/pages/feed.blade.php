@extends('app')

@section('title')
    Feed
@endsection

@section('content')
    <button class="action_button button_as_title">
        Лента открытых записей
    </button>
    <div class="content">
        <div class="wrapper_for_feed">
            <a class="feed_link" href="/feed?section=Letter">Письма</a>
            <a class="feed_link" href="/feed?section=Thought">Мысли</a>
        </div>
        @if ($section === 'thought')

            @foreach($data as $datum)
                <div class="content_element">
                    <h2 class="content_element_title">Пользователь id:{{ $datum->user_id }}</h2>
                    <p class="content_element_text">{{ $datum->text }}</p>
                </div>
            @endforeach

        @elseif ($section === 'letter')

            @foreach($data as $datum)
                <div class="content_element">
                    <h2 class="content_element_title">Пользователь id:{{ $datum->user_id }}</h2>

                    <p class="content_element_text">{{ $datum->to_whom }}</p>
                    <p class="content_element_text">{{ $datum->wrath_text }}</p>
                    <p class="content_element_text">{{ $datum->sad_text }}</p>
                    <p class="content_element_text">{{ $datum->fear_text }}</p>
                    <p class="content_element_text">{{ $datum->regret_text }}</p>
                    <p class="content_element_text">{{ $datum->love_text }}</p>
                </div>
            @endforeach

        @endif
    </div>
@endsection
