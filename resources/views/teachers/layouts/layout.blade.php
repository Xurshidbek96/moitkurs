<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('/admin/style.css')}}">

	<title>Mentor kabinet</title>
</head>
<body>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="{{route('teacher.dashboard')}}" class="brand">
			<i class='bx bxs-user'></i>
			<span class="text">Mentor</span>
		</a>
		<ul class="side-menu top">

			<li class="@yield('members')">
				<a href="{{ route('new_members') }}">
					<i class='bx bxs-user' ></i>
					<span class="text">O'quchilar</span>
				</a>
			</li>

            <li class="">
				<a href="">

					<span class="text"></span>
				</a>
			</li>

            <li class="@yield('textbooks')">
				<a href="{{ route('textbooks.index') }}">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Yangi mavzu qo'shish</span>
				</a>
			</li>

		</ul>
		<ul class="side-menu">

            <li class="@yield('edit')">
				<a href="{{ route('teacher.edit') }}">
					<i class='bx bxs-cog' ></i>
					<span class="text">Ma'lumotlarni tahrirlash</span>
				</a>
			</li>

            <li class="@yield('edit_password')">
				<a href="{{ route('teacher.edit.password') }}">
					<i class='bx bxs-cog' ></i>
					<span class="text">Parolni o'zgartirish</span>
				</a>
			</li>

			<li class="logout text">
                <form action="{{ route('teacher.logout') }}" method="POST">
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
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
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
