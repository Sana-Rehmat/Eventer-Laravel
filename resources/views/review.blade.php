@extends('layouts.app')
@section('page_title')
    Home | Review
@endsection
@section('content')
<div class="container mt-5 pt-3">
    <div class="card">
    <div class="card-body">
        <div class="card-title">Write a Review</div>
        <hr>
        <form action="{{ route('review.create', ['order_id'=>$order->id,'user_id'=>$user_provider->id])}}" method="POST">
            @csrf
            <div class="rating-css">
    <div class="star-icon">
        <input type="radio" value="1" name="ratings" checked id="rating1">
        <label for="rating1" class="fa fa-star"></label>
        <input type="radio" value="2" name="ratings" id="rating2">
        <label for="rating2" class="fa fa-star"></label>
        <input type="radio" value="3" name="ratings" id="rating3">
        <label for="rating3" class="fa fa-star"></label>
        <input type="radio" value="4" name="ratings" id="rating4">
        <label for="rating4" class="fa fa-star"></label>
        <input type="radio" value="5" name="ratings" id="rating5">
        <label for="rating5" class="fa fa-star"></label>
    </div>
</div>
            <div class="form-group form-check">
                <label>Comment</label>
                <textarea name="comment" id="" cols="30" rows="10" class="form-control @error('comment') is-invalid @enderror"
                                        autocomplete="comment" autofocus>
                                    </textarea>
                                    @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>

@endsection
