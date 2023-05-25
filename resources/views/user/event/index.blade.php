@extends('layouts.vendor')
@section('page_title')
    Dashboard | Services
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Services</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
    <div class="card event-service">
        <div class="card-body pt-3">
            <nav class="user-tabs mb-4">
                <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" href="#pat_appointments" data-toggle="tab">Active Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pat_Programss" data-toggle="tab">Inactive Services</a>
                    </li>
                </ul>
            </nav>
            <div class="tab-content pt-0">
                <div id="pat_appointments" class="tab-pane fade show active">
                    <div class="row row-grid">
                        @foreach ($services as $service)
                            @if ($service->status == 1)
                                <div class="col-md-6 col-lg-4 mb-5" id="service_card">
                                    <div class="Modern-Slider">
                                        <!-- Item -->
                                        @foreach ($images as $image)
                                            @if ($image->service_id == $service->id)
                                                <div class="item">
                                                    <div class="img-fill">
                                                        <a href="{{ route('event.service_detail',['service_id'=>$service->id,'user_id'=>$service->user_id]) }}">
                                                        <img alt="User Image"
                                                            src="{{ asset('images/services/' . $image->serviceimages) }}">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="pro-content decoration-none">
                                        <h3 class="title pt-0 mt-0">
                                            {{-- <span>workshop</span> --}}
                                            <a href="{{ route('event.service_detail',['service_id'=>$service->id,'user_id'=>$service->user_id]) }}">{{ $service->short_description }}</a>
                                        </h3>
                                        {{-- <p class="add-cont">8 Northumberland Ave, Westminster,</p> --}}
                                        @foreach ($users as $user)
                                            @if ($user->id == $service->user_id)
                                                <div class="profile-info d-flex mb-0">
                                                    <a href="#" class="profile-img">
                                                        <img src="{{ asset('images/users/' . $user->userimage) }}"
                                                            alt="" width="50px" height="50px">
                                                    </a>
                                                    <div class="pt-3">
                                                        <a href="speaker-profile.html  mt-5">
                                                            {{-- <span class="profile-name"></span> --}}
                                                            <span class="profile-pro ">{{ $user->name }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <hr>
                                        <div id="service_actions" class=" d-flex justify-content-center">
                                            <a href="{{ route('event.status', $service->id) }}"
                                                class="btn btn-success mx-1" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Inactive">
                                                <i class="fa fa-eye-slash"></i></a>
                                            <a href="{{ route('event.update', $service->id) }}"
                                                class="btn btn-primary mx-1" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Edit">
                                                <i class="fa fa-edit"></i></a>
                                            <a href="{{ route('event.delete', $service->id) }}"
                                                class="btn btn-danger mx-1" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                            {{-- <a href="{{ route('event.info', $service->id) }}" class="btn btn-info mx-1"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Detail info">
                                                <i class="fa fa-info text-light"></i> </a> --}}
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane  fade inactive-event" id="pat_Programss">
                    <div class="row row-grid">
                        @foreach ($services as $service)
                            @if ($service->status == 0)
                                <div class="col-md-6 col-lg-4 mb-5" id="service_card">
                                    <div class="Modern-Slider">
                                        <!-- Item -->
                                        @foreach ($images as $image)
                                            @if ($image->service_id == $service->id)
                                                <div class="item">
                                                    <div class="img-fill">
                                                        <img alt="User Image"
                                                            src="{{ asset('images/services/' . $image->serviceimages) }}">
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="pro-content decoration-none">
                                        <h3 class="title pt-0 mt-0">
                                            {{-- <span>workshop</span> --}}
                                            <a href="{{ route('event.service_detail',['service_id'=>$service->id,'user_id'=>$service->user_id]) }}">{{ $service->short_description }}</a>
                                        </h3>
                                        {{-- <p class="add-cont">8 Northumberland Ave, Westminster,</p> --}}
                                        @foreach ($users as $user)
                                            @if ($user->id == $service->user_id)
                                                <div class="profile-info d-flex mb-0">
                                                    <a href="#" class="profile-img">
                                                        <img src="{{ asset('images/users/' . $user->userimage) }}"
                                                            alt="" width="50px" height="50px">
                                                    </a>
                                                    <div class="pt-3">
                                                        <a href="speaker-profile.html  mt-5">
                                                            {{-- <span class="profile-name"></span> --}}
                                                            <span class="profile-pro ">{{ $user->name }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <hr>
                                        <div id="service_actions" class=" d-flex justify-content-center">
                                            <a href="{{ route('event.status', $service->id) }}"
                                                class="btn btn-success mx-1" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Active">
                                                <i class="fa fa-eye"></i></a>
                                            <a href="{{ route('event.update', $service->id) }}"
                                                class="btn btn-primary mx-1" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Edit">
                                                <i class="fa fa-edit"></i></a>
                                            <a href="{{ route('event.delete', $service->id) }}"
                                                class="btn btn-danger mx-1" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" title="Delete">
                                                <i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
