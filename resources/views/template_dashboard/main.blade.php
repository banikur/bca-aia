<!DOCTYPE html>
<html lang="en">

<head>
    @include('template_dashboard.header.head')
    @yield('css')
    <style>
        .video_contain {
            position: fixed;
            /* top: -50%;
        left: -50%; */
            width: 100%;
            height: 100%;
        }

        video {
            object-fit: cover;
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }

        #footer {
            position: relative;
            height: 50px;
            background-color: red;
            bottom: 0px;
            left: 0px;
            right: 0px;
            margin-bottom: 0px;
        }
    </style>
</head>

<body>
    @include('template_dashboard.navbar.navbar')

    <div class="nk-main">
        <div class="nk-gap"></div>
        <div class="container">
            @yield('content')
        </div>
        <div class="nk-gap"></div>
        @include('template_dashboard.plugins.footer')
    </div>
    <div class="nk-page-background-fixed">
        <video loop muted autoplay poster="assets/videobg/1.webm" class="video_contain">
            <source src="assets/videobg/tunnel1.mp4" type="video/mp4">
        </video>
    </div>
</body>
@include('template_dashboard.footer.footer')
@yield('javascripts')

</html>