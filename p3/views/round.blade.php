@extends('templates/master')

@section('title')
    Round Details
@endsection

@section('content')
    <h2> Round Details </h2>

    <ul>
        <li>Round ID: {{ $round['id'] }}</li>
        <li>Dice choice: {{ $round['choice'] }}</li>
        <li>Player's roll: {{ $round['player_roll'] }}</li>
        <li>Computer's roll: {{ $round['computer_roll'] }}</li>
        <li>Winner: {{ $round['won'] }}</li>
        <li>Timestamp: {{ $round['timestamp'] }}</li>
    </ul>

    <a href='/history'>Back to round history</a>
@endsection
