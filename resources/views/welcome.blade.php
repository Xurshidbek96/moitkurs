@extends('layouts.layout')

@section('content')

        <!-- 2nd Home Slider -->
        <div class="home1-mainslider">
            <div class="container-fluid p0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-banner-wrapper" style="height: 450px">
                            <div class="banner-style-one owl-theme owl-carousel">
                                @foreach($courses as $c)
                                    <div class="slide slide-one"
                                    style="background-image: url(/images/courses/{{ $c->img2 }}); height: 400px; padding-top: 100px">
                                        <div class="container">
                                            <div class="row home-content" style="padding-top: 0">
                                                <div class="col-lg-12 text-center p0">
                                                    <h4 class="banner-title" style="padding: 0 10%; "> {{ $c->name }}</h4>
                                                    <p> {{ $c->title }} </p>
                                                    <div class="btn-block">
                                                        <a href="{{ route('single_course', $c->id) }}" class="banner-btn">
                                                            Batafsil </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="carousel-btn-block banner-carousel-btn">
                                <span class="carousel-btn left-btn">
                                    <i class="flaticon-left-arrow left" style="font-size: 30px"></i>
                                </span>
                                <span class="carousel-btn right-btn">
                                    <i class="flaticon-right-arrow-1 right" style="font-size: 30px"></i></span>
                            </div><!-- /.carousel-btn-block banner-carousel-btn -->
                        </div><!-- /.main-banner-wrapper -->
                    </div>
                </div>
            </div>

        </div>

        <!-- Our Popular Courses -->
        <section class="popular-courses">
            <div class="container-fluid style2">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="mt0">Yangi kurslar</h3>
                            <p class="">Eng yangi qo'shilgan video kurslar</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="popular_course_slider" style="height: 400px">
                            @foreach ($course1 as $c)
                                <div class="item">
                                    <div class="top_courses">
                                        <div class="thumb">
                                            <img class="img-whp" src="/images/courses/{{ $c->img1 }}"
                                                alt="TOP Framework - Laravel"
                                                style="height: 200px; width: 100%; object-fit: cover">
                                            <a href="{{ route('single_course', $c->id) }}" data-pjax="0">
                                                <div class="overlay">

                                                    <span class="tc_preview_course" href="{{ route('single_course', $c->id) }}"
                                                        data-pjax="0">Kurs
                                                        haqida batafsil</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <div class="tc_content">
                                                <p align="center">{{ $c->teacher->name ?? 'Yangi kurs' }}</p>
                                                <h5 style="min-height: 76px" align="center">
                                                    <a href="{{ route('single_course', $c->id) }}" data-pjax="0">
                                                        {{ $c->name }} </a>
                                                </h5>
                                                <ul class="tc_review"
                                                    style="min-height: 25px; display: flex; justify-content: center">

                                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a></li>
                                                    <li class="list-inline-item">

                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="tc_footer">
                                                <ul class="tc_meta float-left">

                                                    <li class="list-inline-item"><a href="{{ route('single_course', $c->id) }}"><i
                                                                class="flaticon-profile"></i>  {{ $c->members }}</a></li>

                                                    <li class="list-inline-item">
                                                    </li>
                                                </ul>
                                                <div class="tc_price float-right">
                                                    <a href="{{ route('single_course', $c->id) }}" class="tc_price float-right">A'zo bo'lish</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Top Courses -->
        <section id="top-courses" class="top_cours">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="mt0">Ommabop kurslar</h3>
                            <p>Eng ko'p a'zo bo'lingan video darslar</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!-- FILTER BUTTONS -->
                        <div class="emply-text-sec">
                            <div class="row" id="masonry_abc">
                                @foreach ($course2 as $c)
                                <div class="col-md-6 col-lg-4 col-xl-3  category_all">
                                    <div class="top_courses">
                                        <div class="thumb">
                                            <img class="img-whp" src="/images/courses/{{ $c->img1 }}"
                                                alt="{{ $c->name }}"
                                                style="height: 200px; width: 100%; object-fit: cover">
                                            <a href="{{ route('single_course', $c->id) }}" data-pjax="0">
                                                <div class="overlay">
                                                    <span class="tc_preview_course" href="{{ route('single_course', $c->id) }}"
                                                        data-pjax="0">Kurs haqida
                                                        batafsil</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <div class="tc_content">
                                                <p align="center">{{ $c->teacher->name ?? 'Yangi kurs'}}</p>
                                                <h5 style="min-height: 76px" align="center">
                                                    <a href="{{ route('single_course', $c->id) }}">
                                                        {{ $c->name }} </a>
                                                </h5>
                                                <ul class="tc_review"
                                                    style="min-height: 25px; display: flex; justify-content: center">

                                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">

                                                    </li>

                                                </ul>
                                            </div>
                                            <div class="tc_footer">
                                                <ul class="tc_meta float-left">


                                                    <li class="list-inline-item"><a href="{{ route('single_course', $c->id) }}"><i
                                                                class="flaticon-profile"></i></a></li>

                                                    <li class="list-inline-item"><a href="{{ route('single_course', $c->id) }}">{{ $c->members }}</a>
                                                    </li>

                                                </ul>
                                                <div class="tc_price float-right">
                                                    <a href="{{ route('single_course', $c->id) }}" class="tc_price float-right">A'zo bo'lish</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="display: flex; justify-content: center">
                        <a href="all.html" class="btn dbxshad btn-lg btn-thm circle white">
                            Barcha kurslar </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="divider_home1 parallax" data-stellar-background-ratio="0.3"
            style='background-image: url("uploads/files/site/pages_bannerr.jpg")'>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="divider-one">
                            <h1 class="color-white text-uppercase"> Siz malakali o‘qituvchimisiz?</h1>
                            <p class="color-white">Agar siz o‘z sohangizda tajribali mutaxassis bo‘lsangiz, bizning
                                jamoa sizni hamkorlikka chorlaydi. Biz bilan hamkorlikda kurslar yarating hamda mo‘may
                                daromad egasiga aylaning!</p>
                            <a class="btn btn-transparent divider-btn" href="/become-teacher"> O'qituvchi
                                bo'lish</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- School Category Courses -->
        <section id="our-courses" class="our-courses bgc-f9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="mt0">Yo‘nalishlar</h3>
                            <p>Eng ommabob zamonaviy kurs yo'nalishlari</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($category as $c)
                        <div class="col-sm-6 col-lg-3">
                            <a href="/all">
                                <div class="img_hvr_box"
                                    style="background-image: url(/images/courses/{{ $c->img }});">
                                    <div class="overlay">
                                        <div class="details">
                                            <h5>{{ $c->name }}</h5>
                                            <p> <?php echo count($c->courses); ?> ta kurs</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- <section id="our-testimonials" class="our-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="main-title text-center">
                            <h3 class="mt0">Foydalanuvchilar fikrlari</h3>
                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="testimonialsec">
                            <ul class="tes-nav">
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/files/site/virtualdars.uz_user_default_image.png"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/files/site/virtualdars.uz_user_default_image.png"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/https://lh3.googleusercontent.com/a/AATXAJwznDX0AVoOIVt5Y0M_1K9ysuvX388ZCHiFn5qA=s96-c"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/user_image/image_1634496659.0779_896095062.jpg"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/files/site/virtualdars.uz_user_default_image.png"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/user_image/image_1657631540.6268_94976218.jpeg"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/user_image/image_1633708342.4153_1678112902.jpg"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/files/site/virtualdars.uz_user_default_image.png"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/files/site/virtualdars.uz_user_default_image.png"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/user_image/image_1623500505.8712_1844320452.jpg"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/user_image/image_1619339798.4092_899792671.jpg"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/user_image/image_1623500505.8712_1844320452.jpg"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/files/site/virtualdars.uz_user_default_image.png"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/user_image/image_1618922227.9219_785422958.jpg"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/files/site/virtualdars.uz_user_default_image.png"
                                        alt="user image" />
                                </li>
                                <li>
                                    <img class="img-fluid"
                                        src="/front/uploads/files/site/virtualdars.uz_user_default_image.png"
                                        alt="user image" />
                                </li>

                            </ul>
                            <ul class="tes-for">
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Turdimurodov Baxtishod</h5>
                                            <span class="small text-thm">Laravel Nol dan Pro gacha</span>
                                            <p> Kurs juda tushunarli va foydali qilingan ekan.
                                                Hali tugantib bo'lmadim, lekin menga juda yoqyapti.
                                                Laravel bo'yicha real loyiha bo'limi ham qo'shilsa "SUPPER Course"
                                                bo'lardi bundan ham.

                                                Ustozga ko'pdan-ko'p rahmat.
                                                Jonlari sog' bo'lsin. Ilmlari bundanda ziyoda bo'lsin.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Ibragimov Javohir</h5>
                                            <span class="small text-thm">Adobe Illustrator kursi</span>
                                            <p> Assalomu alaykum. Ushbu videodarlarni Muallifi bo'lgan Madina opaga
                                                kattakon rahmat. Adobe Illustratorda ishlay olish levelim ancha
                                                yaxshilandi!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Doniyorov Abduxakim</h5>
                                            <span class="small text-thm">SMM</span>
                                            <p> Judayam zo'r tushunarli qiziqarli dars ekan.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Burhonov Sherzod</h5>
                                            <span class="small text-thm">Super Photoshop</span>
                                            <p> Oʼzi boshlangʼich bilimni Telegram kanalingizdagi videolardan
                                                oʼrgangandim. Bugun shu kursni sotib olish nasib qilgan ekan. Hali
                                                kursni tugatganim yoʼq, lekin qolganlarga ham sotib olishni tavsiya
                                                qilaman. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Djurayev Jahongir</h5>
                                            <span class="small text-thm">&quot;Premiere Pro&quot; ipidan
                                                ignasigacha</span>
                                            <p> Vapshe bomba! Ayniqsa Social Media Marketing bilan shug'ullanadiganlarga
                                                foydali fundamental darslar ekan, tavsiya qilaman, sotib oling va o'z
                                                bilimingizni oshiring!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>O&#039;rinboyev Islomiddin</h5>
                                            <span class="small text-thm">YII2 frameworki</span>
                                            <p> Assalomu alaykum! Men Ahmadjon Hoshimovni youtubeda topganman. uztozni
                                                darslarini birinchi marta ko`rganimdayoq yoqib qolgan darslar to`liq,
                                                sodda va tushunarli edi. Shundan beri men ko`p bilimlarimni ustozni
                                                video darsliklari orqali o`zlashtirib kelayapman. Ollohga shukurki
                                                hozirda ushbu bilimlarimdan foydalana boshladim</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Amanbaev Djanibek</h5>
                                            <span class="small text-thm">Super Photoshop</span>
                                            <p> Албатта мен хам Супер Фотошопни сотиб олганман хакикатдан хам 0дан
                                                бошлаётган одам урганиб кетиш даражаси юкори сабаби хар бир термин, хар
                                                бир укуналар ва уларнинг нима иш килиши, кандай вактда ишлатилиши тулик
                                                тушунтирилган! Сардор Кадировнинг хар бир дарслиги менга мотивация
                                                беради...</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Abdiraxmatov Muhammadali</h5>
                                            <span class="small text-thm">Super Photoshop</span>
                                            <p> Sardor aka darslaringiz haqiqatda juda sifatli,tushunarli . kotta
                                                raxmat. Bergan bilimingizga rozi bo'ling. </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Khasanov Sardor</h5>
                                            <span class="small text-thm">Super Photoshop</span>
                                            <p> sardor aka nomer 1. judayam tushunarli darslar</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Sarimsakov Saidbek</h5>
                                            <span class="small text-thm">StartDroid - Android ilovalar ishlab chiqish
                                                kursi</span>
                                            <p> Men Bu dasturchi bilan Hamkorlik qilganman, Mobile ilovalarini bekendini
                                                yozganman. Men birga ishlagan Mobil dasturchilar ichida eng tajribalisi,
                                                Kurslari ham ishonamanki Tushunarli va Mukammal.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Tilepov Asadbek</h5>
                                            <span class="small text-thm">Super Photoshop</span>
                                            <p> Ajoyib. Men bu video darslikni sotib oldim va men buning uchun
                                                afsuslanmayman. Barchaga tavsiya qilaman :)</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Sarimsakov Saidbek</h5>
                                            <span class="small text-thm">StartDroid - Android ilovalar ishlab chiqish
                                                kursi</span>
                                            <p> Juda ham tushunarli va zamonaviy uslubda o'tilgan. Super!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Muhammadjonov Jahongir</h5>
                                            <span class="small text-thm">StartDroid - Android ilovalar ishlab chiqish
                                                kursi</span>
                                            <p> Darslar tushunishga ancha oson</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Nurillayev sherzod</h5>
                                            <span class="small text-thm">YII2 frameworki</span>
                                            <p> Assalomu aleykum, virtualdars jamoasi va foydalanuvchilariga! Men shu
                                                platformadan PHP va Yii2 framework darslarini sotib oldim va o'rgandim.
                                                Albatta boshqa manbalardan ham ko'p foydalanganman. Lekin shu
                                                platformadagi darslarni men uchun foydasi katta boldi, dars muallifi
                                                Ahmadjon aka Hashimovga minnatdorchilik bildiraman darslar judayam
                                                tushunarli! Qisqasi shu darslarni o'rganib Yii2 framework boyicha
                                                ishlashni boshladim, menimcha sizlarga ham foydasi tegadi ushbu
                                                kurslarni. Platforma a'zolariga omad!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Muhammadjonov Jahongir</h5>
                                            <span class="small text-thm">StartDroid - Android ilovalar ishlab chiqish
                                                kursi</span>
                                            <p> Barchaga tavsiya qilaman zo'r kurs!
                                                Ollohim ilmingizni ziyoda qilsin!!!</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonial_item">
                                        <div class="details">
                                            <h5>Urokov Sherbek</h5>
                                            <span class="small text-thm">StartDroid - Android ilovalar ishlab chiqish
                                                kursi</span>
                                            <p> Metodika jihatdan ham ustozlik jihatdan ham hamma jihatdan alo darajada
                                                qilingan.</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

@endsection
