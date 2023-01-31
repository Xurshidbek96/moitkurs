@extends('layouts.layout')

@section('content')

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb" style="background: url('uploads/files/site/inner-pagebg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">
                        Bog'lanish </h4>
                    <nav aria-label="breadcrumb">
                        <ol id="w2" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Asosiy</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bog&#039;lanish</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="contact_localtion text-center">
                    <div class="icon"><span class="flaticon-placeholder-1"></span></div>
                    <h4>Kompaniya ofis manzili</h4>
                    <p>O'zbekiston. Namangan sh </p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="contact_localtion text-center">
                    <div class="icon"><span class="flaticon-phone-call"></span></div>
                    <h4>Telefon raqami</h4>
                    <p class="mb0">+998 99 999 99 99</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="contact_localtion text-center">
                    <div class="icon"><span class="flaticon-email"></span></div>
                    <h4>Email manzil</h4>
                    <p>test@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="h600" id="map-canvas">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2555.637879562646!2d71.78048561986695!3d40.38264211967396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb83e7bba1166b%3A0xf7c1c1f00a57e630!2siTeach%20company!5e0!3m2!1sru!2s!4v1607159203953!5m2!1sru!2s"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-lg-6 form_grid">
                <h4 class="mb5">Xabar qoldirish</h4>
                <p>Xabar qoldirish uchun quyidagi formani to'ldirib "Yuborish" tugmasini bosing</p>
                <form id="w0" class="contact_form form-vertical kv-form-bs4" action="/aloqa" method="post">
                    <input type="hidden" name="_csrf-frontend"
                        value="a-KTNfzMrGJdQXWyejNvpxvsqA_2InRENHU9Q_fv7Hpf2vBgioXzDGUIPPwgQArFfaPPP8BBOz1eE2sNur6VIw==">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group highlight-addon field-contact-firstname required">
                                <label class="has-star" for="contact-firstname">Ismingiz</label>

                                <input type="text" id="contact-firstname" class="form-control"
                                    name="Contact[firstname]" autofocus aria-required="true">

                                <div class="invalid-feedback"></div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group highlight-addon field-contact-lastname">
                                <label class="has-star" for="contact-lastname">Familiyangiz</label>

                                <input type="text" id="contact-lastname" class="form-control"
                                    name="Contact[lastname]">

                                <div class="invalid-feedback"></div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group highlight-addon field-contact-email">
                                <label class="has-star" for="contact-email">Email</label>

                                <input type="email" id="contact-email" class="form-control"
                                    name="Contact[email]">

                                <div class="invalid-feedback"></div>

                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group highlight-addon field-contact-phone">
                                <label class="has-star" for="contact-phone">Telefon raqamingiz</label>

                                <input type="text" id="contact-phone" class="form-control" name="Contact[phone]"
                                    value="+998" placeholder="+998(__) ___-__-__"
                                    data-plugin-inputmask="inputmask_fe0e4910">

                                <div class="invalid-feedback"></div>

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group highlight-addon field-contact-body required">
                                <label class="has-star" for="contact-body">Sizning fikringiz</label>

                                <textarea id="contact-body" class="form-control" name="Contact[body]"
                                    aria-required="true"></textarea>

                                <div class="invalid-feedback"></div>

                            </div>
                        </div>

                        <div class="col-sm-12">
                            <button type="submit" class="btn dbxshad btn-lg btn-thm circle white">
                                Yuborish </button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

@endsection
