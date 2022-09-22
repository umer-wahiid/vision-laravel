@extends('website.master.main')
@section('content')
<!-- @php
$car = DB::table('cars')->get();
$category = DB::table('categories')->get();
@endphp -->
<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">{{$cars[0]->car}} </h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a> <i
                            class="fa fa-angle-double-right"></i></li>
                    <li><a href="{{url('vision/cars')}}">Cars</a><i class="fa fa-angle-double-right"></i></li>
                    <li><span>{{$cars[0]->car}}</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="car-details page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h3>{{$cars[0]->car}}</h3>
            </div>
            <div class="col-md-3">
                <div class="car-price text-md-end">
                    <strong>$ {{$cars[0]->price}}</strong>
                    <span>Plus Taxes & Licensing</span>
                </div>
            </div>
        </div>
        <!-- <div class="row">
                <div class="col-md-12">
                    <div class="details-nav">
                        <ul>
                            <li><a href="javascript:window.print()"><i class="fa fa-print"></i>Print this page</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        <div class="row">
            <div class="col-md-6">
                <div class="slider-slick">
                    <div class="slider slider-for detail-big-car-gallery">
                        <img class="img-fluid" src="{{URl($cars[0]->image)}}" alt="">
                        @php
                        $image = DB::table('cars')->where('id', $cars[0]->id)->first();
                        $images = explode('|', $image->moreimage);
                        @endphp
                        @foreach($images as $items)
                        <img class="img-fluid" src="{{URL::to($items)}}" alt="">
                        @endforeach
                    </div>
                    <div class="slider slider-nav">
                        <img class="img-fluid" src="{{URl($cars[0]->image)}}" alt="">
                        @php
                        $image = DB::table('cars')->where('id', $cars[0]->id)->first();
                        $images = explode('|', $image->moreimage);
                        @endphp
                        @foreach($images as $items)
                        <img class="img-fluid" src="{{URL::to($items)}}" alt="">
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="car-details-sidebar">
                    <div class="details-block details-weight">
                        <h5>DESCRIPTION</h5>
                        <ul>
                            <li> <span>Make</span> <strong class="text-end">{{$cars[0]->brand}}</strong></li>
                            <li> <span>Model</span> <strong class="text-end">7-series</strong></li>
                            <li> <span>Registration Year </span> <strong class="text-end">{{$cars[0]->year}}</strong>
                            </li>
                            <li> <span>Mileage</span> <strong class="text-end">{{$cars[0]->mi}} mi</strong></li>
                            <li> <span>Condition</span> <strong class="text-end">New</strong></li>
                            <li> <span>Exterior Color</span> <strong class="text-end">Silver</strong></li>
                            <li> <span>Interior Color</span> <strong class="text-end">Brown (Leather)</strong></li>
                            <li> <span>Drivetrain</span> <strong class="text-end">FWD</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-9  col-sm-9">
                <div id="tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item icon-diamond" role="presentation">
                            <button class="nav-link active" id="general-information-tab" data-bs-toggle="tab"
                                data-bs-target="#general-information" type="button" role="tab"
                                aria-controls="general-information" aria-selected="true">General
                                Information</button>
                        </li>
                        <li class="nav-item icon-list" role="presentation">
                            <button class="nav-link" id="features-options-tab" data-bs-toggle="tab"
                                data-bs-target="#features-options" type="button" role="tab"
                                aria-controls="features-options" aria-selected="false">Features & Options</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="general-information" role="tabpanel"
                            aria-labelledby="general-information-tab">
                            <h6>consectetur adipisicing elit</h6>
                            <p>Temporibus possimus quasi beatae, consectetur adipisicing elit. Obcaecati unde
                                molestias sunt officiis aliquid sapiente, numquam, porro perspiciatis neque
                                voluptatem sint hic quam eveniet ad adipisci laudantium corporis ipsam ea!
                                <br /><br />
                                Consectetur adipisicing elit. Dicta, amet quia ad debitis fugiat voluptatem neque
                                dolores tempora iste saepe cupiditate, molestiae iure voluptatibus est beatae?
                                Culpa, illo a You will begin to realize why, consectetur adipisicing elit. Commodi,
                                doloribus, earum modi consectetur molestias asperiores sequi ipsam neque error
                                itaque veniam culpa eligendi similique ducimus nulla, blanditiis, perspiciatis atque
                                saepe! veritatis.

                                <br /><br />
                                Adipisicing consectetur elit. Dicta, amet quia ad debitis fugiat voluptatem neque
                                dolores tempora iste saepe cupiditate, molestiae iure voluptatibus est beatae?
                                Culpa, illo a You will begin to realize why, consectetur adipisicing elit. Commodi,
                                doloribus, earum modi consectetur molestias asperiores.

                                <br /><br />
                                Voluptatem adipisicing elit. Dicta, amet quia ad debitis fugiat neque dolores
                                tempora iste saepe cupiditate, molestiae iure voluptatibus est beatae? Culpa, illo a
                                You will begin to realize why, consectetur adipisicing elit. Commodi, You will begin
                                to realize why, consectetur adipisicing elit. Laudantium nisi eaque maxime totam,
                                iusto accusantium esse placeat rem at temporibus minus architecto ipsum eveniet.
                                Delectus cum sunt, ea cumque quas! doloribus, earum modi consectetur molestias
                                asperiores sequi ipsam neque error itaque veniam culpa eligendi similique ducimus
                                nulla, blanditiis, perspiciatis atque saepe! veritatis.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="features-options" role="tabpanel"
                            aria-labelledby="features-options-tab">
                            <h6>consectetur adipisicing elit</h6>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row"> Air conditioning</th>
                                        <td>Mark</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Alloy Wheels</th>
                                        <td>Jacob</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Anti-Lock Brakes (ABS)</th>
                                        <td>Larry</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"> Anti-Theft</th>
                                        <td>Larry</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Anti-Starter</th>
                                        <td>Larry</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alloy Wheels</th>
                                        <td>Larry</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="extra-feature">
                    <h6> extra feature</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-style-1">
                                <li><i class="fa fa-check"></i> Security System</li>
                                <li><i class="fa fa-check"></i> Air conditioning</li>
                                <li><i class="fa fa-check"></i> Alloy Wheels</li>
                                <li><i class="fa fa-check"></i> Anti-Lock Brakes (ABS)</li>
                                <li><i class="fa fa-check"></i> Anti-Theft</li>
                                <li><i class="fa fa-check"></i> Anti-Starter </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-style-1">
                                <li><i class="fa fa-check"></i> Security System</li>
                                <li><i class="fa fa-check"></i> Air conditioning</li>
                                <li><i class="fa fa-check"></i> Alloy Wheels</li>
                                <li><i class="fa fa-check"></i> Anti-Lock Brakes (ABS)</li>
                                <li><i class="fa fa-check"></i> Anti-Theft</li>
                                <li><i class="fa fa-check"></i> Anti-Starter </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-style-1">
                                <li><i class="fa fa-check"></i> Security System</li>
                                <li><i class="fa fa-check"></i> Air conditioning</li>
                                <li><i class="fa fa-check"></i> Alloy Wheels</li>
                                <li><i class="fa fa-check"></i> Anti-Lock Brakes (ABS)</li>
                                <li><i class="fa fa-check"></i> Anti-Theft</li>
                                <li><i class="fa fa-check"></i> Anti-Starter </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="car-details-sidebar">
                    <div class="details-form contact-2 details-weight">
                        <form class="gray-form" action="post" id="send_enquiry_form">
                            <h5>SEND ENQUIRY</h5>
                            <div id="send_enquiry_notice" class="form-notice" style="display:none;"></div>
                            <input type="hidden" name="action" value="send_enquiry" />
                            <div class="mb-3">
                                <label class="form-label">Name*</label>
                                <input type="text" class="form-control" placeholder="Name" name="send_enquiry_name"
                                    id="send_enquiry_name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email address*</label>
                                <input type="text" class="form-control" placeholder="Email" name="send_enquiry_email"
                                    id="send_enquiry_email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Meassge* </label>
                                <textarea class="form-control" rows="4" placeholder="Message"
                                    name="send_enquiry_message" id="send_enquiry_message"></textarea>
                            </div>
                            <div class="mb-3">
                                <div id="recaptcha6"
                                    style="transform:scale(0.85);-webkit-transform:scale(0.85);transform-origin:0 0;-webkit-transform-origin:0 0;">
                                </div>
                            </div>
                            <div>
                                <a class="button red" id="send_enquiry_submit" href="javascript:void(0)">Submit <i
                                        class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></a>
                            </div>
                        </form>
                    </div>
                    <div class="details-location details-weight">
                        <h5>Location</h5>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d904.915640518272!2d67.05771412729217!3d24.875371935565678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f7ee075125f%3A0x18d1999d56ca617b!2sVision%20Motors!5e0!3m2!1sen!2s!4v1662981036336!5m2!1sen!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection