@extends('layouts.app')
@section('page_title')
Home | Services
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
                                <h3>Appointment booked Successfully!</h3>
                                <p> <strong>{{Auth::user()->name}}</strong><br> on <strong>{{Carbon::now()}}</strong></p>
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
