@extends('layouts.app')

@section('title', 'Joomla Web Development Company In India')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')

@section('content')
<!-- Abvout Start -->
<div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.png') }}'); background-repeat:no-repeat; background-size:cover;">
 <div class="container py-5">
  <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
   <div class="col-xl-7 wow fadeInLeft">
    <div>
     <!-- <h4 class="text-primary1">About Us</h4> -->
     <h1 class="display-5 mb-4 text-white">Joomla Web Development Company In India</h1>
     <p class="mb-4 text-white">Bespoke Joomla Web Development Services That Compliments Your Brand</p>
    </div>
   </div>
   <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
    <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
     <img src="{{ asset('assets/web/joomla.webp') }}" class="img-fluid rounded w-50 image-with-shadow" alt="">
     <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
    </div>
   </div>
  </div>
 </div>
</div>
<div class="container-fluid about py-5">
 <div class="container py-5">

  <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
   <h2 class="display-5 mb-4">Joomla Web Development</h2>
   <!-- <p class="mb-0">Laravel Web Development Services for catering to the diverse industry verticals.</p> -->
  </div>
  <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
   <div class="col-xl-6 wow fadeInLeft">
    <div>
     <!-- <h4 class="text-primary1">About Us</h4> -->
     <!-- <p class="mb-4 fw-bold fs-3">What is Laravel Web Development ?</p> -->
     <p class="mb-4">Joomla is the most demanded framework for the development of highly advanced business websites, news portals, online communities, social sites and many more. At Nettechnocrats, we are a leading Joomla web development company specializing in building robust and comprehensive web-enabled solutions by integrating and customizing Joomla CMS to suit individual clients’ requirements.</p>
     <p class="mb-4">So, whether you need a full Joomla CMS website developed, development of customized extensions, bug fixing & support, or template design & development, hire Joomla web developers who can get the job done right for you.</p>

     <div class="row g-4">

      <div class="col-sm-6">
       <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Contact Us</a>
      </div>

     </div>
    </div>
   </div>
   <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
    <div class="rounded position-relative overflow-hidden">
     <img src="{{ asset('assets/web/Joomla-development-company.webp') }}" class="img-fluid rounded w-100" alt="">

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
      <i class="fa-brands fa-laravel"></i>
     </div>
     <div class="rounded-bottom p-4">
      <a href="#" class="h4 d-inline-block mb-4">
       JOOMLA WEBSITE DEVELOPMENT</a>
      <p class="mb-4">Joomla CMS web design & development is one of our core capabilities. All our developers are skillfully proficient and experienced with the Joomla CMS and its latest versions.</p>
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
      <a href="#" class="h4 d-inline-block mb-4">COMPONENTS DEVELOPMENT</a>
      <p class="mb-4">If you want to add any new Joomla component to your websites like blog, directory, image gallery, forum or anything else, we can develop bespoke components whenever you require.</p>
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
      <a href="#" class="h4 d-inline-block mb-4">JOOMLA CUSTOM DEVELOPMENT</a>
      <p class="mb-4">Our web developers have the experience to develop a whole range of custom web applications ranging from simple websites to complex website to suit individual client’s requirements.</p>
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
      <a href="#" class="h4 d-inline-block mb-4">CUSTOM MODULES DEVELOPMENT</a>
      <p class="mb-4">If your website needs more than what the existing modules offer, we provide unique custom Joomla development service to our clients in a great expert and professional circumstances.</p>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
    <div class="service-item">
     <div class="service-img">
      <i class="fa-brands fa-creative-commons-remix"></i>
     </div>
     <div class="rounded-bottom p-4">
      <a href="#" class="h4 d-inline-block mb-4">JOOMLA THEME CUSTOMIZATION</a>
      <p class="mb-4">Get exclusive Joomla themes which are ready to use in an instant, enhancing the durability of your website to result in a completely satisfied customer.</p>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
    <div class="service-item">
     <div class="service-img">
      <i class="fa-solid fa-link"></i>
     </div>
     <div class="rounded-bottom p-4">
      <a href="#" class="h4 d-inline-block mb-4">JOOMLA APPLICATION DEVELOPMENT</a>
      <p class="mb-4">Our adept team of offshore Joomla developers provides scalable and customized solutions that smoothly support your workflows without compromising any feature or functionality.</p>
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
  <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
   <h3 class="display-5 mb-4 fw-bolder">Why choose Joomla for your website?</h3>
   <!-- <p class="mb-0 fw-bold">Our PHP professionals are highly experienced in offering PHP web development services and able to cater to all the demands of the client’s successfully. Here are some points why should you choose the PHP programming language for developing your website.</p> -->
  </div>
  <div class="row g-5 align-items-center">
   <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
    <div class="nav nav-pills rounded p-5" style="background-color: rgb(212 241 228);">
     <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
      <h5 class="mb-0">Open Source Infrastructure</h5>
     </a>
     <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
      <h5 class="mb-0">Robust & fast</h5>
     </a>
     <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
      <h5 class="mb-0">Secure (No Direct Access)</h5>
     </a>
     <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFour">
      <h5 class="mb-0">Extension Library</h5>
     </a>
     <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFive">
      <h5 class="mb-0">eCommerce becomes easy</h5>
     </a>
     <!-- <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseSix">
       <h5 class="mb-0">Allows To Do Multiple Things</h5>
      </a> -->
    </div>
   </div>
   <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
    <div class="tab-content">
     <div id="collapseOne" class="tab-pane fade show p-0 active">
      <div class="row g-4">
       <div class="col-md-12">
        <h1 class="display-5 mb-4">Open Source Infrastructure</h1>
        <p class="mb-4">The first and important factor to choose Joomla as a platform for a website is that its open source and free. That’s why it is more famous and most demanded CMS till yet.</p>
       </div>
      </div>
     </div>
     <div id="collapseTwo" class="tab-pane fade show p-0">
      <div class="row g-4">
       <div class="col-md-12">
        <h1 class="display-5 mb-4">Robust & fast</h1>
        <p class="mb-4">The most faster CMS platform, Joomla has power-full core features which make it faster to load contents. Even it can handle If there are over 100k page views/day without any problem or any bug.</p>
       </div>
      </div>
     </div>
     <div id="collapseThree" class="tab-pane fade show p-0">
      <div class="row g-4">
       <div class="col-md-12">
        <h1 class="display-5 mb-4">Secure (No Direct Access)</h1>
        <p class="mb-4">As Joomla is an object-oriented programming language, this framework helps PHP developers by providing complete support for PHP development. By easily reusing the code, developers can develop multi-interface applications quickly.</p>
       </div>
      </div>
     </div>
     <div id="collapseFour" class="tab-pane fade show p-0">
      <div class="row g-4">
       <div class="col-md-12">
        <h1 class="display-5 mb-4">Extension Library</h1>
        <p class="mb-4">Joomla is designed with thousands of readymade extensions which can help you to meet your requirement in a very quick time. You can also extend its functionality by using different extensions.</p>
       </div>
      </div>
     </div>
     <div id="collapseFive" class="tab-pane fade show p-0">
      <div class="row g-4">
       <div class="col-md-12">
        <h1 class="display-5 mb-4">eCommerce becomes easy</h1>
        <p class="mb-4">IIf you’re looking for an eCommerce website, it is the best framework to opt for as Joomla is an e-commerce friendly CMS framework that instills many components designed specifically.</p>
       </div>
      </div>
     </div>
     <!-- <div id="collapseSix" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Allows To Do Multiple Things</h1>
         <p class="mb-4">With Laravel framework development, you’re allowed to do multiple things. Right from user authentication and controlling the action to resources to creating forms, you can go for much more.</p>
        </div>
       </div>
      </div> -->
    </div>
   </div>
  </div>
 </div>
</div>
<!-- Offer End -->

<section class="light-background why__choose__Net">
 <div class="container">
  <h2>Why Nettechnocrats for Joomla Web Development Services?</h2>

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
      <img src="{{ asset('assets/web/og_joomla.png') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

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