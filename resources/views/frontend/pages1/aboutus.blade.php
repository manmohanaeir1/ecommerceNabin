@extends('frontend.layouts.master')
@section('title')
    About Us
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt"
             style="background-image:url(images/background/itzone-learning.jpeg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">About Us</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- About Us -->
        <div class="content-block">
            <!-- About Services info -->
            <div class="section-full content-inner bg-white wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                <div class="container">
                    <div class="row about-one align-items-center">
                        <div class="col-lg-6 m-b30">
                            <div class="about-img">
                                <img src="images/about/about1.jpg" alt="">
                                <div class="video-bx">
                                    <a href="https://www.youtube.com/watch?v=_FRZVScwggM"
                                       class="popup-youtube bg-primary"><i class="fa fa-play"></i></a>
                                </div>
                                <div class="info-bx">
                                    <p>About IT Zone</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-b30">
                            <div class="content-bx">
                                <h2 class="m-b15 title">A company involved in<br><span class="text-primary">all IT services & computer training</span>
                                </h2>
                                <p class="m-b20">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry has been the industry's standard dummy text ever since the been when an
                                    unknown printer There are many variations of passages of Lorem Ipsum available, but
                                    the majority have suffered alteration in some form.</p>
                                <h6 class="m-b20">AN ISO 9001:2015 CERTIFIED IT LEARNING CENTER</h6>
                                <div class="d-flex align-items-center">
                                    <a href="javascript:void(0);" class="site-button m-r30 radius-no">Our Courses</a>
                                    <div class="phone">
                                        <i class="fa fa-volume-control-phone"></i>
                                        <span><a href="tel:099-523014">099-523014</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- Company staus -->
            <div class="section-full text-white bg-img-fix content-inner overlay-black-dark counter-staus-box style-1"
                 style="background-image:url(images/background/bg8.jpg);">
                <div class="container">
                    <div class="section-head text-center">
                        <h2 class="title">Our Goals</h2>
                        <p>"All We Care About is Quality"</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-6 col-6 m-b30 wow fadeInUp counter-style-5"
                             data-wow-duration="2s" data-wow-delay="0.2s">
                            <div class="icon-bx-wraper center">
                                <div class="icon-lg m-b5"><span class="icon-cell text-green"><i
                                            class="flaticon-graduated-student-avatar"></i></span></div>
                                <div class="icon-content">
                                    <h2 class="dlab-tilte counter text-primary">15</h2>
                                    <p>Certified Teachers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6 col-6 m-b30 wow fadeInUp counter-style-5"
                             data-wow-duration="2s" data-wow-delay="0.4s">
                            <div class="icon-bx-wraper center">
                                <div class="icon-lg m-b5"><span class="icon-cell text-red"><i
                                            class="flaticon-contract"></i></span></div>
                                <div class="icon-content">
                                    <h2 class="dlab-tilte counter text-primary">1552</h2>
                                    <p>Students Enrolled</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6 col-6 m-b30 wow fadeInUp counter-style-5"
                             data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="icon-bx-wraper center">
                                <div class="icon-lg m-b5"><span class="icon-cell text-green"><i
                                            class="flaticon-school"></i></span></div>
                                <div class="icon-content">
                                    <h2 class="dlab-tilte text-primary"><span class="counter">97</span>%</h2>
                                    <p>Passing to Universities</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3 col-sm-6 col-6 m-b30 wow fadeInUp counter-style-5"
                             data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="icon-bx-wraper center">
                                <div class="icon-lg m-b5"><span class="icon-cell text-yellow"><i
                                            class="flaticon-test"></i></span></div>
                                <div class="icon-content">
                                    <h2 class="dlab-tilte text-primary"><span class="counter">100</span>%</h2>
                                    <p>Satisfied Parents & Students</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Company staus End -->

            <!-- why us-->
            <div class="content-block">
                <!-- About Us -->
                <div class="section-full content-inner bg-white">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-12 m-b30 about-two align-self-start">
                                <div class="row sp10">
                                    <div class="col-md-12 m-b10">
                                        <img src="images/about/about2/pic1.jpg" class="img-cover" alt="">
                                    </div>
                                    <div class="col-md-7 m-b10">
                                        <img src="images/about/about2/pic2.jpg" class="img-cover" alt="">
                                    </div>
                                    <div class="col-md-5 m-b10">
                                        <div class="about-year bg-primary">
                                            <div>
                                                <h2 class="no-title">7+</h2>
                                                <h4 class="title">Years Experience Working</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 m-b30 about-two">
                                <div class="section-head m-b20">
                                    <h2 class="title">Our Vision & Mission</h2>
                                    <h5 class="title-small">Igniting the spark of genius in every child.</h5>
                                    <div class="dlab-separator bg-primary"></div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen
                                    book.</p>

                                <ul class="list-check primary text-black circle">
                                    <li>You Will Never Thought That Knowing Education</li>
                                    <li>Never Mess With Education And Here's The Reasons Why</li>
                                    <li>This Is Why This Year Will Be The Year Of Education</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- why us end-->

                <!-- Service Info Head -->
                <div class="section-full bg-primary">
                    <div class="container-fluid">
                        <div class="row align-item-center about-three">
                            <div class="col-lg-6 p-lr0">
                                <div class="video-bx about-video">
                                    <img src="images/about/about3.jpg" class="img-cover" alt=""/>
                                    <div class="video-play-icon">
                                        <a href="https://www.youtube.com/watch?v=f4Bts39jimI"
                                           class="popup-youtube video"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 content-inner-2 content-bx">
                                <div class="max-w600 p-lr15">
                                    <div class="section-head text-white m-b20">
                                        <h5 class="title-small">Step into the World of Organics!</h5>
                                        <h2 class="title">Why us</h2>
                                        <div class="dlab-separator bg-white"></div>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.</p>
                                    <ul class="list-check circle white">
                                        <li>You Will Never Thought That Knowing Education</li>
                                        <li>Never Mess With Education And Here's The Reasons Why</li>
                                        <li>This Is Why This Year Will Be The Year Of Education</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Our Services -->
                <!-- Team-->
                <div class="bg-white team-box-area">
                    <!-- Team Section Style 1 -->
                    <div class="section-full bg-gray content-inner">
                        <div class="container">
                            <div class="section-head text-black text-center">
                                <h2 class="title">Our Team</h2>
                                <p>Our growing team members</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30 dlab-team4">
                                        <div class="dlab-media">
                                            <a href="javascript:;">
                                                <img alt="" src="images/our-team/pic9.jpg">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="javascript:;">Nashid Martines</a></h4>
                                            <span class="dlab-position">Director</span>
                                            <ul class="dlab-social-icon">
                                                <li><a class="site-button circle-sm gray-light fa fa-facebook"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-twitter"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-linkedin"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-pinterest"
                                                       href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30 dlab-team4">
                                        <div class="dlab-media">
                                            <a href="javascript:;">
                                                <img alt="" src="images/our-team/pic9.jpg">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="javascript:;">Nashid Martines</a></h4>
                                            <span class="dlab-position">Director</span>
                                            <ul class="dlab-social-icon">
                                                <li><a class="site-button circle-sm gray-light fa fa-facebook"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-twitter"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-linkedin"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-pinterest"
                                                       href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30 dlab-team4">
                                        <div class="dlab-media">
                                            <a href="javascript:;">
                                                <img alt="" src="images/our-team/pic9.jpg">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="javascript:;">Nashid Martines</a></h4>
                                            <span class="dlab-position">Director</span>
                                            <ul class="dlab-social-icon">
                                                <li><a class="site-button circle-sm gray-light fa fa-facebook"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-twitter"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-linkedin"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-pinterest"
                                                       href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30 dlab-team4">
                                        <div class="dlab-media">
                                            <a href="javascript:;">
                                                <img alt="" src="images/our-team/pic9.jpg">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="javascript:;">Nashid Martines</a></h4>
                                            <span class="dlab-position">Director</span>
                                            <ul class="dlab-social-icon">
                                                <li><a class="site-button circle-sm gray-light fa fa-facebook"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-twitter"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-linkedin"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-pinterest"
                                                       href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30 dlab-team4">
                                        <div class="dlab-media">
                                            <a href="javascript:;">
                                                <img alt="" src="images/our-team/pic9.jpg">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="javascript:;">Nashid Martines</a></h4>
                                            <span class="dlab-position">Director</span>
                                            <ul class="dlab-social-icon">
                                                <li><a class="site-button circle-sm gray-light fa fa-facebook"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-twitter"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-linkedin"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-pinterest"
                                                       href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>  <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30 dlab-team4">
                                        <div class="dlab-media">
                                            <a href="javascript:;">
                                                <img alt="" src="images/our-team/pic9.jpg">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="javascript:;">Nashid Martines</a></h4>
                                            <span class="dlab-position">Director</span>
                                            <ul class="dlab-social-icon">
                                                <li><a class="site-button circle-sm gray-light fa fa-facebook"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-twitter"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-linkedin"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-pinterest"
                                                       href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30 dlab-team4">
                                        <div class="dlab-media">
                                            <a href="javascript:;">
                                                <img alt="" src="images/our-team/pic9.jpg">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="javascript:;">Nashid Martines</a></h4>
                                            <span class="dlab-position">Director</span>
                                            <ul class="dlab-social-icon">
                                                <li><a class="site-button circle-sm gray-light fa fa-facebook"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-twitter"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-linkedin"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-pinterest"
                                                       href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30 dlab-team4">
                                        <div class="dlab-media">
                                            <a href="javascript:;">
                                                <img alt="" src="images/our-team/pic9.jpg">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="javascript:;">Nashid Martines</a></h4>
                                            <span class="dlab-position">Director</span>
                                            <ul class="dlab-social-icon">
                                                <li><a class="site-button circle-sm gray-light fa fa-facebook"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-twitter"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-linkedin"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-pinterest"
                                                       href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="dlab-box m-b30 dlab-team4">
                                        <div class="dlab-media">
                                            <a href="javascript:;">
                                                <img alt="" src="images/our-team/pic9.jpg">
                                            </a>
                                        </div>
                                        <div class="dlab-info">
                                            <h4 class="dlab-title"><a href="javascript:;">Nashid Martines</a></h4>
                                            <span class="dlab-position">Director</span>
                                            <ul class="dlab-social-icon">
                                                <li><a class="site-button circle-sm gray-light fa fa-facebook"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-twitter"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-linkedin"
                                                       href="javascript:void(0);"></a></li>
                                                <li><a class="site-button circle-sm gray-light fa fa-pinterest"
                                                       href="javascript:void(0);"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Team End -->
            </div>
        </div>
    </div>
@endsection
