﻿@extends('layouts.app')

@section('title', 'Salesforce Development')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')

@section('content')
 <!-- Abvout Start -->
 <div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.png') }}'); background-repeat:no-repeat; background-size:cover;">
  <div class="container py-5">
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <h1 class="display-5 mb-4 text-white">Salesforce Development Services
      </h1>
      <p class="mb-4 text-white">
       Bespoke Joomla Web Development Services That Compliments Your Brand
      </p>
     </div>
    </div>
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
      <img src="{{ asset('assets/web/salesforce.webp') }}" class="img-fluid rounded w-100" alt="">
      <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="container-fluid about py-5">
  <div class="container py-5">

   <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
    <h2 class="display-5 mb-4">Salesforce Development Company</h2>
    <p class="mb-0">Integrate Salesforce solutions to strategize for business operations & amplify your sales.
    </p>
   </div>
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <p class="mb-4">Nettechnocrats shines as prominent Salesforce development company with remarkable expertise in serving profit-driven solutions for strategic planning, designing, & implementation of key concepts. Let’s take your business sales to the next level by speeding up the in-house operations & leveraging Salesforce CRM for streamlined & managed interaction with customers, partners, products, & employees engaged in your business. With a team of skilled & pro-efficient developers, Nettechnocrats intends to unleash that competency to make more of Salesforce solutions.
      </p>
      <p class="mb-4">Our expertise beholds exceptional innovation & industry experience to get entitled as a credible salesforce developer. Nettechnocrats emerged as the fastest-growing Salesforce application development firm trusted by the global clientele.</p>
      <div class="row g-4">

       <div class="col-sm-6">

       </div>

      </div>
     </div>
    </div>
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/a-complete-guide-to-salesforce-qa-testing-transformed.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

     </div>
    </div>
   </div>
   <p class="mb-4">We aim to cater to varied industries with business-centric Salesforce app development focused on the core aspects of the clients’ business. Our brilliance in delivering custom-built solutions based on Salesforce technology led to the expansion of various organizations. With an award-winning track record in the integration of multiple customizations & creation of feature-loaded platforms and products like marketing cloud, sales cloud, service cloud, & more.</p>

   <a href="{{url('/contact-us')}}" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Contact Us</a>
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
       <a href="#" class="h4 d-inline-block mb-4">SALESFORCE1 CONSULTANCY</a>
       <p class="mb-4">No matter at whatever state you’re in your CRM journey. We help the clients to transform their way of doing business by enabling them to find, win, and retain customers.
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
       <a href="#" class="h4 d-inline-block mb-4">
        SALESFORCE1 DEVELOPMENT</a>
       <p class="mb-4">With the creation of Visualforce pages, Apex classes, S-controls, Triggers, Views, and Page Layouts, we make sure to expand the functionality of your current Salesforce CRM solution.
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
       <a href="#" class="h4 d-inline-block mb-4">CUSTOM UI/UX DESIGNING</a>
       <p class="mb-4">Our Salesforce developers craft the concepts of engaging front-end designs and product conceptualization to provide custom UX/UI support for smooth user experience and renovation of a brand.
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
       <a href="#" class="h4 d-inline-block mb-4">SALESFORCE1 COMPATIBLE APPS</a>
       <p class="mb-4">Get the feature-loaded Salesforce1 Mobile apps to match the look and branding concepts of your company in order to adjust to the requirements & needs of the client’s business.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-brands fa-creative-commons-remix"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">SALESFORCE LIGHTNING</a>
       <p class="mb-4">Our expertise in salesforce custom application development makes a remark by facilitating performance-driven solutions inspired by lightning-ready Salesforce technology. Right from integrating lightning components to deploying them in Salesforce apps, our service area includes everything.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-link"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">SALESFORCE MOBILE EXPERTISE</a>
       <p class="mb-4">Let our experts create mobile-friendly products to engage users and deliver favorable Salesforce solutions for diversified business verticals. Our products led businesses to utilize this technology with incredible user accessibility & data management.</p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- Services End -->

 <!-- Offer Start -->
 <div class="container-fluid offer-section pb-5">
  <div class="container pb-5">
   <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
    <h3 class="display-5 mb-4 fw-bolder">Why Invest in Salesforce Development Services?</h3>
    <p class="mb-0">The concept of Salesforce development focuses on the major facets of project building platform for managed sales operations. Being a top-notch salesforce development company, Nettechnocrats has been serving the global clientele with CRM tool based on cloud integration.</p>
   </div>
   <div class="row g-5 align-items-center">
    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
     <div class="nav nav-pills rounded p-5" style="background-color: rgb(212 241 228);">
      <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
       <h5 class="mb-0">Increased Lead Generation</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
       <h5 class="mb-0">Offers Customer Satisfaction</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
       <h5 class="mb-0">More Support & Service Options</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFour">
       <h5 class="mb-0">High Return on Investment</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFive">
       <h5 class="mb-0">Unbound Scalability</h5>
      </a>
      <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseSix">
       <h5 class="mb-0">Instant Results</h5>
      </a>
     </div>
    </div>
    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
     <div class="tab-content">
      <div id="collapseOne" class="tab-pane fade show p-0 active">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Increased Lead Generation</h1>
         <p class="mb-4">The software works on cloud functionality that eliminates extensive efforts in data entry, administration, & security checks and focusing on lead generation.</p>
        </div>
       </div>
      </div>
      <div id="collapseTwo" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Offers Customer Satisfaction</h1>
         <p class="mb-4">Our SalesForce developers bring custom solutions to let a client get a brief insight into crucial sales & data information with streamlined & automated data processes.</p>
        </div>
       </div>
      </div>
      <div id="collapseThree" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">More Support & Service Options</h1>
         <p class="mb-4">Our CRM software gathers customer queries from varied channels and assigns them to a relevant team or employee responsible for its resolution in a streamlined way.</p>
        </div>
       </div>
      </div>
      <div id="collapseFour" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">High Return on Investment</h1>
         <p class="mb-4">With a Salesforce app development company, businesses get opportunities to get a return on investment at higher rates with managed investment in IT infrastructure.
         </p>
        </div>
       </div>
      </div>
      <div id="collapseFive" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Unbound Scalability</h1>
         <p class="mb-4">Our clients are familiar with incredible scalability offered by Salesforce CRM that majorly focuses on multitenant approach for effortless implementation at minimal costs.
         </p>
        </div>
       </div>
      </div>
      <div id="collapseSix" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Instant Results</h1>
         <p class="mb-4">Salesforce prioritizes lead conversion with real-time accessibility of results so that one can get a clear picture of impending success and benefits.
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
   <h2>Why Nettechnocrats for Salesforce Development Services?</h2>

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
     <div class="seo__animation__gifs">
      <div class="rounded position-relative overflow-hidden">
       <img src="{{ asset('assets/web/salesforce-process.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

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