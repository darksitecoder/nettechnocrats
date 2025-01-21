@extends('layouts.app')

@section('title', 'Seo services')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')

@section('content')
<style>
        .service .service-item {
                height: 350px;
        }

        .seo__animation__gif {
                box-shadow: none !important;
        }
</style>

<!-- Abvout Start -->
<div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.webp') }}'); background-repeat:no-repeat; background-size:cover;">
        <div class="container py-5">
                <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-xl-7 wow fadeInLeft">
                                <div>
                                        <!-- <h4 class="text-primary1">About Us</h4> -->
                                        <h1 class="display-5 mb-4 text-white">UI/UX Development</h1>
                                        <p class="mb-4 text-white">
                                                Nettechnocrats is the trusted one-stop solution provider for real estate web and mobile application development. Through our service, our sole purpose is to cater to the global audience whereby we make use of the top-notch web development technologies and developers experience to create an excellent real estate business solution.
                                        </p>
                                </div>
                        </div>
                        <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                                <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
                                        <img src="{{ asset('assets/web/uiux.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">
                                        <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
                                </div>
                        </div>
                </div>
        </div>
</div>
<div class="container-fluid about py-5">
        <div class="container py-5">

                <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
                        <h2 class="display-5 mb-4">UI/UX Development</h2>
                        <p class="mb-0">We just don't develop creative and innovate web and mobile app, we also design them.</p>
                </div>
                <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-xl-6 wow fadeInLeft">
                                <div>
                                        <!-- <h4 class="text-primary1">About Us</h4> -->
                                        <p class="mb-4">From a business point of view, it is essential to emphasize on users satisfaction so that brand value and reputation of a business can be maintained. With IT as the competitive field, the need for UI UX design service becomes important. To grab the customers attention and revenue from the company it is quite crucial to seek app design services</p>
                                        <p class="mb-4">There are millions of website running online. But only a few are users favorite. There are UI and UX which makes them so attractive.</p>


                                </div>
                        </div>
                        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                                <div class="rounded-4 position-relative overflow-hidden px-4">
                                        <img src="{{ asset('assets/web/uiux-image.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">
                                </div>
                        </div>

                </div>
                <p class="mb-4">Users need a website that is easy to navigate and extract information. Nettechnocrats proudly provides web application design according to the user's requirement. Apart from the web design we also provide other IT services. We are one the leading mobile app designing company. A great user experience designing is built for the client. Our UI and UX team works to create visually stunning, functional and user-friendly designs. As a mobile app designing company, we serve into mobile application designing with client satisfaction.</p>
                <div class="row g-4">

                        <div class="col-sm-6">
                                <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Get in Touch</a>
                        </div>

                </div>
        </div>
</div>
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid service pb-5">
        <div class="container pb-5">
                <h2 class="text-center">Our <strong>UI</strong> and <strong>UX</strong> Developement Services</h2>
                <div class="row g-4 mt-5">
                        <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="service-item">
                                        <div class="service-img">
                                                <i class="fa-solid fa-swatchbook"></i>
                                        </div>
                                        <div class="rounded-bottom p-4">
                                                <a href="#" class="h4 d-inline-block mb-4">UI (User Interface) Development</a>
                                                <p class="mb-4">We put our best effort to deliver fully functional web application design. We mix your and our ideas and build a unique architectural web application design which is convenient from the user end. Not only the web design services but also we are responsible for the convenient user-end interface.</p>
                                                <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="service-item">
                                        <div class="service-img">
                                                <i class="fa-solid fa-brain"></i>
                                        </div>
                                        <div class="rounded-bottom p-4">
                                                <a href="#" class="h4 d-inline-block mb-4">UX (User Experience) Development</a>
                                                <p class="mb-4">UX or user experience is a smart application design solution. We consider all aspects of how an end user will interact with the application in future. To achieve clients target goal, we analyze both the users behavior and core feature. And ultimately an accurate rendering of all visual and functional element is done.</p>
                                                <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
<!-- Services End -->

<section class="portfolio-slider">
        <div class="slider owl-carousel">
                @foreach($datas as $data)
                <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.webp') }}'); background-repeat:no-repeat; background-size:cover;">

                        <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
                                <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
                                <div class="h4 text-center">
                                        <p class="fs-1 m-0 p-0 text-white">320%</p>
                                        <p class=" m-0 p-0 text-white">Website Leads</p>
                                </div>
                        </div>
                        <div class="rounded-bottom text-center pt-3">
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
                        </div>
                        <div class="rounded-bottom text-center pt-3">
                                <p class="text-center p-0 m-0 fw-bold text-white">{{$data->company_name}}</p>
                                <p class="mb-4 p-0 m-0 fw-bold text-white">| {{$data->industry}} |</p>
                        </div>
                </div>
                @endforeach
        </div>
</section>
<!--  -->

<section class="light-background why__choose__Net">
        <div class="container">
                <h2>Why Nettechnocrats for UI/UX Design Services?</h2>
                <div class="row pt-2">
                        <div class="col-lg-6 position-relative align-self-start " data-aos="fade-up" data-aos-delay="100">
                                <div class="row mt-3">
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="200">5+ years of average experience
                                                </p>
                                        </div>
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="200">On time project delivery guaranteed
                                                </p>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="300">High sealed security
                                                </p>
                                        </div>
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="300">Dedicated Project Managers
                                                </p>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="400">24*7 Support
                                                </p>
                                        </div>
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="400">Hassle free communication
                                                </p>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="500">Maintenance Service
                                                </p>
                                        </div>
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="500">User-Friendly Data Structure
                                                </p>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="600">5+ years of average experience
                                                </p>
                                        </div>
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="600">On time project delivery guaranteed
                                                </p>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="700">Integrity & transparency
                                                </p>
                                        </div>
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="700">Free no-obligation quote
                                                </p>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="800">Flexible Engagement Models
                                                </p>
                                        </div>
                                        <div class="col-lg-6">
                                                <p class="why__answer" data-aos="fade-up" data-aos-delay="800">Non-Discloser Agreement
                                                </p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-lg-6 content d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <div class="seo__animation__gif">
                                        <div class="rounded-4 position-relative overflow-hidden">
                                                <img src="{{ asset('assets/web/uiux-img.webp') }}" class="img-fluid w-100 image-with-shadow" alt="">

                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>

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


@endsection