@extends('frontend.layouts.master')
@section('title')
Success Gallery
@endsection
@section('addseo')
<meta property="og:title" content="Success Galary" />
<meta property="og:keywords" content="image success IT zone success gallaey student success " />
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
				<h1 class="text-white">Success Gallery</h1>
				<!-- Breadcrumb row -->
				<div class="breadcrumb-row">
					<ul class="list-inline">
						<li><a href="{{route('frontend.home')}}">Home</a></li>
						<li>Success Gallery</li>
					</ul>
				</div>
				<!-- Breadcrumb row END -->
			</div>
		</div>
	</div>

       <!-- Success Story -->
       <div class="section-full bg-gray content-inner-2">
        <div class="container">
            <div class="section-head text-black text-center">
                <h2 class="title">Success Stories</h2>
                <p>"Quality Never Say Sorry"</p>
            </div>
            <div class="row">
                <div class="item col-md-4 mt-4">
                    <div class="dlab-box dlab-team11">
                        <div class="rounded-team">
                            <div class="round-box bg-primary">
                                <div class="team-mamber">
                                    <div class="team-mamber">
                                        <img alt="Dambar Mahara" lazy="loading" src="{{asset('uploads/success/Dambar-Mahara.jpeg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/dambar.mahara88" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="https://www.linkedin.com/in/dambar-mahara-651093140/" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Dambar Mahara</a></h5>
                                <span>Section Officer</span>
                                <span>at Parshuram Municipality, Dadeldhura</span>
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
                                        <img alt="Dan Bahadur Bohara" lazy="loading" src="{{asset('uploads/success/Dan bahadur Bohara.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/boharadanbd" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Dan Bahadur Bohara</a></h5>
                                <span>Computer Operator</span>
                                <span>at Punarbas Municipality, Kanchanpur</span>
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
                                        <img alt="Ganesh Raj Ojha" lazy="loading" src="{{asset('uploads/success/Ganesh Raj Ojha.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/ganeshojha.np" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Ganesh Raj Ojha</a></h5>
                                <span>Graphics Designer</span>
                                <span>at Kyra Works Pvt.Ltd, Kathmandu</span>
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
                                        <img alt="Lalit Nath" lazy="loading" src="{{asset('uploads/success/Lalit Nath.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/lalit.nath.1806" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="https://www.linkedin.com/in/lalit-nath-11b5111b4/" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Lalit Nath</a></h5>
                                <span>Web & app Developer</span>
                                <span>at Lightwebgroup, Dhangadi</span>
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
                                        <img alt="Prabin Jagari" lazy="loading" src="{{asset('uploads/success/Prabin Jagari.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/prabin.jagri" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Prabin Jagari</a></h5>
                                <span>Graphics Designer</span>
                                <span>at Tejal Printing, Kanchanpur</span>
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
                                        <img alt="Manisha Jagri" lazy="loading" src="{{asset('uploads/success/Manisha Jagri.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/mona.xetree.5" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Manisha Jagri</a></h5>
                                <span>Computer Operator</span>
                                <span>at Ministry of Home Affairs - Department of National ID and Civil Registration</span>
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
                                        <img alt="Pradip Pandey" lazy="loading" src="{{asset('uploads/success/Pradip Pandey.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="#" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Pradip Pandey</a></h5>
                                <span>Computer Operator</span>
                                <span>at Ministry of Home Affairs - Department of National ID and Civil Registration</span>
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
                                        <img alt="Mahesh Nath" lazy="loading" src="{{asset('uploads/success/Mahesh Nath.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/mahesh.nath.5030" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Mahesh Nath</a></h5>
                                <span>Computer Operator</span>
                                <span>at NMB Bank, Mahendranagar</span>
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
                                        <img alt="Sunil Karki" lazy="loading" src="{{asset('uploads/success/Sunil Karki.jpg')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="sosial-icon-team text-center">
                                <ul class="rounde-team-social-icon border">
                                    <li><a href="https://www.facebook.com/profile.php?id=100037392371404" target="_blank" class="fa fa-facebook fb-btn"></a></li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-twitter tw-btn m-l10"></a></li>
                                    <li><a href="#" target="_blank" class="fa fa-linkedin link-btn m-l10"></a>
                                    </li>
                                    <li><a href="javascript:void(0);" target="_blank" class="fa fa-instagram pin-btn"></a></li>
                                </ul>
                            </div>
                            <div class="border-1 team-info text-center p-a20 p-t40">
                                <h5 class="dlab-title"><a href="javascript:;" style="color: black;">Sunil Karki</a></h5>
                                <span>Computer Instructor</span>
                                <span>at Tech Trust Infosys, Dadeldhura</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Success Story End -->
</div>
<!-- Content END -->

@endsection
