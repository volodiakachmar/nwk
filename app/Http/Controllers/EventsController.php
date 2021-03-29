<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::all();

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_title'=> 'required|max:10000',
            'event_description'=> 'required|max:10000',
            'event_location'=> 'required|max:10000',
            'event_organizer'=> 'required|max:10000'
        ]);


        $event = new Events([
            'event_title' => $request->get('event_title'),
            'event_description' => $request->get('event_description'),
            'event_location' => $request->get('event_location'),
            'event_organizer' => $request->get('event_organizer'),
            'event_day' => $request->get('event_day'),
            'event_month' => $request->get('event_month')
        ]);

        $event->save();

        return redirect('/events')->with('success', 'Пост успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Events::find($id);

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $event = Events::find($id);

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

        ]);

        $event = Events::find($id);
        $event->event_title = $request->get('event_title');
        $event->event_description = $request->get('event_description');
        $event->event_location = $request->get('event_location');
        $event->event_organizer = $request->get('event_organizer');
        $event->event_date = $request->get('event_date');
        $event->event_day = $request->get('event_day');
        $event->event_month = $request->get('event_month');

        $event->save();

        return redirect('/events')->with('success', 'Пост успешно отредактирован!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Events::find($id);

        $event->delete();

        return redirect('/events')->with('success', 'Post deleted');

    }
}
