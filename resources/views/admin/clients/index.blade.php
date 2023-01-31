@extends('admin.layouts.layout')

@section('content')

@section('clients')
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
						<h3> O'quvchilar </h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Login</th>
                                <th>Telefoni</th>
								<th>Ma'lumoti</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($clients) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($clients as $client)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$client->name}}</td>
                                    <td>{{$client->phone}}</td>
                                    <td>{{ $client->level_edu }}</td>

									<td>
										<form action="{{ route('clients.destroy',$client->id) }}" method="POST">


						                    <a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

						                    <button type="submit" class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz')"><ion-icon name="trash-outline"></ion-icon></button>

					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$clients->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
