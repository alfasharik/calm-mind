@extends('app')

@section('title')
    Личный кабинет
@endsection

@section('content')
    <button class="action_button button_as_title">
        Редактирование записей {{ Auth::user()->name }}
    </button>
    @include('records.choice')
@endsection
