<section>
    <div class="members_head">
        <h5>Members Directory</h5>
    </div>
</section>

<!---------search section------------->
{{-- <section>
    <div class="search_section">
        <div class="container-fluid">
            <form class="d-flex align-items-center">
                <span>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15" height="15">
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" />
                        </svg>
                    </a>
                </span>
                <span><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"></span>
                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
        </div>

        <div class="search_dropdown">
            <div class="dropdown">
                <a class="btn btn_sort_by dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Sort by
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Subject1</a></li>
                    <li><a class="dropdown-item" href="#">Subject2</a></li>
                    <li><a class="dropdown-item" href="#">Subject3</a></li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}
<!---------search section end------------->


<!-- members part table start here -->
<section>
    <div class="total_marksheet">
        <table id="membertable">
            <thead>
                <tr class="name_sec border_bottom">
                    <td>Profile Picture</td>
                    <td>Full Name</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td> Blood Group </td>
                    <td> Group </td>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $val)
                <tr class="name_sec border_top">
                    <td class="first_table_td">
                        <div class="table_img_div">
                            <img src="{{ asset('upload_images/member/' . $val->profile_picture) }}" alt="" class="table_img">
                        </div>
                    </td>
                    <td>
                        <div class="first_content">
                            {{ $val->full_name }}
                        </div>
                        <div class="secound_headers">
                            <p class="heading">Bar/Council No.</p>
                        </div>
                        <div class="heading_div headding_padding">
                        </div>
                        <div>
                            <p class="details">{{ $val->council_no }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="first_content">
                            {{ $val->phone }}
                        </div>
                        <div class="secound_headers">
                            <p class="heading">Date of Enrollment</p>
                        </div>
                        <div class="headding_padding">
                        </div>
                        <div>
                            <p class="details">{{ $val->date_of_enrollment }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="first_content">
                            {{ $val->email }}
                        </div>
                        <div class="secound_headers">
                            <p class="heading">Mem.No./ Date of ITBA</p>
                        </div>
                        <div class="headding_padding">
                        </div>
                        <div>
                            <p class="details">{{ $val->date_of_itba }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="first_content">
                            {{ $val->blood_group }}
                        </div>
                        <div class="secound_headers">
                            <p class="heading">Date of Birth</p>
                        </div>
                        <div class="headding_padding">
                        </div>
                        <div>
                            <p class="details">{{ $val->dob }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="first_content">
                            {{ $val->group }}
                        </div>
                        <div class="secound_headers">
                            <p class="heading">Husband/Spouse Name</p>
                        </div>
                        <div class="headding_padding">
                        </div>
                        <div>
                            <p class="details">{{ $val->sprouse_name }}</p>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
<!-- members part table end here -->

<!------------------pagination part start--------------->
{{-- <section>
    <div class="pegination_div">
        <img src="{{ asset('images/Income_Tax_Members_Directory_Page/left_arrow.png') }}" alt="">
<h5>Prev</h5>
<h5>1</h5>
<h5><span>2</span></h5>
<h5>3 ...</h5>
<h5>36</h5>
<h5>Next</h5>
<img src="{{ asset('images/Income_Tax_Members_Directory_Page/right_arrow.png') }}" alt="">
</div>
</section> --}}
<!------------------pagination part end--------------->
<script src='https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js'></script>
<script>
    var table = document.getElementById("membertable");
    var datatable = new DataTable(table, {
        perPage: 5,
    });
</script>