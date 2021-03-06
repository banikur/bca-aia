@extends('template.main')
@section('css')

@endsection
@section('content')
@include('template.navbar.navbar')
<section class="features-area features-bg pt-100 pb-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 wow bounceInUp" data-wow-delay=".2s">
                <div class="section-title title-style-two text-center mb-60">
                    <span>Join Us !</span>
                    <h2>{{ __('Log') }}<span>in</span></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <form method="POST" action="{{ route('login') }}" style="width: 100%;">
                @csrf
                <div class="form-group row wow bounceInUp" data-wow-delay=".2s">
                    <label for="email" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('E-Mail Address') }}</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row wow bounceInUp" data-wow-delay=".2s">
                    <label for="password" class="col-md-4 col-form-label text-md-right" style="color: white;">{{ __('Password') }}</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember" style="color: white;">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                        <a class="btn" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('javascript')

@endsection