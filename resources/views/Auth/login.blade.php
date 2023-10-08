@extends('app')
@section('content')
  <!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start " style="background-color: hsl(0, 0%, 96%); height: 100vh">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            Selamat Datang <br />
            <span class="text-primary">Kecamatan Sidoarjo</span>
          </h1>
          <p class="fs-2 fw-bold" style="color: hsl(217, 10%, 50.8%)">Motto Pelayanan:</p>
          <p>
           "NO COMPROMY TO EXCELLENT SERVICE"
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="{{ URL('login/process') }}" method="POST">
                @csrf
                @error('nik')
                  <div class="alert alert-danger" style="padding: 7px; font-size: 13px; border-radius: 5px;text-transform: capitalize;" role="alert">
                    {{ $message }}
                  </div>
                @enderror
                <div class="form-outline mb-4">
                  <input type="text" id="nik" name="nik" class="form-control" value="{{ old('nik') }}" />
                  <label class="form-label" for="nik">NIK</label>
                </div>
                @error('password')
                  <div class="alert alert-danger" style="padding: 7px; font-size: 13px; border-radius: 5px;text-transform: capitalize;" role="alert">
                    {{ $message }}
                  </div>
                @enderror
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control" />
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" name="remember_me" type="checkbox" value="" id="remember_me" checked />
                  <label class="form-check-label" for="remember_me">
                    Remember Me?
                  </label>
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">
                  LOGIN
                </button>

                <div class="text-center">
                  <p>Login dengan</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
@endsection