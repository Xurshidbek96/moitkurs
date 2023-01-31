@extends('layouts.layout')

@section('content')

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb" style="background: url('uploads/files/site/inner-pagebg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">
                        Yordam </h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our FAQ -->
<section class="our-faq">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-xl-8">
                <h4 class="fz20 mb30 faq-category-1">
                    Salollarga javoblar </h4>
                <div class="faq_according">
                    <div id="accordion" class="panel-group">
                        @foreach($faqs as $faq)
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#faq_{{ $faq->id }}" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">
                                            {{ $faq->quesssion }} </a>
                                    </h4>
                                </div>
                                <div id="faq_{{ $faq->id }}" class="panel-collapse collapse">
                                    <div class="panel-body">

                                        <p class="mb25">
                                        <p>{{ $faq->answer }} </p>
                                        </p>

                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
