<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\EventDay;
use App\Models\ShowTime;
use App\Models\TimeSlot;
use App\Http\Requests\ShowTime\CreateShowTimeRequest;
use App\Http\Requests\ShowTime\UpdateShowTimeRequest;

class ShowTimeController extends Controller
{

    public function index()
    {
        $showTimes = ShowTime::with(['movie', 'eventDay', 'timeSlot'])->latest()->get();
        return view('back.ShowTime.index', compact('showTimes'));
    }

    public function create()
    {
        $movies    = Movie::latest()->get(['id', 'name']);
        $eventDays = EventDay::afterOrEqualToday()->latest()->get(['id', 'date']);
        $timeSlots = TimeSlot::latest()->get(['id', 'start_time', 'end_time']);
        return view('back.ShowTime.create', compact(['movies', 'eventDays', 'timeSlots']));
    }

    public function store(CreateShowTimeRequest $request)
    {
        $showTime = ShowTime::create($request->validated());
        return back()->with(['message' => __('lang.added'), 'type' => 'success']);
    }

    public function edit(ShowTime $showTime)
    {
        $movies    = Movie::latest()->get(['id', 'name']);
        $eventDays = EventDay::afterOrEqualToday()->latest()->get(['id', 'date']);
        $timeSlots = TimeSlot::latest()->get(['id', 'start_time', 'end_time']);
        return view('back.ShowTime.edit', compact(['movies', 'eventDays', 'timeSlots','showTime'] ));
    }

    public function update(UpdateShowTimeRequest $request, ShowTime $showTime)
    {
        $showTime->update($request->validated());
        return redirect()->route('dashboard.show-times.index')->with(['message' => __('lang.updated'), 'type' => 'success']);
    }

    public function destroy(ShowTime $showTime)
    {
        $showTime->delete();
        return redirect()->route('dashboard.show-times.index')->with(['message' => __('lang.deleted'), 'type' => 'danger']);
    }
}
