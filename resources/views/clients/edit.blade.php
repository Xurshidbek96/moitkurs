@extends('clients.layouts.layout')

@section('edit')
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
                        <h3>Shaxsiy ma'lumotlarni o'zgartirish</h3>
                        <a class="create__btn" href="{{route('teacher.dashboard')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="edit__inputs" action="{{route('client.update', $client->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Ism Familya :</strong>
                        <input type="text" name="name" value="{{ $client->name }}" class="form-control"> <br>

                        <strong> Telefon raqam :</strong>
                        <input type="text" name="phone" value="{{ $client->phone }}" class="form-control"> <br>

                        <strong> Email :</strong>
                        <input id="email" type="email" name="email" value="{{ $client->email }}" class="form-control" required> <br>

                        <strong> Ta'lim darajangiz :</strong>
                        <input type="text" name="level_edu" value="{{ $client->level_edu }}" class="form-control"> <br>

                        <strong> Manzil :</strong>
                        <input type="text" name="adress" value="{{ $client->adress }}" class="form-control"> <br>

                        <strong> Bio (Qisqacha) :</strong>
                        <input type="text" name="bio" value="{{ $client->bio }}" class="form-control"> <br>


                        <strong> Rasmimgiz(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <strong> Hujjatingiz :</strong>
                        <input type="file" name="pdf" class="form-control"> <br>

                        <input class="sub__btn" type="submit" value="O`zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
