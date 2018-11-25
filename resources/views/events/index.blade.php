@extends('layouts.master')
<head></head>
@section('content')
    {{-- Filter --}}
    <form class="form-inline">
        <div class="form-group">
            <label for="exampleFormControlSelect2">Filter by Cause:</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
                @foreach ($causes as $cause)
                    <option>{{$cause->name}}</option>
                @endforeach
            </select>
        </div>
    </form>

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