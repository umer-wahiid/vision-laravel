@extends('website.master.main')
@section('content')

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">About us </h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
                <ul class="page-breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i> Home</a> <i
                            class="fa fa-angle-double-right"></i>
                    </li>
                    </li>
                    <li><span>about us</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="welcome-4 page-section-ptb white-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <span>Welcome to </span>
                    <h2>Vision Motors</h2>
                    <div class="separator"></div>
                    <p>Vision Motors was established on 20 April 2021 with a vision to operate Pakistan's most
                        modern, hi-tech and vibrant automotive business.
                        Managed by the most experienced industry personnel, Vision Motors is providing best services
                        to its customers.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="about_img owl-carousel owl-theme" data-nav-arrow="true" data-items="1" data-md-items="1"
                    data-sm-items="1" data-xs-items="1" data-space="0">
                    <div class="item about-img">
                        <img class="img-fluid" src="images/car/fifteen.jpg" alt="">
                    </div>
                    <div class="item about-img">
                        <img class="img-fluid" src="images/car/sixteen.jpg" alt="">
                    </div>
                    <div class="item about-img">
                        <img class="img-fluid" src="images/car/seventeen.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <p>Vision Motors Offers All Kind Of Japanese Cars Regardless of Price Range And Size. Our All Cars
                    Are Legally Imported & Custom Paid.
                </p>
                <br />
                <p>we are working to do and make deals differently, where you will get a better service plus better
                    options and most of all, personal
                    feedback on your queries and suggestions.
                    We believe in customer's satisfaction as our success depends on your success.</p>
            </div>
        </div>
        <div class="row" style="display: flex;justify-content:center;align-items:center;">
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="icon">
                        <i class="glyph-icon flaticon-beetle"></i>
                    </div>
                    <div class="content">
                        <h6>All Japanese brands</h6>
                        <p>We Deal In All Japanese Legally Imported Cars</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="icon">
                        <i class="glyph-icon flaticon-interface-1"></i>
                    </div>
                    <div class="content">
                        <h6>24/7 Support</h6>
                        <p>Feel free to ask any queries, we are available 24/7.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="feature-box text-center">
                    <div class="icon">
                        <i class="glyph-icon flaticon-wallet"></i>
                    </div>
                    <div class="content">
                        <h6>Affordable</h6>
                        <p>We are offering the best best price range for all Japanese Cars</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="gray" />

<section class="counter counter-style-2 bg-red bg-1 bg-overlay-black-70 page-section-ptb">
    <div class="container">
        <div class="row" style="display: flex;justify-content:center;align-items:center;">
            <div class="col-lg-3 col-sm-6 item">
                <div class="counter-block text-start mb-lg-0 mb-4">
                    <div class="separator"></div>
                    <div class="info">
                        <h6 class="text-white">Vehicles in Stock</h6>
                        <i class="glyph-icon flaticon-beetle"></i>
                        <b class="timer text-white" data-to="561" data-speed="10000"></b>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 item">
                <div class="counter-block text-start mb-sm-0 mb-4">
                    <div class="separator"></div>
                    <div class="info">
                        <h6 class="text-white">Happy Customer</h6>
                        <i class="glyph-icon flaticon-circle"></i>
                        <b class="timer text-white" data-to="789" data-speed="10000"></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection