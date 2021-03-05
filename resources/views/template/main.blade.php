<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.header.head')
    @yield('css')
</head>

<body>
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="assets/geco/img/icon/preloader.svg" alt="">
            </div>
        </div>
    </div>
    <main>
        @include('template.navbar.navbar')
        @yield('content')
        @include('template.plugins.brand')
    </main>
</body>
@include('template.footer.footer')
@include('template.footer.footer_script')
@yield('javascripts')

</html>