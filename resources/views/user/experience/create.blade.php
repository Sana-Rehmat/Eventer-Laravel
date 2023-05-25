@extends('layouts.vendor')
@section('page_title')
Vendor Dashboard | Experience Create
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('experience.index')}}">Ecperience</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Add Ecperience</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
{{-- main content --}}
<form action="{{ route('experience.create') }}" method="POST" class="form-group">
    @csrf
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Create Experience</h4>
            <div class="education-info">
                <div class="row form-row education-cont">
                    <div class="col-12 col-md-10 col-lg-11">
                        <div class="row form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Oraganization</label>
                                    <input type="text" value="{{ old('organization') }}" class="form-control @error('organization')
is-invalid
                                                        @enderror" name="organization">
                                    @error('organization')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" value="{{ old('designation') }}" class="form-control @error('designation')
                                        is-invalid
                                    @enderror" name="designation">
                                    @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>From</label>
                                    <input required type="text" value="{{ old('start') }}" class="form-control monthyearpicker @error('start')
                                        is-invalid
                                    @enderror" name="start">
                                    @error('start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>To</label>
                                    <input required type="text" value="{{ old('end') }}" class="form-control monthyearpicker @error('end')
                                        is-invalid
                                    @enderror" name="end">
                                    @error('end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> @enderror
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
</div>
</div>
{{--  --}}

@endsection
