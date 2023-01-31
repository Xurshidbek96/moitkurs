@extends('teachers.layouts.layout')

@section('textbooks')
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

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Mavzular</h3>
						<a class="create__btn" href="{{route('textbooks.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>

					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Mavzu nomi</th>
								{{-- <th>video</th> --}}
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($textbook) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($textbook as $p)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$p->name}}</td>
									{{-- <td style="width: 50px !important">{!! $p->video_link !!}</td> --}}

									<td>
										<form action="{{ route('textbooks.destroy',$p->id) }}" method="POST">

						                    <a class="btn btn-primary" href="{{ route('textbooks.edit',$p->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz ?')"><ion-icon name="trash-outline"></ion-icon></button>
					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$textbook->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
