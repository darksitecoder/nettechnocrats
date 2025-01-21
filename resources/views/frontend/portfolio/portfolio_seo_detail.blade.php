<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO portfolio details</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/web/favicon.webp') }}">
    <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />



    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style/web/lib/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/web/lib/lightbox/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/web/lib/owlcarousel/assets/owl.carousel.min.css') }}">

    <style>
        .service .service-item {
            height: 300px;
        }

        .design-features .service-item {
            height: 550px !important;
        }
    </style>
</head>

<body>
    @include('partial/header')
    <!-- Abvout Start -->
    <div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('/' . $portfolio[0]->image) }}'); background-repeat:no-repeat; background-size:cover;">

        <div class="container py-5">
            <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-12 wow fadeInLeft">
                    <div>
                        <!-- <h4 class="text-primary1">About Us</h4> -->
                        <h1 class="display-5 mb-4 text-white text-center">{{$portfolio[0]->heading}}</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container-fluid ">
  <div class="container py-2">
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-12 wow fadeInLeft">
     <div class=" rounded d-flex justify-content-center">
      <img src="{{ asset('assets/web/healthcare.webp') }}" class="img-fluid rounded" alt="" style="width: 100%; height:500px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
     </div>
    </div>
   </div>
  </div>
 </div> -->
    <div class="container-fluid about py-5">
        <div class="container py-5">

            <div class=" mx-auto wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="">
                <h2 class="display-5 mb-4">About</h2>
            </div>
            <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-12 wow fadeInLeft">
                    <div>
                        <!-- <h4 class="text-primary1">About Us</h4> -->
                        {!! $portfolio[0]->content !!}


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid service pb-5">
        <div class="container pb-5">
            <h2 class="">When We Started</h2>
            <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-12 wow fadeInLeft">
                    <div class=" rounded d-flex justify-content-center">
                        <img src="{{ asset('/' . $portfolio[0]->image_start) }}" class="img-fluid rounded" alt="" style="width: 100%; height:500px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    </div>

                </div>
            </div>
            {!! $portfolio[0]->content_start !!}

        </div>
    </div>
    <!-- Services End -->

    <!-- Services Start -->

    <div class="container-fluid ">
        <div class="container py-2">
            <h2 class="">The Results</h2>
            <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-12 wow fadeInLeft">
                    <div class=" rounded d-flex justify-content-center">
                        <img src="{{ asset('/' . $portfolio[0]->image_final) }}" class="img-fluid rounded" alt="" style="width: 100%; height:500px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service pb-5">
        <div class="container pb-5">
            {!! $portfolio[0]->content_final !!}

        </div>
    </div>



    <!--  -->

    <section class="brand__images py-4">
        <div class="container">
            <h3 class="text-center">Count On Our Passion For Technology</h3>
            <p class="text-center">Since 2011, we have been going that extra mile to create exceptional digital strategies for our clients and their customers. That said, we are awarded by top-tier research firms and featured in premium magazines and journals.</p>
            <div class="img__row">
                <div class="brands"><img src="{{ asset('assets/web/common-img/Coca-Cola.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/5-1.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/7-1.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/8-1.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/9-1.webp') }}" alt="" srcset=""></div>
            </div>
            <div class="img__row">
                <div class="brands"><img src="{{ asset('assets/web/common-img/10-1.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/11-1.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/bjp-1.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/bubble.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/chemists-world.webp') }}" alt="" srcset=""></div>
            </div>
            <div class="img__row">
                <div class="brands"><img src="{{ asset('assets/web/common-img/dbl-1.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/omni-1.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/Preapps.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/tolo-1.webp') }}" alt="" srcset=""></div>
                <div class="brands"><img src="{{ asset('assets/web/common-img/1-1.webp') }}" alt="" srcset=""></div>
            </div>
        </div>
    </section>

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">

        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Ready To Get Started?</h3>
                        <p>Stay ahead from Crowd. We have an expert team of application developers who are experienced and proficient. We have good experience in bespoke web and mobile app development and are committed to delivering the best of the class solutions.</p>
                        <a class="cta-btn" href="#">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- /Call To Action Section -->


    @include('partial/footer')
</body>

</html>

<script src="{{ asset('style/web/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('style/web/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('style/web/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('style/web/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('style/web/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('style/web/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>