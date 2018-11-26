@extends('layouts.master')
<head></head>
@section('content')
    {{-- Filter by cause --}}
    <form action="{{route('filterByCause')}}" method="POST" id="causeFilter">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="causes">Filter by Cause:</label>
            <select multiple class="form-control" id="causes" name="causes[]">
                @foreach ($causes as $cause)
                    <option value={{$cause->id}}>{{$cause->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> 

    <a href="{{route('events')}}" role="button" class="btn btn-dark">Reset</a>

    {{-- Display events --}}
    @include('events.includes.events')

<script>
    $(document).ready(function() {
        $("#causeFilter").on('submit', function(e) {
            e.preventDefault();
            var causes = $("#causes").val();
            console.log(causes);

            $.ajax({
                type:'GET',
                url:'events/causes',
                data: {'causes': causes},
                success:function(data){
                    console.log(data);
                }
            });
        });
    });
  
</script>

@stop
