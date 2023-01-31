<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- My CSS -->
	<link rel="stylesheet" href="/client/style.css">
	<link rel="stylesheet" href="/client/cards.css">

	<title>Shaxsiy kabinet</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="/client/dashboard" class="brand">
			<i class='bx bxs-user'></i>
			<span class="text"> Profilga qaytish </span>
		</a>
		<ul class="side-menu top">

            @foreach($textbooks as $tb)
                <li class="@yield('{{ $tb->id }}')">
                    <a href="{{ route('full_course', [$tb->id, $course_id]) }}">
                        <i class='bx bxs-dashboard'></i>
                        <span class="text">{{ ++$loop->index }}. {{ $tb->name }}</span>
                    </a>
                </li>
            @endforeach

		</ul>
		<ul class="side-menu">

		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link"></a>
			<form action="#">
				<div class="form-input search-btn">
					<input type="search" placeholder="Kurs izlash">
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
