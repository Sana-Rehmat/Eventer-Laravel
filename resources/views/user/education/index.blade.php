@extends('layouts.vendor')
@section('page_title')
    Vendor Dashboard | Education List
@endsection
@section('breadcrumb')
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('profile.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Education</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Education</h2>
            </div>
        </div>
    </div>
</div>
@endsection
@section('user_content')
    {{-- main content --}}
    <div class="card">
        <div class="card-body">
            <div class="row  justify-content-end  mb-2">
                <div class="col-10">
                    <h4 class="card-title">Education</h4>
                </div>
                <div class="col-2">
                    <a class="btn btn-blue text-light" href="{{ route('education.create') }}">ADD</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="education-info">
                        <div class="row form-row education-cont">
                            <div class="col-12 col-md-10 col-lg-11">
                                @foreach ($data as $education)
                                    <div class="row form-row">
                                        <div class="col-9">
                                            @if ($education->user_id !== Auth::user()->id)
                                                <h1>No Educational Details Added !</h1>
                                            @else
                                                <h4>{{ $education->Degree }}</h4>
                                                <h5>{{ $education->institute }}</h4>
                                                    <p><span> {{ $education->start_year }}</span> -
                                                        <span>{{ $education->end_year }}</span>
                                                    </p>
                                        </div>
                                        <div class="col-3">
                                            <a href="{{ route('education.delete', $education->id) }}"
                                                class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            <a href="{{ route('education.update', $education->id) }}"
                                                class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        </div>
                                @endif
                            </div>
                            <hr class="text-primary bg-primary">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
@endsection
