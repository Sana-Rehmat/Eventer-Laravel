@extends('layouts.vendor')
@section('page_title')
Vendor Dashboard | Award Create
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('award.index')}}">Award</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Add Award</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')

<form action="{{ route('award.create') }}" method="POST" class="form-group">
    @csrf
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Create Award</h4>
            <div class="education-info">
                <div class="row form-row education-cont">
                    <div class="col-12 col-md-10 col-lg-11">
                        <div class="row form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Award Name</label>
                                    <input type="text" class="form-control @error('award')
                                        is-invalid
                                    @enderror" name="award" value="{{ old('award') }}">
                                    @error('award')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Year</label>
                                    <input required type="text" class="form-control monthyearpicker @error('year')
                                        is-invalid
                                    @enderror" name="year" value="{{ old('year') }}">
                                    @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="submit" class="btn btn-primary float-right" value="Add">
</form>


@endsection