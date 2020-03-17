@extends('app')

@section('title')
    Thought
@endsection

@section('content')
    <div class="action_button">
        Каждому иногда нужно выговориться, выплечи все, что думаешь:
    </div>
    <div class="content">
        <form class="letter_form_hidden">
            <textarea name="text" class="letter_form_text" wfd-id="18"></textarea>
            <button disabled="true" class="letter_form_submit" wfd-id="16">Отправить!</button>
        </form>
    </div>
@endsection

@section('javascript')
    <script src="{{asset('/js/thought.js')}}"></script>
@endsection

