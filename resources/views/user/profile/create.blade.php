@extends('layouts.vendor')
@section('page_title')
Vendor Dashboard | Profile Create
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Profile</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Create Profile</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
<form action="{{ route('profile.create') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic Information</h4>
            <div class="row form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="change-avatar">
                            <div class="profile-img">
                                <img src="{{ asset('images/users/' . Auth::user()->userimage) }}" alt="User Image">
                            </div>
                            <div class="upload-img">
                                <div class="change-photo-btn">
                                    <span><i class="fa fa-upload"></i> Upload Photo</span>
                                    <input type="file" class="upload" name="userimage"
                                        value="{{ Auth::user()->userimage }}"
                                        class="form-control @error('userimage') is-invalid @enderror"
                                        autocomplete="userimage" autofocus>
                                    @error('userimage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <small class="form-text text-muted">Allowed JPG, GIF ,JFIF or PNG. Max size of
                                    2MB</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input  type="text" value="{{ Auth::user()->name }}" name="name"
                            class="form-control @error('name') is-invalid @enderror" autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <div class="cal-icon">
                            <input required type="text" id="DOB" name="DOB" placeholder="d/m/y"
                                class="form-control @error('DOB') is-invalid @enderror" autocomplete="DOB" autofocus>
                            @error('DOB')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Email ID</label>
                        <input required type="email" class="form-control" value="{{ Auth::user()->email }} "
                            name="email" readonly>

                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Phone No</label>
                        <input required type="text" value="{{ old('Phone_no') }}" name="Phone_no"
                            class="form-control @error('Phone_no') is-invalid @enderror" autocomplete="Phone_no"
                            autofocus>
                        @error('Phone_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">About Me</h4>
            <div class="form-group mb-0">
                <label>Biography</label>
                <textarea name="bio" id="" rows="5" id="bio_field" onkeyup="countChar(this)"
                    class="form-control @error('bio') is-invalid @enderror" autocomplete="bio" autofocus>
                                @error('bio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror {{ old('bio') }}</textarea>
                <div> <span id="charNum" class="text-primary">255 </span>Characters Remaining </div>
            </div>
        </div>
    </div>
    <div class="card contact-card">
        <div class="card-body">
            <h4 class="card-title">Contact Details</h4>
            <div class="row form-row">
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input required type="text" value="{{ old('address') }}" name="address"
                            class="form-control @error('address') is-invalid @enderror" autocomplete="address"
                            autofocus>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>City</label>
                        <input required type="text" class="form-control" value="{{ old('city') }}" name="city"
                            class="form-control @error('city') is-invalid @enderror" autocomplete="city" autofocus>
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>State/Province</label>
                        <input required type="text" class="form-control" value="{{ old('state') }}" name="state"
                            class="form-control @error('state') is-invalid @enderror" autocomplete="state" autofocus>
                        @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Country</label>
                        <input required type="text" class="form-control" value="{{ old('country') }}" name="country"
                            class="form-control @error('country') is-invalid @enderror" autocomplete="country"
                            autofocus>
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>Postal Code</label>
                        <input required type="text" class="form-control" value="{{ old('postal_code') }}"
                            name="postal_code" class="form-control @error('postal_code') is-invalid @enderror"
                            autocomplete="postal_code" autofocus>
                        @error('postal_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="submit-section">
        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
    </div>
</form>
@endsection
