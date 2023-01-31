@extends('clients.layouts.layout')

@section('dashboard')
active
@endsection

@section('content')
<!-- MAIN -->
<main>
    @if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    @endif
    @if ($message = Session::get('danger'))
        		<div class="alert alert-danger">
            		<p>{{ $message }}</p>
        		</div>
    @endif
    <div class="head-title">
        <div class="left">
            <h1>Shaxsiy ma'lumotlar</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Ma'lumotlar</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">{{Auth::user()->name }}</a>
                </li>
            </ul>
        </div>
        <a href="/client/files/{{ $client->pdf }}" download="" class="btn-download">
            <i class='bx bxs-cloud-download'></i>
            <span class="text">Ma'lumotingiz PDF</span>
        </a>
    </div>


    <div class="table-data">
        <div class="order">

            <table>

                <tbody>
                    <tr>
                        <td>
                            <p><b>Arizangiz holati : </b></p>
                        </td>
                        @if($client->status == 0)
                            <td style="color:rgb(15, 0, 218);"><b>Hujjatingizni yubormagansiz</b></td>
                        @elseif($client->status == 1)
                            <td style="color:rgb(218, 218, 0);"><b>Ko'rib chiqilmoqda</b></td>
                        @elseif($client->status == 2)
                            <td style="color:rgb(11, 236, 33);"><b>Qabul qilingan ! </b></td>
                        @else
                            <td style="color:rgb(238, 38, 7);"><b>Rad qilingan </b></td>
                        @endif
                    </tr>

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
                        <td> </p>
                        </td>
                        <img width="150px" src="/client/img/{{ $client->img }}" alt="">
                    </tr>

                </tbody>
            </table>
        </div>

    </div>
</main>
<!-- MAIN -->
@endsection


