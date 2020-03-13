@extends('app')

@section('title')
    letter
@endsection

@section('content')
    <div class="content">
        <h3 class="content_element_title">
            Какой тип письма ты хочешь написать?
        </h3>
        <button class="button_for_letters" data-title="for_you">Письмо себе</button>
        <button class="button_for_letters" data-title="for_another">Письмо другому</button>
    </div>
@endsection
