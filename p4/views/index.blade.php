@extends('templates.master')

@section('title')
{{ $app->config("app.name") }}
@endsection

@section('content')


<h2>explain the game</h2>
<form>
    <label>Rock<input type="radio" name="userChoice" value="rock"></label><br>
    <label>Paper<input type="radio" name="userChoice" value="paper"></label><br>
    <label>Scissors<input type="radio" name="userChoice" value="scissors"><br>
        <button type="submit">Play!</button>
</form>

@endsection