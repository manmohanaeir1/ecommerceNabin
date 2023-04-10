@extends('frontend.layouts.master')
@section('title')
Contact Us
@endsection
@section('addseo')
<meta name="description" content="Contact IT Zone Computer Institute for any inquiries about our software development, web development, graphic designing, digital marketing, infrastructure, or business solutions. Our team of skilled professionals and experienced trainers will be happy to assist you.">
<meta name="keywords" content="contact us, IT Zone Computer Institute, software development, web development, graphic designing, digital marketing, infrastructure, business solutions">
<meta property="og:image" content="{{ asset('images/background/itzone-learning.jpeg') }}" />
<meta property="og:type" content="website">
<meta property="og:description" content="Contact IT Zone Computer Institute for any inquiries about our software development, web development, graphic designing, digital marketing, infrastructure, or business solutions. Our team of skilled professionals and experienced trainers will be happy to assist you.">
<meta property="og:url" content="https://itzonecomputer.com/">
<meta name="canonical" href="https://itzonecomputer.com/contact-us/">



@endsection
@section('content')

<!-- contact area -->
<div class="section-full content-inner contact-style-1">
    <div class="container">
        <div class="row dzseth">
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper bx-style-1 bg-white p-lr20 p-tb30 center seth radius-sm">
                    <div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-uppercase">Address</h5>
                        <p>Bhimdatta-18, Janaki Tole, Kanchanpur, Nepal</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper bx-style-1 bg-white p-lr20 p-tb30 center seth radius-sm">
                    <div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-uppercase">Email</h5>
                        <p><a href="mailto:info@itzonecomputer.com">info@itzonecomputer.com</a>, <br><a href="mailto:itzone666@gmail.com">itzone666@gmail.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 m-b30">
                <div class="icon-bx-wraper bx-style-1 bg-white p-lr20 p-tb30 center seth radius-sm">
                    <div class="icon-lg text-primary m-b20"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                    <div class="icon-content">
                        <h5 class="dlab-tilte text-uppercase">Phone</h5>
                        <p><a href="tel:099523014">099-523014</a>, <br><a href="tel:+977-9841822340">+977-9841822340</a></p>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="row">
            <!-- Left part END -->
          
            <!-- Left part start -->
            <div class="col-lg-6 m-b30">
                <div class="p-a30 bg-white clearfix border-1 radius-sm">
                    <h3>Send Message Us</h3>
                    @include('admin.layouts.includes._message')

                    <form method="POST"  action="{{route('pages.contactstore')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="name" type="text" required class="form-control" placeholder="Your Name" value="{{old('name')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="email" type="email" class="form-control" required placeholder="Your Email Id" value="{{old('email')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="phone" type="text" required class="form-control" placeholder="Phone" value="{{old('phone')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input name="subject" type="text" required class="form-control" placeholder="Subject"value="{{old('subject')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <textarea name="message" rows="4" class="form-control" required placeholder="Your Message..." value="{{old('message')}}"></textarea>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

              <!-- right part start -->
              <div class="col-lg-6 m-b30 d-flex">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3490.7725310275237!2d80.17436701509011!3d28.964470582288108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1abf20c1ba7ff%3A0x9cc9c8db54df6ac0!2sIT%20Zone%20Computer%20Education!5e0!3m2!1sen!2snp!4v1653993717202!5m2!1sen!2snp" class="align-self-stretch radius-sm" style="border:0; width:100%;  min-height:100%;" allowfullscreen></iframe>
            </div>
            <!-- right part END -->
            
        </div>
    </div>
</div>
<!-- contact area  END -->

@endsection