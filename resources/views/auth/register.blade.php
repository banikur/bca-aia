@extends('template.main')
@section('css')

@endsection
@section('content')
@include('template.navbar.navbar')
<section class="features-area features-bg pt-40 pb-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 wow bounceInUp" data-wow-delay=".2s">
                <div class="section-title title-style-two text-center mb-60">
                    <h2>{{ __('Register') }}<span> Here</span></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"  style="width: 100%;">
                @csrf
                <div class="row">
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="notelp" class="col-md-4 col-form-label text-md-right">{{ __('No. Telp') }}</label>

                            <div class="col-md-6">
                                <input id="notelp" type="text" class="form-control @error('notelp') is-invalid @enderror no_telp" name="notelp" value="{{ old('notelp') }}" required autocomplete="notelp" autofocus>

                                @error('notelp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat_rumah" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Rumah') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="alamat_rumah" type="alamat_rumah" class="form-control @error('alamat_rumah') is-invalid @enderror" name="alamat_rumah" value="{{ old('alamat_rumah') }}" required autocomplete="alamat_rumah"> -->
                                <textarea class="form-control" name="alamat_rumah" required></textarea>
                                @error('alamat_rumah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_kantor" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Kantor') }}</label>

                            <div class="col-md-6">
                                <!-- <input id="alamat_kantor" type="text" class="form-control @error('alamat_kantor') is-invalid @enderror" name="alamat_kantor" value="{{ old('alamat_kantor') }}" required autocomplete="alamat_kantor" autofocus> -->
                                <textarea class="form-control" name="alamat_kantor" required></textarea>
                                @error('alamat_kantor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                            <div class="col-md-6">
                                <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto">

                                @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="informasi" class="col-md-4 col-form-label text-md-right">{{ __('Informasi Persyaratan') }}</label>

                            <div class="col-md-6">
                                <input id="informasi" type="text" class="form-control @error('informasi') is-invalid @enderror" name="informasi" value="{{ old('informasi') }}" required autocomplete="informasi" autofocus>

                                @error('informasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10 offset-md-1">
                        <button type="submit" class="btn btn-primary float-right">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('javascript')

@endsection