@foreach($data as $datum)
    <div class="content_element">
        <h2 class="content_element_title">Пользователь id:{{ $datum->user_id }}</h2>
        <p class="content_element_text">{{ $datum->text }}</p>
        @if ($isEditable)
            <form action="{{ route('thoughts.destroy', $datum->id) }}" method="post">
                @csrf
                @method('delete')
                <button class="content_element_link form_delete_link" type="submit">Удалить</button>
            </form>
        @endif
    </div>
@endforeach
