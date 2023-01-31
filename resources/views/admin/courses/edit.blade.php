@extends('admin.layouts.layout')

@section('courses')
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
                        <a class="create__btn" href="{{route('courses.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('courses.update', $course->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <strong> Kurs nomi :</strong>
                        <input type="text" name="name" value="{{ $course->name }}" class="form-control"> <br>

                        <strong> Kategoriyasi :</strong>
                        <select name="category_id" id="" class="form-control">
                            <option value="{{ $course->category_id }}"> {{ $course->category->name }}</option>
                            @foreach ($category as $ct)
                                @if($ct->id != $course->category->id)
                                    <option value="{{ $ct->id }}">{{ $ct->name }}</option>
                                @endif
                            @endforeach
                        </select><br>

                        <strong> Qisqa ta'rifi (banner uchun) :</strong>
                        <input type="text" name="title" value="{{ $course->title }}" class="form-control"> <br>

                        <label for="mytextarea">Kurs haqida (to'liq)</label>
                        <textarea id="mytextarea" name="about" value="{{ $course->about }}">{{ old('about') ? old('about') : $course->about }}</textarea>

                        <strong> Kurs davomiyligi :</strong>
                        <input type="text" name="lenth" value="{{ $course->lenth }}" class="form-control"> <br>

                        <strong> Kurs o'tiladigan tili :</strong>
                        <input type="text" name="language" value="{{ $course->language }}" class="form-control"> <br>

                        <strong> Daraja :</strong>
                        <input type="text" name="deegre" value="{{ $course->deegre }}" class="form-control"> <br>
                        <strong> O'quvchilar soni :</strong>

                        <input type="number" name="members" value="{{ $course->members }}" class="form-control"> <br>

                        <strong> A'zolik davomiyligi :</strong>
                        <input type="text" name="duration" value="{{ $course->duration }}" class="form-control"> <br>

                        <strong> Kurs texnalogiyasi rasmi :</strong>
                        <input type="file" name="img1" class="form-control"> <br>

                        <strong> Banner uchun rasmi :</strong>
                        <input type="file" name="img2" class="form-control"> <br>

                        <input type="submit" value="Qo`shish">

                        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>
                        tinymce.init({
                            selector: '#mytextarea'
                        });
                        </script>

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
