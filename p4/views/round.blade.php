@extends('templates.master')

@section('title')
Round {{$round["id"]}}
@endsection

@section('content')

<h2>Round {{$round["id"]}}</h2>

<div>
    The player chose <strong>{{ucfirst($round["user_move"])}}</strong> and the computer chose
    <strong>{{ucfirst($round["computer_move"])}}</strong>.
    <br>

</div>

@if($round["winner"] == "tie")
<h1>It was a <b>TIE!</b></h1>
@else
<h1>The <b>{{ strtoupper($round["winner"])}}</b> won!</h1>
@endif

<a href="/round-history">&larr; Round History</a>

@endsection