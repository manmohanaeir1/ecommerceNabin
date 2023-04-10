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
						<h2 class="m-t0 m-b10 font-28 title text-black">Tally Training in IT Zone Nepal</h2>
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
										<p>We offer career-oriented Tally training in Mahendranagar, Nepal. Tally is one of the most used accounting software and has become the integral tool to manage the accounting details in most of the business organizations. is a must to the entry level accounting officers who want to develop their carrier in the field of accounting.
											So we has been providing career-oriented Tally training in Mahendranagar, Nepal. You will learn Company Info, Account Info, Voucher Entry (Trade Business), Return Voucher, Order Processing, Voucher Entry (Manufacturing), Voucher Entry (Medical Store), Voucher Entry (Other), Other.</p>
										<h3 class="m-b10">Benefits of Tally training</h3>
										<p> Tally training is well designed and developed to match and cover all the Tally principles. We provide job oriented training to prepare the students for real-life scenarios and work environment. The course covers every aspect of Tally such as financial management, inventory management, reporting financial transactions, knowledge of taxation, payroll, etc. Candidates will learn to use tally./busy efficiently. Along with tally/busy, they will be given in-depth knowledge in using Access, Excel.</p>

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
										<h3 class="m-t0 m-b15">Tally Training (1.5 Months)

										</h3>
										<h5 class="text-primary"></h5>
										<a href="https://itzonecomputer.com/php-laravel-training#" class="site-button red m-r15 circle box-shadow" type="button" download=""><i class="fa fa-cloud-download"></i></a>
										<h5 class="text-primary">

											Company Info
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
													<tbody>
														<tr>
															<td>
																<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
															</td>
															<td>Create/Modify/Delete Company


															</td>
														</tr>
														<tr>
															<td>
																<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
															</td>
															<td>Change password</td>
														</tr>






													</tbody>
												</table>
												<h5 class="text-primary">

													Account Info
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
															<tbody>
																<tr>
																	<td>
																		<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
																	</td>
																	<td>Create/Modify/Delete Account Group



																	</td>
																</tr>
																<tr>
																	<td>
																		<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																	</td>
																	<td>Inventory Info</td>
																</tr>
																<td>
																	<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																</td>
																<td>Create Simple/Compound Unit of Measure</td>
																</tr>
																<td>
																	<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																</td>
																<td>Create/Modify/Delete Stock Group
																</td>
																</tr>
																<td>
																	<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																</td>
																<td>Create/Modify/Delete Sock Item
																</td>
																</tr>
															</tbody>
														</table>
														<h5 class="text-primary">

															POS Invoice
														</h5>
														<h5 class="text-primary">

															Voucher Entry (Trade Business)

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
																	<tbody>
																		<tr>
																			<td>
																				<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
																			</td>
																			<td>Purchase Raw Material

																			</td>
																		</tr>
																		<tr>
																			<td>
																				<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																			</td>
																			<td>Finished Goods Products (BOM)
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																			</td>
																			<td>Sales

																			</td>
																		</tr>
																		<tr>
																			<td>
																				<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																			</td>
																			<td>Multi Price Level (Wholesaler/Retailer)
																			</td>
																		</tr>
																		<td>
																			<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																		</td>
																		<td>Go down Transfer
																		</td>
																		</tr>

																	</tbody>
																</table>
																<h5 class="text-primary">

																	Voucher Entry (Medical Store)
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
																			<tbody>
																				<tr>
																					<td>
																						<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
																					</td>
																					<td>Batch, Mfg., Expire Date


																					</td>
																				</tr>
																				<tr>
																					<td>
																						<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																					</td>
																					<td>Purchase/Sales


																			</tbody>
																		</table>
																		<h5 class="text-primary">

																			Voucher Entry (Other)
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
																					<tbody>
																						<tr>
																							<td>
																								<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
																							</td>
																							<td>Multi-Currency



																							</td>
																						</tr>
																						<tr>
																							<td>
																								<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																							</td>
																							<td>Cost Centers
																							</td>
																						</tr>
																						<tr>
																							<td>
																								<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																							</td>
																							<td>Interest Calculation

																							</td>
																						</tr>
																						<tr>
																							<td>
																								<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																							</td>
																							<td>Actual and Billed quantity
																							</td>
																						</tr>
																						<tr>
																							<td>
																								<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																							</td>
																							<td>Separate Discount column in sales/purchase invoice
																							</td>
																						</tr>


																					</tbody>
																				</table>

																				<h5 class="text-primary">

																					Modify/Delete/Insert/Copy Voucher(Other)
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
																							<tbody>
																								<tr>
																									<td>
																										<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
																									</td>
																									<td>Backup/Restore




																									</td>
																								</tr>
																								<tr>
																									<td>
																										<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																									</td>
																									<td>Security Control
																									</td>
																								</tr>
																								<tr>
																									<td>
																										<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																									</td>
																									<td>User Maintain


																									</td>
																								</tr>
																								<tr>
																									<td>
																										<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																									</td>
																									<td>Year Ending

																									</td>
																								</tr>




																							</tbody>
																						</table>
																						<h5 class="text-primary">

																							Report
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
																									<tbody>
																										<tr>
																											<td>
																												<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 1</span>
																											</td>
																											<td>Day Book




																											</td>
																										</tr>
																										<tr>
																											<td>
																												<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																											</td>
																											<td>Trial Balance

																											</td>
																										</tr>
																										<tr>
																											<td>
																												<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																											</td>
																											<td>Balance Sheet


																											</td>
																										</tr>
																										<tr>
																											<td>
																												<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																											</td>
																											<td>Ratio Analysis

																											</td>
																										</tr>
																										<tr>
																											<td>
																												<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																											</td>
																											<td>Cash Flow

																											</td>
																										</tr>
																										<tr>
																											<td>
																												<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																											</td>
																											<td>Funds Flow


																											</td>
																										</tr>

																										<tr>
																											<td>
																												<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																											</td>
																											<td>Ledger

																											</td>
																										</tr>
																										<tr>
																											<td>
																												<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																											</td>
																											<td>Purchase/Sales Register


																											</td>
																										</tr>
																										<tr>
																											<td>
																												<span><i class="fa fa-file-o m-r10"></i>Lecture 1. 2</span>
																											</td>
																											<td>Bank Reconciliation
																											</td>
																										</tr>
																									</tbody>
																								</table>


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