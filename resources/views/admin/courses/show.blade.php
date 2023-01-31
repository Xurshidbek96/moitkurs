@extends('admin.layouts.layout')

@section('content')

<!-- MAIN -->
    <main>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3> Admin ma'lumotlari</h3>
                    <a class="create__btn" href="{{route('admins.index')}}"> <i class='bx bx-arrow-back'></i>Qaytish</a>

                </div>

            </div>


            <div class="table-data">
                <div class="order">

                    <table>
                        <tbody>

                            <tr>
                                <td>
                                    <p>Login : </p>
                                </td>
                                <td><b>{{ $admin->name }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Telefon raqam : </p>
                                </td>
                                <td><b>{{ $admin->phone }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Email : </p>
                                </td>
                                <td><b>{{ $admin->email }}</b></td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Rasm : </p>
                                </td>
                                <td><img src="/admin/images/{{ $admin->img }}" alt="" width="100px"></td>
                            </tr>

                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>

<!-- MAIN -->

@endsection
