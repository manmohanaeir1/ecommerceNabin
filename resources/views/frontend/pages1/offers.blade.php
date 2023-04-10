@extends('frontend.layouts.master')
@section('title') Offer @endsection
@section('addseo')

<meta name="description" content="IT Zone offer, coupon, discount, IT Zone Computer Institute offers a range of courses in software development, web development, graphic designing, and digital marketing. Our experienced trainers will provide you with the skills and knowledge necessary to excel in the IT industry.">
<meta name="keywords" content="IT Zone offer, coupon, discount, IT Zone Computer Institute, courses, software development, web development, graphic designing, digital marketing">
<meta name="twitter:title" content="IT Zone offer, coupon, discount, software development course, IT Zone Computer Institute, blog">
<meta name="twitter:description" content="IT Zone offer, coupon, discount, Learn how to choose the right software development course with IT Zone Computer Institute. Our expert trainers provide valuable insights on what to look for in a course and how to determine which one is right for you.">
<meta name="twitter:image" content="{{ asset('images/background/itzone-learning.jpeg') }}">

<meta property="og:title" content="IT Zone offer, coupon, discount, in courses" />
<meta property="og:subtitle" content="IT Zone offer, coupon, discount," />
<meta property="og:keywords" content="IT Zone offer, coupon, discount," />
<meta property="og:description" content="IT Zone offer, coupon, discount," />
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:image" content="{{ asset('images/background/itzone-learning.jpeg') }}" />

@endsection
@section('content')
<!-- Content -->
<div class="page-content bg-gray">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/background/itzone-learning.jpeg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Offer</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li>Offer</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <div class="content-area">
        <div class="container">

            <!-- blog grid -->
            <div id="masonry" class="dlab-blog-grid-3 row">
                @foreach ($offers as $offer)

                <div class="post card-container col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-post blog-grid blog-rounded blog-effect1">
                        <div class="dlab-post-media dlab-img-effect">
                            <a href="{{route('show.singleblog', $offer->slug)}}"><img src="{{asset('uploads/posts/'.$offer->image)}}" alt=""></a>
                          
                        </div>
                        <div class="dlab-info p-a20">
                            <div class="dlab-post-meta">
                                <ul>
                                    <li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">{{$offer->user->name}}</a> </li>
                                    <li class="post-tag"> <a href="javascript:void(0);">{{$offer->category->category_name}}</a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title ">
                                <h5 class="post-title"><a href=" {{route('show.singleblog', $offer->slug)}}">{{$offer->post_title}}</a></h5>
                            </div>
                            <div class="dlab-post-text">
                                {!!Str::limit($offer->post_content, 100) !!} </div>
                            <div class="post-footer">
                                <div class="dlab-post-meta">
                                    <ul>
                                        <li class="post-date"> <i class="la la-clock"></i> <strong>Valid: </strong> <span> {{$offer->valid_date}}</span> </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            {{$offers->links()}}

            <!-- blog grid END -->
            {{-- <!-- Pagination -->
            <div class="pagination-bx rounded-sm primary clearfix col-md-12 text-center">
                <ul class="pagination">
                    <li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i> Prev</a></li>
                    <li class="active"><a href="javascript:void(0);">1</a></li>
                    <li><a href="javascript:void(0);">2</a></li>
                    <li><a href="javascript:void(0);">3</a></li>
                    <li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a></li>
                </ul>
            </div>
            <!-- Pagination END --> --}}

        </div>
    </div>
</div>

@endsection