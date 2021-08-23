@extends('template.Lheader')

@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="register-box">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="{{ url('/') }}" class="h1"><b>LPI</b>-ARROQY</a>
                </div>
                <div class="card-body">
                    <p class="login-box-msg">Silahkan mendaftar untuk menjadi member!</p>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Name" required value="{{ old('name') }}" autofocus>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Email" required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control   @error('username') is-invalid @enderror"
                                id="password" name="password" placeholder="Password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="password"
                                class="form-control  @error('password_confirmation') is-invalid @enderror"
                                id="password_confirm" name="password_confirmation" placeholder="Password Confirmation"
                                required value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <a href="{{ url('/login') }}" class="text-decoration-none">Sudah punya akun?</a>
                            </div>
                            <div class="col-5">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
