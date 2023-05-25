@extends('layouts.vendor')
@section('page_title')
    Vendor Dashboard | Profile Update
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile Update</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Profile Update</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('profile.update',$profile->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <div class="change-avatar">
                        <div class="profile-img">
                        <img src="{{ asset('images/users/'.Auth::user()->userimage) }}" alt="User Image">
                        </div>
                        <div class="upload-img">
                        <div class="change-photo-btn">
                        <span><i class="fa fa-upload"></i> Upload Photo</span>
                        <input type="file" class="upload" name="userimage" value="{{ Auth::user()->userimage }}">
                        </div>
                        <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                        </div>
                        </div>
                        </div>
                        </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input required type="text" class="form-control" value="{{Auth::user()->name  }} " name="name">
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <div class="cal-icon">
                                <input required type="text" class="form-control " id="DOB" name="DOB" value="{{ $profile->DOB }}"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input required type="email" class="form-control" value="{{Auth::user()->email }} " name="email" readonly>
                            <input required type="hidden" class="form-control" value="{{Auth::user()->type }} " name="type">
                            <input required type="hidden" class="form-control" value="{{Auth::user()->gender }} " name="gender" >
                            <input required type="hidden" class="form-control" value="{{Auth::user()->password }} "  name="password">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Mobile</label>
                            <input required type="number" value="{{ $profile->Phone_no }}" class="form-control"  name="Phone_no">
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div class="form-group">
                            <label>Bio</label>
                            {{-- <input required type="text" class="form-control" value="" name="bio"> --}}
                            <div>
                                <textarea name="bio" id="" class="form-control" rows="5">{{ $profile->bio }}</textarea>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input required type="text" class="form-control" value="{{ $profile->address }}" name="address">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <input required type="text" class="form-control" value="{{ $profile->city }}" name="city">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>State</label>
                            <input required type="text" class="form-control" value="{{ $profile->state }}" name="state">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Postal Code</label>
                            <input required type="text" class="form-control" value="{{ $profile->postal_code }}" name="postal_code">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <input required type="text" class="form-control" value="{{ $profile->country }}" name="country">
                        </div>
                    </div>
                </div>
                <div class="submit-section">
                    <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
