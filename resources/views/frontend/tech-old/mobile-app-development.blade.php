<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Top-ranked Mobile App Development Agency</title>
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
  .types__seo .col-xl-6 p {
   padding: 5px 5px;
   height: 80px;
   border: 1px solid black;
   margin: 0px 10px;
   display: flex;
   align-items: center;
  }

  .types__seo {
   margin: 20px 0px;
  }

  .service .service-item {
   height: 400px;
  }
 </style>
 @include('partial/google_analytics')
</head>

<body>
 @include('partial/header')
 <!-- Abvout Start -->
 <div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.webp') }}'); background-repeat:no-repeat; background-size:cover;">
  <div class="container py-5">
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-7 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <h1 class="display-5 mb-4 text-white">Top-ranked Mobile App Development Agency</h1>
      <p class="mb-4 text-white">Innovative mobile apps to embark the digital revolution.</p>
      @include('partial/proposal')
     </div>
    </div>
    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
     <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
      <img src="{{ asset('assets/web/male-web-developer-doing-research-on-development-illustration-download-in-svg-png-gif-file-formats--thinking-researching-and-pack-design-illustrations-4759504.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="Mobile App Development Agency">
      <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
     </div>
    </div>
   </div>
  </div>
 </div>


 <div class="container-fluid service py-5">
  <div class="container pb-5">
   <h3 class="mb-4 fw-bolder fs-1 text-center">Our Key offerings for end-to-end mobile app development</h3>
   <p class="mb-4  text-center">You are a part of the Mobile Apps Age! Make the Most of It! Get a high-performance, feature-rich, cross-platform, cross-device Mobile App and reach your online target market with faster response time & high-end user experience. Have a glance at our services backed by the blend of out-of-box ideas & cutting-edge technologies for cross-platform mobile app development to transform your digital experiences.</p>
   <div class="row g-4">
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-mobile-screen-button"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Mobile App Strategy</a>
       <p class="mb-4">deation & conceptualization for strategic mobile app development with initial planning & in-depth research work.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-brands fa-uikit"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">UI/UX Designing</a>
       <p class="mb-4">Our mobile app developers create pixel-perfect UIs to deliver immersive user experiences with every click.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-tablet-button"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Custom Mobile App Development</a>
       <p class="mb-4">Building feature-loaded mobile apps integrated with stunning graphics & user-friendly functionalities.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-microscope"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">App Testing</a>
       <p class="mb-4">All about analyzing app’s performance across multiple platforms & fixing bugs for uninterrupted accessibility.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-server"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">App Deployment</a>
       <p class="mb-4">We will launch a fully-functional mobile app on the iOS app store or Play store with user guides.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-question"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Support & Maintenance</a>
       <p class="mb-4">Once an app is launched, we facilitate 24*7 app support & maintenance for required updates.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-arrow-up-right-dots"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">App Enhancement</a>
       <p class="mb-4">We are offering enhancement service to the mobile apps to meet the market requirements without losing any existing customer.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-database"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Server Migration</a>
       <p class="mb-4">We are helping people to migrate from one server to other servers to stable the mobile app and control the server costing.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-chart-simple"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Mobile App Marketing</a>
       <p class="mb-4">We are helping people to reach their target market to generate the ROI from the app.</p>
      </div>
     </div>
    </div>

   </div>

  </div>
 </div>


 <div class="container-fluid offer-section py-5">
  <div class="container pb-5">
   <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
    <h3 class="display-5 mb-4 fw-bolder">As a leading website development firm, we provide industry expertise to take your business to the next level.</h3>
   </div>
   <div class="row g-5 align-items-center">
    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
     <div class="nav nav-pills rounded p-5" style="background-color: rgb(212 241 228);">
      <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
       <h5 class="mb-0">iOS App</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
       <h5 class="mb-0">Android App</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
       <h5 class="mb-0">Cross Platform App</h5>
      </a>
     </div>
    </div>
    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
     <div class="tab-content">
      <div id="collapseOne" class="tab-pane fade show p-0 active">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4"> iOS App</h1>
         <p class="mb-4">The credit goes to our proficient programmers holding ample experience in writing error-free codes for creating feature-rich Website</p>
        </div>
       </div>
      </div>
      <div id="collapseTwo" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Android App</h1>
         <p class="mb-4">The credit goes to our proficient programmers holding ample experience in writing error-free codes for creating Intranet Development software</p>
        </div>
       </div>
      </div>
      <div id="collapseThree" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Cross Platform App</h1>
         <p class="mb-4">We offer Technology Consulting services to our worldwide client to server them better.</p>
        </div>
       </div>
      </div>


     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="container-fluid about py-5">
  <div class="container py-5">

   <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100">
    <h2 class="display-5 mb-4">Our Secrets Behind Stunning Mobile Experiences</h2>
    <p class="mb-0">Nettechnocrats emerged as a market leader with remarkable expertise in facilitating top-class mobile app development services by imposing our major focus on:</p>
   </div>
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <h4 class="text-primary1">Minimal & Responsive Interactive UI</h4>

      <p class="mb-4">Impeccable mobile experiences leveraged with compelling UI designs to build emotional connections with users & add an oomph factor to the user interface. With a team of skilled programmers, Nettechnocrats holds hands-on experience with specialization in delivering custom mobile app solutions for mind-blowing user experiences. Our mobile apps portray a perfect blend of creativity & perfection.</p>
     </div>
    </div>
    <div class="col-xl-6 d-flex justify-content-center wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/custom_app.webp') }}" class="img-fluid rounded image-with-shadow" alt="Mobile App Development Agency" style="width:150px;">

     </div>
    </div>
   </div>
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 d-flex justify-content-center wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/price_icon.webp') }}" class="img-fluid rounded image-with-shadow" alt="Top Mobile App Development company" style="width:150px;">

     </div>
    </div>
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <h4 class="text-primary1">
       Minimal & Responsive Industry-specific security</h4>
      <p class="mb-4">Nettechnocrats holds prominence as the best mobile app development company for prioritizing security & compliance considerations. Our professionals utilize avant-garde technologies & agile methodologies to meet market-centric security requirements & standards for business credibility. Every project is handled by our proactive project managers who redefine strategies for security & compliance.</p>
     </div>
    </div>


   </div>
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">

    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <h4 class="text-primary1">Minimal & Responsive Uninterrupted Accessibility</h4>
      <p class="mb-4">Our mobile apps are tested to deliver streamline user experience across varied platforms & devices. We ensure to render scalability & mobile-friendliness to enhance the app’s performance to overcome the challenges introduced by the ever-changing technological enhancements. Our excellence in serving cross-platform mobile app development services unveils strategic aspects of app creation for target audiences.</p>
     </div>
    </div>
    <div class="col-xl-6 d-flex justify-content-center wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/custom_app.webp') }}" class="img-fluid rounded image-with-shadow" alt="Mobile App Development Agency" style="width:150px;">

     </div>
    </div>

   </div>


  </div>
 </div>


 <section id="call-to-action" class="call-to-action section accent-background">

  <div class="container">
   <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-xl-10">
     <div class="text-center">
      <h3>Mobile Application Development Samples</h3>
      <p>We have served 2500+ clients globally and completed 4200+ projects for them. Checkout some of the best Mobile App development case studies here:

      </p>
      <a class="cta-btn" href="{{url('/contact-us/')}}">Contact Us</a>
     </div>
    </div>
   </div>
  </div>

 </section>


 <div class="container-fluid service py-5">
  <div class="container pb-5">
   <h3 class="mb-4 fw-bolder fs-1 text-center">Insights into our cutting-edge mobile app development innovation</h3>
   <p class="mb-4  text-center">Being a reputed agency for mobile app development in India, Nettechnocrats takes a step ahead to unfold a feasible strategy aiming to meet the challenges of futuristic technology.</p>
   <div class="row g-4">
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-cloud"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Cloud-driven backend</a>
       <p class="mb-4">Our cross-platform mobile apps are based on the concept of cloud-based mobile backend technology meant to deliver real-time accessibility on varied devices & mobile screens. Irrespective of platform, our apps are tested to deliver a streamlined mobile experience on varied devices including IoT.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-location-crosshairs"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">
        Location sensing</a>
       <p class="mb-4">Nettechnocrats is backed by the best mobile app developers who’re adept at employing the latest technologies & tactics for robust app creation. Right from BLE Beacons to NFC & fast-emerging Wi-Fi functionality, we focus on rendering extensive capabilities to our solutions.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-map-location"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Geo-Tracking</a>
       <p class="mb-4">Our mobile apps feature a plethora of exceptional functionalities to serve the purpose of flexibility, usability, & accessibility. Our experts perform error-free coding with the integration of GPS technology for live tracking, geo-fencing, geo-targeting, & other location-based add-ons for in-app messaging.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>

   </div>

  </div>
 </div>

 <!-- Offer End -->


 <section class="light-background why__choose__Net">
  <div class="container">
   <h2>Why Nettechnocrats for Mobile App Development Services?</h2>
   <p>If you require enterprise Web application development services from the experts, Nettechnocrats perfectly fits into your requirements. Our Web Application experts have hands-on expertise in delivering diverse range of projects for enterprise business clients. Our robust app solutions enable you unlock the real potential of Web Application for attracting improved profitability and augmented growth for your business. Here’s why Nettechnocrats is the most sought-after mobility solutions provider:</p>
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
       <img src="{{ asset('assets/web/ecommerce-nettechnocrats.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="Best Mobile App Development Agency">

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
    <div class="brands"><img src="{{ asset('assets/web/common-img/Coca-Cola.webp') }}" alt="Coca Cola" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/5-1.webp') }}" alt="Slimbroswer" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/7-1.webp') }}" alt="Dcatalog" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/8-1.webp') }}" alt="Lexus" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/9-1.webp') }}" alt="MensUSA" srcset=""></div>
   </div>
   <div class="img__row">
    <div class="brands"><img src="{{ asset('assets/web/common-img/10-1.webp') }}" alt="MADStyle" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/11-1.webp') }}" alt="MRKT360" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/bjp-1.webp') }}" alt="BJP" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/bubble.webp') }}" alt="Bubble" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/chemists-world.webp') }}" alt="Chemistsworld" srcset=""></div>
   </div>
   <div class="img__row">
    <div class="brands"><img src="{{ asset('assets/web/common-img/dbl-1.webp') }}" alt="DUNLAP" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/omni-1.webp') }}" alt="MniSecure" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/Preapps.webp') }}" alt="Preapps" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/tolo-1.webp') }}" alt="ToloToys" srcset=""></div>
    <div class="brands"><img src="{{ asset('assets/web/common-img/1-1.webp') }}" alt="" srcset="ZANGI"></div>
   </div>
  </div>
 </section>

 <!-- FAQs Start -->

 <!-- FAQs End -->


 <!-- Call To Action Section -->
 <section id="call-to-action" class="call-to-action section accent-background">

  <div class="container">
   <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-xl-10">
     <div class="text-center">
      <h3>Ready To Get Started?</h3>
      <p>Stay ahead from Crowd. We have an expert team of application developers who are experienced and proficient. We have good experience in bespoke web and mobile app development and are committed to delivering the best of the class solutions.</p>
      <a class="cta-btn" href="{{url('/contact-us/')}}">Contact Us</a>
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