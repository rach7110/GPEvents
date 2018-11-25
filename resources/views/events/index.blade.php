@extends('layouts.master')
<head></head>
@section('content')
    <h1>Events</h1>
    @foreach ($events as $event)
        <h5>{{$event->title}}</h5>
        @if ($event->causes->count() == 1)
            <p>Cause: {{$event->causes->first()->name}}</p>
        @elseif ($event->causes->count())
            <p>Causes: 
                @foreach ($event->causes as $cause)
                    {{$cause->name . ", "}}
                @endforeach
            </p>
        @endif
    @endforeach
@stop