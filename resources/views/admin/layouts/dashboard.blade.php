@extends('admin.layouts.layout')

@section('home')
active
@endsection

@section('content')

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>MOTIKURS Admin </h1>
					<ul class="breadcrumb">
						<li>
							<a href="{{route('admin.home')}}">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="{{route('admin.home')}}">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>562</h3>
						<p>O'quvchilar</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-teacher' ></i>
					<span class="text">
						<h3>12</h3>
						<p>Mentorlar</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>641</h3>
						<p>Arizalar</p>
					</span>
				</li>
			</ul>
		</main>
		<!-- MAIN -->


@endsection
