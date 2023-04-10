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
						<h2 class="m-t0 m-b10 font-28 title text-black">C/C++ Training in IT Zone Nepal</h2>
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
										<p>C, C++ is a general-purpose, imperative computer programming language. It supports structured programming, lexical variable scope and recursion, while a static type system prevents many unintended operations. The training will largely benefit non-experienced programmers aspiring to develop programming skills required to work as a professional programmer in commercial software development platforms such as .NET, Java and PHP</p>
										<h3 class="m-b10">Benefits of C,C++ training</h3>
										<p>In simple words, C, C++ training is very beneficial as smart-software are taking over the world. So here are some reasons why you should take C, C++ training.</p>
										<h3 class="m-b10">Benefits of C,C++ Training at IT Zone Computer</h3>
										<p>To the candidates attending C,C++ Training at IT Zone, we provide the following benefits and value-added services:</p>
										<ul class="list-checked primary">
											<li>Gains in-depth knowledge of C, C++ architecture.</li>
											<li>Learn to create C, C++ Software</li>
											<li>Affordable training cost.</li>
											<li>Ability to system style and themes, data storage, services, multimedia in software, data storage, services, multimedia in software.</li>
											<li>Scholarship to deserving and needy students.</li>
											<li>Increases your demand in the market of IT</li>
											<li>Career counselings classes to motivate students.</li>
											<li>Develops creative awareness.</li>
											<li>It helps to understand modern software development system.</li>
											<li>Endless career scope.</li>
											<li>Trained IT expert as an instructor.</li>
											<li>Pedagogy and student performance.</li>
											<li>Learn to stay updated with the tech world..</li>
											<li>Comprehensive training methodology.</li>
											<li>IT Zone offers the best IT training programs in Mahendranagar, Nepal. And C, C++ training undoubtedly matches the caliber for what it takes to deliver the right message to the group of students. Therefore, save yourself a seat at the earliest in order to attend an upcoming training session.</li>
										</ul>
										<h3 class="m-b10">Pre-requisites for C,C++ Training</h3>
										<p>Before joining the C, C++ software development course, the student should have interested in software development and anyone who has the knowledge of computers science and experience of browsing the Internet can easily learn. It will help them in progress the C, C++ training program adequately.</p>
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
										<h5 class="text-primary">Section : 1 Introduction to C (1-6 Days)</h5>
										<a href="#" class="site-button red m-r15 circle box-shadow" type="button" download=""><i class="fa fa-cloud-download"></i></a>
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
													<td>C / C++ and Object Oriented Programming language
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
													</td>
													<td> Introduction to C Programming language

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 3</span>
													</td>
													<td>History
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 4</span>
													</td>
													<td>Overview of Compilers and Interpreters
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 5</span>
													</td>
													<td>Writing first program
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 6</span>
													</td>
													<td>The C Declarations
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 7</span>
													</td>
													<td>Delimiters

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 8</span>
													</td>
													<td>C Tokens
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 9</span>
													</td>
													<td>Identifiers

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 10</span>
													</td>
													<td>Constants

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 11</span>
													</td>
													<td>Escape Sequences

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 12</span>
													</td>
													<td>Variable declarations

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 13</span>
													</td>
													<td>Data Types

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 14</span>
													</td>
													<td>Operators and Expressions

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 15</span>
													</td>
													<td>Input and Output in C

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 16</span>
													</td>
													<td>Decision Statements

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 17</span>
													</td>
													<td>Loop Control Statements

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 18</span>
													</td>
													<td>Working with Strings and Standard Functions

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 19</span>
													</td>
													<td>Pointers

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 20</span>
													</td>
													<td>Functions

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 21</span>
													</td>
													<td>Storage Class

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 22</span>
													</td>
													<td>Preprocessor Directives

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 23</span>
													</td>
													<td>Structure and Union

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 24</span>
													</td>
													<td>Files

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 25</span>
													<td>Graphics in C</td>


											</tbody>
										</table>
										<h5 class="text-primary">

											C++ Programming language
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
													<td>Learn to Program with C++
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 2</span>
													</td>
													<td>Introduction to Object Oriented Programming (C++)
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 3</span>
													</td>
													<td>Tokens, expression, data types & control structure.
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 4</span>
													</td>
													<td>Functions in C++
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 5</span>
													</td>
													<td>Function overloading, Operator overloading</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 6</span>
													</td>
													<td>Inheritance, multiple & multilevel inheritance
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 7</span>
													</td>
													<td>Introduction to virtual functions, classes & polymorphism
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 8</span>
													</td>
													<td>File operations using stream classes.

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 9</span>
													</td>
													<td>File operations using stream classes.

													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 10</span>
													</td>
													<td>Exception Handling

													</td>
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