@extends('layouts.vendor')
@section('page_title')
Vendor Dashboard | Education Update
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('education.index')}}">Education</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Update Education</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
{{-- main content --}}
<form action="{{ route('education.update',$data->id) }}" method="POST" class="form-group">
    @csrf
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> Update Education</h4>
            <div class="education-info">
                <div class="row form-row education-cont">
                    <div class="col-12 col-md-10 col-lg-11">
                        <div class="row form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Degree</label>
                                    <input type="text" class="form-control @error('Degree')
                                                            is-invalid
                                                        @enderror" name="Degree" value="{{ $data->Degree }}">
                                    @error('Degree')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>College/Institute</label>
                                    <input type="text" class="form-control @error('institute')
                                                            is-invalid
                                                        @enderror" name="institute" value="{{ $data->institute }}">
                                    @error('institute')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>From</label>
                                    <input required type="text" class="form-control yearpicker @error('start_year')
                                                            us-invalid
                                                        @enderror" name="start_year" value="{{ $data->start_year }}">
                                    @error('start_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>To</label>
                                    <input required type="text" class="form-control yearpicker @error('end_yeat')
                                                        @enderror" name="end_year" value="{{ $data->end_year }}">
                                    @error('end_year')
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
    <input type="submit" class="btn btn-primary float-right" value="Update">
</form>
</div>
</div>
{{--  --}}
@endsection
