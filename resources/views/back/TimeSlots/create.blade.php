@extends('back.master')
@section('title', 'Dashboard | Time Slots')
@section('content')

    <!-- page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">Add New time Slot

                </h2>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('dashboard.time-slots.store') }}" method="post" id="add_form" enctype="multipart/form-data">
                @csrf
                <div id="add_form_messages"></div>
                {{-- MODIFICATIONS FROM HERE --}}
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label">Start time</label>
                        <input type="time" class="border form-control" name="start_time" placeholder="Please enter start time" value="{{ old('start_time') }}">
                        <x-input-error :messages="$errors->get('start_time')" class="mt-2" />
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label">End time</label>
                        <input type="time" class="border form-control" name="end_time" placeholder="Please enter end time" value="{{ old('end_time') }}">
                        <x-input-error :messages="$errors->get('end_time')" class="mt-2" />
                    </div>
                </div>
                <div class="form-group float-end mt-3">
                    <button type="submit" class="btn btn-primary" id="submit_add_form">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
