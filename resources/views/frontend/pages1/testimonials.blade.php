@extends('frontend.layouts.master')
@section('title')
Testimonials
@endsection
@section('addseo')
<meta property="og:title" content="Testimonials" />
<meta property="og:keywords" content="What Our Students Say success " />
<meta property="og:image" content="{{ asset('images/background/itzone-learning.jpeg') }}" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://itzonecomputer.com/">


@endsection
@section('content')
<!-- Content -->
<div class="page-content bg-gray">
	<!-- inner page banner -->
	<div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/background/itzone-learning.jpeg);">
		<div class="container">
			<div class="dlab-bnr-inr-entry">
				<h1 class="text-white">Testimonials</h1>
				<!-- Breadcrumb row -->
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="{{route('pages.successgallery')}}">Home</a></li>
						<li>Testimonials</li>
					</ul>
				</div>
				<!-- Breadcrumb row END -->
			</div>
		</div>
	</div>
	<!-- Testimonials -->
	<div class="section-full bg-gray content-inner-2">
		<div class="container">
			<div class="section-head text-black text-center">
				<h2 class="title">What Our Students Say</h2>
				<p>"All We Care About is Quality"</p>
			</div>
			<div class="row">
				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/archana-chand.jpeg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>For me it is the best IT institute i have ever had. One should try at least once for this course. I entered here without any knowledge of computers, but I have learned many things till now about basic packages.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Archana Chand</h4>
								<span class="testimonial-position">BBS (Far-western University )</span>
							</div>
						</div>
					</div>
				</div>

				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/jagdish-joshi.jpeg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting
										industry.
										Lorem Ipsum has been the industry's standard dummy text ever since the
										when
										an printer took a galley.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Jagdish Joshi</h4>
								<span class="testimonial-position">BBS (Far-western University )</span>
							</div>
						</div>
					</div>
				</div>

				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/manoj-kumar-singh.jpeg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting
										industry.
										Lorem Ipsum has been the industry's standard dummy text ever since the
										when
										an printer took a galley.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Manoj Kumar Singh</h4>
								<span class="testimonial-position">BBS (Far-western University )</span>
							</div>
						</div>
					</div>
				</div>

				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/nisha-thapa-magar.jpeg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>I am learning office packages in this institution and I found teachers and their techniques are unique and understandable.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Nisha Thapa Magar</h4>
								<span class="testimonial-position">BBS (Far-western University )</span>
							</div>
						</div>
					</div>
				</div>

				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/piyush-pandey.jpeg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>I highly recommend this institute for diploma and various computer related courses, this institute provides ISO certified certificate for ADIT course and various graphic designing courses. I think I am lucky to have such a wonderful platform provided by IT Zone Computer, MNR kanchanpur.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Piyush Pandey</h4>
								<span class="testimonial-position">BBS (Far-western University )</span>
							</div>
						</div>
					</div>
				</div>

				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/Jagriti Shahi.jpg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>I'm glad to do the course with IT Zone Computer. It is the best computer learning platform, with a super support team and instructors. Kudos to the trainers for creating such a great learning platform. I have enjoyed a lot while doing my ADIT training at IT Zone Computer, and at the same time, I have updated my skills too. Thank you IT Zone Computer</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Jagriti Shahi</h4>
								<span class="testimonial-position">BBS (Far-western University )</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/Aarati Chand.jpg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>IT Zone Computer is famous for its computer training services throughout the town as it provides basic to diploma courses. I found instructors very friendly, even when I was not so good at the computer they made me trained with their special teaching techniques.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Aarati Chand</h4>
								<span class="testimonial-position">BBS (Far-western University )</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/Nira Rawal.jpg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>The way teacher's here taught us is in an awesome way. The overall infrastructure of the classrooms is so good that it creates a good environment that facilitates us to learn in a better way and helps us to learn everything in a creative way</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Nira Rawal</h4>
								<span class="testimonial-position">Kanchan Vidhya Mandhir</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/Monika Bhandari.png')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>I'm glad to do the course with IT Zone Computer. It is the best computer learning platform, with a super support team and instructors. Kudos to the trainers for creating such a great learning platform. I have enjoyed a lot while doing my ADIT training at IT Zone Computer, and at the same time, I have updated my skills too. Thank you IT Zone Computer</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Monika Bhandari</h4>
								<span class="testimonial-position">BBS (Far-western University )</span>
							</div>
						</div>
					</div>
				</div>

				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/Kiran Auji.jpg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>IT Zone Computer educators are highly skilled and competent in their respective fields, and they employ excellent teaching methods in which trainers explain the ideas using practical examples and assist in learning computers in a systematic manner.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Kiran Auji</h4>
								<span class="testimonial-position">Bal Jagariti</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/Piyush Pandey.jpg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>I highly recommend this institute for diploma and various computer related courses, this institute provides ISO certified certificate for ADIT course and various graphic designing courses. I think I am lucky to have such a wonderful platform provided by IT Zone Computer, MNR kanchanpur.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Piyush Pandey</h4>
								<span class="testimonial-position">BBS (Far-western University )</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/Saksham Gautam.jpg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>I am a student of this zone. It is a very good institute to learn a computer in an easy way and in a fast way. So I requested all my friends to be admitted here.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Saksham Gautam</h4>
								<span class="testimonial-position">Morning Glory School</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/Saphal Gautam.jpg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>IT Zone Computer provides highly skilled teachers, with a peace environment. I recommend all of my colleagues to study here different computer related courses.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Saphal Gautam</h4>
								<span class="testimonial-position">Morning Glory School</span>
							</div>
						</div>
					</div>
				</div>
				<div class="item col-md-4 mt-4">
					<div class="dlab-box dlab-team11">
						<div class="rounded-team">
							<div class="round-box bg-primary">
								<div class="team-mamber">
									<div class="team-mamber">
										<img src="{{asset('uploads/testimonial/Rekha Chand.jpg')}}" alt="" lazy="loading">
									</div>
								</div>
							</div>
							<div class="border-1 team-info text-center p-a20 p-t40">
								<div class="testimonial-text">
									<p>Best institute for its courses.Enough Space for further practice even when your class time is finished. I recommend my friends and relatives to study here if you want to make a better future in the world of technology.</p>
								</div>
								<h4 class="testimonial-name m-t0 m-b5">Rekha Chand</h4>
								<span class="testimonial-position">Morning Glory School</span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Testimonials End -->
	
</div>
<!-- Content END -->

@endsection