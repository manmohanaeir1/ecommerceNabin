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
						<h2 class="m-t0 m-b10 font-28 title text-black">Accounting Training in IT Zone Nepal</h2>
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
											<p>We offer career-oriented Accounting training in Mahendranagar, Nepal that offers accounting training is well designed and developed to match and cover all the accounting principles. We provide job oriented training to prepare the students for real-life scenarios and work environment. The course covers every aspect of accounting such as financial management, inventory management, reporting financial transactions, knowledge of taxation, payroll, etc. Candidates will learn to use tally./busy efficiently. Along with tally/busy, they will be given in-depth knowledge in using Access, Excel.</p>
											<h3 class="m-b10">Benefits of Accounting training</h3>	
											<p>  Accounting training is well designed and developed to match and cover all the accounting principles. We provide job oriented training to prepare the students for real-life scenarios and work environment. The course covers every aspect of accounting such as financial management, inventory management, reporting financial transactions, knowledge of taxation, payroll, etc. Candidates will learn to use tally./busy efficiently. Along with tally/busy, they will be given in-depth knowledge in using Access, Excel.</p>
											
											<h3 class="m-b10"></h3>
											<p>.</p>
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
											<h3 class="m-t0 m-b15">Accounting Training (1.5 Months)
                                            </h3>
											<h5 class="text-primary">
                                            </h5>
											<a href="https://itzonecomputer.com/php-laravel-training#" class="site-button red m-r15 circle box-shadow" type="button" download=""><i class="fa fa-cloud-download"></i></a>
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
													<td>ACCOUNTING

                                                    </td>
												</tr>
                                                <tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
													</td>
													<td>ACCOUNTING TERMINOLOGY


                                                    </td>
												</tr>
                                                <tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 3</span>
													</td>
													<td>Accounting Records

                                                    </td>
												</tr>
                                                <tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 4</span>
													</td>
													<td>Classification of Expenses

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 5</span>
													</td>
													<td>Classification of Incomes

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 6</span>
													</td>
													<td>Classification of Asset On the basis of Tangibility

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 7</span>
													</td>
													<td>On the basis of Reliability

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 8</span>
													</td>
													<td>For Balance Sheet Purpose

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 9</span>
													</td>
													<td>Classification of Liabilities On the basis of source


                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 10</span>
													</td>
													<td>Systems of Accounting


                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 11</span>
													</td>
													<td>Basis of Accounting

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 12</span>
													</td>
													<td>Journal: Rules of Journalizing / Rules of DEBIT and Credit

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 13</span>
													</td>
													<td>The Rules of Debit and Credit

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 14</span>
													</td>
													<td>OPractical (Project)


                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 15</span>
													</td>
													<td>Computerized Accounting Training : Tally.ERP9

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 16</span>
													</td>
													<td>Company Info


                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 17</span>
													</td>
													<td>Account Info


                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 18</span>
													</td>
													<td>Voucher Entry (Trade Business)
                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 19</span>
													</td>
													<td>Return Voucher

                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 20</span>
													</td>
													<td>Order Processing


                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 21</span>
													</td>
													<td>POS Invoice


                                                    </td>
												</tr>
												<tr>
													<td>
														<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 22</span>
													</td>
													<td>Voucher Entry (Manufacturing)
                                                    </td>
												</tr>
															</tbody></table>
										
										

										</div>
										<div id="instructor" class="tab-pane">
											<h3 class="m-t0"></h3>
										
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