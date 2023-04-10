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
						<h2 class="m-t0 m-b10 font-28 title text-black">Android Training in IT Zone Nepal</h2>
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
										<p>We offer career-oriented Android training in Mahendranagar, Nepal that offers important tips and skills to develop mobile applications on the Android platform. The course is designed for Android enthusiasts who are new to programming and want to gain theoretical and practical knowledge in developing Android-based mobile applications. The Android training course at IT Tech Mahendranagar Nepal includes a basic introduction to mobile apps development and deployment on the Android platform. In the training, you will learn to create an application, describe mobile device components and create a simple user interface using android emulators. The students will have to undertake project work after the course completion.</p>
										<h3 class="m-b10">Benefits of Android training</h3>
										<p> In simple words, Android training is very beneficial as smartphones are taking over the world. So here are some reasons why you should take android training.</p>
										<h3 class="m-b10">Benefits of Android Training at IT Zone Computer</h3>
										<p>To the candidates attending Android Training at IT Zone, we provide the following benefits and value-added services:</p>
										<ul class="list-checked primary">
											<li>Gains in-depth knowledge of Android architecture.</li>
											<li>Learn to create Android applications </li>
											<li>Affordable training cost.</li>
											<li>Ability to system style and themes, data storage, services, multimedia in android, data storage, services, multimedia in Android.</li>
											<li>Scholarship to deserving and needy students.</li>
											<li>Increases your demand in the market of IT</li>
											<li>Career counselings classes to motivate students.</li>
											<li>Develops creative awareness.</li>
											<li>Endless career scope.</li>
											<li>Trained IT expert as an instructor.</li>
											<li>Pedagogy and student performance.</li>
											<li>Learn to stay updated with the tech world..</li>
											<li>Job placement opportunities as an Web developer for excellent trainees.</li>
											<li>Comprehensive training methodology.</li>
											<li>IT Zone offers the best IT training programs in Mahendranagar, Nepal. And Android training undoubtedly matches the caliber for what it takes to deliver the right message to the group of students. Therefore, save yourself a seat at the earliest in order to attend an upcoming training session</li>
										</ul>
										<h3 class="m-b10">Pre-requisites for Android Training</h3>
										<p>Before joining the android course, the student should have prior knowledge of Basic Web technologies. It will help them in understanding the android training program adequately.</p>
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
										<h3 class="m-t0 m-b15">Android App Development
										</h3>
										<h5 class="text-primary">Section : 1 Introduction to Android (1-6 Days)</h5>
										<a href="https://itzonecomputer.com/php-laravel-training#" class="site-button red m-r15 circle box-shadow" type="button" download=""><i class="fa fa-cloud-download"></i></a>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
													</td>
													<td>Introduction to Android Platform (1st Day)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
													</td>
													<td>Android Development Environment Setup (2nd Day)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
													</td>
													<td>"Hello World" to Android (3rd Day)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
													</td>
													<td>Java Concepts (4,5, & 6th Days)
													</td>
												</tr>

											</tbody>
										</table>
										<h5 class="text-primary">Section : 2 Basic Course (18 Days)</h5>
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
													<td>Android Application Fundamentals (7 & 8th Day)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 2</span>
													</td>
													<td>Application Structure: In Details (9, 10 & 11th Days)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 3</span>
													</td>
													<td>Android Debugging and Monitoring (12th Day)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 4</span>
													</td>
													<td>Layout and View Design (13, 14 & 15th Days)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 5</span>
													</td>
													<td>Preferences (16th Day)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 6</span>
													</td>
													<td>Menu (17, 18th Days)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 7</span>
													</td>
													<td>Intents : In Details (19th Day)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 8</span>
													</td>
													<td>Styles & Themes (20, 21 & 22th Days)
													</td>
												</tr>
											</tbody>
										</table>
										<h5 class="text-primary">Section : 3 Intermediate Course (19 Days)</h5>
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
													<td>SQLite Programming (23, 24, 25 & 26th Days)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 3. 2</span>
													</td>
													<td>Linkify (27th Day)

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 3. 3</span>
													</td>
													<td>More UI Designs (28, 29 & 30th Days)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 3. 4</span>
													</td>
													<td>Adapters and Widgets (31, 32 & 33th Days)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 3. 5</span>
													</td>
													<td>Notifications (34th Day)
													</td>
												</tr>
												<tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 3. 5</span>
													</td>
													<td>Threads (37th Day)
													</td>
												</tr>
												<tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 3. 5</span>
													</td>
													<td>Fragments (38, 39, 40 & 41th Days)
													</td>
												</tr>
												<tr>


											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">
											Section : 4 Advanced Course (29 Days)
										</h5>
										<table class="table">
											<thead>
												<tr>
													<th>Lecture</th>
													<th>Unit</th>
													<th class="text-right"></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 1</span>
													</td>
													<td>Working with web services (42, 43, 44, 45 & 46th Days)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 2</span>
													</td>
													<td>Interfacing Hardware Devices (47, 48 & 49th Days)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 3</span>
													</td>
													<td>Libraries Implementation (50, 51, 52 & 53th Days)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 4</span>
													</td>
													<td>Bonus Topics (54 & 55th Days)</td>
												</tr>
												<tr>

											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Database</h5>
										<table class="table">
											<thead>
												<tr>
													<th>Lecture</th>
													<th>Unit</th>
													<th class="text-right"></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 1</span>
													</td>
													<td>Section : 5 Final Project (12 Days) (56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66 & 67th Days)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 2</span>
													</td>
													<td>Individial Project Work
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 3</span>
													</td>
													<td>Simple Game</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 4</span>
													</td>
													<td>Section : 6 Publish The Application To Google After Development (3 Days) (68, 69 & 70th Days)</td>
												</tr>
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