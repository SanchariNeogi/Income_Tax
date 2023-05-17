@extends('user.layout.homelayout')
@section('main-content')
    @include('user.layout.comacti')

    <!-- notice start here -->
    @include('user.layout.notice')

    <!-- about start here -->
    @include('user.layout.about')
    <!-- about end here -->

    <!------event start here------>
    @include('user.layout.event')
@endsection
