<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Landing page design services</title>
 <!-- <link rel="stylesheet" href="style.css"> -->

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
 <div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.png') }}'); background-repeat:no-repeat; background-size:cover;">
  <div class="container py-5">
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-12 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <h1 class="display-5 mb-4 text-white">Landing Page Design Made Simple: Boost Your PPC Campaigns</h1>
      <p class="mb-4 text-white">No Coding, More Leads With Our Landing Page Builder & Design Services at Nettechnocrats
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="container-fluid ">
  <div class="container py-2">
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-12 wow fadeInLeft">
     <div class=" rounded d-flex justify-content-center">
      <img src="{{ asset('assets/web/landingpage-banner.png') }}" class="img-fluid rounded" alt="" style="width: 100%; height:500px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="container-fluid about py-5">
  <div class="container py-5">

   <div class=" mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="">
    <h2 class="display-5 mb-4">Elevate Your PPC Campaigns with Our Expertise</h2>
   </div>
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-12 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <p class="mb-2">Today, being online is super important. Landing pages are a big part of online promotion. They’re often the first thing visitors see on your website. Whether for ads or website improvement, choosing the right helper matters a lot.</p>
      <p class="mb-2">Our landing page design services go beyond the ordinary. We’re not just another landing page creator; we’re your pathway to maximizing conversions and ROI. With a focus on landing page optimization, we ensure your campaigns hit the mark.</p>
      <p class="mb-4">Partner with us, the leading Landing Page Development Services provider, to make your PPC campaigns stand out. Your success is our mission.</p>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- About End -->

 <!-- Services Start -->
 <div class="container-fluid service pb-5">
  <div class="container pb-5">
   <h2 class="pb-5">Essential Factors for Landing Page Builder Selection</h2>

   <div class="row g-4">
    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-disease"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Pricing Policy</a>
       <p class="mb-4">Pricing is a pivotal factor, so assess your budget and try free trials to match your financial constraints.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-gauge-high"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Features</a>
       <p class="mb-4">Delve into core and specialized features, such as industry-specific solutions like account management and dynamic text.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>

    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-shield-halved"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Integration</a>
       <p class="mb-4">Seek seamless integration with top email marketing and CRM platforms for streamlined data transfer.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>

    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-shield-halved"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Accountability</a>
       <p class="mb-4">Prioritize data security, including domain protection and password security, for peace of mind.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>

    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-shield-halved"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Benefits</a>
       <p class="mb-4">Landing page builders offer lead generation, conversion optimization, Quality Score enhancement, and more</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>

    <h2 class="pb-5">Unlock Your Squarespace’s True Potential with Nettechnocrats!</h2>

    <p>The digital realm can sometimes feel like an unsolvable maze. But with the right partner, navigating through becomes a walk in the park. At Nettechnocrats, we pride ourselves on offering clarity, education, and a clear path to digital success. When SEO becomes part of your daily discourse, you’ll realize its power in bolstering your brand’s digital presence.

     - Did you painstakingly craft your Squarespace site, only to be uncertain of its SEO robustness?
     - Did a past collaboration leave you less than satisfied with your Squarespace SEO outcomes?
     - Or perhaps, you’re just venturing into the world of Squarespace SEO Services, desiring a flawless start?

     At Nettechnocrats, our Squarespace SEO Expert team is here to guide, rectify, and elevate. Whether you’ve single-handedly built your site or you’re a large enterprise with expansive content needs, our offerings are tailored to fit.

     Hesitating about your next move? Or simply wishing for a more personal interaction to address your queries? Schedule a brief chat with us. We’re passionate about assisting Squarespace enthusiasts like you!
    </p>

   </div>
  </div>
 </div>
 <!-- Services End -->

 <div class="container-fluid about py-5">
  <div class="container py-5">

   <div class="mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
    <h2 class="display-5 mb-4">Real Estate App Development Samples </h2>
    <p class="mb-0">We have served 2500+ clients globally and completed 4200+ projects for them. Checkout some of the best Tour and Travel App development case studies here:</p>
   </div>
   <div id="call-to-action" class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100" style=" background-color: var(-accent-color) !important;">


    <div class="col-xl-6 wow fadeInLeft">
     <div>

      <h4 class="text-primary1 fw-bolder">Beycome Real Estate</h4>
      <p class="mb-4">Beycome is the first and only real estate company and listing platform that realizes 100% of your home transactions online; helping homeowners, buyers, and renters close a deal on their home, without the assistance of a real estate agent or broker. In turn, by cutting out agents, this saves homeowners from paying the 6% commission fee involved in a home sale (or 10% commission fee due in a rental transaction). And when the owner saves, buyers and renters get more negotiation power for a better deal.</p>
      <img src="{{ asset('assets/web/progress.png') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">
     </div>
    </div>
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/1-beycome.webp') }}" class="img-fluid rounded w-100" alt="">

     </div>
    </div>

   </div>
  </div>
 </div>

 <!--  -->

 <section class="light-background why__choose__Net">
  <div class="container">
   <h2>Why Nettechnocrats for SEO Services?</h2>
   <p>Nettechnocrats has carved a niche by excelling in multiple technologies and serving its global clients. Our team of professional SEO brainstorms out-of-box ideas & result-driven strategies for every project to ensure clients’ satisfaction. Quality & relevance are our major USPs to mention behind successful project deliveries to valuable clients from varied business verticals. We’re pleased to serve these benefits with feasible Android app development solutions to our clientele.</p>
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
       <img src="{{ asset('assets/web/nature-mountain-illustration-landing-page-vector.webp') }}" class="img-fluid" alt="" style="width: 700px;">

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