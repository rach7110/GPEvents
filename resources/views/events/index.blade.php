@extends('layouts.master')
<head></head>
@section('content')
    {{-- Filter --}}
    <form class="form-inline" action="{{route('filterByCause')}}" method="POST">
            {{ csrf_field() }}

        <div class="form-group">
            <label for="causes">Filter by Cause:</label>
            <select multiple class="form-control" id="causes" name="causes[]">
                @foreach ($causes as $cause)
                    <option value="{{$cause->id}}">{{$cause->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit<button>
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