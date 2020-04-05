@extends('app')

@section('title')
    Feed
@endsection

@section('content')
    <button class="action_button button_as_title">
        Лента открытых записей
    </button>
    @include('records.choice')
@endsection
