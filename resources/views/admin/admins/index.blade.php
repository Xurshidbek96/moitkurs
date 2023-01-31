@extends('admin.layouts.layout')

@section('content')

@section('admins')
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
						<h3>Adminlar</h3>
                        @if(Auth::user()->id == 1)
						    <a class="create__btn" href="{{route('admins.create')}}"> <i class='bx bxs-folder-plus'></i>Yaratish</a>
                        @endif

					</div>
					<table>
						<thead>
							<tr>
								<th>№</th>
								<th>Login</th>
								<th>Parol</th>
                                <th>Telefon</th>

								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if (count($admin) == 0)
					          <tr>
					            <td colspan="5" class="h5 text-center text-muted">Ma'lumot kiritilmagan</td>
					          </tr>
					        @endif
					        @foreach($admin as $p)
								<tr>
									<td>{{++$loop->index}}</td>
									<td>{{$p->name}}</td>
									<td><img src="/admin/images/{{ $p->img }}" width="100px"></td>
                                    <td>{{$p->phone}}</td>
									<td>
										<form action="{{ route('admins.destroy',$p->id) }}" method="POST">

                                            <a class="btn btn-primary" href="{{ route('admins.show',$p->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
						                    <a class="btn btn-primary" href="{{ route('admins.edit',$p->id) }}"><ion-icon name="create-outline"></ion-icon></a>

						                    @csrf
						                    @method('DELETE')

                                            @if(Auth::user()->id == 1)
						                        <button type="submit" class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz')"><ion-icon name="trash-outline"></ion-icon></button>
                                            @endif
					                	</form>
					            	</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{$admin->links()}}
				</div>

			</div>
		</main>
		<!-- MAIN -->

@endsection
