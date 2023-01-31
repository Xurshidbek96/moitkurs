@extends('clients.layouts.main')

@section('{{ $textbook->id }}')
active
@endsection

@section('content')
		<!-- MAIN -->
        @if( isset($textbook->name) )
            <main>
                <div class="head-title">
                    <div class="left">
                        <h1>1. {{ $textbook->name }}</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="#">{{ $textbook->course->name ?? '' }}</a>
                            </li>
                            <li><i class='bx bx-chevron-right'></i></li>
                            <li>
                                <a class="" href="#">Kursi</a>
                            </li>
                        </ul>
                    </div>

                </div>


                <div class="table-data">
                    <div class="order">
                        <video src=""></video>
                        {!! $textbook->video_link !!}

                    </div>
                </div>

                <div class="table-data">
                    <div class="order">
                        <h3 class="text-info" >Nazariy qism</h3>
                        {!!  $textbook->info  !!}
                    </div>
                </div>

                <div class="table-data">
                    <div class="order">
                        <h3 class="text-info">Vazifa</h3>
                        {!!  $textbook->task  !!}
                    </div>
                </div>
            </main>
        @else
        <div class="head-title">
            <div class="center" style="margin-left: 150px; margin-top:50px">
                <h3></h3>

            </div>

        </div>
        @endif
		<!-- MAIN -->
@endsection

