@include('admin.viewdetails')
@include('admin.edit_modal')
@extends('admin.index')
@section('maine_section')
<div class="nk-content">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-between flex-wrap gap g-2">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title">Members</h1>
                                {{-- <nav>
                                        <ol class="breadcrumb breadcrumb-arrow mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">ecommerce</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                                        </ol>
                                    </nav> --}}
                        </div>
                        <div class="nk-block-head-content">
                            <ul class="d-flex">
                                <li>
                                    <a href="./html/ecommerce/add-product.html" class="btn btn-primary btn-md d-md-none">
                                        <em class="icon ni ni-plus"></em>
                                        <span>Add</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('addmember.create') }}" class="btn btn-primary d-none d-md-inline-flex">
                                        <em class="icon ni ni-plus"></em>
                                        <span>Add Member</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .nk-block-head-between -->
                </div>

                <div class="nk-block">
                    <div class="card">
                        <table class="datatable-init table" data-nk-container="table-responsive">
                            <thead class="table-light">
                                <tr>
                                    <th class="tb-col tb-col-check" data-sortable="false">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="">
                                        </div>
                                    </th>
                                    <th class="tb-col">
                                        <span class="overline-title">profile_picture</span>
                                    </th>
                                    <th class="tb-col tb-col-md">
                                        <span class="overline-title">full_name</span>
                                    </th>
                                    {{-- <th class="tb-col">
                                            <span class="overline-title">phone</span>
                                        </th> --}}
                                    <th class="tb-col tb-col-md">
                                        <span class="overline-title">email</span>
                                    </th>
                                    {{-- <th class="tb-col tb-col-md">
                                            <span class="overline-title">blood_group</span>
                                        </th> --}}
                                    <th class="tb-col">
                                        <span class="overline-title">group</span>
                                    </th>
                                    <th class="tb-col">
                                        <span class="overline-title">council_no</span>
                                    </th>
                                    {{-- <th class="tb-col">
                                            <span class="overline-title">date_of_enrollment</span>
                                        </th> --}}
                                    {{-- <th class="tb-col">
                                            <span class="overline-title">date_of_itba</span>
                                        </th> --}}
                                    {{-- <th class="tb-col">
                                            <span class="overline-title">dob</span>
                                        </th> --}}
                                    {{-- <th class="tb-col">
                                            <span class="overline-title">sprouse_name</span>
                                        </th> --}}
                                    <th class="tb-col">
                                        <span class="overline-title">Action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach ($data as $key => $val)
                                <tr>
                                    <td class="tb-col">{{ $i++ }}</td>

                                    <td class="tb-col" style="width:100px">
                                        <a href="#"><img src="{{ asset('upload_images/member/' . $val->profile_picture) }}" alt="" style="width: 100%;"></a>
                                        {{-- <a href="#"><img src="{{ $val->profile_picture }}" alt=""
                                        style="width: 100%;"></a> --}}
                                    </td>

                                    <td class="tb-col">{{ $val->full_name }}</td>

                                    {{-- <td class="tb-col">{{ $val->phone }}</td> --}}

                                    <td class="tb-col">{{ $val->email }}</td>

                                    {{-- <td class="tb-col">{{ $val->blood_group }}</td> --}}

                                    <td class="tb-col">{{ $val->group }}</td>

                                    <td class="tb-col">{{ $val->council_no }}</td>

                                    {{-- <td class="tb-col">{{ $val->date_of_enrollment }}</td> --}}

                                    {{-- <td class="tb-col">{{ $val->date_of_itba }}</td> --}}

                                    {{-- <td class="tb-col">{{ $val->dob }}</td> --}}

                                    {{-- <td class="tb-col">{{ $val->sprouse_name }}</td> --}}

                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-icon btn-zoom me-n1" data-bs-toggle="dropdown">
                                                <em class="icon ni ni-more-v"></em>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <div class="dropdown-content py-1">
                                                    <ul class="link-list link-list-hover-bg-primary link-list-md">
                                                        <li>
                                                            <a data-bs-toggle="modal" data-email="{{ $val }}" data-image="{{ asset('upload_images/member/' . $val->profile_picture) }}" data-bs-target="#editdetailsModal">
                                                                <em class="icon ni ni-edit"></em><span>Edit</span>
                                                            </a>
                                                            {{-- <a href="./html/user-manage/user-edit.html"><em
                                                                            class="icon ni ni-edit"></em><span>Edit</span></a> --}}
                                                        </li>
                                                        <li>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteData{{ $val->id }}"><em class="icon ni ni-trash"></em><span>Delete</span></a>
                                                        </li>
                                                        <li>
                                                            <a data-bs-toggle="modal" data-bs-target="#viewdetailsModal" data-email="{{ $val }}" data-image="{{ asset('upload_images/member/' . $val->profile_picture) }}">
                                                                <em class="icon ni ni-eye"></em><span>View
                                                                    Details</span>
                                                            </a>
                                                            {{-- <a href="./html/user-manage/user-profile.html"><em
                                                                            class="icon ni ni-eye"></em><span>View
                                                                            Details</span></a> --}}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- .card -->
                </div>




                <!-- .nk-block-head -->
                <!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection