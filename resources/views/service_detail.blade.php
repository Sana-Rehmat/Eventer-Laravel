@extends('layouts.app')
@section('page_title')
Home | Services Detail
@endsection
@section('content')
<div id="detail" class="mt-5 pt-3">
    <section class="page-header">
        <div class="overly"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="content text-center">
                        <h1 class="mb-3 text-white text-capitalize letter-spacing">Service Details</h1>
                        <div class="divider mx-auto mb-4 bg-white"></div>
                        {{-- <ul class="list-inline">
                            <li class="list-inline-item"><a href="index-2.html">Home</a></li>
                            <li class="list-inline-item">/</li>
                            <li class="list-inline-item"><a href="index-2.html">Speaker Single</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content">
        <div class="container">
            <div class="row event-details align-items-center">
                <div class="col-lg-6 col-md-6 offset-lg-1 offset-md-3">
                    <ul class="available-info">
                        <li>
                            <h2>{{ $service->short_description }} <i
                                    class="fas fa-check-circle verified text-success ml-2"></i></h2>
                        </li>
                        <li>
                            <p><i class="fas fa-user"></i><a
                                    href="{{route('seller.seller_detail',$seller->id)}}">{{ $seller->name }}</a></p>
                            @php
                            $count = App\Models\Review::where('service_provider_id',$seller->id)->count();
                            $avg = App\Models\Review::where('service_provider_id',$seller->id)->avg('ratings');
                            @endphp

                        </li>
                    </ul>
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
                <div class="col-lg-4 col-md-6 text-right">
                    <a href="{{ route('checkout',$service->id) }}" class="btn book-btn">Book Now</a>
                    <a href="javascript:void(0);" class="rate cursor-auto" tabindex="0">RS 450.00/day</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="blog-view">
                        <div class="blog blog-single-post">
                            <div class="Modern-Slider-full">
                                <!-- Item -->
                                @foreach ($images as $image)
                                <a
                                    href="{{ route('event.service_detail', ['service_id'=>$service->id,'user_id'=>$service->user_id]) }}">
                                    <div class="item">
                                        <div class=" blog-image img-fill">
                                            <img alt="User Image"
                                                src="{{ asset('images/services/' . $image->serviceimages) }}"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>

                            <h3 class="blog-title">Service Description</h3>
                            <div class="blog-content">
                                {!!$service->Descripition!!}
                            </div>
                        </div>
                        <div class="blog blog-single-post">
                            <h4 class="card-title">Tags</h4>
                            <div class="blog-content">
                                <div class="tags">
                                    @foreach ($tags as $setvice_tags )
                                    <span class="tag">
                                        <form action="{{ route('search') }}" class="d-inline" method="POST"
                                            role="search">
                                            @csrf
                                            <input type="hidden" name="search" value="{{  $setvice_tags->tag_name  }}">
                                            <button type="submit" class="submit d-inline ">
                                                {{ $setvice_tags->tag_name }}</button>
                                        </form>

                                    </span>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div class="blog blog-single-post">
                            <h4 class="card-title">Categories</h4>
                            <div class="blog-content">
                                <div class="tags">
                                    @foreach ($service_category as $category )
                                    <a href="{{ route('event.service',$category->category_id) }}">
                                        {{ $category->category_name }}
                                    </a>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                        {{-- comments section --}}
                        {{-- comments section --}}
                        <div class="card blog-comments clearfix ">
                            <div class="card-header">

                                <h4 class="card-title">Reviews For {{ $seller->name }}</h4>
                                @php
                                $count = App\Models\Review::where('service_provider_id',$seller->id)->count();
                                $avg = App\Models\Review::where('service_provider_id',$seller->id)->avg('ratings');
                                @endphp

                            </div>
                            <div class="card-body pb-0">
                                <div class="rating mb-4">
                                    <span class="bg-success text-white">{{ round($avg,1)}}</span>
                                    @foreach(range(1,5) as $i)
                                    <span class="fa-stack" style="width:1em">
                                        <i class="far fa-star fa-stack-1x"></i>
                                        @if($avg>0)
                                        @if($avg >0.5)
                                        <i class="fas fa-star fa-stack-1x filled"></i>
                                        @else
                                        <i class="fas fa-star-half fa-stack-1x  filled"></i>
                                        @endif
                                        @endif
                                        @php $avg--; @endphp
                                    </span>
                                    @endforeach
                                    <span class="d-inline-block average-rating">({{$count}} Rating)</span>
                                </div>

                            </div>
                        </div>
                        {{-- --}}
                        <div class="doc-review review-listing">

                            <ul class="comments-list">
                                @foreach ($users as $user )
                                @foreach($user->reviews as $review)
                                <li>
                                    <div class="comment">
                                        <img class="avatar rounded-circle" alt="User Image"
                                            src="{{asset('images/users/'.$user->userimage)}}">
                                        <div class="comment-body">
                                            <div class="meta-data">
                                                <span class="comment-author">{{$user->name}}</span>
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
                                                                src="{{asset('images/users/'.$seller->userimage)}}">
                                                            <div class="comment-body">
                                                                <div class="meta-data">
                                                                    <span
                                                                        class="comment-author">{{$seller->name}}</span>
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
                                                @elseif(Auth::user()->id==$seller->id)
                                                <div class="comment-reply">
                                                    <form action="{{route('review.update',$review->id)}}" method="POST"
                                                        class="form-group">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="text" required name="reply" id="reply" value=""
                                                                class="form-control">
                                                        </div>
                                                        <button type="submit" class="comment-btn border-0">
                                                            Reply <i class="fas fa-reply"></i>
                                                        </button>

                                                    </form>
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                        {{-- <ul class="comments-reply">
                        
                                        <li>
                                            <div class="comment">
                                                <img class="avatar rounded-circle" alt="User Image"
                                                    src="assets/img/speakers/speaker-thumb-02.jpg">
                                                <div class="comment-body">
                                                    <div class="meta-data">
                                                        <span class="comment-author">Wayte Barlow</span>
                                                        <span class="comment-date">Reviewed 3 Days ago</span>
                                                    </div>
                                                    <p class="comment-content">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                        Ut enim ad minim veniam.
                                                        Curabitur non nulla sit amet nisl tempus
                                                    </p>
                                                    <div class="comment-reply">
                                                        <a class="comment-btn" href="#">
                                                            <i class="fas fa-reply"></i> Reply
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                        
                                    </ul> --}}

                                </li>

                                @endforeach
                                @endforeach


                            </ul>

                        </div>
                        {{-- --}}
                        {{-- <div class="card blog-comments clearfix ">
                            <div class="card-header">
                                @foreach ($users as $user)
                                @if ($user->id == $service->user_id)
                                <h4 class="card-title">Reviews For {{ $user->name }}</h4>
                        @php
                        $count = App\Models\Review::where('service_provider_id',$user->id)->count();
                        $avg = App\Models\Review::where('service_provider_id',$user->id)->avg('ratings');
                        @endphp
                        @endif
                        @endforeach
                    </div>
                    <div class="card-body pb-0">
                        <div class="rating mb-4">
                            <span class="bg-success text-white">{{ round($avg,1)}}</span>
                            @foreach(range(1,5) as $i)
                            <span class="fa-stack" style="width:1em">
                                <i class="far fa-star fa-stack-1x"></i>
                                @if($avg>0)
                                @if($avg >0.5)
                                <i class="fas fa-star fa-stack-1x filled"></i>
                                @else
                                <i class="fas fa-star-half fa-stack-1x  filled"></i>
                                @endif
                                @endif
                                @php $avg--; @endphp
                            </span>
                            @endforeach
                            <span class="d-inline-block average-rating">({{$count}} Rating)</span>
                        </div>
                        <ul class="comments-list">
                            @foreach ($users as $user )
                            @foreach($reviews as $review)
                            @if($user->id==$review->user_id)
                            <li>
                                <div class="comment">
                                    <div class="comment-author">
                                        <img class="avatar" alt="" src="{{ asset('images/users/'.$user->userimage) }}">
                                    </div>
                                    <div class="comment-block">
                                        <span class="comment-by">
                                            <span class="blog-author-name">{{ $user->name }}</span> <span
                                                class="blog-date">
                                                ({{ Carbon\Carbon::parse($review->created_at)->diffForhumans()
                                                        }})
                                            </span>
                                        </span>
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
                                    <p class="comment-content">
                                        {{$review->comment}}
                                    </p>
                                    @if($review->reply !='')
                                    <ul class="comments-list">
                                        <li>
                                            <div class="comment">
                                                <div class="comment-author">
                                                    <img class="avatar" alt=""
                                                        src="{{ asset('images/users/'.$user->userimage) }}">
                                                </div>
                                                <div class="comment-block">
                                                    <span class="comment-by">
                                                        <span class="blog-author-name">{{ $user->name }}</span>
                                                        <span class="blog-date d-block">

                                                            ({{
                                                                    Carbon\Carbon::parse($review->reply_on)->diffForhumans()
                                                                    }})
                                                        </span>
                                                    </span>
                                                    <p class="comment-content">
                                                        {{$review->reply}}
                                                    </p>

                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                    @else
                                    <div class="comment-reply">
                                        @if (Route::has('login'))
                                        @if (Auth::user()->id==$review->service_provider_id)

                                        <form action="{{route('review.update',$review->id)}}" method="POST"
                                            class="form-group">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" required name="reply" id="reply" value=""
                                                    class="form-control">
                                            </div>
                                            <button type="submit" class="comment-btn border-0">
                                                Reply <i class="fas fa-reply"></i>
                                            </button>

                                        </form>
                                        @endif
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            </li>
                            @endif
                            @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
</div>
</div>
@include('layouts.footer')
@endsection
