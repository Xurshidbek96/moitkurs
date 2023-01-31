@extends('admin.layouts.layout')

@section('admins')
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
                        <h3>O'zgartirish</h3>
                        <a class="create__btn" href="{{route('admins.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>
                    </div>

                    <div class="head">
                        <a href="{{ route('edit.admin.password', $admin->id) }}">Parolni o'zgartirish</a>
                    </div>

                    <form class="create__inputs" action="{{route('admins.update', $admin->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Ism Familyasi :</strong>
                        <input type="text" name="name" value="{{$admin->name}}" class="form-control"> <br>

                        <strong> Telefon raqami :</strong>
                        <input type="text" name="phone" value="{{$admin->phone}}" class="form-control"> <br>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$admin->email}}"  required />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>
                        <img src="/admin/images/{{$admin->img}}" alt="">

                        <input type="submit" value="O`zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
