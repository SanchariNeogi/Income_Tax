@extends('admin.index')
@section('maine_section')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title">Add Member</h1>
                                {{-- <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">ecommerce</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                                        </ol>
                                    </nav> --}}
                        </div>
                        <div class="nk-block-head-content">
                            <ul class="d-flex">
                                <li>
                                    <a href="./html/ecommerce/products.html" class="btn btn-primary btn-md d-md-none">
                                        <em class="icon ni ni-eye"></em>
                                        <span>View</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./html/ecommerce/products.html" class="btn btn-primary d-none d-md-inline-flex">
                                        <em class="icon ni ni-eye"></em>
                                        <span>View Members</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .nk-block-head-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <form action="{{ route('addmember.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-gs">
                            <div class="col-xxl-9">
                                <div class="gap gy-4">
                                    <div class="gap-col">
                                        <div class="card card-gutter-md">
                                            <div class="card-body">
                                                <div class="row g-gs">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="full_name" class="form-label">Member
                                                                Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name">
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div><!-- .col -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="phone" class="form-label">Phone
                                                                Number</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div><!-- .col -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="email" class="form-label">Email</label>
                                                            <div class="form-control-wrap">
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div><!-- .col -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="blood_group" class="form-label">Blood
                                                                Group</label>
                                                            <div class="form-control-wrap">
                                                                <select class="js-select" id="blood_group" name="blood_group" data-search="true" data-sort="false">
                                                                    <option value="">Select an option</option>
                                                                    <option value="A(+ve)">A(+ve)</option>
                                                                    <option value="A(-ve)">A(-ve)</option>
                                                                    <option value="B(+ve)">B(+ve)</option>
                                                                    <option value="B(-ve)">B(-ve)</option>
                                                                    <option value="AB(+ve)">AB(+ve)</option>
                                                                    <option value="AB(-ve)">AB(-ve)</option>
                                                                    <option value="O(+ve)">O(+ve)</option>
                                                                    <option value="O(-ve)">O(-ve)</option>
                                                                </select>
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div><!-- .col -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="group" class="form-label">Group</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="group" name="group" placeholder="Group">
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div><!-- .col -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="council_no" class="form-label">Bar/Council
                                                                Number</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="council_no" name="council_no" placeholder="Bar/Council Number">
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div><!-- .col -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="date_of_enrollment" class="form-label">Date of
                                                                Enrollment</label>
                                                            <div class="form-control-wrap">
                                                                <input placeholder="dd/mm/yyyy" name="date_of_enrollment" type="text" class="form-control js-datepicker" data-start-view="2" autocomplete="off" id="date_of_enrollment">
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div>
                                                    {{-- <label for="date_of_enrollment" class="form-label">Date of
                                                                    Enrollment</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="date_of_enrollment" name="date_of_enrollment"
                                                                        placeholder="Date of Enrollment">
                                                                </div> --}}
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="date_of_itba" class="form-label">Mem.No./ Date
                                                                of ITBA</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="date_of_itba" name="date_of_itba" placeholder="Mem.No./ Date of ITBA">
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="dob" class="form-label">Date of
                                                                Birth</label>
                                                            <div class="form-control-wrap">
                                                                <input placeholder="dd/mm/yyyy" name="dob" type="text" class="form-control js-datepicker" data-start-view="2" autocomplete="off" id="dob">
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div>
                                                    {{-- <label for="date_of_enrollment" class="form-label">Date of
                                                                    Enrollment</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control"
                                                                        id="date_of_enrollment" name="date_of_enrollment"
                                                                        placeholder="Date of Enrollment">
                                                                </div> --}}
                                                    <!-- .col -->
                                                    {{-- <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Quantity</label>
                                                                <div class="row g-gs">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-control-wrap">
                                                                            <input type="number" class="form-control"
                                                                                placeholder="On shelf">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                placeholder="In warehouse">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .form-group -->
                                                        </div><!-- .col -->
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Description</label>
                                                                <div class="form-control-wrap">
                                                                    <div class="js-quill" data-toolbar="minimal"
                                                                        data-placeholder="Write product description here...">
                                                                    </div>
                                                                </div>
                                                            </div><!-- .form-group -->
                                                        </div><!-- .col -->
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="addProductshippingCheckbox">
                                                                    <label class="form-check-label"
                                                                        for="addProductshippingCheckbox">This is a physical
                                                                        product</label>
                                                                </div>
                                                                <div class="smaller">Set if the product is a physical or
                                                                    digital item. Physical products may require shipping.
                                                                </div>
                                                            </div><!-- .form-group -->
                                                        </div><!-- .col -->  --}}
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="sprouse_name" class="form-label">Husband/Spouse
                                                                Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="sprouse_name" name="sprouse_name" placeholder="Husband/Spouse Name">
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="profile_picture" class="form-label">Profile
                                                                Picture</label>
                                                            <div class="form-control-wrap">
                                                                <input type="file" class="form-control" id="profile_picture" name="profile_picture" placeholder="Profile Picture">
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div>
                                                </div><!-- .card-body -->
                                            </div><!-- .card -->
                                        </div><!-- .gap-col -->
                                        {{-- <div class="gap-col">
                                                <div class="card card-gutter-md">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label class="form-label">Upload Media</label>
                                                            <div class="form-control-wrap">
                                                                <div class="js-upload" id="dropzoneFile1"
                                                                    data-message-icon="img">

                                                                </div>
                                                            </div>
                                                            <div class="form-note mt-3">Set the member photo.
                                                            </div>
                                                        </div><!-- .form-group -->
                                                    </div>
                                                </div>
                                            </div><!-- .gap-col --> --}}
                                        <div class="gap-col">
                                            <ul class="d-flex align-items-center gap g-3">
                                                <li>
                                                    <button type="submit" class="btn btn-primary">Save
                                                        Changes</button>
                                                </li>
                                                <li>
                                                    <a href="./html/ecommerce/products.html" class="btn border-0">Cancel</a>
                                                </li>
                                            </ul>
                                        </div><!-- .gap-col -->
                                    </div><!-- gap -->
                                </div><!-- .col -->
                                {{-- <div class="col-xxl-3">
                                        <div class="card card-gutter-md">
                                            <div class="card-body">
                                                <div class="row g-gs">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Thumbnail</label>
                                                            <div class="form-control-wrap">
                                                                <div
                                                                    class="image-upload-wrap d-flex flex-column align-items-center">
                                                                    <div class="media media-huge border">
                                                                        <img id="image-result" class="w-100 h-100"
                                                                            src="{{ asset('images/avatar/avatar-placeholder.jpg') }}"
                                alt="avatar">
                            </div>
                            <div class="pt-3">
                                <input class="upload-image" data-target="image-result" id="change-avatar" type="file" max="1" hidden>
                                <label for="change-avatar" class="btn btn-md btn-primary">Change</label>
                            </div>
                        </div><!-- end image-upload-wrap -->
                </div>
                <div class="form-note mt-3">Set the product thumbnail image.
                    Only
                    *.png, *.jpg and *.jpeg image files are accepted.</div>
            </div><!-- .form-group -->
        </div><!-- .col -->
        <div class="col-12">
            <div class="form-group">
                <label class="form-label">Categories</label>
                <div class="form-control-wrap">
                    <select class="js-select" multiple data-search="true" data-sort="false">
                        <option value="">Select an option</option>
                        <option value="1">Computers</option>
                        <option value="2">Watches</option>
                        <option value="3">Headphones</option>
                        <option value="4">Footwear</option>
                        <option value="5">Cameras</option>
                        <option value="6">Shirts</option>
                        <option value="7">Household</option>
                        <option value="8">Handbags</option>
                        <option value="9">Wines</option>
                    </select>
                </div>
            </div><!-- .form-group -->
        </div><!-- .col -->
        <div class="col-12">
            <div class="form-group">
                <label class="form-label">Tags</label>
                <div class="form-control-wrap">
                    <input class="js-tags" value="" type="text" placeholder="Add tags to a product">
                </div>
            </div><!-- .form-group -->
        </div><!-- .col -->
        <div class="col-12">
            <div class="form-group">
                <label class="form-label">Status</label>
                <div class="form-control-wrap">
                    <select class="js-select" data-search="true" data-sort="false">
                        <option value="">Select an option</option>
                        <option value="1">Published</option>
                        <option value="2">Draft</option>
                        <option value="3">Scheduled</option>
                        <option value="4">Inactive</option>
                    </select>
                </div>
            </div><!-- .form-group -->
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .card-body -->
</div><!-- .card -->
</div><!-- .col --> --}}
</div><!-- .row -->
</form>
</div><!-- .nk-block -->
</div>
</div>
</div>
</div>
@endsection
