@extends('frontend.layouts.master')
@section('title')
    Apply
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt"
             style="background-image:url(images/background/itzone-learning.jpeg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Apply</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li>Apply</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- Career -->
        <!-- contact area -->
        <div class="content-block">
            <!-- Career -->
            <div class="section-full content-inner bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 m-b30">
                            <div class="faq-form-box sticky-top">
                                <div class="form-header">
                                    <h2 class="title">Application form</h2>
                                </div>
                                @include('admin.layouts.includes._message')
                                <form method="POST" action="{{route('pages.store')}}" enctype="multipart/form-data">

                                    @csrf
                                    <div class="form-group">
                                        <label for="dzName">Full name <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                        <input name="name" type="text" required="" class="form-control"
                                               placeholder="Your Name" value="{{old('name')}}">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="dzEmail">Email address <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input name="email" type="email" required="" class="form-control"
                                           placeholder="Your email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone number <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input name="phone" type="tel" required="" class="form-control"
                                           placeholder="Phone number" value="{{old('phone')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Address <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input name="address" type="text" required="" class="form-control"
                                           placeholder="Address" value="{{old('address')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="expertise">Your Expertise <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input name="expertise" type="text" required="" class="form-control"
                                           placeholder="Your Expertise" value="{{old('expertise')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="link">Online Portfolio</label>
                                <div class="input-group">
                                    <input name="link" type="text" class="form-control"
                                           placeholder="eg:https://domainname.com"  value="{{old('link')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cv">Your CV or resume file <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input name="cv" type="file" required="" class=""  value="{{old('cv')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image">Your photo <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input name="image" type="file" required="" class="" accept="image/*"  value="{{old('image')}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="portfolio">Let's hear more about your strength. <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <textarea class="form-control" name="message" placeholder="submit your cover letter"  value="{{old('portfolio')}}"></textarea>
                                </div>
                            </div>

                            <div class="clearfix col-lg-4">
                                <button class="site-button button-md bg-secondry btn-block">SUBMIT APPLICATION</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Career END -->
    </div>
    </div>
    <!-- Content END-->
    </div>
@endsection
