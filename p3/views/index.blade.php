@extends('templates/master')

@section('title')
    {{ $welcome }}
@endsection

@section('content')

    <a href='/history'>Round History</a>

    <h2>Mechanics</h2>
    <ul>
        <li>Player selects dice size. Either 6 sided or 8 sided dice.</li>
        <li>The winner is the one who lands on the highest value side of the dice.</li>
        <li>If both rolls result in the same value side of the dice, both dice will be rolled again until a winner
            emerges.</li>
    </ul>

    <h2>Play</h2>
    <form method='POST' action="/process">
        Pick a dice size:
        <label><input type='radio' test='six-radio' name='choice' value='6'>6</label>
        <label><input type='radio' test='eight-radio' name='choice' value='8'>8</label>
        <input type='submit' test='submit-button' value='Roll!'>
    </form>

    @if ($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if ($playerRoll)
        <div test='results-div'>
            <h2>Results</h2>
            <ul>
                <li>Player rolled: {{ $playerRoll }}</li>
                <li>Computer rolled: {{ $computerRoll }}</li>
                <li>The winner is: {{ $won }}</li>
            </ul>
        </div>
    @endif
@endsection
