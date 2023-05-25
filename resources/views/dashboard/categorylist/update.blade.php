@extends('layouts.dashboard')
@section('page_title')
    Admin Dashboard | Category Update
@endsection
@section('dashboard_content')

<div class="card">
    <div class="row justify-content-center py-5">
        <div class="col-6 ">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Update Category</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <form action="{{ route('categorylist.update',$data->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
                        </div>
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </form>
                </div>
            </div>        </div>
    </div>
</div>
@endsection
