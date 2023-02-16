<?php require './template-parts/header.php' ?>

<!-- Titre principal haut de page-->

<section class="container mt-5" id="main">
    <div class="row">
        <div class="col-md-6">
            <h1>Meet new friends and <br> share same passion for dancing</h1>
        </div>
        <div class="col-md-6">
            <img src="./public/assets/img/1.png" class="img-fluid" alt="girl in white">
        </div>
    </div>
</section>


<!-- Features -->
<section class="container-fluid" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- dance -->
                <div>
                    <span>🕺</span>
                    <h3>Unique Clientele</h3>
                    <p>Only high-end dancers</p>
                </div>
            </div>
            <div class="col-md-4">
                <!-- dance -->
                <div>
                    <span>🌃</span>
                    <h3>Secret</h3>
                    <p>Experience the most wanted activity in NYC</p>
                </div>
            </div>
            <div class="col-md-4">
                <!-- dance -->
                <div>
                    <span>🗽</span>
                    <h3>Unbelievable</h3>
                    <p>Premium sound available at any other place</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->

<section class="container" id="testimonials">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item text-center active">
                <p>Best sound i heard in my entire life. Shout out to my friends who advided me this outstanding club !</p>
                <img src="./public/assets/img/bowie.png" width="10%" alt="...">
                <br><small class="pt-3">Devid Bowie</small>
            </div>
            <div class="carousel-item text-center">
                <p>Met my best friend keith right there, this studioplayin' no games! Look where both of us are now...</p>
                <img src="./public/assets/img/jagger.png" width="10%" alt="...">
                <br><small class="pt-3">Mick Jagger</small>
            </div>
            <div class="carousel-item text-center">
                <p>Best sound i heard in my entire life. Shout out to my friends who advided me this outstanding club !</p>
                <img src="./public/assets/img/bowie.png" width="10%" alt="...">
                <br><small class="pt-3">Devid Bowie</small>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Swiper js -->
<!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide" style="background-image: url(./public/assets/img/starboy.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(./public/assets/img/supertrump.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(./public/assets/img/supremes.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(./public/assets/img/queenis.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(./public/assets/img/fletwood.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(./public/assets/img/beatles.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(./public/assets/img/drake.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(./public/assets/img/birds.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(./public/assets/img/bobmar.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(./public/assets/img/2pac.jpg);"></div>

    </div>
</div>

<!-- Bas de Page -->
<?php require './template-parts/footer.php' ?>