@extends('back.master')

@section('title', 'Dashboard | Show Times')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">Edit Show Time</h2>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('dashboard.show-times.update', $showTime->id) }}" method="post" id="add_form" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div id="add_form_messages"></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="btn-group d-flex flex-column w-100">
                                <label for="movieDropdown" class="text-light fw-semibold">Choose Movie</label>
                                <select class="form-select" name="movie_id" id="movieDropdown" aria-label="Select a Movie">
                                    <option value="" selected>Select a Movie</option>
                                    @foreach ($movies as $movie)
                                        <option value="{{ $movie->id }}" @if($movie->id == $showTime->movie_id) selected @endif>{{ $movie->name }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('movie_id')" class="mt-2" />
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="btn-group d-flex flex-column w-100">
                                <label for="timeSlotDropdown" class="text-light fw-semibold">Choose Time</label>
                                <select class="form-select" name="time_slot_id" id="timeSlotDropdown" aria-label="Select a Time Slot">
                                    <option value="" selected>Select a Time Slot</option>
                                    @foreach ($timeSlots as $timeSlot)
                                        <option value="{{ $timeSlot->id }}" @if($timeSlot->id == $showTime->time_slot_id) selected @endif>
                                            {{ $timeSlot->start_time }} - {{ $timeSlot->end_time }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('time_slot_id')" class="mt-2" />
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="btn-group d-flex flex-column w-100">
                                <label for="eventDayDropdown" class="text-light fw-semibold">Choose Event Day</label>
                                <select class="form-select" name="event_day_id" id="eventDayDropdown" aria-label="Select an Event Day">
                                    <option value="" selected>Select an Event Day</option>
                                    @foreach ($eventDays as $eventDay)
                                        <option value="{{ $eventDay->id }}" @if($eventDay->id == $showTime->event_day_id) selected @endif>
                                            {{ $eventDay->date }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('event_day_id')" class="mt-2" />
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="form-group float-end mt-3">
                    <button type="submit" class="btn btn-primary" id="submit_add_form">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
