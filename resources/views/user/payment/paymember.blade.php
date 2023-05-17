<section>
    <!-----form start-->
    <div class="container">
        <div class="heading">
            <h1 class="text-center">Payment Form</h1>
        </div>
        <form class="row g-3" action="{{ route('payment.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName" name="inputName">
            </div>
            <div class="col-md-6">
                <label for="inputId" class="form-label">Bar Council No.</label>
                <input type="text" class="form-control" id="inputId" name="inputId">
            </div>
            <div class="col-md-6">
                <label for="inputemail" class="form-label">Email Id</label>
                <input type="email" class="form-control" id="inputemail" name="inputemail">
            </div>
            <div class="col-md-6">
                <label for="inputph" class="form-label">Phone No</label>
                <input type="text" class="form-control" id="inputph" name="inputph">
            </div>

            <div class="col-md-6">
                <label for="inputph" class="form-label ">Month</label>
                <select class="js-select2" id="calMonth" name="calMonth[]" multiple="multiple" data-search="true" data-sort="false">
                    <option value="January" data-badge="">January</option>
                    <option value="February" data-badge="">February</option>
                    <option value="March" data-badge="">March</option>
                    <option value="April" data-badge="">April</option>
                    <option value="May" data-badge="">May</option>
                    <option value="June" data-badge="">June</option>
                    <option value="July" data-badge="">July</option>
                    <option value="August" data-badge="">August</option>
                    <option value="September" data-badge="">September</option>
                    <option value="October" data-badge="">October</option>
                    <option value="November" data-badge="">November</option>
                    <option value="December" data-badge="">December</option>
                </select>
            </div>
            {{-- <select class="js-select2" id="calMonth" multiple="multiple">
                    <option value="O1" data-badge="">January</option>
                    <option value="O2" data-badge="">February</option>
                    <option value="O3" data-badge="">March</option>
                    <option value="O4" data-badge="">April</option>
                    <option value="O5" data-badge="">May</option>
                    <option value="O6" data-badge="">June</option>
                    <option value="O7" data-badge="">July</option>
                    <option value="O8" data-badge="">August</option>
                    <option value="O9" data-badge="">September</option>
                    <option value="10" data-badge="">October</option>
                    <option value="11" data-badge="">November</option>
                    <option value="12" data-badge="">December</option>
                </select> --}}

            <div class="col-md-6">
                <label for="inputAmount" class="form-label">Amount</label>
                <input type="text" class="form-control" id="inputAmount" name="inputAmount">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary me-2">Pay Now</button>
                {{-- <button type="submit" class="btn btn-primary">Pay Now</button> --}}

            </div>
        </form>
    </div>
    <!-----form end-->

</section>