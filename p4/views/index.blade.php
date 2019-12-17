@extends('templates.master')

@section('title')
{{ $app->config("app.name") }}
@endsection

@section('content')

<h2>Rock, Paper, Scissors</h2>

<p id="directions">Play a basic game of Rock, Paper, Scissors versus your computer! You can view a full history of every
    round played by
    clicking the link below.
</p>


<form method="POST" action="/play-round">
    <div class="radio-toolbar">
        <input type="radio" id="rock" name="userChoice" value="rock">
        <label for="rock">Rock</label>

        <input type="radio" id="paper" name="userChoice" value="paper">
        <label for="paper">Paper</label>

        <input type="radio" id="scissors" name="userChoice" value="scissors">
        <label for="scissors">Scissors</label>
    </div>
    <button class="btn btn-primary" type="submit">Play!</button>
</form>
<br>


@if($app->errorsExist())
<div class="error alert alert-danger">
    Please select a move
</div>
@endif

@if($data)
<div class="alert alert-{{$data[0]}}">
    You chose <strong>{{ ucfirst($data["user_move"]) }}</strong>, and the computer chose
    <strong>{{ ucfirst($data["computer_move"]) }}</strong>.
    <br>
    @if($data["winner"] == "tie")
    It was a tie.
    @else
    The {{$data["winner"]}} won!
    @endif
</div>
@endif

<a href='/round-history'>View all rounds</a>

@endsection