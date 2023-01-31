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
                        <h3>O'zgartirish</h3>
                        <a class="create__btn" href="{{route('textbooks.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <form class="create__inputs" action="{{route('textbooks.update', $textbook->id)}}" method="POST">
                        @csrf
                        @method('PUT')

                        <strong>Mavzu nomi :</strong>
                        <input type="text" name="name" value="{{ $textbook->name }}" class="form-control"> <br>

                        <strong>Video linki :</strong>
                        <input type="text" name="video_link" value="{{ $textbook->video_link }}" class="form-control"> <br>

                        <div>
                           {!! $textbook->video_link !!}
                        </div>

                        <strong for="mytextarea">Nazariy ma'lumotlar </strong>
                        <textarea id="mytextarea" name="info" value="{{ $textbook->info }}">{{ old('info') ? old('info') : $textbook->info }}</textarea>

                        <strong for="mytextarea1">Vazifa</strong>
                        <textarea id="mytextarea1" name="task" value="{{ $textbook->task }}">{{ old('task') ? old('task') : $textbook->task }}</textarea>

                        <input type="submit" value="O'zgartirish">

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
