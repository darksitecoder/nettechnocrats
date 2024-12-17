@extends('layouts.app')

@section('title', 'Seo services')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')

@section('content')
    <div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.png') }}'); background-repeat:no-repeat; background-size:cover;">
        <div class="container py-5">
            <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-7 wow fadeInLeft">
                    <div>
                        <!-- <h4 class="text-primary1">About Us</h4> -->
                        <h1 class="display-5 mb-4 text-white">Microsoft Dynamic CRM
                        </h1>
                        <p class="mb-4 text-white">
                        </p>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
                        <img src="{{ asset('assets/web/Microsoft-Dynamics-CRM.webp') }}" class="img-fluid rounded image-with-shadow " alt="" style="width: 400px;">
                        <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid about py-5">
        <div class="container py-5">

            <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
                <h2 class="display-5 mb-4">Microsoft Dynamics CRM Services</h2>
                <!-- <p class="mb-0">Establish Your Business In The Virtual World Using .Net Web Development Services
                </p> -->
            </div>
            <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-xl-6 wow fadeInLeft">
                    <div>
                        <!-- <h4 class="text-primary1">About Us</h4> -->
                        <p class="mb-4">We offer Microsoft Dynamics CRM development and customization services with the brilliant technical expertise to achieve high growth rates that meet global business standards. With a rich experience in delivering unmatched Dynamics CRM services, we assure our clients of full support of our services for their CRM operations.
                        </p>
                        <div class="row g-4">

                            <div class="col-sm-6">
                                <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Contact Us</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="rounded position-relative overflow-hidden">
                        <img src="{{ asset('assets/web/microsoft-ERP.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid service pb-5">
        <div class="container pb-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <i class="fa-brands fa-battle-net"></i>
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">MICROSOFT DYNAMICS CRM INTEGRATION</a>
                            <p class="mb-4">Microsoft Dynamics CRM is a highly expendable product. It provides a very rich APIs support. We help our customers to integrate Microsoft Dynamics CRM with ERPs and legacy systems.
                            </p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <i class="fa-brands fa-searchengin"></i>
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">CUSTOM DEVELOPMENT FOR MICROSOFT DYNAMICS CRM</a>
                            <p class="mb-4">We have rich experience in extending Microsoft Dynamics CRM and offering custom Microsoft Dynamics CRM solutions for our customers.
                            </p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">DATA MIGRATION SERVICES</a>
                            <p class="mb-4">If you want to add any new Joomla component to your websites like blog, directory, image gallery, forum or anything else, we can develop bespoke components whenever you require.
                            </p>
                            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item">
                        <div class="service-img">
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">CUSTOMIZATION AND CONFIGURATION</a>
                            <p class="mb-4">Using best CRM practices and listening all the customer’s demand properly, our experts provide custom CRM software solutions to meet their individual needs.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item">
                        <div class="service-img">
                            <i class="fa-brands fa-creative-commons-remix"></i>
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">CONTENT CREATION</a>
                            <p class="mb-4">It’s only engaging content that will hold your potentials on the website. See how the copywriters at our SEO agency can convert your readers into paying customers.
                            </p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <i class="fa-solid fa-link"></i>
                        </div>
                        <div class="rounded-bottom p-4">
                            <a href="#" class="h4 d-inline-block mb-4">ORGANIC LINK BUILDING</a>
                            <p class="mb-4">Our link development analysts offer a winning link building strategy combined with specific, powerful, and shareable content that drives organic links to your website.</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Offer Start -->
    <div class="container-fluid offer-section pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h3 class="display-5 mb-4 fw-bolder">Why choose Microsoft Dynamics CRM?</h3>
                <p class="mb-0">Check out below points</p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="nav nav-pills rounded p-5" style="background-color: rgb(212 241 228);">
                        <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
                            <h5 class="mb-0">User-friendly</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
                            <h5 class="mb-0">Manage any relationship & process</h5>
                        </a>
                        <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
                            <h5 class="mb-0">Adaptive crm engine</h5>
                        </a>
                        <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseFour">
                            <h5 class="mb-0">Cost-flexibility</h5>
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="tab-content">
                        <div id="collapseOne" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <h1 class="display-5 mb-4">User-friendly</h1>
                                    <p class="mb-4">Dynamics is made by Microsoft that probably also tuns on your computers and servers which means you already know how to use their user-interfaces function.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="collapseTwo" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <h1 class="display-5 mb-4">Manage any relationship & process</h1>
                                    <p class="mb-4">The most faster CMS Dynamics easily adapts to your business and industry to manage all your connections and processes through connected applications to provide high adaptability that will fuel your growth.</p>
                                </div>
                            </div>
                        </div>
                        <div id="collapseThree" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <h1 class="display-5 mb-4">Adaptive crm engine</h1>
                                    <p class="mb-4">Respond quickly to your customers and market changes within an agile, cloud-based environment that has digital intelligence built in. </p>
                                </div>
                            </div>
                        </div>
                        <div id="collapseFour" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <h1 class="display-5 mb-4">Cost-flexibility</h1>
                                    <p class="mb-4">Dynamics offers a broad range of subscription options depending on how many people will be
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <section class="light-background why__choose__Net">
        <div class="container">
            <h2>Why Nettechnocrats for Microsoft Dynamic CRM Solution?</h2>

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
                        <div class="rounded position-relative overflow-hidden">
                            <img src="{{ asset('assets/web/SharePoint-migration.webp') }}" class="img-fluid rounded w-100" alt="">

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