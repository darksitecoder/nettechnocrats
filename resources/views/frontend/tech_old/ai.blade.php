<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Artificial Intelligence</title>
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
  .service-item {
   height: 450px !important;
  }
 </style>
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
      <h1 class="display-5 mb-4 text-white">Artificial Intelligence</h1>
      <p class="mb-4 text-white">Create quality apps with Artificial Intelligence to ensure your apps performs at a higher scale</p>
     </div>
     @include('partial/proposal')
    </div>
    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
     <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
      <img src="{{ asset('assets/web/ai-logo.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">
      <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="container-fluid about py-5">
  <div class="container py-5">

   <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
    <h2 class="display-5 mb-4">Artificial Intelligence</h2>
    <p class="mb-4">Beat the heat of technology and remodel the ways of delivering services with Artificial intelligence</p>
   </div>
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <!-- <p class="mb-4 fw-bold fs-3">What is Laravel Web Development ?</p> -->
      <p class="mb-4">Gone are the days when things are done manually, in today’s world that is full of technological advancement most of the work is taken over by software, machinery and various automated processes. In this regard, all the thanks go to Artificial intelligence, as most of the advancement made today is all due to this technology.</p>
      <p class="mb-4">We at Nettechnocrats are adamant to deliver best in performance to our valuable clients. We offer them automated solutions using AI-powered applications to drive growth and efficiency in their business processes and operations. Our distinguished panel of highly professional and certified professionals have expertise in an entire range of AI technologies like Machine learning, Image Processing speech reorganization, virtual assistance etc. The specifically designed solutions delivered by us to our client’s, are unique and catered according to their business goals.</p>
      <p class="mb-4">With our expertise and experience of working with various data visualization and analytics tools like Tableau, SAS, R, QlikView, QlikSense, IBM Cognos, Azure ML and more, is the main reason behind our popularity as leading Data Analytics Service Providers.</p>
      <a href="{{url('/contact-us')}}" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Contact Us</a>
     </div>
    </div>
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/robot.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

     </div>
    </div>
   </div>

  </div>
 </div>
 <!-- About End -->

 <!-- Services Start -->
 <div class="container-fluid service pb-5">
  <div class="container pb-5">
   <h2 class="display-5 mb-4 text-center">Explore our Artificial Intelligence Expertise</h2>
   <p class="mb-4 text-center">Artificial intelligence has easy human efforts in many ways and it is not wrong to say that our lives have become advance with AI technology. The project delivered by our experts seamlessly integrates with our client’s business. We offer AI Specialists in</p>
   <div class="row g-4">

    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-robot"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">MACHINE LEARNING</a>
       <p class="mb-4">Scale up the success of your business by leveraging the advantage offered by machine as well as deep learning.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-code"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">AI-BASED DEVELOPMENT</a>
       <p class="mb-4">Our team develops AI-based applications using the innovative & creative idea that empower enterprises and help them achieve their goals.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-language"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">NATURAL LANGUAGE PROCESSING</a>
       <p class="mb-4">Our services for natural language processing help in improving communication between systems and humans. It comprehends what we speak or write and take action accordingly</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-images"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">IMAGE PROCESSING</a>
       <p class="mb-4">With the expertise in futuristic image processing technology, we create high-tech visual applications that possess an ability to analyze, acquire and synthesize images.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-brands fa-think-peaks"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">
        DECISION MANAGEMENT
       </a>
       <p class="mb-4">For our clients to make effective business decisions we impart business based decision management using reliable algorithms and predictive systems.</p>
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
   <h2>Why Nettechnocrats for Artificial Intelligence?</h2>
   <p class="pb-4 pt-4">Businesses are tremendously driving positive outcomes for themselves and their customers, with data and analytics, while maintaining and facilitating the highest level of data protection.</p>
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
       <img src="{{ asset('assets/web/artificial-inteligence.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

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