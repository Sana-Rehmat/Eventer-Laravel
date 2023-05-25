@extends('user.layouts.app')
@section('user_content')
    <!-- Page Content  -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Information</h4>
                <div class="row form-row">
                    <div class="col-md-12 col-12">
                        <div class="form-group">

                    <form action="">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email </label>
                                <input type="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" class="form-control" name="Phone_no" max="11" min="11">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="">Gender</label>
                                <br>
                                <label class="radio-inline mt-3">
                                    <input type="radio" class="option-input radio" name="gender" id="male"
                                        value="male" value="{{ old('gender') }}" disabled
                                        {{ Auth::user()->gender == 'male' ? 'checked' : '' }}> Male
                                </label>
                                <label class="radio-inline ml-4 ">
                                    <input type="radio" class="option-input radio" disabled name="gender"
                                        {{ Auth::user()->gender == 'female' ? 'checked' : '' }} id="female"
                                        value="female" value="{{ old('gender') }}" />
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="DOB">
                            </div>
                        </div>
                </div>
            </div>
        </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About Me</h4>
                <div class="form-group mb-0">
                    <label>Biography</label>
                    <textarea class="form-control" rows="5" name="bio"></textarea>
                </div>
            </div>
        </div>
        {{-- <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Organization Info</h4>
                    <div class="row form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Organization Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Organization Address</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Organization Images</label>
                                <form action="#" class="dropzone"></form>
                            </div>
                            <div class="upload-wrap">
                                <div class="upload-images">
                                    <img src="assets/img/features/feature-01.jpg" alt="Upload Image">
                                    <a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i
                                            class="far fa-trash-alt"></i></a>
                                </div>
                                <div class="upload-images">
                                    <img src="assets/img/features/feature-02.jpg" alt="Upload Image">
                                    <a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i
                                            class="far fa-trash-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        <div class="card contact-card">
            <div class="card-body">
                <h4 class="card-title">Contact Details</h4>
                <div class="row form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>

                    {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Address Line 2</label>
                                <input type="text" class="form-control">
                            </div>
                        </div> --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">City</label>
                            <input type="text" class="form-control" name="city">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">State / Province</label>
                            <input type="text" class="form-control" name="state">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Country</label>
                            <input type="text" class="form-control" name="country">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Postal Code</label>
                            <input type="text" class="form-control" name="postal_code">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary float-right" value="Add">
    </form>
    {{-- <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pricing</h4>
                <div class="form-group mb-0">
                    <div id="pricing_select">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="price_free" name="rating_option" class="custom-control-input"
                                value="price_free" checked>
                            <label class="custom-control-label" for="price_free">Free</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="price_custom" name="rating_option" value="custom_price"
                                class="custom-control-input">
                            <label class="custom-control-label" for="price_custom">Custom Price (per hour)</label>
                        </div>
                    </div>
                </div>
                <div class="row custom_price_cont" id="custom_price_cont" style="display: none;">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="custom_rating_input" name="custom_rating_count"
                            value="" placeholder="20">
                        <small class="form-text text-muted">Custom price you can add</small>
                    </div>
                </div>
            </div>
        </div> --}}
    <div class="card services-card">
        <div class="card-body">
            <h4 class="card-title">Services and Specialization</h4>
            <div class="form-group">
                <label>Services</label>
                <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Services"
                    name="services" value="Workshop " id="services">
                <small class="form-text text-muted">Note : Type & Press enter to add new services</small>
            </div>
            <div class="form-group mb-0">
                <label>Specialization </label>
                <input class="input-tags form-control" type="text" data-role="tagsinput"
                    placeholder="Enter Specialization" name="specialist" value="Digital Events,Tech Events"
                    id="specialist">
                <small class="form-text text-muted">Note : Type & Press enter to add new specialization</small>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Education</h4>
            <div class="education-info">
                <div class="row form-row education-cont">
                    <div class="col-12 col-md-10 col-lg-11">
                        <div class="row form-row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label>Degree</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label>College/Institute</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label>Year of Completion</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-more">
                <a href="javascript:void(0);" class="add-education"><i class="fa fa-plus-circle"></i> Add More</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Experience</h4>
            <div class="experience-info">
                <div class="row form-row experience-cont">

                    <div class="col-12 col-md-10 col-lg-11">
                        <div class="row form-row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label>Event Organization Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label>From</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label>To</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-more">
                <a href="javascript:void(0);" class="add-experience"><i class="fa fa-plus-circle"></i> Add More</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Awards</h4>
            <div class="awards-info">
                <div class="row form-row awards-cont">
                    <div class="col-12 col-md-5">
                        <div class="form-group">
                            <label>Awards</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="form-group">
                            <label>Year</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-more">
                <a href="javascript:void(0);" class="add-award"><i class="fa fa-plus-circle"></i> Add More</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Memberships</h4>
            <div class="membership-info">
                <div class="row form-row membership-cont">
                    <div class="col-12 col-md-10 col-lg-5">
                        <div class="form-group">
                            <label>Memberships</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-more">
                <a href="javascript:void(0);" class="add-membership"><i class="fa fa-plus-circle"></i> Add More</a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Registrations</h4>
            <div class="registrations-info">
                <div class="row form-row reg-cont">
                    <div class="col-12 col-md-5">
                        <div class="form-group">
                            <label>Registrations</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="form-group">
                            <label>Year</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-more">
                <a href="javascript:void(0);" class="add-reg"><i class="fa fa-plus-circle"></i> Add More</a>
            </div>
        </div>
    </div>
    <div class="submit-section submit-btn-bottom">
        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
    </div>
@endsection
