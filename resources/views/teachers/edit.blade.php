@extends('teachers.layouts.layout')

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
                        <h3>O'zgartirish</h3>
                        <a class="create__btn" href="{{route('teacher.dashboard')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('teacher.update', $teacher->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Ism Familyasi :</strong>
                        <input type="text" name="name" value="{{ $teacher->name }}" class="form-control"> <br>


                        <strong> Telefon raqam :</strong>
                        <input type="text" name="phone" value="{{ $teacher->phone }}" class="form-control"> <br>

                        <strong> Ma'lumot :</strong>
                        <input type="text" name="level_edu" value="{{ $teacher->level_edu }}" class="form-control"> <br>

                        <strong> Kasb :</strong>
                        <input type="text" name="positsion" value="{{ $teacher->positsion }}" class="form-control"> <br>

                        <strong> Manzil :</strong>
                        <input type="text" name="adress" value="{{ $teacher->adress }}" class="form-control"> <br>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $teacher->email }}" required />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <strong> Rasm(png yoki jpg) :</strong>
                        <input type="file" name="img" class="form-control"> <br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
