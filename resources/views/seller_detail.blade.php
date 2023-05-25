@extends('layouts.app')
@section('page_title')
Home | Vendor Detail
@endsection
@section('content')
<div id="detail" class="mt-5 pt-3">
    <section class="page-header">
        <div class="overly"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="content text-center">
                        <h1 class="mb-3 text-white text-capitalize letter-spacing">{{ $user->name }}</h1>
                        <div class="divider mx-auto mb-4 bg-white">
                            <ul class="list-inline">
                                <li class="list-inline-item mt-2"><a href="index-2.html">Seller </a></li>
                                {{-- <li class="list-inline-item">/</li> --}}
                                {{-- <li class="list-inline-item"><a href="index-2.html">{{ $user->name }}</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="speaker-single section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 mb-5 mb-md-0">
                    <img src="{{ asset('images/users/' . $user->userimage) }}" alt="" class="w-100" height="550px">
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="speaker-single-wrap">
                        <div class="speaker-header mb-4">
                            <h2>{{ $user->name }}</h2>
                            {{-- <div class="col-lg-6 col-md-6 offset-lg-1 offset-md-3"> --}}

                            <div class="user_review">

                                @php
                                $count = App\Models\Review::where('service_provider_id',$user->id)->count();
                                $avg = App\Models\Review::where('service_provider_id',$user->id)->avg('ratings');
                                @endphp


                                <div class="rating rate">
                                    <span class="d-inline-block">{{ round($avg,1) }}</span>
                                    @foreach(range(1,5) as $i)
                                    <p class="fa-stack pt-2" style="width:1em">
                                        <i class="far fa-star fa-stack-1x"></i>
                                        @if($avg>0)
                                        @if($avg >0.5)
                                        <i class="fas fa-star fa-stack-1x filled"></i>
                                        @else
                                        <i class="fas fa-star-half fa-stack-1x  filled"></i>
                                        @endif
                                        @endif
                                        @php $avg--; @endphp
                                    </p>
                                    @endforeach
                                </div>
                            </div>
                            {{-- </div> --}}
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
                                <span>{{ $user->email }}</span>
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
                            <a href="{{ $social->fb }}" class="p-1"><img src="{{ asset('images/social/sq_fb.png') }}"
                                    height="30px" width="30px" class="rounded-circle  " alt=""> </a>
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
                                                            <a href="#/" class="name">{{ $edu->institute }}
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
                                                            <a href="#/" class="name">{{ $experience->designation }}</a>
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
                            
                            <!-- Page Content  -->
                            <div class="doc-review review-listing">
                              <ul class="comments-list">
                                @foreach ($users as $sellet )
                                @foreach($sellet->reviews as $review)
                                <li>
                                    <div class="comment">
                                        <img class="avatar rounded-circle" alt="User Image" src="{{asset('images/users/'.$sellet->userimage)}}">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">{{$sellet->name}}</span>
                                                <span class="comment-date">Reviewed
                                                    {{Carbon\Carbon::parse($review->created_at)->diffForhumans() }}</span>
                            
                                                <div class="review-count rating">
                                                    <div class="review-count rating">
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
                                                </div>
                                                {{-- <p class="recommended"><i class="far fa-thumbs-up"></i> I recommend the speaker
                                                </p> --}}
                                                <p class="comment-content">
                                                    {{$review->comment}} </p>
                                                @if($review->reply !='')
                            
                                                <ul class="comments-reply">
                            
                                                    <li>
                                                        <div class="comment">
                                                            <img class="avatar rounded-circle" alt="User Image"
                                                                src="{{asset('images/users/'.$user->userimage)}}">
                                                            <div class="comment-body">
                                                                <div class="meta-data">
                                                                    <span class="comment-author">{{$user->name}}</span>
                                                                    <span class="comment-date">Replied
                                                                        {{
                                                                        Carbon\Carbon::parse($review->reply_on)->diffForhumans() }}</span>
                                                                </div>
                                                                <p class="comment-content">
                                                                    {{$review->reply}}
                                                                </p>
                            
                                                            </div>
                                                        </div>
                                                    </li>
                            
                                                </ul>
                                                @elseif(Auth::user()->id==$user->id)
                                                <div class="comment-reply">
                                                    <form action="{{route('review.update',$review->id)}}" method="POST" class="form-group">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="text" required name="reply" id="reply" value="" class="form-control">
                                                        </div>
                                                        <button type="submit" class="comment-btn border-0">
                                                            Reply <i class="fas fa-reply"></i>
                                                        </button>
                            
                                                    </form>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                            
                                     
                            
                                </li>
                            
                                @endforeach
                                @endforeach
                            
                            
                            </ul>
                            </div>
                            <div class="widget review-listing">
                                <ul class="comments-list">
                                </ul>
                            

                    </div>

                </div>
                <div role="tabpanel" id="services" class="tab-pane fade">
                    <div class="container">
                        <div class="row row-grid">
                            @foreach ($services as $service)
                            @if ($service->status == 1)
                            <div class="col-md-4 col-lg-3 mb-5 px-3 " id="service_card">
                                <div class="border">
                                    <div class="Modern-Slider">
                                        <!-- Item -->
                                        @foreach ($images as $image)
                                        @if ($image->service_id == $service->id)
<a href="{{ route('event.service_detail', ['service_id'=>$service->id,'user_id'=>$service->user_id]) }}">                                            <div class="item">
                                                <div class="img-fill">
                                                    <img alt="User Image"
                                                        src="{{ asset('images/services/' . $image->serviceimages) }}">
                                                </div>
                                            </div>
                                        </a>
                                        @endif
                                        @endforeach
                                    </div>

                                  
                                <div class="pro-content decoration-none">
                                    <h4 class="title pt-2 mt-0 ml-2">
                                        {{-- <span>workshop</span> --}}
                                        <a href="service-details.html">{{ $service->short_description }}</a>
                                    </h4>
                                </div>
                                @php
                                $count =
                                App\Models\Review::where('service_provider_id',$service->user_id)->count();
                                $avg =
                                App\Models\Review::where('service_provider_id',$service->user_id)->avg('ratings');
                                @endphp
                                <p class="add-cont  pt-2 mt-0 ml-2"><i class="fa fa-star"
                                        id="star">{{ round($avg,1) }}</i>
                                    <span>({{  $count}})</span>
                                </p>
                                <hr>
                                <div class="d-flex bd-highlight mx-3">
                                    <div class="mr-auto bd-highlight"><i class="fa-regular fa-heart"></i>
                                    </div>
                                    <div class="  bd-highlight">6597 PKR</div>
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
@include('layouts.footer')
@endsection
