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
        return redirect()->route('dashboard.time-slots.index')->with('success', 'Time Slot addded successfully');
    }

    public function edit(TimeSlot $timeSlot)
    {
        return view('back.timeSlots.edit', compact('timeSlot'));
    }

    public function update(UpdateTimeSlotRequset $updateTimeSlotRequset, TimeSlot $timeSlot)
    {
        $timeSlot->update($updateTimeSlotRequset->validated());
        return redirect()->route('dashboard.time-slots.index')->with('success', 'Time slot udpated successfully');
    }

    public function destroy(TimeSlot $timeSlot)
    {
        $timeSlot->delete();
        return redirect()->route('dashboard.time-slots.index')->with('error', 'Time slot deleted successfully');
    }
}
