<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\EventRequest;
use App\Http\Controllers\Auth;
use App\Http\Requests\EditEventRequest;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $events = Event::where('visible',1)->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        //
        $event = new Event();
        $event->name = $request->get('name');
        $event->slug = Str::slug($event->name);
        $event->description = $request->get('description');
        $event->location = $request->get('location');
        $event->date = $request->get('date');
        $event->hour = $request->get('hour');
        $event->type = $request->get('type');
        $event->tags = $request->get('tags');
        $event->visible = $request->has('visible') ? 1 : 0;
        $event->save();

        return view('events.stored', compact('event'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
        $event->name = $request->get('name');
        $event->slug = Str::slug($event->name);
        $event->description = $request->get('description');
        $event->location = $request->get('location');
        $event->date = $request->get('date');
        $event->hour = $request->get('hour');
        $event->type = $request->get('type');
        $event->tags = $request->get('tags');
        $event->visible = $request->has('visible') ? 1 : 0;
        $event->save();

        return view('events.edited', compact('event'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
        // Event::findOrFail($event)->delete();
        $event->delete();
        return redirect()->route('events.index');
    }

    //Crear funcion me gusta
     public function userlike(Request $request, Event $event){
        $event = Event::findOrFail($event->id);

        $user = auth()->id();
        if(!$event->users()->where('user_id', $user)->exists()){
            $event->users()->attach($user);
            return redirect()->back();
        }

        return redirect()->route('events.index');

    }
}
