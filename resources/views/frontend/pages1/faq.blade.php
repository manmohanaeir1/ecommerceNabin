@extends('frontend.layouts.master')
@section('title')
    FAQ
@endsection
@section('content')
    <!-- Content -->
    <div class="page-content bg-gray">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/background/itzone-learning.jpeg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">FAQ</h1>
                    <!-- Breadcrumb row -->
                    <div class="breadcrumb-row">
                        <ul class="list-inline">
                            <li><a href="{{route('frontend.home')}}">Home</a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                    <!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- contact area -->
        <div class="content-block">
            <!-- Your Faq -->
            <div class="section-full overlay-white-middle content-inner" style="background-image:url(images/pattern/pic1.jpg);">
                <div class="container">
                    <div class="section-head text-black text-center">
                        <h3 class="title">Do you have Questions?</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 m-b30">
                            <div class="faq-form-box sticky-top">
                                <div class="form-header">
                                    <h2 class="title">Any question?</h2>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="name" type="text" required="" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="email" type="text" required="" class="form-control" placeholder="Your email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="phonenumber" type="tel" required="" class="form-control" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="subject" type="text" required="" class="form-control" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea class="form-control" name="message" placeholder="Write Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <button class="site-button button-md bg-secondry btn-block">SEND MESSAGE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 m-b30">
                            <div class="dlab-accordion faq-1 box-sort-in m-b30 space active-bg accdown1" id="accordion001">
                                <div class="panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title"> <a href="javascript:void(0);" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"> What are the different types of undergraduate degrees?</a> </h6>
                                    </div>
                                    <div id="collapse1" class="acod-body collapse show" data-parent="#accordion001">
                                        <div class="acod-content">
                                            <p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
                                            <p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" data-target="#collapse2" class="collapsed" aria-expanded="false">Can you work while studying in the United States?</a> </h6>
                                    </div>
                                    <div id="collapse2" class="acod-body collapse" data-parent="#accordion001">
                                        <div class="acod-content">
                                            <p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
                                            <p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse"  data-target="#collapse3" class="collapsed" aria-expanded="false">How long are your contracts?</a> </h6>
                                    </div>
                                    <div id="collapse3" class="acod-body collapse" data-parent="#accordion001">
                                        <div class="acod-content">
                                            <p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
                                            <p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse" data-target="#collapse4" class="collapsed" aria-expanded="false">What are the different types of undergraduate degrees?</a> </h6>
                                    </div>
                                    <div id="collapse4" class="acod-body collapse" data-parent="#accordion001">
                                        <div class="acod-content">
                                            <p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
                                            <p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="acod-head">
                                        <h6 class="acod-title"> <a  href="javascript:void(0);" data-toggle="collapse"  data-target="#collapse5" class="collapsed" aria-expanded="false">What is the transfer application process? </a> </h6>
                                    </div>
                                    <div id="collapse5" class="acod-body collapse" data-parent="#accordion001">
                                        <div class="acod-content">
                                            <p>Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
                                            <p class="m-b0">Web design aorem apsum dolor sit amet, adipiscing elit, sed diam nibh euismod tincidunt ut laoreet
                                                dolore magna aliquam erat volutpat. Claritas est etiam processus. ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Claritas est etiam processus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Your Faq End -->
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection

