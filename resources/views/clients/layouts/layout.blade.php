<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- boxicons -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- My CSS -->
    <link rel="stylesheet" href="/client/cards.css">
	<link rel="stylesheet" href="/client/style.css">


	<title>Shaxsiy kabinet</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="/" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Aosisiyga qaytish</span>
		</a>
		<ul class="side-menu top">
			<li class="@yield('dashboard')">
				<a href="{{ route('client.dashboard') }}">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Ma'lumotlar</span>
				</a>
			</li>
			<li class="@yield('my_courses')"">
				<a href="{{ route('client.my_courses') }}">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Kurslarim</span>
				</a>
			</li>

            <li>
				<a href="#">

				</a>
			</li>

            <li class="@yield('edit')">
				<a href="{{ route('client.edit') }}">
					<i class='bx bxs-cog' ></i>
					<span class="text">Tahrirlash</span>
				</a>
			</li>

			<li class="@yield('edit_password')">
				<a href="{{ route('client.edit.password') }}">
					<i class='bx bxs-cog' ></i>
					<span class="text">Parolni o'zgartirish</span>
				</a>
			</li>

		</ul>
		<ul class="side-menu">

			<li class="logout text">
                <form action="{{ route('client.logout') }}" method="POST">
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
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link"></a>
			<form action="{{ route('search') }}" method="get">
                @csrf
				<div class="form-input search-btn">
					<input type="search"  name="search" placeholder="Kurs izlash">
					<button type="submit" class=""><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>

			<a href="#" class="profile">
				<img src="/client/img/{{ Auth::user()->img }}">
			</a>
		</nav>
		<!-- NAVBAR -->

		@yield('content')
	</section>
	<!-- CONTENT -->


	<script src="/client/script.js"></script>
</body>

</html>
