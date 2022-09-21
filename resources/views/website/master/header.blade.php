<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <title>Vision Motors - The Best Japanese Cars Dealer</title>

    <link rel="shortcut icon" href="{{asset('website/images/icon.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/flaticon.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/mega-menu/mega_menu.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/css/fontawesome-free-6.0.0-beta3-web/css/fontawesome.min.css')}}">

    <script src="{{asset('website/css/fontawesome-free-6.0.0-beta3-web/js/all.min.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('website/css/slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/slick/slick-theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/revolution/css/settings.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/responsive.css')}}" />
    <link href="//db.onlinewebfonts.com/c/1e46dc4b5a94ebe8b2ec353f92a1650f?family=Flaticon" rel="stylesheet"
        type="text/css" />

</head>

<body>



    <!-- <div id="loading">
  <div id="loading-center">
      <img src="{{asset('website/images/loader.gif')}}" alt="">
 </div>
</div> -->





    <header id="header" class="bydefault">
        <div class="bartop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="bartop-left text-lg-start text-center">
                            <ul class="list-inline">
                                <li><i class="fa-regular fa-envelope"></i> visionmotors@gmail.com</li>
                                <li><i class="fa-regular fa-clock"></i> Mon - Sat 11.00 - 20.00. Sunday CLOSED</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="bartop-right text-lg-end text-center">
                            <ul class="list-inline">
                                <li> <i class="fa fa-phone"></i> 0345-3017675 </li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @php
        $cat_id = DB::table('categories')->get();
        $brand_id = DB::table('brands')->get();
        @endphp

        <div class="menu">
            <nav id="menu" class="mega-menu">
                <section class="menu-list-items">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 position-relative">
                                <ul class="menu-logo">
                                    <li>
                                        <a href="{{url('/')}}"><img id="logo_img"
                                                src="{{asset('website/images/4thlogo.png')}}" alt="logo">
                                        </a>
                                    </li>
                                </ul>
                                <ul class="menu-links" style="margin-top: 25px;">
                                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{url('/')}}">
                                            Home</a></li>
                                    <li class="{{ request()->is('vision/cars*') ? 'active' : '' }}"><a
                                            href="{{url('vision/cars')}}">Cars</a>
                                    </li>
                                    <li class="{{ request()->is('vision/car_by_category*') ? 'active' : '' }}"><a
                                            href="{{url('vision/cars')}}">Category</a>
                                        <ul class="drop-down-multilevel">
                                            @foreach($cat_id as $item)
                                            <li><a
                                                    href="{{url('vision/car_by_category')}}/{{$item->id}}">{{$item->category}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ request()->is('vision/car_by_brand*') ? 'active' : '' }}"><a
                                            href="{{url('vision/cars')}}">Brand</a>
                                        <ul class="drop-down-multilevel">
                                            @foreach($brand_id as $item)
                                            <li><a
                                                    href="{{url('vision/car_by_brand')}}/{{$item->id}}">{{$item->brand}}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="{{ request()->is('vision/about*') ? 'active' : '' }}"><a
                                            href="{{url('vision/about')}}">About</a></li>
                                    <li class="{{ request()->is('vision/contact*') ? 'active' : '' }}"><a
                                            href="{{url('vision/contact')}}"> Contact</a>
                                    <li class="{{ request()->is('vision/faqs*') ? 'active' : '' }}"><a
                                            href="{{url('vision/faqs')}}">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </nav>
        </div>
    </header>