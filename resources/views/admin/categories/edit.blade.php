@extends('admin.layouts.layout')

@section('categories')
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
                        <a class="create__btn" href="{{route('categories.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('categories.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Ism familya : </strong>
                        <input type="text" name="name" value="{{$category->name}}" class="form-control"> <br>

                        <strong> Rasmi :</strong>

                        <input type="file" name="img" class="form-control"> <br>
                        <img src="/images/courses/{{ $category->img }}" alt="" width="100px">

                        <input type="submit" value="O'zgartirish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
