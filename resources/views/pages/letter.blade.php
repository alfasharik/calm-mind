@extends('app')

@section('title')
    letter
@endsection

@section('content')
    <div class="action_button">
        Какой тип письма ты хочешь написать?
    </div>
    <div class="content">
        <button class="button_for_letters_hidden" data-title="for_you">Письмо себе</button>
        <button class="button_for_letters_hidden" data-title="for_another">Письмо другому</button>
        <form class="letter_form_hidden">
            <p class="letter_form_elem_desc">Кому пишем?</p>
            <input type="text" name="title" class="letter_form_title">
            <p class="letter_form_elem_desc">Опиши свои чувства!</p>
            <textarea name="text" class="letter_form_text" wfd-id="18"></textarea>
            <button disabled="true" class="letter_form_submit" wfd-id="16">Отправить!</button>
        </form>
    </div>

@endsection

@section('javascript')
    <script src="{{asset('/js/letter.js')}}"></script>
@endsection
