<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Next Level Players</title>
    <link rel='stylesheet' href='https://unpkg.com/swiper/swiper-bundle.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Montserrat:wght@600&amp;display=swap'>
    <link rel="stylesheet" href="landing_page/style.css">
    <meta name="author" content="Neo Tech">

    <style>
        body {
            -moz-transform: scale(0.8, 0.8);
            /* Moz-browsers */
            zoom: 0.8;
            /* Other non-webkit browsers */
            zoom: 80%;
            /* Webkit browsers */
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="wrapper" class="ready-player-one">
        <div class="main">
            <!-- <img src="https://assets.codepen.io/4926399/rpo--logo_1.png" alt="" class="logo" /> -->
            <img src="https://assets.codepen.io/4926399/rpo--actor_1.png" alt="" class="actor" id="actor" />

            <a href="javascript:;" id="enter-text" class="enter-text">
                <span>PRESS</span>
                <span>START</span>
            </a>
        </div>

        <div class="inside">
            <!-- <img src="https://assets.codepen.io/4926399/rpo--logo_1.png" alt="" class="logo" /> -->
            <!-- <img src="https://assets.codepen.io/4926399/rpo--lang_1.svg" alt="" class="lang" /> -->
            <!-- <img src="https://assets.codepen.io/4926399/rpo--menu_1.svg" alt="" class="menu" /> -->
            <!-- <img src="https://assets.codepen.io/4926399/rpo--media_1.svg" alt="" class="media" /> -->
            <!-- <img src="https://assets.codepen.io/4926399/rpo--share.svg" alt="" class="share" /> -->

            <img src="https://assets.codepen.io/4926399/rpo--tunnel-1.png" alt="" class="tunnel" id="tunnel" />

        </div>

        <div id="slider" class="overlap-slider">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">|
                        <center>
                            <?php $date=date("Y-m-d");  ?>
                            @if($date == "2021-03-24" )
                            <span style="color: white;"><a href="{{ url('/') }}">Go To Event</a></span>
                            <br/>
                            @else
                            <h1 class="h3" style="color: white;">Coming Soon</h1>
                            <span style="color: white;">On March This Year</span>
                            @endif
                        </center>
                    </div>
                    <!--<div class="swiper-slide">
                        <img src="https://assets.codepen.io/4926399/rpo--slider-3.png" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://assets.codepen.io/4926399/rpo--slider-4.png" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="https://assets.codepen.io/4926399/rpo--slider-5.png" alt="" />
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/CSSRulePlugin.min.js'></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CustomEase3.min.js'></script>
    <script src='https://unpkg.com/swiper/swiper-bundle.min.js'></script>
    <script src="landing_page/script.js"></script>
    <script src='https://code.jquery.com/jquery-1.7.1.min.js'></script>
    <script src='https://cdn.tutorialzine.com/misc/adPacks/v1.js'></script>

</body>

</html>