@extends('teachers.layouts.layout')

@section('content')

@section('members')
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
								<th>F.I.SH</th>
                                <th>Telefoni</th>
								<th>Ma'lumoti</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($members) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($members as $member)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$member->client->name ?? ''}}</td>
                                    <td>{{$member->client->phone}}</td>
                                    <td>{{ $member->client->level_edu ?? '' }}</td>

									<td>
										<form action="#" method="POST">


						                    <a class="btn btn-primary" href="{{ route('show_new_members', $member->id) }}"><ion-icon name="eye-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')



					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$members->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
