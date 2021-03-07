<!DOCTYPE html>
<html lang="en">

<head>
    @include('template_dashboard.header.head')
    @yield('css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Anton'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="games/style.css">

</head>

<body>

    @include('template_dashboard.navbar.navbar')
    <div class="wrap">
        <div class="game"></div>
        <div class="modal-overlay">
            <div class="modal">
                <h2 class="winner">You Rock!</h2>
                <button class="restart">Play Again?</button>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="games/script.js"></script>
</body>

@include('template_dashboard.footer.footer')
@yield('javascripts')

</html>