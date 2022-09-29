@extends('website.master.main')
@section('content')
@php
$faqs = DB::table('faqs')->get();
@endphp

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">Faq</h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
                <ul class="page-breadcrumb">
                    <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a> <i
                            class="fa fa-angle-double-right"></i>
                    </li>
                    <li><span>FAQs</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>




<section class="privacy-policy page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span> Have a question? Please check our knowledgebase first.</span>
                    <h2>Frequently Asked Questions </h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="tabs">

                    <div class="tab-content mb-0" id="myTabContent">

                        <div class="tab-pane fade show active" id="general-information" role="tabpanel"
                            aria-labelledby="general-information-tab">
                            <div class="accordion" id="accordionExample01">

                                @foreach($faqs as $item)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{$item->id}}">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse{{$item->id}}"
                                            aria-expanded="false" aria-controls="collapse{{$item->id}}">
                                            {{$item->question}}
                                        </button>
                                    </h2>
                                    <div id="collapse{{$item->id}}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{$item->id}}" data-bs-parent="#accordionExample01">
                                        <div class="accordion-body">
                                            {{$item->answer}}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
    </div>

</section>


@endsection