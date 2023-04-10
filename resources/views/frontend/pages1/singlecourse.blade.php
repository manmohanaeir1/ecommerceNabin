@extends('frontend.layouts.master')
@section('title'){{$courses->course_title}}@endsection

@section('addseo')
<meta name="description" content="{{$courses->seo_description}}, IT Zone Computer Institute offers a range of courses in software development, web development, graphic designing, and digital marketing. Our experienced trainers will provide you with the skills and knowledge necessary to excel in the IT industry.">
<meta name="keywords" content="{{$courses->seo_keywords}}, IT Zone Computer Institute, courses, software development, web development, graphic designing, digital marketing">
<meta name="twitter:title" content="{{$courses->course_title}}, software development course, IT Zone Computer Institute, blog">
<meta name="twitter:description" content="{{ $courses->course_content }}, Learn how to choose the right software development course with IT Zone Computer Institute. Our expert trainers provide valuable insights on what to look for in a course and how to determine which one is right for you.">
<meta name="twitter:image" content="{{asset('uploads/courses/'.$courses->course_image)}}">

<meta property="og:title" content="{{$courses->seo_title}}" />
<meta property="og:subtitle" content="{{$courses->seo_subtitle}}" />
<meta property="og:keywords" content="{{$courses->seo_keywords}}" />
<meta property="og:description" content="{{$courses->seo_description}}" />
<meta property="og:url" content="{{url()->current()}}">
<meta property="og:image" content="{{ asset('uploads/courses/'.$courses->course_image) }}" />


@endsection

@section('content')
<!-- Content -->
<div class="page-content bg-gray">
	<!-- inner page banner -->
	<div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:  url('{{ asset('images/background/itzone-learning.jpeg')}}')">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<h1 class="text-white">Courses Details</h1>
				<!-- Breadcrumb row -->
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="{{route('frontend.home')}}">Home</a></li>
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
						<h2 class="m-t0 m-b10 font-28 title text-black">{{$courses->course_title}}</h2>
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
								<i class="fa fa-clock-o"></i> <span>{{$courses->course_duration}} Month</span>
								<div class="course-info-dec">Duration</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Side bar start -->

				<div class="col-xl-3 col-lg-4 col-md-12 m-b30">
					<!-- 					
						<div class="side-bar sticky-top">
							<iframe src="https://neeminfosys.com/online-registration" frameborder="0" height="1100"></iframe>
						</div> -->

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
											<span class="title-head">Review </span> <span class="text-primary">(39)</span>
										</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="description" class="tab-pane active">

										<p>{!! $courses->course_content !!}</p>

										<h3>Syllabus </h3>
										<a href="{{asset('uploads/courses/'.$courses->curriculum_file)}}" type="button" download=""><i class="fa fa-download"></i>Click here to download syllabus</a>
										<br><br>
										<div class="m-t10">
											<h5>Share :</h5>
											<ul class="dlab-social-icon">
												<!-- ShareThis BEGIN -->
												<div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
											</ul>
										</div>
									</div>
									<div id="curriculum" class="tab-pane">
										
										<h3 class="m-t0 m-b15">Curriculum</h3>
										<a href="{{asset('uploads/courses/'.$courses->curriculum_file)}}" type="button" download=""><i class="fa fa-download"></i>Click here to download syllabus</a>
										<br><br>
										
										@foreach($course_curriculums as $key => $curriculum)

										
										<h5 class="text-primary"> {{$curriculum->curriculum_module}} </h5>
																				<table class="table">
											<tbody>
												<tr>
													<td>{!! $curriculum->curriculum_content !!}</td>
												</tr>
											</tbody>
										</table>
										@endforeach

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
														<p>508 ratings</p>
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
										<!-- for facebook commnet section -->
										<div class="fb-comments" data-href="{{url()->current()}}" data-width="auto" data-numposts="5"></div>


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