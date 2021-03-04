<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.header.head')
    @yield('css')
</head>

<body>
    @include('template.navbar.navbar')
    <div class="nk-main">
        <div class="nk-gap"></div>
        <div class="container">
            @yield('content')
            <div class="nk-widget nk-widget-highlighted">
                <h4 class="nk-widget-title"><span>{{ __('Register') }}</span></h4>
                <div class="nk-widget-content">
                    <div class="card" style="background-color: transparent;">
                        <div class="card-header" style="background-color: transparent;"></div>
                        <div class="card-body" style="background-color: transparent;">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
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

                                <div class="form-group row">
                                    <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Foto') }}</label>

                                    <div class="col-md-6">
                                        <input id="foto" type="file" enctype="multipart/form-data" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ old('foto') }}" required autocomplete="foto">

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

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap"></div>
        @include('template.plugins.footer')
    </div>
    <!-- START: Page Background -->
    <!-- <div class="nk-page-background-fixed" style="background-image: url('assets/images/bg-ready.jpg') ;"></div> -->
    <!-- <img class="nk-page-background-top" src="assets/images/bg-ready.jpg" alt="">
    <img class="nk-page-background-bottom" src="assets/images/bg-ready.jpg" alt=""> -->
    <img class="nk-page-background-top" src="assets/images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="assets/images/bg-bottom.png" alt="">

</body>
@include('template.footer.footer')
@yield('javascripts')

</html>