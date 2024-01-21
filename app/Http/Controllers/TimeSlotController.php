<?php

namespace App\Http\Controllers;

use App\Models\TimeSlot;
use App\Http\Requests\TimeSlot\CreateTimeSlotRequset;
use App\Http\Requests\TimeSlot\UpdateTimeSlotRequset;

class TimeSlotController extends Controller
{
    public function index()
    {
        $timeSlots = TimeSlot::latest()->get();
        return view('back.timeSlots.index', compact('timeSlots'));
    }

    public function create()
    {
        return view('back.timeSlots.create');
    }

    public function store(CreateTimeSlotRequset $createTimeSlotRequset)
    {
        $timeSlot = TimeSlot::create($createTimeSlotRequset->validated());
        return back()->with(['message' => __('lang.added'), 'type' => 'success']);
    }

    public function edit(TimeSlot $timeSlot)
    {
        return view('back.timeSlots.edit', compact('timeSlot'));
    }

    public function update(UpdateTimeSlotRequset $updateTimeSlotRequset, TimeSlot $timeSlot)
    {
        $timeSlot->update($updateTimeSlotRequset->validated());
        return redirect()->route('dashboard.time-slots.index')->with(['message' => __('lang.updated'), 'type' => 'success']);
    }

    public function destroy(TimeSlot $timeSlot)
    {
        $timeSlot->delete();
        return redirect()->route('dashboard.time-slots.index')->with(['message' => __('lang.deleted'), 'type' => 'danger']);
    }
}
