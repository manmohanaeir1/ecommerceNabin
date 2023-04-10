@extends('frontend.layouts.master')
@section('title')
Home
@endsection
@section('addcss')
<link rel="stylesheet" type="text/css" href="{{asset('css/popup.css')}}">
@endsection
@section('content')
<!-- Content -->
<div class="page-content bg-white">

    <!-- Popup start -->
    <!-- <div id="popUp">
        <div id="popUpContent">
            <div id="popUpImage">
                <p id="closePopUp" onclick="closePopUp()">X</p>
                <a href="https://neeminfosys.com/online-registration">
                    <h2>Admission Open for PDIT.</h2>
                </a>
                <a href="https://neeminfosys.com/online-registration"><img src="{{asset('/images/popup/pdit-fee-structure-2079.jpeg')}}"></a>
            </div>
        </div>
    </div> -->
    

    <!-- search and popular course icon -->
     <form action="{{route('frontend.home')}}" method="get" class="dzSubscribe subscribe-box row align-items-center sp15">
    <!-- <div class="col-lg-6 col-md-6">
        <div class="input-group">
            <input name="text" required="required" type="text" class="form-control" style="background: #E8EAEB;" placeholder="What do you want to learn?">
        </div>
    </div>
  <div class="col-lg-2 col-md-2"> 
        <div class="input-group">
            <button name="submit" value="Submit" type="submit" class="site-button btn-block btnhover13">Search</button>
        </div>
    </div>
   <div class="col-lg-4 col-md-4 middle-menu">
        <ul class="list-inline m-a0">
            {{-- <li>
                    <a href="iphone-app-development.html" title="iPhone Apps Devlopment">
                      <img src="images/icon/m-apple.png" alt="iPhone Apps Devlopment">
                    </a>
                  </li> --}}
            <li>
                <a href="{{route('course.androidtraining')}}" title="Android Apps Development">
                    <img src="{{asset('images/icon/m-android.png')}}" alt="Android Apps Development">
                </a>
            </li>
            <li>
                <a href="#" title="Wordpress development">
                    <img src="{{asset('images/icon/m-wordpress.png')}}" alt="Wordpress development">
                </a>
            </li>
            <li>
                <a href="{{route('course.phplaravel')}}" alt="Laravel Training">
                    <img src="{{asset('/images/icon/laravel-icon.png')}}" width="34" height="42" alt="" lazy="loading"></a>
            </li>
            <li>
                <a href="#"> <img src="{{asset('/images/icon/java-icon.jpg')}}" width="34" height="42" alt="java "></a href="#">
            </li>

            
            <li>
                <a href="{{route('course.webdesigntraining')}}"> <img src="{{asset('/images/icon/js-icon.jpg')}}" width="34" height="42" alt="js "></a href="#">
            </li>
            {{-- <li>
                        <a href="#"> <img src="/images/icon/mern-icon.png" width="100" height="42" alt="MERN Stack"></a href="#">
                    </li> --}}
            <li>
                <a href="{{route('course.graphicdesigntraining')}}"> <img src="{{asset('/images/icon/ps-ai-id.jpg')}}" width="120" height="42" alt="PS AI ID"></a>
            </li>
            {{-- <li>
                    <a href="search-engine-optimization.html" title="SEO &amp; SEM Services">
                      <img src="images/icon/m-megento.png" alt="Search Engine Optimization">
                    </a>
                  </li> --}}
            <li>
                <a href="{{route('course.officetraining')}}"> <img src="/images/icon/itoffice.png" width="120" height="42" alt="PS AI ID"></a>
            </li>
        </ul>
    </div>
