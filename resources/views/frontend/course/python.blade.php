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
						<h2 class="m-t0 m-b10 font-28 title text-black">Python Training in IT Zone Nepal</h2>
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
										<p>Python Programming is a general-purpose object-oriented programming language. It is an interactive, high-level programming language created by Guido van Rossum in the late eighties and early nineties. Python source code is available under the GNU general public license just like Perl.</p>
										<h3 class="m-b10">Benefits of Python training</h3>
										<p>We have designed this  Python Programming Training in Mahendranagar in a way that people with almost ZERO programming knowledge can learn this course easily. This training is designed for programming students willing to make their future in Python programming in Mahendranagar. We will teach to make advance python programming starting from the very beginning i.e. scratch. The training will give you enough ideas and knowledge on python programming from where you can take yourself to a whole new level of programming expertise.</p>
										<h3 class="m-b10">Benefits of Python Training at IT Zone Computer</h3>
										<p>To the candidates attending Python Training at IT Zone Computer, we provide the following benefits and value-added services:</p>
										<ul class="list-checked primary">
											<li>Personalized feedback on projects. </li>
											<li>Wider access to training labs and materials. </li>
											<li>Affordable training cost.</li>
											<li>Scholarship to deserving and needy students.</li>
											<li>Career counselings classes to motivate students.</li>
											<li>Trained IT expert as an instructor.</li>
											<li>Pedagogy and student performance.</li>
											<li>Job placement opportunities as an Software Engineer for excellent trainees.</li>
											<li>Comprehensive training methodology.</li>
											<li>It provides the most efficiency and usefulness for the web site and general application development.</li>
										</ul>
										<h3 class="m-b10">Pre-requisites for Python Training</h3>
										<p>Python Training Course, anyone who has the knowledge of  computer science and experience of browsing the Internet can easily learn python</p>
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
											<h3 class="m-t0 m-b15">Python Programming 
                                            </h3>
											<h5 class="text-primary"></h5>
											<a href="#" class="site-button red m-r15 circle box-shadow" type="button" download=""><i class="fa fa-cloud-download"></i></a>
											<h5 class="text-primary">

												Introduction
												</h5>
											<table class="table">
												<thead>
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
													<td>Python Programming Language


                                                    </td>
												</tr>
                                                <tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
													</td>
													<td> Basic Syntaxes


                                                    </td>
												</tr>
                                                <tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 3</span>
													</td>
													<td>Variables, Expressions and Statements



                                                    </td>
												</tr>
                                                <tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 4</span>
													</td>
													<td>Functions


                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 5</span>
													</td>
													<td>Conditions and Recursion

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 6</span>
													</td>
													<td>Fruitful Functions

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 7</span>
													</td>
													<td>Iteration


                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 8</span>
													</td>
													<td>String

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 9</span>
													</td>
													<td>Lists

                                                    </td>
												</tr>
												
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 10</span>
													</td>
													<td>Dictionaries

                                                    </td>
												</tr>
												
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 8</span>
													</td>
													<td>Tuples

                                                    </td>
												</tr>
												
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 9</span>
													</td>
													<td>Set
                                                    </td>
												</tr>
												
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 10</span>
													</td>
													<td>Exception Handling

                                                    </td>
												</tr>
												
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 11</span>
													</td>
													<td>Files

                                                    </td>
												</tr>
												
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 12</span>
													</td>
													<td>CSV

                                                    </td>
												</tr>
												
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 13</span>
													</td>
													<td>Pandas

                                                    </td>
												</tr>
												
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 14</span>
													</td>
													<td>Database with Python

                                                    </td>
												</tr>
												
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 15</span>
													</td>
													<td>Basic Data Visualization
                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 16</span>
													</td>
													<td>Classes and Objects

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 17</span>
													</td>
													<td>Classes and Methods

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 18</span>
													</td>
													<td>Callable and Non-Callable Object
														Inheritance


                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 19</span>
													</td>
													<td>GIT

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 20</span>
													</td>
													<td>Tools

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 21</span>
													</td>
													<td>Bonus


                                                    </td>
												</tr>
												

											</tbody></table>
										
											

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