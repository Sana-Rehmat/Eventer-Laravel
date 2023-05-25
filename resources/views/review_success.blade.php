@extends('layouts.app')
@section('page_title')
Home | Review Success
@endsection
@section('content')
<div class="container mt-5 pt-3">

    <div class="content success-page-cont py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="card success-card">
                        <div class="card-body">
                            <div class="success-cont">
                                <i class="fas fa-check"></i>
                                <h3>Review Submitted Successfully!</h3>
                                <!-- <p>Appointment booked with <strong>Wayte Barlow</strong><br> on <strong>12 Nov 2020 5:00PM to 6:00PM</strong></p> -->
                                <a href="{{ route('home') }}" class="btn  view-inv-btn text-light">Go To Home</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
