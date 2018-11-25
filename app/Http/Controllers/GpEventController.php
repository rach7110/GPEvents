<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GpEvent;
use App\Cause;

class GpEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = GpEvent::all()->take(15);
        $causes = Cause::all();

        return view('events.index', ['events' => $events, 'causes' => $causes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GpEvent  $gpEvent
     * @return \Illuminate\Http\Response
     */
    public function show(GpEvent $gpEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GpEvent  $gpEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(GpEvent $gpEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GpEvent  $gpEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GpEvent $gpEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GpEvent  $gpEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(GpEvent $gpEvent)
    {
        //
    }
}
