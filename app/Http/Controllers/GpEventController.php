<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GpEvent;
use App\Cause;

class GpEventController extends Controller
{
    /**
     * Display a listing of events.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = GpEvent::all()->take(500);
        $causes = Cause::all();

        return view('events.index', ['events' => $events, 'causes' => $causes]);
    }

    /**
     * Display a listing of events filtered by causes.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function filteredByCause(Request $request)
    {
        $filtered_causes = $request->input('causes');

        $events = GpEvent::whereHas('causes', function ($query) use ($filtered_causes) {
            $query->whereIn('cause_id', $filtered_causes);
        })->get();

        return view('events.includes.events', ['events' => $events]);
    }
}
