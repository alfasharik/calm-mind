@extends('app')

@section('title')
    Thought
@endsection

@section('content')
    <button class="action_button">
        Каждому иногда нужно выговориться, выплесни все, что думаешь:
    </button>
    <div class="content">
        <form class="visually_hidden" method="post" action="{{ route('thought_add') }}">
            @csrf

            <p class="letter_form_elem_desc">Давай, не сдерживайся!</p>
            <textarea name="text" class="letter_form_text" wfd-id="18"></textarea>
            <button class="letter_form_submit" type="button" wfd-id="16">Отправить!</button>
        </form>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('/js/thought.js')}}"></script>
@endsection

