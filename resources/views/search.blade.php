@extends('layouts.app')
@section('page_title')
Home | Services
@endsection
@section('content')
<div class="container mt-5 pt-3">
    {{-- search by Category --}}
    @if ($cat_id->isNotEmpty())
    <div class="row row-grid">
        @foreach ($cat_id as $category)
        @foreach ($service_categories as $service_category )
        @if ($category->id==$service_category->category_id)
        @foreach ($service as $serv)
        @if ($serv->id == $service_category->service_id)
        <div class="col-md-4 col-lg-3 mb-3 px-3 " id="service_card">
            <div class="border">
                <div class="Modern-Slider">
                    <!-- Item -->
                    @foreach ($images as $image)
                    @if ($image->service_id == $serv->id)
                    <a href="{{ route('event.service_detail', ['service_id'=>$serv->id,'user_id'=>$serv->user_id]) }}">
                        <div class="item">
                            <div class="img-fill">
                                <img alt="User Image" src="{{ asset('images/services/' . $image->serviceimages) }}">
                            </div>
                        </div>
                    </a>
                    @endif
                    @endforeach
                </div>
                @foreach ($users as $user)
                @if ($user->id == $serv->user_id)
                <div class="profile-info d-flex mb-0 ml-3">
                    <a href="{{ route('seller.seller_detail', $user->id) }}" class="profile-img">
                        <img src="{{ url('images/users/' . $user->userimage) }}" alt="" width="50px" height="50px">
                    </a>
                    <div class="pt-3 ">
                        <a href="{{ route('seller.seller_detail', $user->id) }}">
                            <span class="profile-pro ">{{ $user->name }}</span>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="pro-content decoration-none">
                    <h4 class="title pt-2 mt-0 ml-2">
                    <a href="{{ route('event.service_detail', ['service_id'=>$serv->id,'user_id'=>$serv->user_id]) }}">
                            {{ $serv->short_description }}</a>
                    </h4>
                </div>
                @php
                $count = App\Models\Review::where('service_provider_id',$serv->user_id)->count();
                $avg = App\Models\Review::where('service_provider_id',$serv->user_id)->avg('ratings');
                @endphp
                <p class="add-cont  pt-2 mt-0 ml-2"><i class="fa fa-star" id="star">{{ round($avg,1) }}</i>
                    <span>({{  $count}})</span>
                </p>
                <hr>
                <div class="d-flex bd-highlight mx-3">
                    <div class="mr-auto bd-highlight"><i class="fa-regular fa-heart"></i></div>
                    <div class="  bd-highlight">RS {{ $serv->charges }} </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endif
        @endforeach
        @endforeach
    </div>
    {{-- search by tags --}}
    @elseif ($tags->isNotEmpty())
    <div class="row row-grid">
        @foreach ($tags as $tag)
        @foreach ($service as $serv)
        @if ($serv->id == $tag->taggable_id)
        <div class="col-md-4 col-lg-3 mb-3 px-3 " id="service_card">
            <div class="border">
                <div class="Modern-Slider">
                    @foreach ($images as $image)
                    @if ($image->service_id == $serv->id)
                    <a href="{{ route('event.service_detail', $serv->id) }}">
                        <div class="item">
                            <div class="img-fill">
                                <img alt="User Image" src="{{ asset('images/services/' . $image->serviceimages) }}">
                            </div>
                        </div>
                    </a>
                    @endif
                    @endforeach
                </div>
                @foreach ($users as $user)
                @if ($user->id == $serv->user_id)
                <div class="profile-info d-flex mb-0 ml-3">
                    <a href="{{ route('seller.seller_detail', $user->id) }}" class="profile-img">
                        <img src="{{ url('images/users/' . $user->userimage) }}" alt="" width="50px" height="50px">
                    </a>
                    <div class="pt-3 ">
                        <a href="{{ route('seller.seller_detail', $user->id) }}">
                            <span class="profile-pro ">{{ $user->name }}</span>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="pro-content decoration-none">
                    <h4 class="title pt-2 mt-0 ml-2">
                        <a href="service-details.html">{{ $serv->short_description }}</a>
                    </h4>
                </div>
                @php
                $count = App\Models\Review::where('service_provider_id',$serv->user_id)->count();
                $avg = App\Models\Review::where('service_provider_id',$serv->user_id)->avg('ratings');
                @endphp
                <p class="add-cont  pt-2 mt-0 ml-2"><i class="fa fa-star" id="star">{{ round($avg,1) }}</i>
                    <span>({{  $count}})</span>
                </p>
                <hr>
                <div class="d-flex bd-highlight mx-3">
                    <div class="mr-auto bd-highlight"><i class="fa-regular fa-heart"></i></div>
                    <div class="  bd-highlight">RS {{ $serv->charges }} </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        @endforeach
    </div>
    {{-- search by service name --}}
    @elseif($services->isNotEmpty())
    <div class="row row-grid">
        @foreach ($services as $service)
        <div class="col-md-4 col-lg-3 mb-3 px-3 " id="service_card">
            <div class="border">
                <div class="Modern-Slider">
                    @foreach ($images as $image)
                    @if ($image->service_id == $service->id)
                    <a href="{{ route('event.service_detail', $service->id) }}">
                        <div class="item">
                            <div class="img-fill">
                                <img alt="User Image" src="{{ asset('images/services/' . $image->serviceimages) }}">
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
                        <img src="{{ url('images/users/' . $user->userimage) }}" alt="" width="50px" height="50px">
                    </a>
                    <div class="pt-3 ">
                        <a href="{{ route('seller.seller_detail', $user->id) }}">
                            <span class="profile-pro ">{{ $user->name }}</span>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="pro-content decoration-none">
                    <h4 class="title pt-2 mt-0 ml-2">
                        <a href="service-details.html">{{ $service->short_description }}</a>
                    </h4>
                </div>
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
            </div>
        </div>
        @endforeach
    </div>
    {{-- error not fund --}}
    @else
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img src="{{ asset('images/about/no_data.png') }}" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6">
            <div class="error-content mt-5 mt-lg-0">
                <h3>Nothing Found!</h3>
                <p class="mt-3">Sorry, but nothing matched your search terms. Please try again with
                    some different keywords.Lets search again .</p>
                <a href="{{ route('home') }}" class="btn btn-hero btn-rounded mt-3">Go to home</a>
            </div>
        </div>
    </div>
    @endif
</div>
@include('layouts.footer')
@endsection
