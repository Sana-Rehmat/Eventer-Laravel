@extends('layouts.vendor')
@section('page_title')
Vendor Dashboard | Profile
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Vendor Profile</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')

<div class="card">
    <div class="card-body">
        <div class="row  justify-content-end  mb-2">
            <div class="col-10">
                <h4 class="card-title">Profile</h4>
            </div>
            <div class="col-2">
                <!-- Button trigger modal -->
                @if (isset($profile->user_id))
                <a href="{{ route('profile.update', $profile->id) }}" class="btn btn-primary"><i
                        class="fa fa-edit"></i></a>
                @else
                <a href="{{ route('profile.create') }}" class="btn btn-primary">Add</a>
                @endif
            </div>
        </div>
        <hr>
        <section class="speaker-single section pt-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-5 mb-5 mb-md-0">
                        <img src="{{ asset('images/users/' . Auth::user()->userimage) }}" alt="" class="w-100"
                            height="550px">
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="speaker-single-wrap">
                            <div class="speaker-header mb-4">
                                <h2>{{ Auth::user()->name}}</h2>
                                {{-- <span class="text-color">Founder ,Elite Group</span> --}}
                            </div>
                            @if (isset($profile->bio))
                            <p>{{ $profile->bio }}</p>
                            @endif
                            <div id="details" class="px-5 pt-2">
                                @if (isset($profile->DOB))
                                <p>
                                    <i class="fa fa-calendar  mr-3"></i>
                                    <span>{{ $profile->DOB }}</span>
                                </p>
                                @endif
                                <p> <i class="fa fa-envelope mr-3" aria-hidden="true"></i>
                                    <span>{{ Auth::user()->email }}</span>
                                </p>
                                @if (isset($profile->Phone_no))
                                <p> <i class="fa fa-phone mr-3" aria-hidden="true"></i>
                                    <span>{{ $profile->Phone_no }} </span>
                                </p>
                                @endif
                                @if (isset($profile->address))
                                <p> <i class="fa fa-home mr-3" aria-hidden="true"></i>
                                    <span>{{ $profile->address }}</span>
                                </p>
                                @endif
                            </div>
                            <h5 class="mb-3 mt-5">Follow Me</h5>
                            <div id="social" class="p-3 ">
                                @if (isset($social->fb))
                                <a href="{{ $social->fb }}" class="p-1"><img
                                        src="{{ asset('images/social/sq_fb.png') }}" height="30px" width="30px"
                                        class="rounded-circle  " alt=""> </a>
                                @endif
                                @if (isset($social->insta))
                                <a href="{{ $social->insta }}" class="p-1"><img
                                        src="{{ asset('images/social/sq_insta.jpg') }}" height="30px" width="30px"
                                        class="rounded-circle  " alt=""></a>
                                @endif
                                @if (isset($social->youtube))
                                <a href="{{ $social->youtube }}" class="p-1"><img
                                        src="{{ asset('images/social/sq_youtube.jpg') }}" height="30px" width="30px"
                                        class="rounded-circle  " alt=""></a>
                                @endif
                                @if (isset($social->linkidin))
                                <a href="{{ $social->linkidin }}" class="p-1"><img
                                        src="{{ asset('images/social/linkidin.png') }}" height="30px" width="30px"
                                        class="rounded-circle  " alt=""></a>
                                @endif
                                @if (isset($social->twitter))
                                <a href="{{ $social->twitter }}" class="p-1"><img
                                        src="{{ asset('images/social/sq_twitter.png') }}" height="30px" width="30px"
                                        class="rounded-circle  " alt=""></a>
                                @endif
                                @if (isset($social->printrest))
                                <a href="{{ $social->printrest }}" class="p-1"><img
                                        src="{{ asset('images/social/sq_printresr.png') }}" height="30px" width="30px"
                                        class="rounded-circle  " alt=""></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="card">
                    <div class="card-body pt-0">
                        <nav class="user-tabs mb-4">
                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#doc_overview" data-toggle="tab">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#doc_reviews" data-toggle="tab">Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#services" data-toggle="tab">Services</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="tab-content pt-0">
                            <div role="tabpanel" id="doc_overview" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col-md-12 col-lg-9">
                                        <div class="widget education-widget">
                                            <h4 class="widget-title">Education</h4>
                                            <div class="experience-box">
                                                <ul class="experience-list">
                                                    @foreach ($education as $edu)
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <a href="#" class="exp-year">{{ $edu->institute }}
                                                                </a>
                                                                <div>{{ $edu->Degree }}</div>
                                                                <span class="time">{{ $edu->start_year }} -
                                                                    {{ $edu->end_year }}</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="widget experience-widget">
                                            <h4 class="widget-title">Work &amp; Experience</h4>
                                            <div class="experience-box">
                                                <ul class="experience-list">
                                                    @foreach ($experiences as $experience)
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <a href="#" class="exp-year">{{ $experience->designation
                                                                    }}</a>
                                                                <div>{{ $experience->organization }}</div>
                                                                <span class="time">{{ $experience->start }} -
                                                                    {{ $experience->end }} </span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="widget awards-widget">
                                            <h4 class="widget-title">Awards</h4>
                                            <div class="experience-box">
                                                <ul class="experience-list">
                                                    @foreach ($awards as $award)
                                                    <li>
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content">
                                                            <div class="timeline-content">
                                                                <p class="exp-year">{{ $award->year }}</p>
                                                                <h4 class="exp-title">{{ $award->award }}</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Proin a ipsum tellus. Interdum et malesuada fames ac
                                                                    ante ipsum primis in faucibus.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" id="doc_reviews" class="tab-pane fade">
                                <div class="widget review-listing">
                                    <ul class="comments-list">
                                        @foreach ($reviews as $review )
                                        @if ($review->service_provider_id==Auth::user()->id)
                                        @foreach ($users as $user)
                                        @if($user->id==$review->user_id)
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt=""
                                                        src="{{ asset('images/users/'.$user->userimage) }}">
                                                </div>
                                                <div class="comment-block">
                                                    <span class="comment-by">
                                                        <span class="blog-author-name">{{ $user->name }}</span> <span
                                                            class="blog-date">
                                                            ({{
                                                            Carbon\Carbon::parse($review->created_at)->diffForhumans()
                                                            }})
                                                        </span>
                                                        @endif
                                                        @endforeach
                                                    </span>
                                                    <div class="rating mb-4">
                                                        @foreach(range(1,5) as $i)
                                                        <span class="fa-stack" style="width:1em">
                                                            <i class="far fa-star fa-stack-1x"></i>
                                                            @if($review->ratings>0)
                                                            @if($review->ratings >0.5)
                                                            <i class="fas fa-star fa-stack-1x filled"></i>
                                                            @else
                                                            <i class="fas fa-star-half fa-stack-1x  filled"></i>
                                                            @endif
                                                            @endif
                                                            @php $review->ratings--; @endphp
                                                        </span>
                                                        @endforeach
                                                    </div>
                                                    <p>{{ $review->comment }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @elseif ($loop->first)
                                        {{-- This is the first iteration --}}
                                        <h1 class="text-center no_reviews">No Reviews Yet</h1>
                                        @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div role="tabpanel" id="services" class="tab-pane fade">
                                <div class="container">
                                    <div class="row row-grid">
                                        @foreach ($services as $service)
                                        @if ($service->status == 1)
                                        <div class="col-md-6 col-lg-4 mb-5" id="service_card">
                                            <div class="border">
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
                                                <div class="pro-content decoration-none ">
                                                    <h3 class="title pt-0 mt-0">
                                                        {{-- <span>workshop</span> --}}
                                                        <a href="{{ route('event.service_detail',['service_id'=>$service->id,'user_id'=>$service->user_id]) }}">{{
                                                            $service->short_description }}</a>
                                                    </h3>
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
                </div>
            </div>
        </section>
    </div>
</div>
</div>
@endsection