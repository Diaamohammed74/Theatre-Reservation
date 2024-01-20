@extends('back.master')
@section('title', 'Dashboard | Movies')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">Movies</h2>
                <div class="page-title-right">
                    <a href="{{ route('dashboard.movies.create') }}" class="btn btn-primary" >
                        Add new
                    </a>
                    {{-- <a href="{{ route('back.admins.create') }}" data-title="{{ __('lang.add_new_admin') }}" id="add_btn"
                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mainModal">
                        {{ __('lang.add_new') }}
                    </a> --}}

                </div>
            </div>
        </div>
    </div>
    <div class="card mt-3" id="mainCont">
        <div class="card">
            <div class="table-responsive text-nowrap" style="font-family: 'Arial', sans-serif;">
                <table class="table table-striped">
                    <thead>
                        <tr style="font-family: Arial" class="text-center">
                            <th>#</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($movies as $movie)
                            <tr class="text-center" >
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $movie->name }}</td>
                                <td>
                                    <form action="{{ route('dashboard.movies.edit', $movie->id) }}" method="get" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                    </form>
                                    <form action="{{ route('dashboard.movies.destroy', $movie->id) }}" method="post" style="display: inline;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        @endforelse
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