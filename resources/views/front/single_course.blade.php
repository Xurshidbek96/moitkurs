@extends('layouts.layout')

@section('content')

<!-- Inner Page Breadcrumb -->
@if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    @endif
    @if ($message = Session::get('danger'))
        		<div class="alert alert-danger">
            		<p>{{ $message }}</p>
        		</div>
    @endif


<section class="inner_page_breadcrumb csv2" style="background: url('/images/courses/')">
    <div class="container">
        <div class="row">
            <div class="col-xl-9">
                <div class="breadcrumb_content">
                    <div class="cs_row_one csv2">
                        <div class="cs_ins_container">
                            <div class="cs_instructor">
                                <ul class="cs_instrct_list float-left mb0">
                                    <li class="list-inline-item"><img class="thumb"
                                            src="/admin/images/{{ $teacher->img }}"
                                            alt="" style="border-radius: 100%">
                                    </li>
                                    <li class="list-inline-item"><a class="color-white" href="#">
                                            {{ $teacher->name }} </a></li>

                                </ul>


                            </div>
                            <h3 class="cs_title color-white">
                                {{ $course->name }} </h3>

                            <ul class="cs_review_seller">

                                <li class="list-inline-item" style="display:none">
                                    <a class="color-white" href="#">
                                        <span>Best Seller</span>
                                    </a>
                                </li>

                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                <li class="list-inline-item">

                                </li>
                            </ul>

                            <ul class="cs_review_enroll">
                                <li class="list-inline-item"><a class="color-white" href="#"><span
                                            class="flaticon-profile"></span> {{ $course->members }} O'quvchilar </a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team Members -->
