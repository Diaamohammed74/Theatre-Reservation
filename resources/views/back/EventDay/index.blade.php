@extends('back.master')
@section('title', 'Dashboard | Event Days')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">Event Days</h2>
                <div class="page-title-right">
                    <a href="{{ route('dashboard.event-days.create') }}" class="btn btn-primary" >
                        Add new
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3" id="mainCont">
        <div class="card">
            <div class="table-responsive text-nowrap" style="font-family: 'Arial', sans-serif;">
                <table class="table table-striped">
                    <thead class="text-center">
                        <tr style="font-family: Arial">
                            <th>Day</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @each('back.EventDay.data', $eventDays, 'eventDay', 'back.EventDay.empty')
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection
