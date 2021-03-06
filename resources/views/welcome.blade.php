@extends('template.main')
@section('css')

@endsection
@section('content')
<main>
    @include('template.navbar.navbar')
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="assets/geco/img/icon/preloader.svg" alt="">
            </div>
        </div>
    </div>
    <!-- slider-area -->
    <section class="slider-area slider-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="slider-content text-center">
                        <h6 class="wow bounceInUp" data-wow-delay=".2s">Are You Ready ?</h6>
                        <h2 class="tlt fix" data-in-effect="fadeInLeft">Innovate The Next <span>Level</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="2s">Seize The Future. ShifThink The Future. Play The Next Level.</p>
                        <a href="{{ route('register') }}" class="btn wow bounceInUp" data-wow-iteration=".2s">Register Now !</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area-end -->

    <!-- features-area -->
    <section class="features-area features-bg pt-120 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 wow bounceInUp" data-wow-delay=".2s">
                    <div class="section-title title-style-two text-center mb-60">
                        <span>what we give players</span>
                        <h2>Why Choose Us <span>Geco</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-6 wow bounceInUp" data-wow-delay=".2s">
                    <div class="features-item mb-30">
                        <div class="features-head mb-35">
                            <div class="product-tag"><a href="#">t-shirt</a></div>
                            <h4>Gamine slim elegant young woman perceived</h4>
                            <p>Consecur adipcig eiusod tempor the inci did dolore mana is aliqsua Unimd minim thats tempor dolore adipcig</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="features-item mb-30">
                        <div class="features-head mb-35">
                            <div class="product-tag"><a href="#">Cloud</a></div>
                            <h4>Leading Games Retailer with Great Deals Video</h4>
                            <p>Consecur adipcig eiusod tempor the inci did dolore mana is aliqsua Unimd minim thats tempor dolore adipcig</p>
                        </div>

                    </div>
                </div>

            </div>
            <div class="fact-area pt-90">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <img src="assets/geco/img/icon/fact_icon01.png" alt="">
                            </div>
                            <div class="fact-content">
                                <h2><span class="odometer" data-count="245">00</span></h2>
                                <span>Amazing Feature</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <img src="assets/geco/img/icon/fact_icon02.png" alt="">
                            </div>
                            <div class="fact-content">
                                <h2><span class="odometer" data-count="1245">00</span></h2>
                                <span>Amazing Feature</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <img src="assets/geco/img/icon/fact_icon03.png" alt="">
                            </div>
                            <div class="fact-content">
                                <h2><span class="odometer" data-count="78">00</span>K</h2>
                                <span>Amazing Feature</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <img src="assets/geco/img/icon/fact_icon04.png" alt="">
                            </div>
                            <div class="fact-content">
                                <h2><span class="odometer" data-count="12">00</span></h2>
                                <span>Amazing Feature</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->
    @include('template.plugins.brand')
</main>

@endsection
@section('javascript')
<script>
    $(document).ready(function() {
        looping();
    });

    function looping() {
        $('.loader').fadeOut(1000);
        $('.loader').fadeIn(1000);
        setTimeout(function() {
            looping();
        }, 10);
    }
</script>
@endsection