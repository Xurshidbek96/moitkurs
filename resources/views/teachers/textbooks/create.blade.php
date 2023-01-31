@extends('teachers.layouts.layout')

@section('textbooks')
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
                        <h3>Yangi kategoriya qo'shish</h3>
                        <a class="create__btn" href="{{route('textbooks.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('textbooks.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="course_id" value="{{ Auth::user()->course_id }}">

                        <strong>Mavzu nomi :</strong>
                        <input type="text" name="name" class="form-control"> <br>

                        <strong>Video linki :</strong>
                        <input type="text" name="video_link" class="form-control"> <br>

                        <strong for="mytextarea">Nazariy ma'lumotlar </strong>
                        <textarea id="mytextarea" name="info"></textarea>

                        <strong for="mytextarea1">Vazifa</strong>
                        <textarea id="mytextarea1" name="task"></textarea>

                        <input type="submit" value="Qo`shish">

                        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>
                            tinymce.init({
                              selector: '#mytextarea'
                            });
                            tinymce.init({
                              selector: '#mytextarea1'
                            });
                          </script>

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->

@endsection
