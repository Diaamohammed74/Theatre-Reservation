@extends('back.master')
@section('title', 'Dashboard | Reservations')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">Reservations</h2>
                <div class="page-title-right">
                    {{-- <a href="{{ route('dashboard.time-slots.create') }}" class="btn btn-primary" >
                        Add new
                    </a> --}}
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
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Theatre event day</th>
                            <th>Movie</th>
                            <th>From </th>
                            <th>To </th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @each('back.reservations.data', $reservations, 'reservation', 'back.reservations.empty')
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection


{{-- <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add New Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Existing form content goes here -->
                <form action="{{ route('back.admins.store') }}" method="post" id="add_form" enctype="multipart/form-data">
                    <!-- Rest of the form content -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="add_form">Submit</button>
            </div>
        </div>
    </div>
</div> --}}