@extends('frontend.layouts.master')
@section('title')
    Career
@endsection
@section('addseo')
<meta property="og:title" content="Career" />
<meta property="og:description" content="Work with us
IT Zone encourages any individuals from around the world with sound knowledge and experience of specific subject matter to join the team of highly qualified and trained instructo " />
<meta property="og:image" content="{{ asset('images/background/itzone-learning.jpeg') }}" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://itzonecomputer.com/">
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt"
             style="background-image:url(images/background/itzone-learning.jpeg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Career</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li>Career</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- Career -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Career -->
            <div class="section-full content-inner bg-gray">
                <div class="container">
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-lg-8 col-md-7 col-sm-12 inner-text">
                            <h2 class="title">Work with us</h2>
                            <p>IT Zone encourages any individuals from around the world with sound knowledge and
                                experience of specific subject matter to join the team of highly qualified and trained
                                instructors. If you are passionate about sharing your knowledge and experience with the
                                young minds from around the world IT Zone is the best platform to unleash your potential
                                and transform the career of thousands of youths that get enrolled in IT Zone round the
                                year. </p>
                            <h4 class="title">Our Values </h4>
                            <ul class="list-check primary">
                                <li>Character</li>
                                <li>Competency</li>
                                <li>Community</li>
                                <li>Student/Customer Focus</li>
                                <li>Be Remarkable</li>
                                <li>Always Be Learning</li>
                                <li>Openness</li>
                                <li>Transparency</li>
                                <li>Celebrate Efforts</li>
                                <li>Safe Space</li>
                                <li>Mutual Respect</li>
                                <li>Accountable Freedom</li>
                                <li>Compassionate Equity</li>
                            </ul>
                            <hr>
                            <h2 class="text-center">Current Openings</h2>
                            <p class="text-center">Below are the current openings to start working with us</p>


                        <hr>
                            <h2>Don't see where you fit and still want to work with us?</h2>
                            <p>Drop us an email telling us why.
                            <a class="btn btn-light " href="mailto:info@itzonecomputer.com">info@itzonecomputer.com</a>or <a class="btn btn-light " href="mailto:itzone666@gmail.com">itzone666@gmail.com</a>
                            </p>
                            <div class="text-center">
                                    <a href="{{route('pages.careerapply')}}" type="button" class="site-button outline red m-r15">APPLY NOW <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-12 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box m-b30 bg-white">
                                <div class="icon-sm m-b20"><a href="javascript:void(0);" class="icon-cell"><img src="/images/icon/fb_laptop_normal.png"> </a></div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">1. REGISTRATION</h5>
                                    <p>Fill out the application form and submit necessary documents to apply</p>
                                </div>
                            </div>
                            <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box m-b30 bg-white">
                                <div class="icon-sm m-b20"><a href="javascript:void(0);"><img src="/images/icon/team_normal.png"></a></div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">2. SCREENING AND ASSESSMENT</h5>
                                    <p>Information and documents will be screened while you undergo skill assessments</p>
                                </div>
                            </div>
                            <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box m-b30 bg-white">
                                <div class="icon-sm m-b20"><a href="javascript:void(0);" class="icon-cell text-primary"><img src="/images/icon/assessment.png"></a></div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">3. ORIENTATION</h5>
                                    <p>Learn more about Itzone Computer and what it means to be a ItzoneWorker</p>
                                </div>
                            </div>
                            <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box m-b30 bg-white">
                                <div class="icon-sm m-b20"><a href="javascript:void(0);" class="icon-cell text-primary"><img src="/images/icon/training.png"></a></div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">4. TRAINING</h5>
                                    <p>Receive hands-on training and grow your skill set as you begin your ItzoneWorker journey</p>
                                </div>
                            </div>
                            <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box bg-white">
                                <div class="icon-sm m-b20"><a href="javascript:void(0);" class="icon-cell text-primary"><img src="/images/icon/enrolled.png"></a></div>
                                <div class="icon-content">
                                    <h5 class="dlab-tilte text-uppercase">5. START WORKING</h5>
                                    <p>You’re ready to go! Log in to the Itzone platform and start earning!</p>
                                </div>
                            </div>
                        </div>
                        <!-- Left part start END -->
                    </div>
                </div>
            </div>
            <!-- Career END -->
        </div>
    </div>
    <!-- Content END-->
    </div>
@endsection
