@extends('backend.layouts.auth')

@section('content')
    <div class="auth-box-right">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-head">
                        <a href="{{ url('/') }}" class="logo"><img src="assets/images/logo.svg" class="img-fluid"
                                alt="logo"></a>
                    </div>
                    <h4 class="text-primary my-4">{{ __('Login') }}</h4>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-sm-6">
                            <div class="custom-control custom-checkbox text-left">
                                <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="custom-control-label font-14" for="remember"> {{ __('Remember Me') }}</label>
                            </div>
                        </div>
                        @if (Route::has('password.request'))
                            <div class="col-sm-6">
                                <div class="forgot-psw">
                                    <a id="forgot-psw" href="{{ route('password.request') }}" class="font-14">Forgot
                                        Password?</a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block font-18"> {{ __('Login') }}</button>
                </form>
                <div class="login-or">
                    <h6 class="text-muted">OR</h6>
                </div>
                {{-- <div class="social-login text-center">
                    <button type="submit" class="btn btn-primary-rgba font-18"><i
                            class="mdi mdi-facebook mr-2"></i>Facebook</button>
                    <button type="submit" class="btn btn-danger-rgba font-18"><i
                            class="mdi mdi-google mr-2"></i>Google</button>
                </div> --}}
                @if (Route::has('register'))
                    <p class="mb-0 mt-3">Don't have a account? <a href="{{ route('register') }}">{{ __('Sign up') }}</a>
                    </p>
                @endif


            </div>
        </div>
    </div>
@endsection
