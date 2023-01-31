@extends('teachers.layouts.layout')

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
                        <a class="create__btn" href="{{route('teacher.dashboard')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('teacher.update.password', $teacher->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            autocomplete="new-password" required />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <input type="submit" value="O`zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
