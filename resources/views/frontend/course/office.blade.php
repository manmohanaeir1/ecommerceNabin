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
							<h2 class="m-t0 m-b10 font-28 title text-black">MicroSoft Office Package Training</h2>
							<ul class="course-info">
								<li> 
									<i class="fa fa-user"></i> <span> 265</span> 
									<div class="course-info-dec">Student</div>
								</li>
								<li> 
									<i class="fa fa-star"></i> <span> 4.5</span> 
									<div class="course-info-dec">Reviews (123)</div>
								</li>
								<li> 
									<i class="fa fa-clock-o"></i> <span> 12 Months</span> 
									<div class="course-info-dec">Duration</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- Side bar start -->
					
					<div class="col-xl-3 col-lg-4 col-md-12 m-b30">
					
						<div class="side-bar sticky-top">
							<!-- <iframe src="https://neeminfosys.com/online-registration" frameborder="0" height="1100"></iframe> -->
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
											<p>This course covers Microsoft Office Word, Microsoft Office Excel, Microsoft Office PowerPoint, Microsoft Office Access, Email/Internet, Hardware, Maintenance & troubleshooting, Accounting, Personality Development Classes & many more. Aspiring Students will also be provided with a 3 Month Internship.</p>
											<h3 class="m-b10">Benefits of Office Training training</h3>	
											<p>We are making it easy to learn computer technology for beginners. This course covers  Microsoft Office Word, Microsoft Office Excel, Microsoft Office PowerPoint, Microsoft Office Access, Email/Internet, and various exercises. The focus of the training will be on using the appropriate tool for a particular job & to guide you for your career pathway considering your future in the field of Computer Science & Information Technology.</p>
											<h3 class="m-b10">Benefits of Office Training Training at IT Zone Computer</h3>
											<p>To the candidates attending Office Training Training at IT Zone Computer, we provide the following benefits and value-added services:</p>
											<ul class="list-checked primary">
												<li>Personalized feedback on projects. </li>
												<li>Wider access to training labs and materials. </li>
												<li>Affordable training cost.</li>
												<li>Scholarship to deserving and needy students.</li>
												<li>Career counselings classes to motivate students.</li>
												<li>Trained IT expert as an instructor.</li>
												<li>Pedagogy and student performance.</li>
												<li>Job placement opportunities as an Web developer for excellent trainees.</li>
												<li>Comprehensive training methodology.</li>
												<li>It provides the most efficiency and usefulness for the web site and general application development.</li>
												</ul>
											<h3 class="m-b10">Pre-requisites for ADIT Development Training</h3>
											<p>Anyone can apply learn this course who are interested in the information technology</p>
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
											<h3 class="m-t0 m-b15">Curriculum</h3>
											<h5 class="text-primary"> Module 1 Basic Computer </h5>
											<a href="#" class="site-button red m-r15 circle box-shadow" type="button" download=""><i class="fa fa-cloud-download"></i></a>
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
											<h5 class="text-primary">Module 2 Email & Internet</h5>
											<table class="table">
												<thead>
													<tr> 
														<th>Lecture</th> 
														<th>Unit</th> 
													</tr> 
												</thead>
												<tbody><tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 1</span>
													</td>
													<td>Fundamental of E-mail & Internet</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 2</span>
													</td>
													<td>E-mail(Create, Send & Receive)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 3</span>
													</td>
													<td>Online Form</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 4</span>
													</td>
													<td>E-Shopping</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 5</span>
													</td>
													<td>Downloads</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 6</span>
													</td>
													<td> Google Tools</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 7</span>
													</td>
													<td>Understanding of the Internet</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 8</span>
													</td>
													<td>Implementation of session and cookie in code</td>
												</tr>
											</tbody></table>
										  </div>
								
										<div id="instructor" class="tab-pane">
											<h3 class="m-t0">Instructor</h3>
											{{-- <div id="comments" class="dlab-instructor">
												<ol class="commentlist">
													<li class="comment">
														<div class="comment_container"> <img class="avatar avatar-60 photo" src="images/testimonials/pic1.jpg" alt="">
															<div class="comment-text">
																<h3 class="author m-t0">Nirajan Thanugnna</h3> 
																<div class="w3-separator bg-primary"></div>
																<div class="description m-b15">
																	<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley..</p>
																</div>
																<ul class="dlab-social-icon">
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-facebook facebook"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-twitter twitter"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-linkedin linkedin"></a></li>
																	<li><a href="javascript:void(0);" class="site-button circle fa fa-whatsapp whatsapp"></a></li>
																</ul>
															</div>
														</div>
													</li>
												</ol>
											</div> --}}
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
																	<span class="input-group">4 stars</span></div> 
																<div class="bar">
																	<div class="bar-rat bg-primary" style="width:80%"></div>
																</div>
																<div class="input-group-prepend">
																	<span class="input-group">4</span> 
																</div> 
															</li>
															<li class="input-group"> 
																<div class="input-group-prepend">
																	<span class="input-group">3 stars</span></div> 
																<div class="bar">
																	<div class="bar-rat bg-primary" style="width:60%"></div>
																</div>
																<div class="input-group-prepend">
																	<span class="input-group">3</span> 
																</div> 
															</li>
															<li class="input-group"> 
																<div class="input-group-prepend">
																	<span class="input-group">2 stars</span></div> 
																<div class="bar">
																	<div class="bar-rat bg-primary" style="width:40%"></div>
																</div>
																<div class="input-group-prepend">
																	<span class="input-group">2</span>	
																</div> 															
															</li>
															<li class="input-group"> 
																<div class="input-group-prepend">
																	<span class="input-group">1 stars</span></div> 
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