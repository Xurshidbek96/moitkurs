@extends('clients.layouts.layout')

@section('my_courses', 'active')

@section('content')

<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Mening kurslarim</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="">Kurslarim</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="/client/dashboard">Ma'lumotlar</a>
                </li>
            </ul>
        </div>

    </div>

    <!--   -->
    <div class="row justify-content-start align-items-start" id="Cards-basis">
        <!--  -->
        @foreach ($members as $member)
            @if($member->client_id == Auth::user()->id && $member->status == 1 )
                @foreach($courses as $course)
                    @if($member->course_id == $course->id)
                        <div class="col-lg-6 col-xl-3 " id="Cards-one" >
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="/images/courses/{{ $course->img1 }}"
                                        alt="TOP Framework - Laravel"
                                        style="height: 200px; width: 100% ; object-fit: cover">
                                    <a href="#">
                                        <div class="overlay">
                                            <span class="tc_preview_course"
                                                href="#" data-pjax="0"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p align="center">{{ $course->teacher->name ?? 'Yangi' }}</p>
                                        <h5 style="min-height: 76px" align="center">
                                            <a href="#" data-pjax="0">
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
                                            <li class="list-inline-item">
                                                 <i class='bx bxs-user bx-sm' style="color:gray ;"></i></a></li>
                                            <li class="list-inline-item"> {{ $course->members }}
                                            </li>
                                        </ul>
                                        <div class="tc_price float-right">
                                            <a href="{{ route('full_course', [1, $course->id]) }}"> Kursga kirish </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach

        <!--  -->

    </div>
    <!--  -->


</main>
<!-- MAIN -->

@endsection
