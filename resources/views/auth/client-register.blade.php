@extends('layouts.main_auth')

@section('content')
<section class="section">
    <div class="container mt-5">
      <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Ro'yhatdan o'tish</h4>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('client.register') }}">
                @csrf
                <div class="row">
                  <div class="form-group col-6">
                    <label for="frist_name">Ism familyangiz</label>
                    <input id="frist_name" type="text" class="form-control" name="name" :value="old('name')" autofocus>
                  </div>
                  <div class="form-group col-6">
                    <label for="last_name">Telefon raqamingiz</label>
                    <input id="last_name" type="text" class="form-control" name="phone" :value="old('phone')">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" :value="old('email')">
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label for="password" class="d-block">Parol</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                      name="password" autocomplete="new-password" required>
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group col-6">
                    <label for="password2" class="d-block">Parolni qayta kiriting</label>
                    <input id="password2" type="password" class="form-control" name="password_confirmation" required>
                  </div>
                </div>
                <div class="form-group">

                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Ro'yhatdan o'tish
                  </button>
                </div>
              </form>
            </div>
            <div class="mb-4 text-muted text-center">
              Avval o'tganmisiz ? <a href="{{ route('client.login') }}">Kirish</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
