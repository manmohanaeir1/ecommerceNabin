@extends('frontend.layouts.master')
@section('title')
    {{ $photo->title }} 
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/background/itzone-learning.jpeg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">    {{ $photo->title }} 
                    </h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li><a href="{{route('pages.gallery')}}">Gallery</a></li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <div class="section-full bg-white content-inner-2">
            <div class="container">
                <div class="clearfix">
                    <ul id="masonry1" class="dlab-gallery-listing gallery-grid-8 gallery text-center sp10">
                        @foreach($photo_lists as $photo)
                        <li class="card-container m-b10 col-lg-6 ">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                <img src="{{ asset('uploads/photos/'.$photo->image)}}"  alt="" width="800" height="650"/>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
											<span data-exthumbimage="{{ asset('uploads/photos/'.$photo->image)}}" data-src="{{ asset('uploads/photos/'.$photo->image)}}" class="check-km" title="{{$photo->photo->title}}">
												<i class="ti-zoom-in icon-bx-xs"></i>
											</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('addjs')
    <script>
        EduZone.handleMasonryFilter();
    </script>
    <script>
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_5();
            $('.lazy').Lazy();
        }); /*ready*/
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_4();
            $('.lazy').Lazy();
        }); /*ready*/
    </script>
@endsection
