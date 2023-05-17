<div class="modal fade modal-lg" id="editdetailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ route('addmember.update', 1) }}" method="POST" id="member_edit_form" enctype="multipart/form-data">
        @method('PUT')

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" value="" id='id' name="update_id">
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
                                                            <img id="profile_picture" src='#' width="200" height="200" class="rounded-circle profile_picture">
                                                            <input type="file" id="profile_pic" name="profile_picture" style="display: none;">
                                                            <em class="icon ni ni-camera-fill" id="camera" style="position: absolute; top: 68%; left: 59%; border-radius: 50%; padding: 7px;background-color: white;"></em>
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="full_name" class="form-label">Member
                                                            Name</label>
                                                        <div class="form-control-wrap">
                                                            <input value="" type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name">
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="phone" class="form-label">Phone
                                                            Number</label>
                                                        <div class="form-control-wrap">
                                                            <input value="" type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div><!-- .col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email</label>
                                                        <div class="form-control-wrap">
                                                            <input value="" type="email" class="form-control" id="email" name="email" placeholder="Email">
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div><!-- .col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="blood_group" class="form-label">Blood
                                                            Group</label>
                                                        <div class="form-control-wrap">

                                                            <select value="" class="form-select" id="blood_group" name="blood_group" data-search="true" data-sort="false">
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
                                                            <input value="" type="text" class="form-control" id="group" name="group" placeholder="Group">
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div><!-- .col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="council_no" class="form-label">Bar/Council
                                                            Number</label>
                                                        <div class="form-control-wrap">
                                                            <input value="" type="text" class="form-control" id="council_no" name="council_no" placeholder="Bar/Council Number">
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div><!-- .col -->
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="date_of_enrollment" class="form-label">Date of
                                                            Enrollment</label>
                                                        <div class="form-control-wrap">
                                                            <input value="" placeholder="dd/mm/yyyy" name="date_of_enrollment" type="text" class="form-control js-datepicker" data-start-view="2" autocomplete="off" id="date_of_enrollment">
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="date_of_itba" class="form-label">Mem.No./ Date
                                                            of ITBA</label>
                                                        <div class="form-control-wrap">
                                                            <input value="" type="text" class="form-control" id="date_of_itba" name="date_of_itba" placeholder="Mem.No./ Date of ITBA">
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="dob" class="form-label">Date of
                                                            Birth</label>
                                                        <div class="form-control-wrap">
                                                            <input value="" placeholder="dd/mm/yyyy" name="dob" type="text" class="form-control js-datepicker" data-start-view="2" autocomplete="off" id="dob">
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="sprouse_name" class="form-label">Husband/Spouse
                                                            Name</label>
                                                        <div class="form-control-wrap">
                                                            <input value="" type="text" class="form-control" id="sprouse_name" name="sprouse_name" placeholder="Husband/Spouse Name">
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div>
                                            </div><!-- .card-body -->
                                        </div>

                                        <!-- .card -->
                                    </div><!-- .gap-col -->
                                </div><!-- gap -->
                            </div><!-- .col -->
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-sm btn-primary" id="submit_edit" data-bs-target="#viewdetailsModal" />

                </div>
            </div>
        </div>
    </form>
</div>
