<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventDay\CreateEventDayRequset;
use App\Http\Requests\EventDay\UpdateEventDayRequset;
use App\Models\EventDay;
use Illuminate\Http\Request;

class EventDayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventDays = EventDay::get();
        return view('back.eventDay.index', compact('eventDays'));
    }

    public function create()
    {
        return view('back.EventDay.create');
    }

    public function store(CreateEventDayRequset $request)
    {
        $eventDay = EventDay::create($request->validated());
        return redirect()->route('dashboard.event-days.index')->with('success', 'Event Day addded successfully');
    }

    public function edit(EventDay $eventDay)
    {
        return view('back.EventDay.edit', compact('eventDay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventDayRequset $request, EventDay $eventDay)
    {
        $eventDay->update($request->validated());
        return redirect()->route('dashboard.event-days.index')->with('success', 'Event Day udpated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventDay $eventDay)
    {
        $eventDay->delete();
        return redirect()->route('dashboard.event-days.index')->with('success', 'Event Day deleted successfully');
    }
}
