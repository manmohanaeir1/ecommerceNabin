@extends('frontend.layouts.master')
@section('title')
Course Detail
@endsection
@section('content')
<!-- Content -->
<div class="page-content bg-gray">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/background/itzone-learning.jpeg);">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Courses Details</h1>
                <!-- Breadcrumb row -->
                <div class="breadcrumb-row">
                    <ul class="list-inline">
                        <li><a href="index.html">Home</a></li>
                        <li>Courses Details</li>
                    </ul>
                </div>
                <!-- Breadcrumb row END -->
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <div class="section-full content-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-b30">
                    <div class="course-view text-center">
                        <h2 class="m-t0 m-b10 font-28 title text-black">Professional Diploma in Desktop Publishing(PDDP) in IT Zone Nepal</h2>
                        <ul class="course-info">
                            <li>
                                <i class="fa fa-user"></i> <span> 65</span>
                                <div class="course-info-dec">Student</div>
                            </li>
                            <li>
                                <i class="fa fa-star"></i> <span> 4.5</span>
                                <div class="course-info-dec">Reviews (23)</div>
                            </li>
                            <li>
                                <i class="fa fa-clock-o"></i> <span> 3 Months</span>
                                <div class="course-info-dec">Duration</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Side bar start -->

                <div class="col-xl-3 col-lg-4 col-md-12 m-b30">

                    <div class="side-bar sticky-top">
                        <!-- <iframe src="https://neeminfosys.com/online-inquiry" frameborder="0" height="700"></iframe> -->
                    </div>

                    </aside>
                </div>
                <!-- Side bar END -->
                <!-- left part start -->
                <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                    <div class="row">
                        {{-- <div class="col-lg-12">
								<div class="media m-b30">
									<img src="images/blog/default/thum1.jpg" alt="">
								</div>
							</div> --}}
                        <div class="col-lg-12">
                            <!-- Tabs -->
                            <div class="course-details dlab-tabs border-top bg-tabs">
                                <ul class="nav nav-tabs ">
                                    <li>
                                        <a data-toggle="tab" href="#description" class="active">
                                            <i class="fa fa-bookmark m-r10"></i>
                                            <span class="title-head">Description</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#curriculum">
                                            <i class="fa fa-cube"></i>
                                            <span class="title-head">Curriculum</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#instructor">
                                            <i class="fa fa-user"></i>
                                            <span class="title-head">Instructor</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#review">
                                            <i class="fa fa-comments"></i>
                                            <span class="title-head">Review </span> <span class="text-primary">(3)</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="description" class="tab-pane active">
                                        <h3 class="m-t0 m-b10">About This Course</h3>
                                        <p>Learn Professional Diploma in Desktop Publishing (PDDP) in IT Zone Computer - An ISO 9001:2015 certified organization. In this course, you will learn basic to professional desktop publishing skills. After completing the training, you will be able to work as a professional. At PDDP Course:
                                            • Fundamental of Computer
                                            • Microsoft Office
                                            • Adobe Photoshop
                                            • Adobe Illustrator or Corel Draw.
                                            • PageMaker or In-Design
                                            • Internship
                                            Working areas:
                                            • Logo
                                            • Visiting Card
                                            • Brochure
                                            • Calendar
                                            • flower pattern
                                            • vinyl
                                            • Poster
                                            • Book, Magazine Cover
                                            • Packaging Design
                                            • T-Shirt print Design
                                            • Layout
                                            • Social Media Ads Design.</p>
                                        <h3 class="m-b10">Benefits of PDDP training</h3>
                                        <p> In simple words, PDDP training is very beneficial as digital content are taking over the world. So here are some reasons why you should take PDDP training. In this course, you will learn basic to professional desktop publishing skills. After completing the training, you will be able to work as a professional and you can apply for the job at any company by attaching the CV.</p>
                                        <h3 class="m-b10">Benefits of PDDP Training at IT Zone Computer</h3>
                                        <p>To the candidates attending PDDP Training at IT Zone, we provide the following benefits and value-added services:</p>
                                        <ul class="list-checked primary">
                                            <li>Gains in-depth knowledge of Fundamental of Computer and PDDP architecture.</li>
                                            <li>Learn to create UI/UX Design</li>
                                            <li>Affordable training cost.</li>
                                            <li>Increases your demand in the market of IT</li>
                                            <li>It helps to understand UI/UX graphics design development.</li>
                                            <li>Increases your demand in the market of IT</li>
                                            <li>Career counselings classes to motivate students.</li>
                                            <li>Develops creative awareness.</li>
                                            <li>Endless career scope.</li>
                                            <li>Trained IT expert as an instructor.</li>
                                            <li>Pedagogy and student performance.</li>
                                            <li>Learn to stay updated with the tech world.</li>
                                            <li>Comprehensive training methodology.</li>
                                            <li>IT Zone offers the best IT training programs in Mahendranagar, Nepal. And PDDP training undoubtedly matches the calibre for what it takes to deliver the right message to the group of students. Therefore, save yourself a seat at the earliest in order to attend an upcoming training session.</li>
                                        </ul>
                                        <h3 class="m-b10">Pre-requisites for PDDP Training</h3>
                                        <p>The PDDP course is very easy to use, anyone who has the knowledge of using computers and experience of browsing the Internet can easily learn PDDP</p>
                                        <div class="m-t10">
                                            <h5>Share :</h5>
                                            <ul class="dlab-social-icon">
                                                <li><a href="javascript:void(0);" class="site-button circle fa fa-facebook facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="site-button circle fa fa-twitter twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="site-button circle fa fa-linkedin linkedin"></a></li>
                                                <li><a href="javascript:void(0);" class="site-button circle fa fa-whatsapp whatsapp"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="curriculum" class="tab-pane">
                                        <h3 class="m-t0 m-b15">Professional Diploma in Desktop Publishing(PDDP)
                                        </h3>
                                        <a href="#" class="site-button red m-r15 circle box-shadow" type="button" download=""><i class="fa fa-cloud-download"></i></a>
                                        <h5 class="text-primary"> Basic Computer </h5>
											<table class="table">
												<thead>
													<tr> 
														<th>Lecture</th> 
														<th>Unit</th> 
													</tr> 
												</thead>
												<tbody><tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
													</td>
													<td>Fundamental of computer</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
													</td>
													<td>Operating System and its various types</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 3</span>
													</td>
													<td>Computer Protection and Using Antivirus Software</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 4</span>
													</td>
													<td>Growing Typing Skills- Typing Master/Typeshala</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 5</span>
													</td>
													<td>Word Processing(MS-WORD)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 6</span>
													</td>
													<td>Spreadsheet (MS-EXCEL)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 7</span>
													</td>
													<td>Presentation(M- POWERPOINT)</td>
												</tr>
											</tbody></table>
                                        <tbody>
                                            <table>
                                                <h5 class="text-primary">

                                                    ADOBE PHOTOSHOP CC
                                                </h5>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Lecture</th>
                                                            <th>Unit</th>
                                                            <th class="text-right">

                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
                                                            </td>
                                                            <td> Photoshop Essentials
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
                                                            </td>
                                                            <td>Selections

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 3</span>
                                                            </td>
                                                            <td>Image Correction

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 4</span>
                                                            </td>
                                                            <td>Day 5: - Layer Mask & Project Work

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 5</span>
                                                            </td>
                                                            <td>Re-Touching Techniques
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 6</span>
                                                            </td>
                                                            <td>Filters, Painting and Drawing
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 7</span>
                                                            </td>
                                                            <td>Working with Layers
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 8</span>
                                                            </td>
                                                            <td>Merging layers

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 9</span>
                                                            </td>
                                                            <td>Operating with Text


                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 10</span>
                                                            </td>
                                                            <td>Timeline


                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 11</span>
                                                            </td>
                                                            <td>Special Effects


                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span><i class="fa fa-file-o m-r10"></i>Lecture 1. 12</span>
                                                            </td>
                                                            <td>Files Saving



                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <tbody>
                                                    <table>
                                                        <h5 class="text-primary">

                                                            Adobe Illustrator CC
                                                        </h5>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Lecture</th>
                                                                    <th>Unit</th>
                                                                    <th class="text-right">

                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 1</span>
                                                                    </td>
                                                                    <td> Introduction
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 2</span>
                                                                    </td>
                                                                    <td>Drawing
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 3</span>
                                                                    </td>
                                                                    <td>Images

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 4</span>
                                                                    </td>
                                                                    <td>Text

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 5</span>
                                                                    </td>
                                                                    <td>Arranging and aligning objects
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 6</span>
                                                                    </td>
                                                                    <td>Working with Paths
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 7</span>
                                                                    </td>
                                                                    <td>Printing & Saving
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 8</span>
                                                                    </td>
                                                                    <td>Using Brushes

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 9</span>
                                                                    </td>
                                                                    <td>Gradients


                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 10</span>
                                                                    </td>
                                                                    <td>Transforming Objects

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 11</span>
                                                                    </td>
                                                                    <td>Layers


                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 12</span>
                                                                    </td>
                                                                    <td>Illustrator effects



                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 13</span>
                                                                    </td>
                                                                    <td>Using Live Trace




                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 2. 14</span>
                                                                    </td>
                                                                    <td>Filters



                                                                    </td>



                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h5 class="text-primary">Adobe InDesign CC </h5>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Lecture</th>
                                                                    <th>Unit</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 1</span>
                                                                    </td>
                                                                    <td>InDesign Layout
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 2</span>
                                                                    </td>
                                                                    <td>Document design


                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 3</span>
                                                                    </td>
                                                                    <td>Creating Basic Drawn Elements
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 4</span>
                                                                    </td>
                                                                    <td>Working with Text

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 5</span>
                                                                    </td>
                                                                    <td>Working with Objects
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 5</span>
                                                                    </td>
                                                                    <td>The ‘Swatches’ window

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 6</span>
                                                                    </td>
                                                                    <td>Frames
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 7</span>
                                                                    </td>
                                                                    <td>Graphics

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 8</span>
                                                                    </td>
                                                                    <td>Effects


                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 9</span>
                                                                    </td>
                                                                    <td>Tabs and Tables

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 10</span>
                                                                    </td>
                                                                    <td>The ’Pages’ window

                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                <tr>
                                                                    <td>
                                                                        <span><i class="fa fa-file-o m-r10"></i>Lecture 3. 10</span>
                                                                    </td>
                                                                    <td>Printing & Export
                                                                    </td>
                                                                </tr>


                                                            </tbody>
                                                        </table>
                                                </tbody>
                                            </table>



                                    </div>
                                    <div id="instructor" class="tab-pane">
                                        <h3 class="m-t0">Instructor</h3>

                                    </div>
                                    <div id="review" class="tab-pane comments-area">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-5 m-b30">
                                                <h5>Average Rating</h5>
                                                <div class="icon-bx-wraper bx-style-1 center rating-average">
                                                    <h2 class="rating-title text-primary">4.5</h2>
                                                    <div class="icon-content">
                                                        <div class="star-rating">
                                                            <div data-rating="3">
                                                                <i class="text-yellow fa fa-star" data-alt="1" title="regular"></i>
                                                                <i class="text-yellow fa fa-star" data-alt="2" title="regular"></i>
                                                                <i class="text-yellow fa fa-star-o" data-alt="3" title="regular"></i>
                                                                <i class="text-yellow fa fa-star-o" data-alt="4" title="regular"></i>
                                                                <i class="text-yellow fa fa-star-o" data-alt="5" title="regular"></i>
                                                            </div>
                                                        </div>
                                                        <p>100,453 ratings</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-7 m-b30">
                                                <h5>Detailed Rating</h5>
                                                <div class="bar-rating">
                                                    <ul class="bar-rating-chart icon-bx-wraper bx-style-1 p-a30">
                                                        <li class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group">5 stars</span>
                                                            </div>
                                                            <div class="bar">
                                                                <div class="bar-rat bg-primary" style="width:100%"></div>
                                                            </div>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group">5</span>
                                                            </div>
                                                        </li>
                                                        <li class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group">4 stars</span>
                                                            </div>
                                                            <div class="bar">
                                                                <div class="bar-rat bg-primary" style="width:80%"></div>
                                                            </div>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group">4</span>
                                                            </div>
                                                        </li>
                                                        <li class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group">3 stars</span>
                                                            </div>
                                                            <div class="bar">
                                                                <div class="bar-rat bg-primary" style="width:60%"></div>
                                                            </div>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group">3</span>
                                                            </div>
                                                        </li>
                                                        <li class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group">2 stars</span>
                                                            </div>
                                                            <div class="bar">
                                                                <div class="bar-rat bg-primary" style="width:40%"></div>
                                                            </div>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group">2</span>
                                                            </div>
                                                        </li>
                                                        <li class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group">1 stars</span>
                                                            </div>
                                                            <div class="bar">
                                                                <div class="bar-rat bg-primary" style="width:20%"></div>
                                                            </div>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group">1</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- left part start -->
            </div>
        </div>
    </div>
</div>
<!-- Content END-->
@endsection