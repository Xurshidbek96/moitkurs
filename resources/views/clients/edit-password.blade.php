@extends('clients.layouts.layout')

@section('edit_password')
    active
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <!-- MAIN -->
        <main>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Parol O'zgartirish</h3>
                        <a class="create__btn" href="{{route('client.dashboard')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('client.update.password', $client->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Password -->

                        <strong> Yangi parolni kiriting :</strong>
                        <input id="password" type="password" name="password" autocomplete="new-password" class="form-control" required> <br>

                        <!-- Confirm Password -->

                        <strong> Parolni takrorlang :</strong>
                        <input id="password" type="password" name="password_confirmation" class="form-control" required> <br>

                        <input type="submit" value="O`zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
