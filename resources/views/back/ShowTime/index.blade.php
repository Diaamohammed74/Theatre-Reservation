@extends('back.master')
@section('title', 'Dashboard | Show Times')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">Show Times</h2>
                <div class="page-title-right">
                    <a href="{{ route('dashboard.show-times.create') }}" class="btn btn-primary" >
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
                            <th>Movie</th>
                            <th>Theatre event day</th>
                            <th>Start at</th>
                            <th>end at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @each('back.ShowTime.data', $showTimes, 'showTime', 'back.ShowTime.empty')
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection
