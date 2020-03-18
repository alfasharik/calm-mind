@extends('app')

@section('title')
    letter
@endsection

@section('content')
    <button class="action_button">
        Какой тип письма ты хочешь написать?
    </button>
    <div class="content">
        <button class="visually_hidden" data-title="for_you">Письмо себе</button>
        <button class="visually_hidden" data-title="for_another">Письмо другому</button>
        <form class="visually_hidden">
            <p class="letter_form_elem_desc">Кому пишем?</p>
            <input type="text" name="title" class="letter_form_title">
            <p class="letter_form_elem_desc">Опиши свои чувства!</p>
            <textarea name="text" class="letter_form_text" wfd-id="18"></textarea>
            <button class="letter_form_submit" type="button" wfd-id="16">Отправить!</button>
        </form>
    </div>

@endsection

@section('javascript')
    <script src="{{asset('/js/letter.js')}}"></script>
@endsection
