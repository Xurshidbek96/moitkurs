@extends('admin.layouts.layout')

@section('content')

@section('teachers')
active
@endsection

<!-- MAIN -->
		<main>


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

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Mentorlar</h3>
						<a class="create__btn" href="{{route('teachers.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>


					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Login</th>
                                <th>Telefoni</th>
								<th>Kursi</th>


								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($teacher) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($teacher as $p)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$p->name}}</td>
                                    <td>{{ $p->phone }}</td>
                                    <td>{{ $p->course->name ?? 'Kiritilmagan' }}</td>
									<td>
										<form action="{{ route('teachers.destroy',$p->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('teachers.show',$p->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
						                    <a class="btn btn-primary" href="{{ route('teachers.edit',$p->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$teacher->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
