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
						<h2 class="m-t0 m-b10 font-28 title text-black">PHP/Laravel Training in IT Zone Nepal</h2>
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
										<p>PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. There are many things to learn to be an expert PHP Programmer and after completion of this course, students will be able to develop web applications using PHP/MySQL into different levels such as Basic PHP, Object Oriented PHP, and PHP Framework. This course is designed as per the current need for the web development market. This course (PHP Training in MNR, Nepal) is also very useful to those students who are from non- IT background also.</p>
										<h3 class="m-b10">Benefits of PHP training</h3>
										<p>PHP training in Mahendranagar provides you a new learning scope on PHP, a preferred scripting language to get dynamic sites. It’s used for creating custom-made web solutions because it may be embedded with markup language with minimal effort. Further, it’s comparatively simple to code on PHP because it includes easy formats, techniques, and options. PHP has become an awfully well-liked learning course in the Kingdom of Nepal as a lot of developers are rising within the National IT market. There are varied PHP training suppliers in Nepal within recent times; but, learning PHP from qualified and sensible instructors continuously could be a dream for the aspiring PHP developers</p>
										<h3 class="m-b10">Benefits of PHP/Laravel Training at IT Zone Computer</h3>
										<p>To the candidates attending PHP/Laravel Training at Sofsee Tech, we provide the following benefits and value-added services:</p>
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
											<li>Websites developed with PHP perform simply and change the quick processing attributable to its easy techniques and formats is compatible with all OS systems ( ie, equivalent to the Windows OS, and UNIX operating systems than on).</li>
											<li>It may be integrated with major net applications programming with PHP conjointly provides valuable benefits for the shoppers, so making it more indulgent for PHP developers to win the project deals.</li>
										</ul>
										<h3 class="m-b10">Pre-requisites for PHP Development Training</h3>
										<p>Before joining the PHP development course, the student should have prior knowledge of Basic Web technologies. It will help them in understanding the PHP training program adequately.</p>
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
										<h5 class="text-primary">PHP Basics</h5>
										<a href="{{asset('files/PHP with laravel syllabus sofsee.pdf')}}" class="site-button red m-r15 circle box-shadow" type="button" download=""><i class="fa fa-cloud-download"></i></a>
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
													<td>Introduction to web Technology</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
													</td>
													<td>Introduction to HTML5 and CSS</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 3</span>
													</td>
													<td>PHP introduction</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 4</span>
													</td>
													<td>PHP syntax</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 5</span>
													</td>
													<td>PHP Data Types</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 6</span>
													</td>
													<td>PHP Variables ,Constants and Array</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 7</span>
													</td>
													<td>PHP Operators and Control Statements</td>
												</tr>
											</tbody>
										</table>
										<h5 class="text-primary">PHP Form</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 1</span>
													</td>
													<td>HTML Form</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 2</span>
													</td>
													<td>Form elements</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 3</span>
													</td>
													<td>HTTP verbs and methods</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 4</span>
													</td>
													<td>File Upload</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 5</span>
													</td>
													<td>Form handling with file upload</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 6</span>
													</td>
													<td>Super global Variables</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 7</span>
													</td>
													<td>Session and Cookie</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 2. 8</span>
													</td>
													<td>Implementation of session and cookie in code</td>
												</tr>
											</tbody>
										</table>
										<h5 class="text-primary">PHP Function</h5>
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
													<td>Introduction</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 3. 2</span>
													</td>
													<td>Types:Pre-defined /In-built
														User defined/ Custom</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 3. 3</span>
													</td>
													<td>Function parameters (With or without and conditional parameters)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 3. 4</span>
													</td>
													<td>Working with Some useful functions
														▪ Date and time
														▪ include and require</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 3. 5</span>
													</td>
													<td>Templating using include and require</td>
												</tr>
												<tr>

											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">PHP Form</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 1</span>
													</td>
													<td>HTML Form</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 2</span>
													</td>
													<td>Form elements</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 3</span>
													</td>
													<td>HTTP verbs and methods</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 4</span>
													</td>
													<td>File Upload</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 5</span>
													</td>
													<td>Form handling with file upload</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 6</span>
													</td>
													<td>Super global Variables</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 7</span>
													</td>
													<td>Session and Cookie</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 4. 8</span>
													</td>
													<td>Implementation of session and cookie in code</td>
												</tr>
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
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 1</span>
													</td>
													<td>Introduction To Database</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 2</span>
													</td>
													<td>What is RDBMS technology?</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 3</span>
													</td>
													<td>Understanding Database, Tables, Fields</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 4</span>
													</td>
													<td>Introduction to SQL (Structured Query Language)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 5</span>
													</td>
													<td>Using Database Management tools (phpMyAdmin/ MySQL Workbench etc.) to handle database</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 6</span>
													</td>
													<td>Creating and managing database</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 7</span>
													</td>
													<td>Selecting Database</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 8</span>
													</td>
													<td>
														Creating Tables</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 9</span>
													</td>
													<td>
														Auto Increment and Indexing a columns in tables</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 10</span>
													</td>
													<td>
														Inserting Data into tables in different ways via query</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 11</span>
													</td>
													<td>
														Updating Data and Table Structure</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5. 12</span>
													</td>
													<td>
														Selecting from table in different ways</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 5.13</span>
													</td>
													<td>
														Deleting tables and drop database</td>
												</tr>
											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Advanced PHP</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 1</span>
													</td>
													<td>Object Oriented PHP- Constructs</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 2</span>
													</td>
													<td>Introduction to oop</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 3</span>
													</td>
													<td>Creating and Defining Class in PHP</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 4</span>
													</td>
													<td> Instantiating a class</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 5</span>
													</td>
													<td>Constructors and Destructors</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 6</span>
													</td>
													<td>Class constants</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 7</span>
													</td>
													<td>Attributes and methods</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 8</span>
													</td>
													<td>Member visibility: Access Modifiers / Specifiers</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 9</span>
													</td>
													<td>Overrides</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 10</span>
													</td>
													<td>OOP Keywords (Class Autoload, Static & Final Keywords)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 11</span>
													</td>
													<td>Preventing a Class from Inheritance( final keyword)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 6. 12</span>
													</td>
													<td>Exceptions</td>
												</tr>
											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Object Oriented Implementation And MVC</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 7. 1</span>
													</td>
													<td>Modules (Modularizing a web Application)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 7. 2</span>
													</td>
													<td>File structure / Code file organization</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 7. 3</span>
													</td>
													<td> Design pattern and Introduction</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 7. 4</span>
													</td>
													<td>Model / View /Controller Design Pattern implementations
												</tr>

											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Database Operations Advanced Topics</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 8. 1</span>
													</td>
													<td>Creating Primary, Index and Unique Keys</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 8. 2</span>
													</td>
													<td>Maintaining Foreign Key Constraints</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 8. 3</span>
													</td>
													<td>Joins and Types of JOINS with examples</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 8. 4</span>
													</td>
													<td>Prepared Statements</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 8. 5</span>
													</td>
													<td>PHP Data Objects (PDO)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 8. 6</span>
													</td>
													<td>Transactions</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 8. 7</span>
													</td>
													<td>Patterns in database design</td>
												</tr>

											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">PHP Standards</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 9. 1</span>
													</td>
													<td>Basic Coding Standards (PSR1, PSR2)</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 9. 2</span>
													</td>
													<td>Autoloading standards</td>
												</tr>

											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Web Services</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 10. 1</span>
													</td>
													<td>Web Services</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 10. 2</span>
													</td>
													<td> Introduction to RESTFUL Services</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 10. 3</span>
													</td>
													<td>Handling JSON in php</td>
												</tr>

											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">JavaScript And JQuery Basic</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 1</span>
													</td>
													<td>Introduction to JavaScript</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 2</span>
													</td>
													<td>Data types, operators, conditions</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 3</span>
													</td>
													<td> Events, function</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 4</span>
													</td>
													<td>Array and Objects</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 5</span>
													</td>
													<td>jQuery Syntax, Events</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 6</span>
													</td>
													<td>Some jQuery functions</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 7</span>
													</td>
													<td>jQuery Syntax and Events</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 8</span>
													</td>
													<td> jQuery Effects</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 9</span>
													</td>
													<td> jQuery Selectors and Traversing</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 10</span>
													</td>
													<td> jQuery Custom Functions</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 11</span>
													</td>
													<td> jQuery load, get, post</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 11. 12</span>
													</td>
													<td> jQuery Ajax</td>
												</tr>
											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Laravel</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 12. 1</span>
													</td>
													<td>Installing and setting up Laravel and supporting tools</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 12. 2</span>
													</td>
													<td>Introduction to Laravel</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 12. 3</span>
													</td>
													<td> Concept of Composer</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 12. 4</span>
													</td>
													<td> Install & Use of Composer</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 12. 5</span>
													</td>
													<td>Installing Laravel using composer</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 12. 6</span>
													</td>
													<td>Install & Use of open source distributed version control system GIT</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 12. 7</span>
													</td>
													<td>Concept & Use of GitHub for hosting GIT repositories</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 12. 8</span>
													</td>
													<td> Configuring Laravel</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 12. 9</span>
													</td>
													<td>Project Structure</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 12.10</span>
													</td>
													<td>Setting up Development and Debugging Tools</td>
												</tr>
											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Laravel Architectural Concept</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 13. 1</span>
													</td>
													<td> Request Life cycle</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 13. 2</span>
													</td>
													<td>Gives knowledge of how Laravel actually works.</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 13. 3</span>
													</td>
													<td>Facade</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 13. 4</span>
													</td>
													<td>Provides an easy way of accessing application class and libraries</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 13. 5</span>
													</td>
													<td>Service Providers in Laravel</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 13. 6</span>
													</td>
													<td>Service providers are the central place of all Laravel application bootstrapping.</td>
												</tr>

											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Routingm</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 14. 1</span>
													</td>
													<td>Basic Routing</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 14. 2</span>
													</td>
													<td>Named Routing</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 14. 3</span>
													</td>
													<td>Grouped Routing</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 14. 4</span>
													</td>
													<td>Routing Parameters</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 14. 5</span>
													</td>
													<td>Handling Invalid Routes</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 14. 6</span>
													</td>
													<td>Http Middleware</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 14. 7</span>
													</td>
													<td>Restful Routing</td>
												</tr>

											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Controllers</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 15. 1</span>
													</td>
													<td> Introduction</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 15. 2</span>
													</td>
													<td> Basic Controllers</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 15. 3</span>
													</td>
													<td>Restful Resource Controllers</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 15. 4</span>
													</td>
													<td>Controller Routing</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 15. 5</span>
													</td>
													<td>Controller Middleware</td>
												</tr>


											</tbody>
										</table>
										</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Request</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 16. 1</span>
													</td>
													<td> Request</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 16. 2</span>
													</td>
													<td> Basic Controllers</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 16. 3</span>
													</td>
													<td>Handling Request Info.</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 16. 4</span>
													</td>
													<td>Request Inputs</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 16. 5</span>
													</td>
													<td>Form Inputs</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 16. 5</span>
													</td>
													<td>Files</td>
												</tr>

											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Response</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 17. 1</span>
													</td>
													<td> Attach Headers and Cookie to response</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 17. 2</span>
													</td>
													<td> Response with View</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 17. 3</span>
													</td>
													<td>Restful Resource Controllers</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 17. 4</span>
													</td>
													<td>Response with JSON</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 17. 5</span>
													</td>
													<td> Response with File</td>
												</tr>


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
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 18. 1</span>
													</td>
													<td> Introduction</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 18. 2</span>
													</td>
													<td> Migration</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 18. 3</span>
													</td>
													<td>Schema Building</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 18. 4</span>
													</td>
													<td>Migration Structure</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 18. 5</span>
													</td>
													<td>Running Migration</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 18. 6</span>
													</td>
													<td>Writing Migration</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 18. 7</span>
													</td>
													<td>Running Migration</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 18.8</span>
													</td>
													<td>Database Configuration</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 18. 9</span>
													</td>
													<td>Running Raw SQL queries</td>
												</tr>



											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Model</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 19. 1</span>
													</td>
													<td> Eloquent ORM</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 19. 2</span>
													</td>
													<td> Defining Model</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 19. 3</span>
													</td>
													<td>Retrieving Model</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 19. 4</span>
													</td>
													<td>Insert & Update Model</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 19. 5</span>
													</td>
													<td> Deleting Model</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 19. 5</span>

													<td> Eloquent Relationship</td>
												</tr>
												</tr>

												<td>
													<span><i class="fa fa-file-o m-r10"></i>Lecture 19. 5</span>
												</td>
												<td> One to One</td>
												</tr>
												<td>
													<span><i class="fa fa-file-o m-r10"></i>Lecture 19. 5</span>
												</td>
												<td> Many to Many</td>
												</tr>
											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">View</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 20. 1</span>
													</td>
													<td> Passing data to view</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 20. 2</span>
													</td>
													<td>Sharing data to all views</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 20. 3</span>
													</td>
													<td>Blade Template Engine</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 20. 4</span>
													</td>
													<td> Introduction</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 20. 5</span>
													</td>
													<td>Template Inheritance</td>
												</tr>
												<td>
													<span><i class="fa fa-file-o m-r10"></i>Lecture 20. 5</span>
												</td>
												<td>Displaying Data</td>
												</tr>
												<td>
													<span><i class="fa fa-file-o m-r10"></i>Lecture 20. 6</span>
												</td>
												<td>Implement Control Structures</td>
												</tr>


											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Laravel Forms & HTML Component – Laravel Collective</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 1</span>
													</td>
													<td> Installation</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 2</span>
													</td>
													<td> Generating form
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 3</span>
													</td>
													<td>CSRF Protection
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 4</span>
													</td>
													<td> Form Elements
													</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 5</span>
													</td>
													<td>Labels</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 6</span>
													</td>
													<td>Text, Text Area, Password & Hidden Fields</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 7</span>
													</td>
													<td>File Input</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 8</span>
													</td>
													<td>Number Input</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 9</span>
													</td>
													<td>Date Input</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 10</span>
													</td>
													<td>Buttons</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 21. 10</span>
													</td>
													<td>Custom Form Macros</td>
												</tr>


											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Laravel Services</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 1</span>
													</td>
													<td> Authentication our application</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 2</span>
													</td>
													<td>Authorization using Policies ~ Role based panel access</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 3</span>
													</td>
													<td> Introduction</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 4</span>
													</td>
													<td>Configuring Auth Library</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 5</span>
													</td>
													<td>Creating authentication system using Middleware</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 6</span>
													</td>
													<td> Artisan Console</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 7</span>
													</td>
													<td>Exception Handling and Error Logging</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 8</span>
													</td>
													<td>Mail</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22.9 </span>
													</td>
													<td>Configuring & sending mail</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 10</span>
													</td>
													<td>Pagination</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 11</span>
													</td>
													<td>Session</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 12</span>
													</td>
													<td>Validation</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 13</span>
													</td>
													<td>Validation Rules with associating messages</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 14</span>
													</td>
													<td>Custom Rules with associating custom messages</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 15 </span>
													</td>
													<td>Laravel Socialite ~ Registrtion & Login with 3rd
														party ( FB, Google, Github etc )</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 16</span>
													</td>
													<td> WebPack ~ Building assets</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 22. 17</span>
													</td>
													<td> Laravel mix</td>
												</tr>




											</tbody>
										</table>
										</tbody>
										</table>
										<h5 class="text-primary">Restful API With Laravel</h5>
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
														<span><i class="fa fa-file-o m-r10"></i>Lecture 23. 1</span>
													</td>
													<td> Concept of API, why and scope of implementation</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 23. 2</span>
													</td>
													<td> Restful API setup, Basic project</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 23. 3</span>
													</td>
													<td>Tools ~ Postman Tool</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 23. 4</span>
													</td>
													<td>Project Work:</td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 23. 5</span>
													</td>
													<td>E-commerce Website with Multi-vendor concept.</td>
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