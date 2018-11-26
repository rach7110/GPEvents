    <h1>Events</h1>

    <iframe
            width="600"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key={{env('GOOGLE_MAP_KEY_JOB_APPLICATION')}}&q=Space+Needle,Seattle+WA" allowfullscreen>
    </iframe>

    <h2>Count: {{$events->count()}}</h2>
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