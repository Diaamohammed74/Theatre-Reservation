<?php

namespace App\Http\Controllers;

use App\Models\ShowTime;
use App\Models\ReserveShowTime;
use App\Http\Requests\Reserve\CreateReserveRequset;


class ReserveShowTimeController extends Controller
{

    public function index()
    {
        $reservations = ReserveShowTime::with('showTime.movie', 'showTime.eventDay', 'showTime.timeSlot')
        ->latest()
        ->get();
        return view('back.reservations.index',compact('reservations'));
    }

    public function create()
    {
        $showTimes = ShowTime::with(['movie', 'eventDay', 'timeSlot'])
        ->whereHas('eventDay', function ($query) {
            $query->nextWeek();
        })
        ->latest()->get();
        return view('front.reserve',compact('showTimes'));
    }

    public function store(CreateReserveRequset $request)
    {
        $data=$request->validated();
        $reserve=ReserveShowTime::create($data);
        return redirect()->back()->with(['message' => __('lang.reserved'), 'type' => 'success']);
    }

}
