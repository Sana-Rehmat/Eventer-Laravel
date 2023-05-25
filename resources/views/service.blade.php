@extends('layouts.app')
@section('page_title')
    Home | Services
@endsection
@section('content')
    <div class="container mt-5 pt-3">
        <div class="row row-grid">
            @foreach ($service_categories as $service_category )
            @foreach ($services as $service)

                @if ($service->id == $service_category->service_id)
                    <div class="col-md-4 col-lg-3 mb-3 px-3 " id="service_card">

                        <div class="border">
                            <div class="Modern-Slider">
                                <!-- Item -->
                                @foreach ($images as $image)
                                    @if ($image->service_id == $service->id)
                                        <a href="{{ route('event.service_detail',['service_id'=>$service->id,'user_id'=>$service->user_id]) }}">
                                            <div class="item">
                                                <div class="img-fill">
                                                    <img alt="User Image"
                                                        src="{{ asset('images/services/' . $image->serviceimages) }}">
                                                </div>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            @foreach ($users as $user)
                                @if ($user->id == $service->user_id)
                                    <div class="profile-info d-flex mb-0 ml-3">
                                        <a href="{{ route('seller.seller_detail', $user->id) }}" class="profile-img">
                                            <img src="{{ url('images/users/' . $user->userimage) }}" alt=""
                                                width="50px" height="50px">
                                        </a>
                                        <div class="pt-3 ">
                                            <a href="{{ route('seller.seller_detail', $user->id) }}">
                                                {{-- <span class="profile-name"></span> --}}
                                                <span class="profile-pro ">{{ $user->name }}</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pro-content decoration-none">
                                        <h4 class="title pt-2 mt-0 ml-2">
                                            {{-- <span>workshop</span> --}}
                                            <a href="{{ route('event.service_detail',['service_id'=>$service->id,'user_id'=>$service->user_id]) }}">{{ $service->short_description }}</a>
                                        </h4>
                                    </div>
                                    @endif
                                @endforeach
                             @php
                                            $count = App\Models\Review::where('service_provider_id',$service->user_id)->count();
                                            $avg = App\Models\Review::where('service_provider_id',$service->user_id)->avg('ratings');
                            @endphp
                            <p class="add-cont  pt-2 mt-0 ml-2"><i class="fa fa-star" id="star">{{ round($avg,1) }}</i>
                                <span>({{  $count}})</span>
                            </p>
                            <hr>
                            <div class="d-flex bd-highlight mx-3">
                                <div class="mr-auto bd-highlight"><i class="fa-regular fa-heart"></i></div>
                                <div class="  bd-highlight">RS {{ $service->charges }} </div>
                            </div>
                            {{-- <p class="px-3 d-flex justify-content-start"><i class="fa-regular fa-heart"></i>
                            </p>
                            <span class="d-flex justify-content-end">6597 PKR</span> --}}
                        </div>
                    </div>
                @endif
                            @endforeach

            @endforeach
        </div>
    </div>
    @include('layouts.footer')
@endsection
