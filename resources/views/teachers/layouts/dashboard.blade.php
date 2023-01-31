@extends('teachers.layouts.layout')

@section('home')
active
@endsection

@section('content')

		<!-- MAIN -->
		<main>
            @if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    		@endif
			<div class="head-title">
				<div class="left">
					<h1>Shaxsiy ma'lumotlar</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Ma'lumotlar</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Asosiy</a>
						</li>
					</ul>
				</div>

			</div>


			<div class="table-data">
				<div class="order">

					<table>
						<tbody>

							<tr>
								<td>
									<p>F.I.SH(login) : </p>
								</td>
								<td>{{ $teacher->name }}</td>
							</tr>

							<tr>
								<td>
									<p>Telefon raqam : </p>
								</td>
								<td>{{ $teacher->phone }}</td>
							</tr>

                            <tr>
								<td>
									<p>Kursim : </p>
								</td>
								<td>{{ $teacher->course->name ?? 'Biriktirilmagan' }}</td>
							</tr>

							<tr>
								<td>
									<p>Email : </p>
								</td>
								<td>{{ $teacher->email }}</td>
							</tr>

							<tr>
								<td>
									<p>Kasbi : </p>
								</td>
								<td>{{ $teacher->positsion }}</td>
							</tr>

							<tr>
								<td>
									<p>Ma'lumoti : </p>
								</td>
								<td>{{ $teacher->level_edu }}</td>
							</tr>

							<tr>
								<td>
									<p>Manzil : </p>
								</td>
								<td>{{ $teacher->adress }}</td>
							</tr>

							<tr>
								<td>Rasm : </p>
								</td>
								<td><img src="/admin/images/{{ $teacher->img }}" alt=""></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</main>
		<!-- MAIN -->


@endsection
