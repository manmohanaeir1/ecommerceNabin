@extends('frontend.layouts.master')
@section('title')
    Gallery
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/background/itzone-learning.jpeg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Gallery</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-head m-b20">
                            <h2 class="title">Our Photo Gallery</h2>
                            <h5 class="title-small">Here are some of our favorites among the glimpses!</h5>
                            <div class="dlab-separator bg-primary"></div>
                        </div>
                        <!-- Images overlay & content on hover -->
                        <div class="section-content box-sort-in button-example">
                            <div class="row">
                                @foreach ($photos as $photo)
                                <div class="col-lg-4 col-md-4 col-sm-6 m-b30">
                                    <div class="dlab-box img-content-style-1 fly-box">
                                        <div class="dlab-media dlab-img-overlay1 dlab-img-effect"> <img src="{{ asset('uploads/thumbnail/'.$photo->thumbnail)}}" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    <ul class="list-inline link-list">
                                                        <li><a href="{{route('pages.singlegallery', $photo->id)}}"><i class="ti-link"></i></a></li>
                                                        <li><a href="javascript:void(0);"><i class="ti-heart"></i></a></li>
                                                        <li><span data-exthumbimage="{{ asset('uploads/thumbnail/'.$photo->thumbnail)}}" data-src="{{ asset('uploads/thumbnail/'.$photo->thumbnail)}}" class="check-km" title="{{$photo->title}}"><i class="ti-fullscreen"></i></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dlab-title-bx bg-white p-a20 text-center">
                                            <a href="{{route('pages.singlegallery', $photo->id)}}">
                                            <p class="font-16 text-secondry m-b5">{{$photo->title}}</p>
                                            <div class="dlab-divider margin-0 bg-black"></div>
                                            <p class="font-16 text-secondry m-a0"><small>{{$photo->created_at->toFormattedDateString()}}</small></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Images content on hover Icon END -->
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
