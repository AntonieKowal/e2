@extends('templates.master')

@section('title')
Round History
@endsection

@section('content')


<h2>round history</h2>

<ul>
    @foreach($rounds as $round)
    <li> {{ $round["winner"]}} </li>
    @endforeach
</ul>

@endsection