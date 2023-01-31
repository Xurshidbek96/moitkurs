@extends('admin.layouts.layout')

@section('clients')
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
                        <h3>Ma'lumotlari</h3>
                        <a class="create__btn" href="{{route('clients.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <table>

                        <tbody>

                            <tr>
                                <td>
                                    <p>Ism Familya : </p>
                                </td>
                                <td>{{ $client->name }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Telefon raqam : </p>
                                </td>
                                <td>{{ $client->phone }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Email : </p>
                                </td>
                                <td>{{ $client->email }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ta'lim darajasi : </p>
                                </td>
                                <td>{{ $client->level_edu }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Manzil : </p>
                                </td>
                                <td>{{ $client->adress }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Bio : </p>
                                </td>
                                <td>{{ $client->bio }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Hujjati : </p>
                                </td>
                                <td><a href="/client/files/{{ $client->pdf }}" download="">Yuklash</a></td>
                            </tr>

                            <tr>
                                <td> </p>
                                </td>
                                <img width="150px" src="/client/img/{{ $client->img }}" alt="">
                            </tr>

                        </tbody>
                    </table>

                    <form class="create__inputs" action="{{route('clients.update', $client->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong> Arizasi xolati :</strong>

                        <select name="status" class="form-control">
                            <option value="{{ $client->status }}">
                                @if($client->status == 2)
                                    <b>Tasdiqlangan</b>
                            </option>
                            <option value="3">Bekor qilish</option>
                            @elseif($client->status == 1)
                                <b>Tasdiqlanmagan</b>
                                </option>
                                <option value="2">Tasdiqlash</option>
                            @else
                                <b>Bekor qilingan</b>
                                </option>
                                <option value="2">Tasdiqlash</option>
                            @endif
                        </select><br>

                        <input type="submit" value="Qo`shish">

                    </form>
                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
