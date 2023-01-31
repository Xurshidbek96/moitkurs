@extends('teachers.layouts.layout')

@section('members')
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
                        <a class="create__btn" href="{{route('new_members')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                    </div>

                    <table>

                        <tbody>

                            <tr>
                                <td>
                                    <p>Ism Familya : </p>
                                </td>
                                <td>{{ $member->client->name ?? '' }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Telefon raqam : </p>
                                </td>
                                <td>{{  $member->client->phone ?? '' }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Email : </p>
                                </td>
                                <td> {{  $member->client->email ?? '' }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Ta'lim darajasi : </p>
                                </td>
                                <td>{{  $member->client->level_edu ?? '' }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Manzil : </p>
                                </td>
                                <td>{{  $member->client->adress ?? '' }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Bio : </p>
                                </td>
                                <td>{{  $member->client->bio ?? '' }}</td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Hujjati : </p>
                                </td>
                                <td><a href="/client/files/{{   $member->client->pdf ?? '' }}" download="">Yuklash</a></td>
                            </tr>

                            <tr>
                                <td> </p>
                                </td>
                                <img width="150px" src="/client/img/{{  $member->client->img ?? '' }}" alt="">
                            </tr>

                        </tbody>
                    </table>


                </div>

            </div>
        </main>
        <!-- MAIN -->
@endsection
