@extends('frontend.layouts.master')
@section('title')
{{$post->post_title}}
@endsection

@section('addseo')
<meta name="description" content="{{$post->seo_description}}, Learn how to choose the right software development course with IT Zone Computer Institute. Our expert trainers provide valuable insights on what to look for in a course and how to determine which one is right for you.">
<meta name="keywords" content="{{$post->seo_keywords}}, software development course, IT Zone Computer Institute, blog">
<meta name="twitter:title" content="{{$post->post_title}}, software development course, IT Zone Computer Institute, blog">
<meta name="twitter:description" content="{{$post->post_content }}, Learn how to choose the right software development course with IT Zone Computer Institute. Our expert trainers provide valuable insights on what to look for in a course and how to determine which one is right for you.">
<meta name="twitter:image" content="{{asset('uploads/posts/'.$post->image)}}">


<meta property="og:title" content="{{$post->seo_title}}" />
<meta property="og:subtitle" content="{{$post->seo_subtitle}}" />
<meta property="og:keywords" content="{{$post->seo_keywords}}" />
<meta property="og:description" content="{{$post->seo_description}}" />
<meta property="og:image" content="{{ asset('uploads/posts/'.$post->image) }}" />
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:type" content="article">
<meta property="article:published_time" content="{{$post->created_at->toFormattedDateString()}}" />





@endsection



@section('content')
<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:  url('{{ asset('images/background/itzone-learning.jpeg')}}')">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">{{$post->post_title}}</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="{{route('frontend.home')}}">Home</a></li>
                        <li><a href="{{route('pages.blog')}}">Blog</a></li>
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
                <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                    <!-- blog start -->
                    <div class="blog-post blog-single sidebar">
                        <div class="dlab-info">
                            <div class="dlab-post-meta">
                                <ul>
                                    <li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">{{$post->user->name}}</a> </li>
                                    <li class="post-date"> <i class="la la-clock"></i> <strong>{{$post->created_at->toFormattedDateString()}}</strong> </li>
                                    <li class="post-tag"> <a href="javascript:void(0);">{{$post->category->category_name}}</a> </li>
                                </ul>
                            </div>
                            <h2 class="dlab-title">{{$post->post_title}}</h2>
                            <div class="dlab-media">
                                <a href="javascript:;"><img src="{{ asset('uploads/posts/'.$post->image) }}" alt="" title="" lazy="loading"></a>
                            </div>
                            <div class="dlab-post-text text">
                                <p>{!! $post->post_content !!}</p>
                            </div>
                            <div class="post-footer">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="dlab-meta">
                                            <span class="title">TAGS : </span>
                                            @foreach ($tags as $tag)
                                            <ul class="tag-list">
                                                <li class="post-tag"><a href="#">{{$tag->name}}</a></li> 
        
                                            </ul>
                                            @endforeach
                                        </div> 
                                       
                                    </div>
                                    <div class="col-6">
                                        <div class="col-sm">
                                            <div class="share-post">
                                                {{-- for share plugin --}}
                                                <!-- ShareThis BEGIN -->
                                                <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- blog END -->
                    <!-- for facebook commnet section -->
                    <div class="fb-comments" data-href="{{ Request::url()}} " data-width="auto" data-numposts="10">
                    </div>
                </div>
                <!-- Left part END -->
                <!-- Side bar start -->
                <div class="col-xl-3 col-lg-4 col-md-12">
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
                            <h5 class="widget-title style-1">Recent Posts</h5>
                            @foreach ($recent_post as $rpost)
                            <div class="widget-post-bx">
                                <div class="widget-post clearfix">
                                    <div class="dlab-post-media">
                                        <img src="{{ asset('uploads/posts/'.$rpost->image) }}" width="200" height="143" alt="">
                                    </div>
                                    <div class="dlab-post-info">
                                        <div class="dlab-post-meta">
                                            <ul>
                                                <li class="post-date"> <i class="la la-clock"></i> <strong>{{$rpost->created_at->toFormattedDateString()}}</strong></li>
                                            </ul>
                                        </div>
                                        <div class="dlab-post-header">
                                            <h6 class="post-title"><a href="{{ route('show.singleblog', $rpost->slug) }}">{{$rpost->post_title}}</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="widget widget_archive">
                            <h5 class="widget-title style-1">Categories List</h5>
                            @foreach ($categories as $cat)
                            <ul>
                                <li><a href="javascript:void(0);">{{$cat->category_name}}</a></li>

                            </ul>
                            @endforeach

                        </div>
                        <div class="widget widget_tag_cloud radius">
                            <h5 class="widget-title style-1">Tags</h5>
                            @foreach ($tags as $tag)
                            <div class="tagcloud">
                                <a href="javascript:void(0);">{{$tag->name}}</a>
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
<!-- Content END -->

@endsection