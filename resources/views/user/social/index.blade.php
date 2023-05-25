@extends('layouts.vendor')
@section('page_title')
    Vendor Dashboard | Social Media Links
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Social Media</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title"> Social Media</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
    <!-- Create Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Social Links</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('social.create') }}" method="POST" class="form-group">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                {{-- <h4 class="card-title">Social Links</h4> --}}
                                <div class="education-info">
                                    <div class="row form-row education-cont">
                                        <div class="col-12">
                                            <div class="row form-row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" class="form-control" name="fb">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Linkidin</label>
                                                        <input type="text" class="form-control" name="linkidin">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input type="text" class="form-control" name="twitter">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Printest</label>
                                                        <input type="text" class="form-control" name="printrest">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Youtube</label>
                                                        <input type="text" class="form-control" name="youtube">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input type="text" class="form-control" name="insta">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary float-right" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Ebd --}}
    <!-- Update Modal -->
    <div class="modal fade" id="UpdateSocial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Social Links</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('social.update') }}" method="POST" class="form-group">
                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <div class="education-info">
                                    <div class="row form-row education-cont">
                                        <div class="col-12 col-md-12 col-lg-12">
                                            <input type="hidden" name="social_id" id="social_id" value="">
                                            <div class="row form-row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" class="form-control" name="fb"
                                                            id="fb">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Linkidin</label>
                                                        <input type="text" class="form-control" name="linkidin"
                                                            id="linkidin">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input type="text" class="form-control" name="twitter"
                                                            id="twitter">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Printest</label>
                                                        <input type="text" class="form-control" name="printrest"
                                                            id="printrest">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Youtube</label>
                                                        <input type="text" class="form-control" name="youtube"
                                                            id="youtube">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input type="text" class="form-control" name="insta"
                                                            id="insta">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary float-right" value="Save Changes">
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Ebd --}}
    <div class="card">
        <div class="card-body">
            <div class="row  justify-content-end  mb-2">
                <div class="col-10">
                    <h4 class="card-title">Social Media Links</h4>
                </div>
                @if (session()->has('message'))
                    <div class="alert alert-success" style="margin-top:30px;">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="col-2">
                    @if (isset($social->user_id))
                        <button class="btn btn-primary" id="edit_social" value="{{ $social->id }}"><i
                                class="fa fa-edit"></i></button>
                        <a href="{{ route('social.delete', $social->id) }}" class="btn btn-danger"><i
                                class="fa fa-trash"></i></a>
                    @else
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Add
                        </button>
                    @endif

                </div>
            </div>
            @if (is_null($social))
                <hr>
                <img src="{{ asset('images/about/social_media.png') }}" width="50%" class="mx-auto d-block mt-n5"
                    alt="">
                <h2 class="text-center mb-5 text-primary ">Social Media Links Are Not Added Yet!</h2>
            @endif
            @foreach ($data as $social)
                @if ($social->user_id == Auth::user()->id)
                    <div class="education-info px-5">
                        <div class="row form-row education-cont">
                            <div class="col-12 col-md-10 col-lg-11">
                                {{-- Facebook --}}
                                <div class="row form-row">
                                    <div class="col-2 my-2">
                                        <img src="{{ asset('images/social/sq_fb.png') }}" height="50px" width="50px"
                                            class="rounded-circle  " alt="">
                                    </div>
                                    <div class="col-7 pt-3">
                                        @if (is_null($social->fb))
                                            <p class="text-danger">Facebook link is not Added yet!</p>
                                        @else
                                            <a href="{{ $social->fb }}" class="text-info">{{ $social->fb }}</a>
                                        @endif
                                    </div>
                                </div>
                                {{-- End facebook --}}
                                {{-- Instagram --}}
                                <div class="row form-row">
                                    <div class="col-2 my-2">
                                        <img src="{{ asset('images/social/sq_insta.jpg') }}" height="50px"
                                            width="50px" class="rounded-circle  " alt="">
                                    </div>
                                    <div class="col-7 pt-3">
                                        @if (is_null($social->insta))
                                            <p class="text-danger">Instagram link is not Added yet!</p>
                                        @else
                                            <a href="{{ $social->insta }}"
                                                class="text-info">{{ $social->insta }}</a>
                                        @endif
                                    </div>
                                </div>
                                {{-- End Instagram --}}
                                {{-- Linkidin --}}
                                <div class="row form-row">
                                    <div class="col-2 my-2">
                                        <img src="{{ asset('images/social/linkidin.png') }}" height="50px"
                                            width="50px" class="rounded-circle  " alt="">
                                    </div>
                                    <div class="col-7 pt-3">
                                        @if (is_null($social->linkidin))
                                            <p class="text-danger">Linkedin link is not Added yet!</p>
                                        @else
                                            <a href="{{ $social->linkidin }}"
                                                class="text-info">{{ $social->linkidin }}</a>
                                        @endif
                                    </div>
                                </div>
                                {{-- End Linkidin --}}
                                {{-- Youtube --}}
                                <div class="row form-row">
                                    <div class="col-2 my-2">
                                        <img src="{{ asset('images/social/sq_youtube.jpg') }}" height="50px"
                                            width="50px" class="rounded-circle  " alt="">
                                    </div>
                                    <div class="col-7 pt-3">
                                        @if (is_null($social->youtube))
                                            <p class="text-danger">Youtube link is not Added yet!</p>
                                        @else
                                            <a href="{{ $social->youtube }}"
                                                class="text-info">{{ $social->youtube }}</a>
                                        @endif
                                    </div>
                                </div>
                                {{-- End Youtube --}}
                                {{-- Printrest --}}
                                <div class="row form-row">
                                    <div class="col-2 my-2">
                                        <img src="{{ asset('images/social/sq_printresr.png') }}" height="50px"
                                            width="50px" class="rounded-circle  " alt="">
                                    </div>
                                    <div class="col-7 pt-3">
                                        @if (is_null($social->printrest))
                                            <p class="text-danger">Pinterest link is not Added yet!</p>
                                        @else
                                            <a href="{{ $social->printrest }}"
                                                class="text-info">{{ $social->printrest }}</a>
                                        @endif
                                    </div>
                                </div>
                                {{-- End Printrest --}}
                                {{-- twitter --}}
                                <div class="row form-row">
                                    <div class="col-2 my-2">
                                        <img src="{{ asset('images/social/sq_twitter.png') }}" height="50px"
                                            width="50px" class="rounded-circle  " alt="">
                                    </div>
                                    <div class="col-7 pt-3">
                                        @if (is_null($social->twitter))
                                            <p class="text-danger">Twitter link is not Added yet!</p>
                                        @else
                                            <a href="{{ $social->twitter }}"
                                                class="text-info">{{ $social->twitter }}</a>
                                        @endif
                                    </div>
                                </div>
                                {{-- End twitter --}}
                            </div>
                        </div>
                    </div>
        </div>
    </div>
    @endif
    @if ($social->user_id !== Auth::user()->id)
        <h1 class="text-center mt-5 text-muted ">NO Social Media Links Added Yet!</h1>
        <img src="{{ asset('images/about/no_data.png') }}" width="400px" class="mx-auto d-block mt-n5"
            alt="">
    @endif
    @endforeach
    </div>
    </div>
    </div>
    </div>
@endsection
