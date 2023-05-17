{{-- @include('admin.edit_modal') --}}
<div class="modal fade modal-lg" id="viewdetailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-gs">
                    <div class="col-xxl-9">
                        <div class="gap gy-4">
                            <div class="gap-col">
                                <div class="card card-gutter-md">
                                    <div class="card-body">
                                        <div class="row g-gs">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="form-control-wrap justify-content-center d-flex">
                                                        <img id="profile_picture" width="200" height="200" class="rounded-circle profile_picture" disabled>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="full_name" class="form-label">Member
                                                        Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" disabled>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="phone" class="form-label">Phone
                                                        Number</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" disabled>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div><!-- .col -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <div class="form-control-wrap">
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" disabled>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div><!-- .col -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="blood_group" class="form-label">Blood
                                                        Group</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="blood_group" name="group" placeholder="Group" disabled>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div><!-- .col -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="group" class="form-label">Group</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="group" name="group" placeholder="Group" disabled>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div><!-- .col -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="council_no" class="form-label">Bar/Council
                                                        Number</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="council_no" name="council_no" placeholder="Bar/Council Number" disabled>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div><!-- .col -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="date_of_enrollment" class="form-label">Date of
                                                        Enrollment</label>
                                                    <div class="form-control-wrap">
                                                        <input placeholder="dd/mm/yyyy" name="date_of_enrollment" type="text" class="form-control js-datepicker" data-start-view="2" autocomplete="off" id="date_of_enrollment" disabled>
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
                                                        <input type="text" class="form-control" id="date_of_itba" name="date_of_itba" placeholder="Mem.No./ Date of ITBA" disabled>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="dob" class="form-label">Date of
                                                        Birth</label>
                                                    <div class="form-control-wrap">
                                                        <input placeholder="dd/mm/yyyy" name="dob" type="text" class="form-control js-datepicker" data-start-view="2" autocomplete="off" id="dob" disabled>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="sprouse_name" class="form-label">Husband/Spouse
                                                        Name</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="sprouse_name" name="sprouse_name" placeholder="Husband/Spouse Name" disabled>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div>
                                        </div><!-- .card-body -->
                                    </div><!-- .card -->
                                </div><!-- .gap-col -->
                            </div><!-- gap -->
                        </div><!-- .col -->
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-sm btn-primary" id="editbutton" data-bs-toggle="modal"
                    data-bs-target="#editdetailsModal">Edit</button> --}}
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
