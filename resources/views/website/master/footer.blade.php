<footer class="footer bg-2 bg-overlay-black-90">
    @php
    $cat_id = DB::table('categories')->get();
    $brand_id = DB::table('brands')->get();
    $car = DB::table('cars')
    ->orderBy('created_at', 'desc')->limit(3)->get();
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social">
                    <ul>
                        <li><a class="facebook" href="https://www.facebook.com/visionmotorspk">facebook <i class="fa-brands fa-facebook-f"></i> </a></li>
                        <li><a class="twitter" href="https://twitter.com/ImranKhanPTI">twitter <i class="fa-brands fa-twitter"></i> </a></li>
                        <li><a class="pinterest" href="https://www.instagram.com/vision.motors/">Instagram <i class="fa-brands fa-instagram"></i> </a></li>
                        <li><a class="google-plus" href="https://www.whatsapp.com/">WhatsApp <i class="fa-brands fa-whatsapp"></i></a>
                        </li>
                        <li><a class="behance" href="{{url('vision/contact')}}">Email <i class="fa-sharp fa-solid fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="about-content">
                    <img class="img-fluid" id="logo-footer" src="{{asset('website/images/4thlogo.png')}}" alt="">
                    <p>Vision Motors Offers All Kind Of Japanese Cars Regardless of
                        Price Range And Size. Our All Cars Are Legally Imported & Custom Paid.</p>
                </div>
                <div class="address">
                    <ul>
                        <li><i class="fa-solid fa-location-dot"></i><span>Khalid Bin Waleed Road, Karachi</span> </li>
                        <li> <i class="fa-solid fa-phone"></i><span>0345-3017675</span> </li>
                        <li><i class="fa-regular fa-envelope"></i><span>visionmotors@gmail.com</span> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="usefull-link">
                    <h6 class="text-white">Useful Links</h6>
                    <ul>
                        <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="{{url('/')}}"><i
                                    class="fa-solid fa-angles-right"></i> Home</a></li>
                        <li><a class="{{ request()->is('vision/contact*') ? 'active' : '' }}"
                                href="{{url('vision/contact')}}"><i class="fa-solid fa-angles-right"></i> Contact Us</a>
                        </li>
                        <li><a class="{{ request()->is('vision/about*') ? 'active' : '' }}"
                                href="{{url('vision/about')}}"><i class="fa-solid fa-angles-right"></i> About Us</a>
                        </li>
                        <li><a class="{{ request()->is('vision/car*') ? 'active' : '' }}"
                                href="{{url('vision/cars')}}"><i class="fa-solid fa-angles-right"></i> Cars</a></li>
                        <li><a class="{{ request()->is('vision/faqs*') ? 'active' : '' }}"
                                href="{{url('vision/faqs')}}"><i class="fa-solid fa-angles-right"></i> FAQs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="recent-post-block">
                    <h6 class="text-white">New Arrivals </h6>
                    @foreach($car as $item)
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-fluid" src="{{URL($item->image)}}" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">{{$item->car}} </a>
                            <span class="post-date"><i
                                    class="fa-solid fa-calendar-days"></i>{{$item->created_at}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="news-letter">
                    <h6 class="text-white">About Us </h6>
                    <p>Vision Motors was established on 20 April 2021 with a vision to operate Pakistan's most modern,
                        hi-tech and vibrant automotive business.
                        Managed by the most experienced industry personnel.</p>
                    <form class="news-letter">
                        <!-- <input type="email" placeholder="Enter your Email" class="form-control placeholder"> -->
                        <a class="button red" href="{{url('vision/about')}}">About Us</a>
                    </form>
                </div>
            </div>
        </div>
        <hr />
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="text-lg-start text-center">
                        <p>© Copyright 2022 Vision Motors Developed by <a href="" target="_blank">Umer Abdul Wahid</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <ul class="list-inline text-lg-end text-center">
                        <li><a href="#">privacy policy </a> | </li>
                        <li><a href="#">terms and conditions </a> |</li>
                        <li><a href="#">contact us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>



<div class="car-top">
    <span><img src="{{asset('website/images/up.png')}}" alt=""></span>
</div>


<script type="text/javascript" src="{{asset('website/js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/mega-menu/mega_menu.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/jquery.appear.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/counter/jquery.countTo.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/owl-carousel/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/select/jquery-select.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/slick/slick.min.js')}}"></script>
<script type="text/javascript"
    src="http://www.iccila.com.br/js/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js">
</script>
<script type="text/javascript"
    src="http://www.iccila.com.br/js/plugins/revslider/public/assets/js/extensions/revolution.extension.carousel.min.js">
</script>
<script type="text/javascript"
    src="http://www.iccila.com.br/js/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js">
</script>
<script type="text/javascript"
    src="{{asset('website/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript"
    src="http://www.iccila.com.br/js/plugins/revslider/public/assets/js/extensions/revolution.extension.migration.min.js">
</script>
<script type="text/javascript"
    src="{{asset('website/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript"
    src="http://www.iccila.com.br/js/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js">
</script>
<script type="text/javascript"
    src="{{asset('website/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/revolution/js/extensions/revolution.extension.video.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('website/js/custom.js')}}"></script>

<script type="text/javascript">
(function($) {
    "use strict";

    var tpj = jQuery;
    var revapi2;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_2_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_2_1");
        } else {
            revapi2 = tpj("#rev_slider_2_1").show().revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    bullets: {
                        enable: true,
                        hide_onmobile: false,
                        style: "hermes",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 50,
                        space: 10,
                        tmp: ''
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1570,
                gridheight: 1000,
                lazyType: "none",
                shadow: 0,
                spinner: "spinner3",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
})(jQuery);
</script>

</body>

</html>