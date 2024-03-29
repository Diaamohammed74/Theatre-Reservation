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
                            <th>Movie Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @each('back.Movies.data',$movies,'movie','back.Movies.empty')
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection