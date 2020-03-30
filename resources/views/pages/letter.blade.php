@extends('app')

@section('title')
    letter
@endsection

@section('content')
    <button class="action_button">
        Какой тип письма ты хочешь написать?
    </button>
    <div class="content">
        <div class="visually_hidden">
            <button class="button_for_letters" data-title="for_you">Письмо себе</button>
            <button class="button_for_letters" data-title="for_another">Письмо другому</button>
        </div>
        <form class="visually_hidden" method="post" action="{{ route('letter_add') }}">
            @csrf

            <p class="letter_form_elem_desc">Кому пишем?</p>
            <input type="text" name="to_whom" class="letter_form_title">

            <p class="letter_form_elem_desc">Опиши свой гнев</p>
            <textarea name="wrath_text" class="letter_form_text" wfd-id="18"></textarea>
            <p class="letter_form_elem_desc">Опиши свою грусть</p>
            <textarea name="sad_text" class="letter_form_text" wfd-id="18"></textarea>
            <p class="letter_form_elem_desc">Опиши свой страх</p>
            <textarea name="fear_text" class="letter_form_text" wfd-id="18"></textarea>
            <p class="letter_form_elem_desc">Опиши свое сожаление</p>
            <textarea name="regret_text" class="letter_form_text" wfd-id="18"></textarea>
            <p class="letter_form_elem_desc">Опиши свою любовь</p>
            <textarea name="love_text" class="letter_form_text" wfd-id="18"></textarea>

            <button class="letter_form_submit" type="submit" wfd-id="16">Отправить!</button>
        </form>
    </div>

@endsection

@section('javascript')
    <script src="{{asset('/js/letter.js')}}"></script>
@endsection