-->
    </form> 

    <!-- Banner Slider Start-->
    <div class="section-full bg-white">
        <div class="row mx-3">
            <div class="col-lg-8">
                <!-- content start -->
                <div class="section-content box-sort-in button-example">
                    <div class="owl-fade-one owl-loaded owl-theme owl-carousel owl-btn-1 primary owl-btn-center-lr">
                        <div class="item">
                            <div class="dlab-thum-bx">
                                <img src="{{asset('images/banner/be-skillful-with-itzone.jpeg')}}" alt="" lazy="loading">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-thum-bx">
                                <img src="{{asset('images/banner/IT Zone Scholarship PDIT-2079-students.jpeg')}}" alt="" lazy="loading">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-thum-bx">
                                <img src="{{asset('images/banner/adit-2079-schoolarship-students.jpeg')}}" alt="" lazy="loading">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-thum-bx">
                                <img src="{{asset('images/banner/learn-computer-make-skill.jpeg')}}" alt="" lazy="loading">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-thum-bx">
                                <img src="{{asset('images/banner/itzone-cover.jpg')}}" alt="" lazy="loading">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-thum-bx">
                                <img src="{{asset('images/banner/itzone-banner-2.jpeg')}}" alt="" lazy="loading">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-thum-bx">
                                <img src="{{asset('images/banner/advance-your-computer-skill.jpeg')}}" alt="" lazy="loading">
                            </div>
                        </div>
                        <div class="item">
                            <div class="dlab-thum-bx">
                                <img src="{{asset('images/banner/itzone-changa.jpg')}}" alt="" lazy="loading">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="icon-bx-wraper bx-style-1 p-a30" style="background: #E8EAEB;">
                    {{-- <div class="icon-lg m-b20"> <span class="icon-cell"><i class="flaticon-closed-notebook-and-pen"></i></span> </div> --}}

                    <h2 class="dlab-tilte text-center">All We Care About is Quality</h2>
                    <h6 class="dlab-tilte text-uppercase text-center">AN ISO 9001:2015 CERTIFIED IT LEARNING CENTER</h6>
                    <p style="font-family: poppins; font-size:15px;" class="text-justify">IT Zone Computer is one of the best inclusive
                        computer training institutes in Mahendranagar, Kanchanpur, Nepal.
                        <br> <br>
                        IT Zone specializes and is well-known for training students as well as working professionals in Diploma in Computer, Programming, Digital Marketing, Accounting Package, Graphics Designing, Video Mixing and Animation, Web Designing, Auto CAD, Data Science & Machine Learning, Hardware & Networking, Linux Training...
                    </p>
                    <a href="https://neeminfosys.com/online-admission" class="site-button btnhover6" class=" text-uppercase">Get Admission Now <i class="fa fa-long-arrow-right"></i></a>

                </div>
            </div>
        </div>
        <!-- Fade Carousel -->

    </div>
    <!-- Banner Slider End -->
    <!-- Content Section -->
    <div class="content-block">
        <div class="section-full content-inner bg-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-6 m-b30">
                        <div class="icon-bx-wraper left counter-style-6">
                            <div class="icon-lg text-primary radius icon-up">
                                <span class="icon-cell"><i class="las la-laptop-code"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">25+</h5>
                                <p>IT Training Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-b30">
                        <div class="icon-bx-wraper left counter-style-6">
                            <div class="icon-lg text-primary radius icon-up">
                                <span class="icon-cell"><i class="las la-user-graduate"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">12+</h5>
                                <p>Expert Instructors</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-b30">
                        <div class="icon-bx-wraper left counter-style-6">
                            <div class="icon-lg text-primary radius icon-up">
                                <span class="icon-cell"><i class="las la-book"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Unlimited</h5>
                                <p>Course Access</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 m-b30">
                        <div class="icon-bx-wraper left counter-style-6">
                            <div class="icon-lg text-primary radius icon-up">
                                <span class="icon-cell"><i class="las la-book-reader"></i></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="dlab-tilte">Learn</h5>
                                <p>From Anywhere</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses -->
        <div id="allcourses" class="section-full content-inner bg-white wow fadeIn" data-wow-duration:="2s" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">Popular Courses</h2>
                    <p>Learn, Develop Skills, Secure Your Career.</p>
                </div>
                <div class="site-filters clearfix center m-b40">
                   
                        
                    
                    <ul class="filters" data-toggle="buttons">
                        <li data-filter="" class="btn active"><input type="radio"><a href="javascript:void(0);" class="site-button outline outline-2 button-sm btn-tb"><span>All</span></a></li>
                        @foreach ($course_categories as $course_cat)
                        <li data-filter="{{$course_cat->course_category_name}}" class="btn"><input type="radio"><a href="javascript:void(0);" class="site-button outline outline-2 button-sm btn-tb"><span>{{$course_cat->course_category_name  }}</span></a></li>
                        @endforeach
                    </ul>
                   
                </div>
                <div class="clearfix" id="lightgallery">
                    <ul id="masonry" class="portfolio-ic dlab-gallery-listing row gallery-grid-4 lightgallery">
                        @foreach ($courses as $course)
                        <li class="card-container col-lg-3 col-md-6 col-sm-6 {{$course->category->course_category_name  ?? ''}}">
                            
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
            <div class="text-center">
                <a href="{{route('pages.courses')}}" type="button" class="site-button outline red m-r15">VIEW ALL COURCES <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
        <!-- Courses End -->

        <!-- Latests News -->
        <div class="section-full content-inner bg-gray wow fadeIn" data-wow-duration:="2s" data-wow-delay="0.6s">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">Our Latest Notice</h2>
                    <p>All our offers, notices, happenings like holidays, events are covered here!</p>
                </div>
                <div class="blog-carousel owl-carousel owl-btn-3 owl-btn-center-lr">
                    @foreach ($posts as $post)
                    <div class="item">
                        <div class="blog-post blog-grid blog-rounded blog-effect1">
                            <div class="dlab-post-media dlab-img-effect">
                                <a href="#"><img src="{{ asset('uploads/posts/'.$post->image) }}" alt="" title="" lazy="loading"></a>
                            </div>
                            <div class="dlab-info p-a20">
                                <div class="dlab-post-meta">
                                    <ul>
                                        <li class="post-author"> <i class="la la-user-circle"></i> By <a href="javascript:void(0);">{{$post->user->name}}</a> </li>
                                        <li class="post-tag"> <a href="javascript:void(0);">{{$post->category->category_name  ?? ''}}</a> </li>
                                    </ul>
                                </div>
                                <div class="dlab-post-title ">
                                    <h4 class="post-title"><a href="{{ route('show.singleblog', $post->slug) }}">{{$post->post_title}}</a></h4>
                                </div>
                                <div class="dlab-post-text">
                                  
                                    <p>{!!Str::limit($post->post_content, 100) !!}<strong>See more</strong></p> 
                                </div>
                                <div class="post-footer">
                                    <div class="dlab-post-meta">
                                        <ul>
                                            <li class="post-date"> <i class="la la-clock"></i> <strong>{{$post->created_at->toFormattedDateString()}}</strong> </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>    
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center">
                <a href="#" type="button" class="site-button outline red m-r15">VIEW ALL NEWS <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
        <!-- Latest News End -->

        <!-- Testimonials -->
        <div class="section-full bg-white content-inner-2">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">What Our Students Say</h2>
                    <p>"All We Care About is Quality"</p>
                </div>
                <div class="row">
                    <div class="section-content col-12">
                        <div class="testimonial-num-count owl-num-count owl-carousel owl-btn-center-lr owl-btn-3 owl-theme">
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/archana-chand.jpeg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Archana Chand</h4>
                                        <span class="testimonial-position">BBS (Far-western University )</span>
                                        <div class="testimonial-text">
                                            <p>For me it is the best IT institute i have ever had. One should try at least once for this course. I entered here without any knowledge of computers, but I have learned many things till now about basic packages.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/jagdish-joshi.jpeg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Jagdish Joshi</h4>
                                        <span class="testimonial-position">BBS (Far-western University )</span>
                                        <div class="testimonial-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                when
                                                an printer took a galley.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/manoj-kumar-singh.jpeg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Manoj Kumar Singh</h4>
                                        <span class="testimonial-position">BBS (Far-western University )</span>
                                        <div class="testimonial-text">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                when
                                                an printer took a galley.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/nisha-thapa-magar.jpeg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Nisha Thapa Magar</h4>
                                        <span class="testimonial-position">BBS (Far-western University )</span>
                                        <div class="testimonial-text">
                                            <p>I am learning office packages in this institution and I found teachers and their techniques are unique and understandable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/piyush-pandey.jpeg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Piyush Pandey</h4>
                                        <span class="testimonial-position">BBS (Far-western University )</span>
                                        <div class="testimonial-text">
                                            <p>I highly recommend this institute for diploma and various computer related courses, this institute provides ISO certified certificate for ADIT course and various graphic designing courses. I think I am lucky to have such a wonderful platform provided by IT Zone Computer, MNR kanchanpur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/Jagriti Shahi.jpg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Jagriti Shahi</h4>
                                        <span class="testimonial-position">BBS (Far-western University )</span>
                                        <div class="testimonial-text">
                                            <p>I'm glad to do the course with IT Zone Computer. It is the best computer learning platform, with a super support team and instructors. Kudos to the trainers for creating such a great learning platform. I have enjoyed a lot while doing my ADIT training at IT Zone Computer, and at the same time, I have updated my skills too. Thank you IT Zone Computer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/Aarati Chand.jpg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Aarati Chand</h4>
                                        <span class="testimonial-position">BBS (Far-western University )</span>
                                        <div class="testimonial-text">
                                            <p>IT Zone Computer is famous for its computer training services throughout the town as it provides basic to diploma courses. I found instructors very friendly, even when I was not so good at the computer they made me trained with their special teaching techniques.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/Nira Rawal.jpg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Nira Rawal</h4>
                                        <span class="testimonial-position">Kanchan Vidhya Mandhir</span>
                                        <div class="testimonial-text">
                                            <p>The way teacher's here taught us is in an awesome way. The overall infrastructure of the classrooms is so good that it creates a good environment that facilitates us to learn in a better way and helps us to learn everything in a creative way</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/Monika Bhandari.png')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Monika Bhandari</h4>
                                        <span class="testimonial-position">BBS (Far-western University )</span>
                                        <div class="testimonial-text">
                                            <p>I'm glad to do the course with IT Zone Computer. It is the best computer learning platform, with a super support team and instructors. Kudos to the trainers for creating such a great learning platform. I have enjoyed a lot while doing my ADIT training at IT Zone Computer, and at the same time, I have updated my skills too. Thank you IT Zone Computer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/Kiran Auji.jpg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Kiran Auji</h4>
                                        <span class="testimonial-position">Bal Jagariti</span>
                                        <div class="testimonial-text">
                                            <p>IT Zone Computer educators are highly skilled and competent in their respective fields, and they employ excellent teaching methods in which trainers explain the ideas using practical examples and assist in learning computers in a systematic manner.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/Piyush Pandey.jpg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Piyush Pandey</h4>
                                        <span class="testimonial-position">BBS (Far-western University )</span>
                                        <div class="testimonial-text">
                                            <p>I highly recommend this institute for diploma and various computer related courses, this institute provides ISO certified certificate for ADIT course and various graphic designing courses. I think I am lucky to have such a wonderful platform provided by IT Zone Computer, MNR kanchanpur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/Purnika Ojha.jpg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Purnika Ojha</h4>
                                        <span class="testimonial-position">Student</span>
                                        <div class="testimonial-text">
                                            <p>This Institute is really the best for learning computer education. Here all teachers are well qualified, polite and friendly.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/Saksham Gautam.jpg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Saksham Gautam</h4>
                                        <span class="testimonial-position">Morning Glory School</span>
                                        <div class="testimonial-text">
                                            <p>I am a student of this zone. It is a very good institute to learn a computer in an easy way and in a fast way. So I requested all my friends to be admitted here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/Saphal Gautam.jpg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Saphal Gautam</h4>
                                        <span class="testimonial-position">Morning Glory School</span>
                                        <div class="testimonial-text">
                                            <p>IT Zone Computer provides highly skilled teachers, with a peace environment. I recommend all of my colleagues to study here different computer related courses.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-12 text-white">
                                    <div class="testimonial-pic">
                                        <img src="{{asset('uploads/testimonial/Rekha Chand.jpg')}}" alt="" lazy="loading">
                                    </div>
                                    <div class="testimonial-detail">
                                        <h4 class="testimonial-name m-t0 m-b5">Rekha Chand</h4>
                                        <span class="testimonial-position">Morning Glory School</span>
                                        <div class="testimonial-text">
                                            <p>Best institute for its courses.Enough Space for further practice even when your class time is finished. I recommend my friends and relatives to study here if you want to make a better future in the world of technology.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center col-sm-12">
                    <a href="{{route('pages.testimonials')}}" type="button" class="site-button outline red m-r15">VIEW ALL <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <br><br>
                {{-- <div class="col-12">--}}
                {{-- <div class="row">--}}
                {{-- <div class="post card-container col-md-4 col-sm-12 m-b40">--}}
                {{-- <div class="video-bx about-video">--}}
                {{-- <img src="{{asset('images/banner/itzone-cover.jpg')}}" class="img-cover" alt="" lazy="loading" />--}}
                {{-- <div class="video-play-icon">--}}
                {{-- <a href="https://www.youtube.com/" class="popup-youtube video"><i class="fa fa-play"></i></a>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- <div class="post card-container col-md-4 col-sm-12 m-b40">--}}
                {{-- <div class="video-bx about-video">--}}
                {{-- <img src="{{asset('images/banner/itzone-cover.jpg')}}" class="img-cover" alt="" lazy="loading" />--}}
                {{-- <div class="video-play-icon">--}}
                {{-- <a href="https://www.youtube.com/" class="popup-youtube video"><i class="fa fa-play"></i></a>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- <div class="post card-container col-md-4 col-sm-12 m-b40">--}}
                {{-- <div class="video-bx about-video">--}}
                {{-- <img src="{{asset('images/banner/itzone-cover.jpg')}}" class="img-cover" alt="" lazy="loading" />--}}
                {{-- <div class="video-play-icon">--}}
                {{-- <a href="https://www.youtube.com/" class="popup-youtube video"><i class="fa fa-play"></i></a>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- <div class="post card-container col-md-4 col-sm-12 m-b40">--}}
                {{-- <div class="video-bx about-video">--}}
                {{-- <img src="{{asset('images/banner/itzone-cover.jpg')}}" class="img-cover" alt="" lazy="loading" />--}}
                {{-- <div class="video-play-icon">--}}
                {{-- <a href="https://www.youtube.com/" class="popup-youtube video"><i class="fa fa-play"></i></a>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}

                {{-- <div class="post card-container col-md-4 col-sm-12 m-b40">--}}
                {{-- <div class="video-bx about-video">--}}
                {{-- <img src="{{asset('images/banner/itzone-cover.jpg')}}" class="img-cover" alt="" lazy="loading" />--}}
                {{-- <div class="video-play-icon">--}}
                {{-- <a href="https://www.youtube.com/" class="popup-youtube video"><i class="fa fa-play"></i></a>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}

                {{-- <div class="post card-container col-md-4 col-sm-12 m-b40">--}}
                {{-- <div class="video-bx about-video">--}}
                {{-- <img src="{{asset('images/banner/itzone-cover.jpg')}}" class="img-cover" alt="" lazy="loading" />--}}
                {{-- <div class="video-play-icon">--}}
                {{-- <a href="https://www.youtube.com/" class="popup-youtube video"><i class="fa fa-play"></i></a>--}}
                {{-- </div>--}}
                {{-- </div>--}}
                {{-- </div>--}}

                {{-- </div>--}}
                {{-- <div class="text-center">--}}
                {{-- <a href="#" type="button" class="site-button outline red m-r15">VIEW ALL <i class="fa fa-long-arrow-right"></i></a>--}}
                {{-- </div>--}}
                {{-- </div>--}}
            </div>
        </div>
    </div>
    <!-- Testimonials End -->

    <!-- Success Story -->
    <div class="section-full bg-gray content-inner-2">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="title">Success Stories</h2>
                <p>"Quality Never Say Sorry"</p>
            </div>
            <div class="owl-team owl-carousel dlab-team11-area owl-theme owl-btn-center-lr dots-theme">
                <div class="item">
                    <div class="dlab-box dlab-team11">
                        <div class="rounded-team">
                            <div class="round-box bg-primary">
                                <div class="team-mamber">
                                    <div class="team-mamber">
                                        <img alt="Dambar Mahara" lazy="loading" src="{{asset('uploads/success/Dambar-Mahara.jpeg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/dambar.mahara88" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="https://www.linkedin.com/in/dambar-mahara-651093140/" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Dambar Mahara</a></h5>
                                <span>Section Officer</span>
                                <span>at Parshuram Municipality, Dadeldhura</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="dlab-box dlab-team11">
                        <div class="rounded-team">
                            <div class="round-box bg-primary">
                                <div class="team-mamber">
                                    <div class="team-mamber">
                                        <img alt="Dan Bahadur Bohara" lazy="loading" src="{{asset('uploads/success/Dan bahadur Bohara.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/boharadanbd" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Dan Bahadur Bohara</a></h5>
                                <span>Computer Operator</span>
                                <span>at Punarbas Municipality, Kanchanpur</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="dlab-box dlab-team11">
                        <div class="rounded-team">
                            <div class="round-box bg-primary">
                                <div class="team-mamber">
                                    <div class="team-mamber">
                                        <img alt="Ganesh Raj Ojha" lazy="loading" src="{{asset('uploads/success/Ganesh Raj Ojha.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/ganeshojha.np" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Ganesh Raj Ojha</a></h5>
                                <span>Graphics Designer</span>
                                <span>at Kyra Works Pvt.Ltd, Kathmandu</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="dlab-box dlab-team11">
                        <div class="rounded-team">
                            <div class="round-box bg-primary">
                                <div class="team-mamber">
                                    <div class="team-mamber">
                                        <img alt="Lalit Nath" lazy="loading" src="{{asset('uploads/success/Lalit Nath.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/lalit.nath.1806" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="https://www.linkedin.com/in/lalit-nath-11b5111b4/" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Lalit Nath</a></h5>
                                <span>Web & app Developer</span>
                                <span>at Lightwebgroup, Dhangadi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="dlab-box dlab-team11">
                        <div class="rounded-team">
                            <div class="round-box bg-primary">
                                <div class="team-mamber">
                                    <div class="team-mamber">
                                        <img alt="Prabin Jagari" lazy="loading" src="{{asset('uploads/success/Prabin Jagari.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/prabin.jagri" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Prabin Jagari</a></h5>
                                <span>Graphics Designer</span>
                                <span>at Tejal Printing, Kanchanpur</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="dlab-box dlab-team11">
                        <div class="rounded-team">
                            <div class="round-box bg-primary">
                                <div class="team-mamber">
                                    <div class="team-mamber">
                                        <img alt="Manisha Jagri" lazy="loading" src="{{asset('uploads/success/Manisha Jagri.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/mona.xetree.5" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Manisha Jagri</a></h5>
                                <span>Computer Operator</span>
                                <span>at Ministry of Home Affairs - Department of National ID and Civil Registration</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box dlab-team11">
                        <div class="rounded-team">
                            <div class="round-box bg-primary">
                                <div class="team-mamber">
                                    <div class="team-mamber">
                                        <img alt="Pradip Pandey" lazy="loading" src="{{asset('uploads/success/Pradip Pandey.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="#" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Pradip Pandey</a></h5>
                                <span>Computer Operator</span>
                                <span>at Ministry of Home Affairs - Department of National ID and Civil Registration</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box dlab-team11">
                        <div class="rounded-team">
                            <div class="round-box bg-primary">
                                <div class="team-mamber">
                                    <div class="team-mamber">
                                        <img alt="Mahesh Nath" lazy="loading" src="{{asset('uploads/success/Mahesh Nath.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/mahesh.nath.5030" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Mahesh Nath</a></h5>
                                <span>Computer Operator</span>
                                <span>at NMB Bank, Mahendranagar</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="dlab-box dlab-team11">
                        <div class="rounded-team">
                            <div class="round-box bg-primary">
                                <div class="team-mamber">
                                    <div class="team-mamber">
                                        <img alt="Sunil Karki" lazy="loading" src="{{asset('uploads/success/Sunil Karki.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/profile.php?id=100037392371404" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Sunil Karki</a></h5>
                                <span>Computer Instructor</span>
                                <span>at Tech Trust Infosys, Dadeldhura</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center">
            <a href="{{route('pages.successgallery')}}" type="button" class="site-button outline red m-r15">VIEW ALL <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
    <!-- Success Story End -->


</div>
<!-- contact area END -->
</div>
<!-- Content END -->
@endsection

@section('addjs')
<script type="text/javascript">
    function popUp() {
        document.getElementById('popUp').style.display = "block";
    }

    function closePopUp() {
        document.getElementById('popUp').style.display = "none";
    }
</script>
@endsection