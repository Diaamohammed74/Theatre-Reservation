@extends('back.master')
@section('title', 'Dashboard | Event Days')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">Add New Event Day
                </h2>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('dashboard.event-days.store') }}" method="post" id="add_form" enctype="multipart/form-data">
                @csrf
                <div id="add_form_messages"></div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="form-label">Date</label>
                        <input type="date" class="border form-control" name="date" min="{{ date('Y-m-d') }}" placeholder="Please enter date" value="{{ old('date') }}">
                        <x-input-error :messages="$errors->get('date')" class="mt-2" />
                    </div>
                </div>
                <div class="form-group float-end mt-3">
                    <button type="submit" class="btn btn-primary" id="submit_add_form">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
