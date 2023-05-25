@extends('layouts.vendor')
@section('page_title')
Dashboard | Create Services
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('event.index')}}">Service</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Add Service</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
<form action="{{ route('event.create') }} " method="POST" enctype="multipart/form-data">
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
                                        multiple >
                                    </div>
                                    <small class="form-text text-muted">Allowed JPG, GIF,JFIF or PNG. Max size of 2MB</small>
                                    @error('serviceimages')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-1 text-center">
                        <div class="images-preview-div"> </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label>Service Name <span class="text-danger">(One word to One line )</span></label>
                        <input type="text" class="form-control @error('short_description')

                        @enderror" value="{{ old('short_description') }}" name="short_description" onkeyup="countChar_des(this)">
                        @error('short_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                        <div><span id="left_small"></span> <span id="charNum_des" class="text-primary"></span> </div>
                    </div>
                    <div>
                    </div>
                    <div class="col-12">
                        <label>Descritprion</label>
                        <div class="form-group">
                            <textarea class="summernote @error('Descripition')

                            @enderror" rows="5" name="Descripition"  id="field"
                                onkeyup="countChar(this)">{{ old('Descripition') }}</textarea>
                                @error('Description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            <div><span id="left-large"></span> <span id="charNum" class="text-primary"></span> </div>
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
                <input class="form-control" type="text" data-role="tagsinput" name="tags" value="{{ old('tags') }}">
                @if ($errors->has('tags'))
                <span class="text-danger">{{ $errors->first('tags') }}</span>
                @endif
                <small class="form-text text-muted">Note : Type & Press enter to add new tag</small>
            </div>
            <div class="form-group">
                <label for="category_list">Categories</label>
                <select data-placeholder="Choose a Category..." name="categories_id[]" multiple="multiple" multiple
                    class="chosen-select form-control @error('categories_id')

                    @enderror">
                    @foreach ($categories as $category)
                    <option  value="{{ $category->id }}">{{ $category->name }}
                    </option>
                    @endforeach
                </select>
                @error('categories_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Pricing</h4>
            <div class="mx-4">
                <div class="row g-3 align-items-center mt-3">
                    <div class="col-auto">
                        <label class="col-form-label">Price</label>
                    </div>
                    <div class="col-auto">
                        <input type="number" class="form-control @error('charges')

                        @enderror" name="charges" placeholder="Price in Rupee" value="{{ old('charges') }}">
                        @error('charges')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                            per day
                        </span>
                    </div>
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
