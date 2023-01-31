@extends('admin.layouts.layout')

@section('content')

@section('categories')
active
@endsection

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
						<h3>Kategoriyalar</h3>
						<a class="create__btn" href="{{route('categories.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>

					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Nomi</th>
								<th>Rasmi</th>
								<th>Vaqti</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($category) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($category as $p)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$p->name}}</td>
									<td><img src="/images/courses/{{ $p->img }}"></td>
                                    <td>{{$p->created_at}}</td>
									<td>
										<form action="{{ route('categories.destroy',$p->id) }}" method="POST">

						                    <a class="btn btn-primary" href="{{ route('categories.edit',$p->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz ?')"><ion-icon name="trash-outline"></ion-icon></button>
					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$category->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
