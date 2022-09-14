@extends('website.master.main')
@section('content')

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">Our Cars </h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
                <ul class="page-breadcrumb">
                    <li><a href="index.html"><i class="fa fa-home"></i>Home</a> <i class="fa fa-angle-double-right"></i>
                    </li>
                    <li><span>Cars</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>



<!-- cars  -->



<section class="product-listing page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{asset('website/images/car/one.jpg')}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{url('vision/cardetail')}}"><i class="fa-regular fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> 2016</li>
                                    <li><i class="fa fa-cog"></i> Manual </li>
                                    <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <a href="#">Acura Rsx</a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="old-price">$35,568</span>
                                    <span class="new-price">$32,698 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{asset('website/images/car/two.jpg')}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{url('vision/cardetail')}}"><i class="fa-regular fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> 2016</li>
                                    <li><i class="fa fa-cog"></i> Manual </li>
                                    <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <a href="#">Lexus GS 450h</a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="old-price">$35,568</span>
                                    <span class="new-price">$32,698 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{asset('website/images/car/three.jpg')}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{url('vision/cardetail')}}"><i class="fa-regular fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> 2016</li>
                                    <li><i class="fa fa-cog"></i> Manual </li>
                                    <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <a href="#">GTA 5 Lowriders DLC</a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="old-price">$35,568</span>
                                    <span class="new-price">$32,698 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{asset('website/images/car/four.jpg')}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{url('vision/cardetail')}}"><i class="fa-regular fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> 2016</li>
                                    <li><i class="fa fa-cog"></i> Manual </li>
                                    <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <a href="#">Toyota avalon hybrid </a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="old-price">$35,568</span>
                                    <span class="new-price">$32,698 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{asset('website/images/car/five.jpg')}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{url('vision/cardetail')}}"><i class="fa-regular fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> 2016</li>
                                    <li><i class="fa fa-cog"></i> Manual </li>
                                    <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <a href="#">Hyundai santa fe sport </a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="old-price">$35,568</span>
                                    <span class="new-price">$32,698 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{asset('website/images/car/six.jpg')}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{url('vision/cardetail')}}"><i class="fa-regular fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> 2016</li>
                                    <li><i class="fa fa-cog"></i> Manual </li>
                                    <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <a href="#">Lexus is f</a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="old-price">$35,568</span>
                                    <span class="new-price">$32,698 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{asset('website/images/car/one.jpg')}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{url('vision/cardetail')}}"><i class="fa-regular fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> 2016</li>
                                    <li><i class="fa fa-cog"></i> Manual </li>
                                    <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <a href="#">Acura Rsx</a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="old-price">$35,568</span>
                                    <span class="new-price">$32,698 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{asset('website/images/car/three.jpg')}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{url('vision/cardetail')}}"><i class="fa-regular fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> 2016</li>
                                    <li><i class="fa fa-cog"></i> Manual </li>
                                    <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <a href="#">GTA 5 Lowriders DLC</a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="old-price">$35,568</span>
                                    <span class="new-price">$32,698 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{asset('website/images/car/two.jpg')}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{url('vision/cardetail')}}"><i class="fa-regular fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i> 2016</li>
                                    <li><i class="fa fa-cog"></i> Manual </li>
                                    <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <a href="#"> Lexus GS 450h</a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="old-price">$35,568</span>
                                    <span class="new-price">$32,698 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-nav d-flex justify-content-center">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection