@extends('frontend.layouts.master')
@section('title')
    Our Offers
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url('{{ asset('images/background/itzone-learning.jpeg')}}')">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Our Offers</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li>Our Offers</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>

        <!-- inner page banner END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                   <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="blog-post blog-lg blog-rounded shadow bg-white">
                        <div class="dlab-post-media dlab-img-effect zoom-slow">
                            <a href="#"><img src="{{ asset('uploads/posts/'.$post->image)}}" alt=""></a>
                        </div>
                        <div class="dlab-info p-a25">
                            <div class="dlab-post-meta">
                                <ul>
                                    <li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">{{$post->user->name}}</a> </li>
                                    <li class="post-tag"> <a href="javascript:void(0);">{{$post->category->category_name}}</a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title ">
                                <h4 class="post-title"><a href="#">{{$post->post_title}}</a></h4>
                            </div>
                            <div class="dlab-post-text">
                                <p>{!! $post->post_content !!}</p>                            </div>
                            <div class="post-footer">
                               <div class="row">
                                <div class="col-6">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date"> <i class="la la-clock"></i> <strong>Valid: </strong> <span> {{$post->valid_date}}</span> </li>
                                            <li class="post-date"> <i class="la la-clock"></i> <strong>Start: </strong> <span> {{$post->start_date}}</span> </li>
                                        </ul>
                                    </div>
                                   
                                </div>
                                <div class="col-6">
                                    <div class="col-sm">
                                        <div class="share-post">
                                            {{-- for share plugin --}}
                                                <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                        </div>
                                    </div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination start -->

                    <!-- Pagination END -->
                </div>

                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <aside class="side-bar sticky-top">
                            <div class="widget">
                                <h5 class="widget-title style-1">Search</h5>
                                <div class="search-bx style-1">
                                    <form role="search" method="post">
                                        <div class="input-group">
                                            <input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
                                            <span class="input-group-btn">
												<button type="submit" class="fa fa-search site-button sharp radius-no"></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget recent-posts-entry">
                                <h5 class="widget-title style-1">Recent Offers</h5>
                               @foreach ($recent_offer as $recent)
                               <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media">
                                        <img src={{asset('uploads/posts/'.$recent->image)}} width="200" height="143" alt="">
                                    </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-date"> <i class="la la-clock"></i>  <span>{{$recent->created_at->toFormattedDateString()}}</span> </li>
                                            </ul>
                                        </div>
                                        <div class="dlab-post-header">
                                            <h6 class="post-title"><a href="blog-single-left-sidebar.html">{{$recent->post_title}}</a></h6>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>  
                               @endforeach
                                
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
@endsection
