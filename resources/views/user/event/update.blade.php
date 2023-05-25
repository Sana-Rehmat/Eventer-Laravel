@extends('layouts.vendor')
@section('page_title')
Dashboard | Update Services
@endsection
@section('user_content')
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('event.index')}}">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Update Service</h2>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .preview-div {
        position: relative;
        width: 100%;
        max-width: 400px;
        display: inline;
    }

    .images-preview-div img {
        padding: 10px;
        width: 170px;
        height: 100px;
    }

    .preview-div .close {
        position: absolute;
        bottom: 50%;
        left: 90%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        /* background-color: #555; */
        color: red;
        font-size: 16px;
        padding: 12px 24px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        text-align: center;
    }

    .preview-div .close:hover {
        background-color: black;
    }

</style>
<form action="{{ route('event.update', $service->id) }} " method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Service Information</h4>
            <div class="row form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="change-avatar">
                            <div class="upload-img">
                                <div class="change-photo-btn">
                                    <span><i class="fa fa-upload"></i> Upload Photos</span>
                                    <input type="file" class="upload @error('serviceimages')
is-invalid
                                    @enderror" name="serviceimages[]" id="serviceimages"
                                        multiple>
                                </div>
                                <small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
                                 @error('serviceimages')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3 text-center">
                            <div class="images-preview-div">
                                        @foreach($images as $image)

                                <div class="preview-div">

                                            <img src="{{ asset('images/services/' . $image->serviceimages) }}"
                                    alt="Snow" style="width:100%">
                                    <a href="{{ route('event.deleteImage', $image->id) }}" class="close text-danger" data-bs-toogle="tooltip" data-bs-pacement="bottom"
                                    title="Remove">
                                    <span> &times;</span></a>


                                </div>
                                @endforeach

                            </div>
                            {{-- <div class="preview-div">
                                        @foreach($images as $image)
                                        <div class="d-inline">

                                            <img src="{{ asset('images/services/' . $image->serviceimages) }}"
                            alt="product image" class="img-fluid rounded mb-3" width="100px" height="100px">
                            <a class="close text-danger" href="{{ route('event.deleteImage', $image->id) }}"
                                data-bs-toogle="tooltip" data-bs-pacement="bottom" title="Remove">
                                <span> &times;</span></a>
                        </div>
                        @endforeach

                    </div> --}}
                </div>
            </div>
        </div>
        {{-- <div class="col-12">
                        <div class="mt-1 text-center">
                            <div class="preview-div">
                                @foreach ($images as $image)
                                    @if ($image->service_id == $service->id)
                                        <div class="  d-inline">
                                            <img src="{{ asset('images/services/' . $image->serviceimages) }}"
        alt="image" class="w-100" height="150px">
        <a href="{{ route('event.deleteImage', $image->id) }}" data-bs-toggle="tooltip" data-bs-placement="bottom"
            title="Remove Permanantly">
            <span class="close">&times;</span></a>
    </div>
    @endif
    @endforeach
    </div>
    </div>
    </div> --}}
    <div class="col-12">
        <div class="form-group">
            <label>Service Name <span class="text-danger">(One word to One line )</span></label>
            <input type="text" class="form-control" name="short_description" value="{{ $service->short_description }}">
        </div>
        <div>
        </div>
        <div class="col-12">
            <div class="form-group mb-0 P-0">
                <label>Descritprion</label>
                <div class="form-group">
                    <textarea class="summernote" rows="5" name="Descripition" id="field"
                        onkeyup="countChar(this)">{{ $service->Descripition }}</textarea>
                    <div><span id="left-large"></span> <span id="charNum" class="text-primary"></span> </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="card services-card">
        <div class="card-body">
            <h4 class="card-title">Tags and Categories</h4>
            <div class="form-group">
                <label>Tags</label>


                <input class="form-control" type="text" data-role="tagsinput" name="tags" id="inputTag">
                @if ($errors->has('tags'))
                <span class="text-danger">{{ $errors->first('tags') }}</span>
                @endif
                <small class="form-text text-muted">Note : Type & Press enter to add new tag</small>
            </div>
            @foreach ($service->tags as $tag)
            <div class="review-tagsinput d-inline"><span class="tag badge badge-info">{{ $tag->name }}

                    <a href="{{ route('event.deleteTag', ['id' => $service->id, 'name' => $tag->name]) }}">
                        <span class="badge text-light"><i class="fa fa-remove"></i></span></a>
            </div>
            @endforeach

            <div class="form-group">
                <label for="category_list">Categories</label>
                <select data-placeholder="Choose a Category..." name="categories_id[]" multiple="multiple" multiple
                    class="chosen-select form-control ">
                    @foreach ($categories as $category)
                    @foreach ($user_category as $u_category)
                    @if ($u_category->service_id == $service->id)
                    <option value="{{ $category->id }}"
                        {{ $category->id == $u_category->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endif
                    @endforeach
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Pricing</h4>
            {{-- <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="" class="col-form-label">Offer</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" class="form-control" name="offer" value="{{ $service->offer }}">
        </div>
    </div> --}}
    <div class="row g-3 align-items-center mt-3">
        <div class="col-auto">
            <label class="col-form-label">Price</label>
        </div>
        <div class="col-auto">
            <input type="number" class="form-control" name="charges" value="{{ $service->charges }}">
        </div>
        <div class="col-auto">
            <span id="passwordHelpInline" class="form-text">
                RS Per Day
            </span>
        </div>
    </div>
    </div>
    </div>
    <div class="submit-section submit-btn-bottom">
        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
    </div>
    </div>
</form>
@endsection
