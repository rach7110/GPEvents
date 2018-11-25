@extends('layouts.master')
<head></head>
@section('content')
    <h1>Events</h1>
    @foreach ($events as $event)
        <p>{{$event->title}}</p>
    @endforeach
@stop