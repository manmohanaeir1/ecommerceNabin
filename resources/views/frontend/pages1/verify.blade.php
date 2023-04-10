@extends('frontend.layouts.master')
@section('title')
    Verify Certificate
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/background/itzone-learning.jpeg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Verify Certificate</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li>Verify</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <iframe src="https://ims.neeminfosys.com/verify/certificate" frameborder="0" height="700" width="100%"></iframe>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection

