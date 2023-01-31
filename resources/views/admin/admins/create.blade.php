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
                        <h3>Yangi Admin qo'shish</h3>
                        <a class="create__btn" href="{{route('admins.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('admins.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong> Ism Familyasi :</strong>
                        <input type="text" name="name" class="form-control"> <br>

                        <strong> Telefon raqami :</strong>
                        <input type="text" name="phone" class="form-control"> <br>

                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />

                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="hidden"
                                            name="password" value="11111111"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            {{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="hidden"
                                            name="password_confirmation" value="11111111" required />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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
