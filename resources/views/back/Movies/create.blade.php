@extends('back.master')
@section('title', 'Dashboard | Movies')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h2 class="h5 page-title">Add New Movie
                </h2>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('dashboard.movies.store') }}" method="post" id="add_form" enctype="multipart/form-data">
                @csrf
                <div id="add_form_messages"></div>
                <div class="row">
                    <div class="form-group col-md-10">
                        <label class="form-label">name</label>
                        <input type="text" class="border form-control" name="name" placeholder="please enter movie name"
                            value="{{ old('name') }}">
                    </div>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="form-group float-end mt-3">
                    <button type="submit" class="btn btn-primary" id="submit_add_form">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection