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
                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i>Home</a> <i class="fa fa-angle-double-right"></i>
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
                    @foreach($car as $item)
                    <div class="col-lg-4 col-sm-6" style="width:280px;">
                        <div class="car-item gray-bg text-center">
                            <div class="car-image">
                                <img class="img-fluid" src="{{URL($item->image)}}" alt="">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="{{url('vision/cardetail')}}/{{$item->id}}"><i class="fa-regular fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i>{{$item->year}}</li>
                                    <li><i class="fa fa-cog"></i>{{$item->type}}</li>
                                    <li><i class="fa fa-shopping-cart"></i> {{$item->km}} km</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <a href="#">{{$item->car}}</a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="new-price">${{$item->price}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- <div class="pagination-nav d-flex justify-content-center">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>
@endsection