<section class="course-single2 pb40">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8 col-xl-9">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="courses_single_container">

                            <div class="cs_rwo_tabs csv2">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="Overview-tab" data-toggle="tab"
                                            href="#description" role="tab" aria-controls="Overview"
                                            aria-selected="true">
                                            Kurs haqida </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" id="course-tab" data-toggle="tab" href="#lessons"
                                            role="tab" aria-controls="course" aria-selected="false">
                                            Mavzular </a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">

                                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                                        aria-labelledby="Overview-tab">
                                        <div class="cs_row_two csv2">
                                            <div class="cs_overview">
                                                <div>{!!  $course->about  !!}</div>



                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="lessons" role="tabpanel"
                                        aria-labelledby="review-tab">
                                        <div class="cs_row_three csv2">
                                            <div class="course_content">
                                                <div class="cc_headers">
                                                    <h4 class="title">Mavzular</h4>
                                                    <ul class="course_schdule float-right">
                                                        <li class="list-inline-item">
                                                            <a href="#">
                                                                Mavzular soni: <b>{{ $t }} ta</b>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="#">
                                                                Davomiyligi: <b>{{ $course->lenth }}</b>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <br>

                                                <div class="details">
                                                    <div id="accordion" class="panel-group cc_tab">
                                                        <div class="panel">

                                                            <div id="section-0"
                                                                class="panel-collapse collapse show">
                                                                <div class="panel-body">
                                                                    <ul class="cs_list mb0">
                                                                        @foreach ($textbooks as $textbook)
                                                                            <li>
                                                                                <span
                                                                                    class="flaticon-play-button-1 icon"></span>

                                                                                <span class="lesson-title"> {{ ++$loop->index }}
                                                                                    {{ $textbook->name }}</span>

                                                                            </li>
                                                                        @endforeach


                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-xl-3">


                <div class="feature_course_widget csv1" style="padding-top: 0">

                    <img src="uploads/course/120/thumb-62bfd2972c2f3.jpg" alt="">

                    <ul class="list-group">

                        <li class="">
                            <span>
                                <i class="fa fa-list-ol"></i> Mavzular soni:
                            </span>
                            <span class="float-right">
                                <b>{{ $t }} </b>
                            </span>
                        </li>


                        <li class="">
                            <span>
                                <i class=" flaticon-play-button-1"></i> Davomiyligi:
                            </span>
                            <span class="float-right">
                                <b>{{ $course->lenth }} </b>
                            </span>
                        </li>


                        <li class="">
                            <span>
                                <i class="fa fa-language"></i> Til:
                            </span>
                            <span class="float-right">
                                <b>{{ $course->language }} </b>
                            </span>
                        </li>


                        <li class="">
                            <span>
                                <i class="flaticon-flash"></i> Daraja:
                            </span>
                            <span class="float-right">
                                <b>{{ $course->deegre }} </b>
                            </span>
                        </li>


                        <li class="">
                            <span>
                                <i class="flaticon-user"></i> O'qituvchi:
                            </span>
                            <span class="float-right">
                                <b>{{ $teacher->name }} </b>
                            </span>
                        </li>

                        {{-- <li class="">
                            <span>
                                <i class="flaticon-key-1"></i> A'zolikning davomiyligi:
                            </span>
                            <span class="float-right">
                                <b>1 yil </b>
                            </span>
                        </li> --}}

                        <li class="">
                            <span>
                                <i class="fa fa-users"></i> O'quvchilar:
                            </span>
                            <span class="float-right">
                                <b>{{ $course->members }} </b>
                            </span>
                        </li>
                    </ul>

                    <div class="" style="display: flex; justify-content: space-around">

                        @if(auth()->guard('client')->check())
                            @if($members != 0)
                                <a class="cart_btnss" href="{{ route('full_course',[1, $course->id]) }}"
                                style="width: 100%; text-align: center;" data-pjax="0">Kursga kirish</a>
                            @elseif($member != 0)
                                <a class="cart_btnss" href="#"
                                style="width: 100%; text-align: center;" data-pjax="0">Ariza yuborilgan</a>
                            @else
                            <a class="cart_btnss" href="{{ route('complate_course', [Auth::guard('client')->id(),$course->id]) }}"
                                style="width: 100%; text-align: center;" data-pjax="0">A'zo bo'lish</a>

                            @endif
                        @else
                            <a class="cart_btnss" href="/client/register/"
                            style="width: 100%; text-align: center;" data-pjax="0">A'zo bo'lish</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h3 class="r_course_title">Sizga yoqishi mumkin bo'lgan aloqador kurslar</h3>
            </div>

            @foreach($courses as $course)
                <div class="col-lg-6 col-xl-3">

                    <div class="top_courses">
                        <div class="thumb">
                            <img class="img-whp" src="/images/courses/{{ $course->img1 }}"
                                alt="TOP Framework - Laravel"
                                style="height: 200px; width: 100%; object-fit: cover">
                            <a href="{{ route('single_course', $course->id) }}">
                                <div class="overlay">

                                    <span class="tc_preview_course"
                                        href="{{ route('single_course', $course->id) }}" data-pjax="0">Kurs haqida
                                        batafsil</span>
                                </div>
                            </a>
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <p align="center">{{ $course->teacher->name ?? "Yangi kurs"}}</p>
                                <h5 style="min-height: 76px" align="center">
                                    <a href="{{ route('single_course', $course->id) }}" data-pjax="0">
                                        {{ $course->name }} </a>
                                </h5>
                                <ul class="tc_review"
                                    style="min-height: 25px; display: flex; justify-content: center">

                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a><i class="fa fa-star"></i></a></li>


                                </ul>
                            </div>
                            <div class="tc_footer">
                                <ul class="tc_meta float-left">

                                    <li class="list-inline-item"><a href="{{ route('single_course', $course->id) }}"><i
                                        class="flaticon-profile"></i> {{ $course->members }} </a></li>

                                    <li class="list-inline-item"><a href="{{ route('single_course', $course->id) }}"></a>
                                    </li>
                                </ul>
                                <div class="tc_price float-right">
                                    <a href="{{ route('single_course', $course->id) }}" class="tc_price float-right">A'zo bo'lish</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach



        </div>
    </div>
</section>


@endsection
