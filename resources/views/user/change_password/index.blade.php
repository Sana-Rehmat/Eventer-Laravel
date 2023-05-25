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
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Change Password</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
<div class="card">
    <div class="card-body">
        <h3>Change Password</h3>
        <div class="row justify-content-center py-5">
            <div class="col-6 ">
                <form action="{{ route('change_password.create') }}" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="">Old Password</label>
                        <input id="old_password" type="password"
                            class="form-control @error('old_password') is-invalid @enderror" name="old_password"
                            required autocomplete="old_password">
                        @error('old_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">New Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Confirm Password</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Save
                            Changes</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
