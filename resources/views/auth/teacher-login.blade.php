@extends('layouts.main_auth')

@section('content')
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Profilga kirish</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('teacher.login') }}" class="needs-validation">
                    @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" :value="old('email')" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Elektron pochtangizni kiriting
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Parol</label>

                    </div>
                    <input id="password" type="password" class="form-control" name="password" autocomplete="current-password" tabindex="2" required>
                    <div class="invalid-feedback">
                      Parolni kiriting
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Eslab qolish</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Kirish
                    </button>
                  </div>
                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
@endsection

