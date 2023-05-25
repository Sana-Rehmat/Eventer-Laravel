@extends('layouts.vendor')
@section('page_title')
Vendor Reviews
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Reviews</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
<h4>Reviews</h4>
<div class="rating mb-4">
    <span class="bg-success text-white p-1">{{ round($avg,1)}}</span>
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
<!-- Page Content  -->
<div class="doc-review review-listing">
    <ul class="comments-list">
        @foreach ($users as $user )
        @foreach($user->reviews as $review)
        <li>
            <div class="comment">
                <img class="avatar rounded-circle" alt="User Image" src="{{asset('images/users/'.$user->userimage)}}">
                <div class="comment-body w-100">

                    <div class="meta-data w-100">

                        <span class="comment-author">{{$user->name}}</span>
                        <span class="comment-date">Reviewed {{
                            Carbon\Carbon::parse($review->created_at)->diffForhumans() }}</span>
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
                            {{-- <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i> --}}
                        </div>
                    </div>
                    <p class="comment-content">
                        {{$review->comment}}
                    </p>
                    @if($review->reply !='')
                    <ul class="comments-reply">

                        <li>
                            <div class="comment">
                                <img class="avatar rounded-circle" alt="User Image"
                                    src="{{asset('images/users/'.Auth::user()->userimage)}}">
                                <div class="comment-body">
                                    <div class="meta-data">
                                        <span class="comment-author">{{Auth::user()->name}}</span>
                                        <span class="comment-date">Replied {{
                                            Carbon\Carbon::parse($review->reply_on)->diffForhumans() }}</span>
                                    </div>
                                    <p class="comment-content">
                                        {{$review->reply}}
                                    </p>

                                </div>
                            </div>
                        </li>

                    </ul>
                    @else
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

@endsection