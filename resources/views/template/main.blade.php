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
        </div>
        <div class="nk-gap"></div>
        @include('template.plugins.footer')
    </div>
    <!-- START: Page Background -->
    <div class="nk-page-background-fixed" style="background-image: url('assets/images/logo/japan1.jpg') ;"></div>
    <!-- <img class="nk-page-background-top" src="assets/images/bg-ready.jpg" alt="">
        <div class="nk-page-background-fixed" style="background-image: url('assets/images/bg-ready.jpg') ;"></div>
    <img class="nk-page-background-bottom" src="assets/images/bg-ready.jpg" alt=""> -->

</body>
@include('template.footer.footer')
@yield('javascripts')

</html>