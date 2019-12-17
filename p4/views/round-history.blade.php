@extends('templates.master')

@section('title')
Round History
@endsection

@section('content')

@if($app->old("roundNotFound"))
<div class="alert alert-warning">
    Sorry, the round you were looking for doesn't exist.
</div>
@endif

<h1>Round History</h1>
<a href="/">&larr;Return Home</a>
<h4>Choose a round to view!</h4>

<ul class="list-unstyled">
    @foreach($rounds as $round)
    <li><a href="/round?id={{$round["id"]}}">{{$round["timestamp"]}}</a></li>
    @endforeach
</ul>

@endsection