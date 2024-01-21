@extends('front.master')
@section('title', 'Reserve Show Time')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">Reserve A Show Time</h2>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('reserve') }}" method="post" id="add_form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label">Full name</label>
                        <input type="text" class="border form-control" name="name"
                            step="2" placeholder="Please enter your full name" value="{{ old('name') }}">
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="border form-control" name="email"
                            step="2" placeholder="Please enter a valid email" value="{{ old('email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label">Mobile</label>
                        <input type="text" class="border form-control"
                            name="phone" placeholder="Please enter a valid Mobile number" value="{{ old('phone') }}">
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <div class="form-group col-md-6">
                        <label class="form-label">Choose Show time</label>
                        <select class="form-select" name="show_time_id" aria-label="Select a Show Time">
                            <option selected>Select a Show time </option>
                            @foreach ($showTimes as $showTime)
                            <option value="{{ $showTime->id }}" {{ old('show_time_id') == $showTime->id ? 'selected' : '' }}>
                                    {{ $showTime->movie->name }}   {{ $showTime->eventDay->date }}
                                    <br>
                                    {{ $showTime->timeSlot->start_time }} To {{ $showTime->timeSlot->end_time }}
                                </option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('show_time_id')" class="mt-2" />
                    </div>
                </div>

                <div class="form-group float-end mt-3">
                    <button type="submit" class="btn btn-primary" id="submit_add_form">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
