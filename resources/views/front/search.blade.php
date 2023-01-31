@extends('layouts.layout')


@section('content')

<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb" style="background: url('uploads/files/site/inner-pagebg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="breadcrumb_content">
                    <h4 class="breadcrumb_title">
                        Kurslar </h4>
                    <nav aria-label="breadcrumb">
                        <ol id="w2" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Asosiy</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kurslar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-team pb40">
    <div class="container">
        <div class="row">
            @if($courses->isNotEmpty())
            <div class="col-md-12 col-lg-8 col-xl-9">

                <div class="row" id="courses-list-container">
                    @foreach ($courses as $course)
                        <div class="col-lg-6 col-xl-4">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="/images/courses/{{ $course->img1 }}"
                                        alt="TOP Framework - Laravel"
                                        style="height: 200px; width: 100%; object-fit: cover">
                                    <a href="{{ route('single_course', $course->id) }}">
                                        <div class="overlay">

                                            <span class="tc_preview_course"
                                                href="{{ route('single_course', $course->id) }}l" data-pjax="0">Kurs haqida
                                                batafsil</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p align="center">{{ $course->teacher->name ?? 'Yangi kurs' }}</p>
                                        <h5 style="min-height: 76px" align="center">
                                            <a href="{{ route('single_course', $course->id) }}">
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

                                            <li class="list-inline-item"><a href="single_course.html"><i
                                                class="flaticon-profile"></i></a></li>

                                            <li class="list-inline-item"><a href="{{ route('single_course', $course->id) }}">{{ $course->members }}</a>
                                            </li>
                                        </ul>
                                        <div class="tc_price float-right">
                                            A'zo bo'lish </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-12 pagination-links-container">
                        <div id="w0" class="mbp_pagination">

                        </div>
                    </div>

                    {{ $courses->links() }}
                </div>
            </div>
            @else
            <div class="col-lg-12 pagination-links-container">
                <div id="w0" class="mbp_pagination">
                    So'rovingiz bo'yicha kurslar topilmadi
                </div>
            </div>
            @endif


        </div>
    </div>
</section>

<input type="hidden" id="course-all-base-url" value="/course/all">

@endsection
