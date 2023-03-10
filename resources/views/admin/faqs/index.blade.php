@extends('admin.layouts.layout')

@section('content')

@section('faqs')
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
						<h3>Savol-javoblar</h3>
						<a class="create__btn" href="{{route('faqs.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>

					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Savol</th>
								<th>Javobi</th>
								<th>Vaqti</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($faqs) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($faqs as $p)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$p->quesssion}}</td>
									<td>{{$p->answer}}</td>
                                    <td>{{$p->created_at}}</td>
									<td>
										<form action="{{ route('faqs.destroy',$p->id) }}" method="POST">

						                    <a class="btn btn-primary" href="{{ route('faqs.edit',$p->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz ?')"><ion-icon name="trash-outline"></ion-icon></button>
					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$faqs->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
