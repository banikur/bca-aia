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

</body>
@include('template.footer.footer')
@yield('javascripts')

</html>