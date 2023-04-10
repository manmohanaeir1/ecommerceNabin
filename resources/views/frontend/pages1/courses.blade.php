@extends('frontend.layouts.master')
@section('title')
    Courses
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/background/itzone-learning.jpeg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Courses</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li>Courses</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- Courses -->
        <div class="section-full content-inner bg-white wow fadeIn" data-wow-duration:="2s" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">Popular Courses</h2>
                    <p>Learn, Develop Skills, Secure Your Career.</p>
                </div>
                <div class="clearfix" id="lightgallery">
                    <ul id="masonry" class="portfolio-ic dlab-gallery-listing row gallery-grid-4 lightgallery">
                        @foreach(\App\Models\Course::where('status', 'Published')->orderBy('id', 'desc') ->get() as $course)                        <li class="card-container col-lg-3 col-md-6 col-sm-6 {{$course->category->course_category_name}}">
                            
                            <div class="dlab-box courses-bx">
                                <div class="dlab-media">
                                    <a href="{{route('show.singlecourse', $course->slug)}}"><img src="{{ asset('uploads/courses/'.$course->course_image) }}" style="width:334px; height:160px;" alt="" lazy="loading"></a>
                                    <div class="user-info">
                                        <a href="{{route('show.singlecourse', $course->slug)}}">
                                            <h6 class="title">LEARN MORE</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="dlab-info">
                                    <h6 class="dlab-title"><a href="{{route('show.singlecourse', $course->slug)}}" style="color: black;">{{$course->course_code}}</a></h6>
                                    <div class="courses-info">
                                        <ul>
                                            <li><i class="fa fa-history"></i> Duration: </li>
                                        </ul>
                                        <span class="price">{{$course->course_duration}} Month</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                       @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- Courses End -->
    </div>

@endsection
