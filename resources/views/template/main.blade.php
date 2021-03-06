<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.header.head')
    @yield('css')
</head>

<body>
    @yield('content')
</body>
@include('template.footer.footer')
@include('template.footer.footer_script')
@yield('javascripts')

</html>