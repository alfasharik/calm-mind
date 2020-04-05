@foreach($data as $datum)
    <div class="content_element">
        <h2 class="content_element_title">Пользователь id:{{ $datum->user_id }}</h2>
        <p class="content_element_text">{{ $datum->text }}</p>
        @if ($isEditable)
            <a class="content_element_link" href="/thought/delete/{{$datum->id}}">Удалить</a>
        @endif
    </div>
@endforeach
