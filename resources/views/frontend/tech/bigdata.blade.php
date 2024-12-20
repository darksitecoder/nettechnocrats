@extends('layouts.app')

@section('title', 'Big Data Solutions')

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
     <h1 class="display-5 mb-4 text-white">Big Data Solutions</h1>
     <!-- <p class="mb-4 text-white">Python has taken the world by storm. With its immense capabilities, our Python developer has proficient in building robust, secure & scalable apps utilizing best Python development strategies.</p> -->
    </div>
    @include('partial/proposal')
   </div>
   <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
    <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
     <img src="{{ asset('assets/web/big-data.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">
     <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
    </div>
   </div>
  </div>
 </div>
</div>
<!-- <div class="container-fluid about py-5">
  <div class="container py-5">
   <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
   </div>
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <h4 class="text-primary1">Get powerful and flexible Python Web Development Services</h4>
      <p class="mb-4">Python serves as one of the top programming languages, for developing the most complex websites, backend and web apps which supports the latest trends including Machine Learning and Artificial Intelligence. Having a rich experience in Python and Django web development, Nettechnocrats delivers you the best-in-class Python environment for creating custom Python web development and mobile application backend solutions.</p>
      <p class="mb-4">Our Python developers have rich experience in utilizing the full potential of this open-source programming language. Scalability is the biggest advantage of Python, which is why it is loved by developers and business owner who are looking for the long term business establishment in this competitive market. Our skilled offshore Python developers have more than 5 years of ordinary experience and ensure to offer the best enterprise web applications using standard Django, NumPy, Flask, Pyramid and Web2py frameworks with pace & precision while saving your development cost.</p>

      <div class="row g-4">

       <div class="col-sm-6">
        <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Contact Us</a>
       </div>

      </div>
     </div>
    </div>
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/sharepoint1.webp') }}" class="img-fluid rounded w-100" alt="">

     </div>
    </div>
   </div>
  </div>
 </div> -->
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid service pb-5 pt-5">
 <h2 class="text-center">Big Data Solutions</h2>
 <p class="text-center pb-5">Harness massive amounts of data to make business decisions based on new, accurate, and consistent insights</p>
 <div class="container pb-5">
  <div class="row g-4">
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item">
     <div class="service-img">
      <i class="fa-solid fa-database"></i>
     </div>
     <div class="rounded-bottom p-4">
      <a href="#" class="h4 d-inline-block mb-4">BIG DATA STRATEGY</a>
      <p class="mb-4">Our expert team go through your business objectives and help you turn your big data challenges into solutions and tangible business outcomes, faster and at a low risk.</p>
      <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
    <div class="service-item">
     <div class="service-img">
      <i class="fa-solid fa-republican"></i>
     </div>
     <div class="rounded-bottom p-4">
      <a href="#" class="h4 d-inline-block mb-4">BIG DATA IMPLEMENTATION</a>
      <p class="mb-4">Depending on your business goals, we use agile and iterative implementation techniques that deliver quick solutions based on current needs instead of a big bang application development.</p>
      <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
    <div class="service-item">
     <div class="service-img">
      <i class="fa-solid fa-file-shield"></i>
     </div>
     <div class="rounded-bottom p-4">
      <a href="#" class="h4 d-inline-block mb-4">
       BIG DATA CONSUMPTION</a>
      <p class="mb-4">To make the best use of big data, its necessary to analyze an ever-growing array of information. Our dedicated data professionals design in-house analytic solutions and uncover profitable insight.</p>
      <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<!-- Services End -->

<section class="light-background why__choose__Net">
 <div class="container">
  <h2>Why Nettechnocrats for Big Data Solutions?</h2>

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
      <img src="{{ asset('assets/web/big-data-datenquellen-transformed.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

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
     <a class="cta-btn" href="{{url('/contact-us')}}">Contact Us</a>
    </div>
   </div>
  </div>
 </div>

</section><!-- /Call To Action Section -->

@endsection