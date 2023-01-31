<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('/admin/style.css')}}">



	<title>Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="{{route('admin.home')}}" class="brand">
			<i class='bx bxs-user'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">

            <li class="@yield('admins')">
				<a href="{{ route('admins.index') }}">
					<i class='bx bxs-user' ></i>
					<span class="text">Adminlar</span>
				</a>
			</li>

			<li class="@yield('clients')">
				<a href="{{ route('clients.index') }}">
					<i class='bx bxs-user' ></i>
					<span class="text">O'quvchilar</span>
				</a>
			</li>
			<li class="@yield('members')">
				<a href="{{ route('members_new') }}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Arizalar</span>
				</a>
			</li>

            <li class="">
				<a href="">

					<span class="text"></span>
				</a>
			</li>

            <li class="@yield('categories')">
				<a href="{{ route('categories.index') }}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Kategoriya</span>
				</a>
			</li>

            <li class="@yield('courses')">
				<a href="{{ route('courses.index') }}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Kurslar</span>
				</a>
			</li>

            <li class="@yield('teachers')">
				<a href="{{ route('teachers.index') }}">
					<i class='bx bxs-user' ></i>
					<span class="text">Mentorlar</span>
				</a>
			</li>

            <li class="">
				<a href="">

					<span class="text"></span>
				</a>
			</li>

            <li class="@yield('faqs')">
				<a href="{{ route('faqs.index') }}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Savol javob</span>
				</a>
			</li>




		</ul>
		<ul class="side-menu">
            <li class="logout text">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <i class='bx bxs-log-out-circle' ></i>
                    <button>Chiqish</button>
                </form>
            </li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link"></a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="btn btn-danger"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
		<!-- NAVBAR -->
		@yield('content')
	</section>
	<!-- CONTENT -->

	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>;

	<script src="{{asset('/admin/script.js')}}"></script>
</body>
</html>
