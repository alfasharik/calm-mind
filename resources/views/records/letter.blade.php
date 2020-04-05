@foreach($data as $datum)
    <div class="content_element">
        <h2 class="content_element_title">Пользователь id:{{ $datum->user_id }}</h2>

        <p class="content_element_text">{{ $datum->to_whom }}</p>
        <p class="content_element_text">{{ $datum->wrath_text }}</p>
        <p class="content_element_text">{{ $datum->sad_text }}</p>
        <p class="content_element_text">{{ $datum->fear_text }}</p>
        <p class="content_element_text">{{ $datum->regret_text }}</p>
        <p class="content_element_text">{{ $datum->love_text }}</p>
        @if ($isEditable)
            <a class="content_element_link" href="/letter/delete/{{$datum->id}}">Удалить</a>
        @endif
    </div>
@endforeach
