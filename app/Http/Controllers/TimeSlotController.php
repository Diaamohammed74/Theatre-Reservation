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

      /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTimeSlotRequset $createTimeSlotRequset)
    {
        $timeSlot = TimeSlot::create($createTimeSlotRequset->validated());
        return redirect()->route('dashboard.time-slots.index')->with('success', 'Time Slot addded successfully');
    }

      /**
     * Display the specified resource.
     */
      // public function show(Movie $movie)
      // {
      //     //
      // }

      // /**
      //  * Show the form for editing the specified resource.
      //  */
    public function edit(TimeSlot $timeSlot)
    {
        return view('back.timeSlots.edit', compact('timeSlot'));
    }

      // /**
      //  * Update the specified resource in storage.
      //  */
    public function update(UpdateTimeSlotRequset $updateTimeSlotRequset, TimeSlot $timeSlot)
    {
        $timeSlot->update($updateTimeSlotRequset->validated());
        return redirect()->route('dashboard.time-slots.index')->with('success', 'Time slot udpated successfully');
    }

      // /**
      //  * Remove the specified resource from storage.
      //    */
    public function destroy(TimeSlot $timeSlot)
    {
        $timeSlot->delete();
        return redirect()->route('dashboard.time-slots.index')->with('error', 'Time slot deleted successfully');
    }
}
