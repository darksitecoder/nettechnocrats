<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Certification</title>
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
   height: 350px;
   text-align: center;
  }

  .service .service-item p {
   text-align: left;
  }

  .design-features .service-item {
   height: 550px !important;
  }

  .brand__images .brands {
   flex: 1 1 calc(40% - 10px);
  }


  .counters {
   color: #000;
   font-weight: 400;
  }

  .counters .container {
   display: grid;
   grid-template-columns: repeat(4, 1fr);
   grid-gap: 30px;
   text-align: center;
  }

  .counters .counter {
   font-size: 45px;
   font-weight: 600;
   margin: 10px 0;
  }

  @media (max-width: 700px) {
   .counters .container {
    grid-template-columns: repeat(2, 1fr);
   }

   .counters .container>div:nth-of-type(1),
   .counters .container>div:nth-of-type(2) {
    border-bottom: 1px lightskyblue solid;
    padding-bottom: 20px;
   }
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
      <h1 class="display-5 mb-4 text-white text-center">Certificates That
       Give Us Recognization</h1>
      <p class="mb-4 text-white text-center">RecognizationWe’re Proud To Be Certified which help us to deliver the qulality results Globally</p>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!--  -->

 <section class="brand__images py-4">
  <div class="container">
   <h3 class="text-center">Recognition and Rewards motivate us to go the extra mile</h3>
   <p class="text-center">Since 2010, we have been going that extra mile to create exceptional digital strategies for our clients and their customers. That said, we are certified partner to deliver the high quality results.</p>
   <div class="row">
    <div class="col-lg-6">
     <div class="img__row">
      <div class="brands"><img src="{{ asset('assets/web/common-img/Coca-Cola.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/5-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/7-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/8-1.webp') }}" alt="" srcset=""></div>
     </div>
     <div class="img__row">
      <div class="brands"><img src="{{ asset('assets/web/common-img/10-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/11-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/bjp-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/bubble.webp') }}" alt="" srcset=""></div>
     </div>
     <div class="img__row">
      <div class="brands"><img src="{{ asset('assets/web/common-img/dbl-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/omni-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/Preapps.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/tolo-1.webp') }}" alt="" srcset=""></div>
     </div>
    </div>
    <div class="col-lg-6" style="background-color: #F25423;"><img src="{{ asset('assets/web/certificate-showing.webp') }}" alt="" srcset="" style="width: 120%;">
    </div>
   </div>

  </div>
 </section>


 <section>
  <div class="container-fluid service pb-5">
   <div class="container pb-5">
    <!-- <h2 class="text-center">A Quick Glance of Top Industries We Serve</h2>
   <p class="text-center pb-5">Nettechnocrats is a leading chatbot development company that assist their clients to build bots which will provide an unparalleled experience to their customers and automate their collaborations tasks.</p> -->
    <div class="row g-4">
     <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
      <div class="service-item">
       <div class="service-img"><i class="fa-brands fa-angular"></i></div>
       <div class="rounded-bottom p-4">
        <a href="#" class="h4 d-inline-block mb-4">LATEST TECHNOLOGY</a>
        <p class="mb-4">Our team of expert and experienced engineers help to create products and rendering services that cater to the client’s requirements using the latest technologies.</p>
        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
       </div>
      </div>
     </div>
     <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="service-item">
       <div class="service-img">
        <i class="fa-solid fa-cash-register"></i>
       </div>
       <div class="rounded-bottom p-4">
        <a href="#" class="h4 d-inline-block mb-4">COMPLETE BUSINESS CONSULTANCY</a>
        <p class="mb-4">Summing up our expertise in the technical background along with a perfect business growth strategy equates to us being an efficient consultant for your business requirements.</p>
        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
       </div>
      </div>
     </div>
     <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
      <div class="service-item">
       <div class="service-img">
        <i class="fa-solid fa-laptop-code"></i>
       </div>
       <div class="rounded-bottom p-4">
        <a href="#" class="h4 d-inline-block mb-4">NO QUALITY COMPROMISE</a>
        <p class="mb-4">We believe in engineering a high-end quality product for our clients through our efficient business processes with minimizing risk factors at every step.</p>
        <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
       </div>
      </div>
     </div>

     <!-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-microscope"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">MOBILE APP DEVELOPMENT USING ANGULAR JS</a>
       <p class="mb-4">We are backed by a veteran team of Angular JS developers for Angular JS based products customization, extension, and integration.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-cloud-arrow-up"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">MAINTENANCE & SUPPORT</a>
       <p class="mb-4">Our expert consultants will guide your application development using best practices and rich expertise.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
     <div class="service-item">
      <div class="service-img"><i class="fa-brands fa-nfc-directional"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">BEHAVIOR WITH DIRECTIVES</a>
       <p class="mb-4">Angular provides extra functionality to the HTML with the use of directives. Have you ever wished that your browser would do new tricks for you? Well, now it can!</p>
      </div>
     </div>
    </div> -->
    </div>
   </div>
  </div>
 </section>

 <!-- Call To Action Section -->
 <section id="call-to-action" class="call-to-action section accent-background">

  <div class="container">
   <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-xl-10">
     <div class="text-center">
      <h3>You have a vision.
       We have a way to get you there.</h3>
      <p>Estimations & Planning for Business Decisions with Coffee</p>
     </div>
    </div>
   </div>
  </div>
  <section class="counters pb-5 pt-3">
   <div class="container">
    <div class="text-center">
     <span class="fs-1 fw-bolder d-flex text-center align-items-center justify-content-center">
      <div class="counter" data-target="200">0</div>k+
     </span>
     <h3>1st Page Rank</h3>
    </div>
    <div class="text-center">
     <span class="fs-1 fw-bolder d-flex text-center align-items-center justify-content-center">
      <div class="counter" data-target="12">0</div>+
     </span>
     <h3>Years</h3>
    </div>
    <div class="text-center">
     <span class="fs-1 fw-bolder d-flex text-center align-items-center justify-content-center">
      <div class="counter" data-target="4000">0</div>+
     </span>
     <h3>Clients</h3>
    </div>
    <div class="text-center">
     <span class="fs-1 fw-bolder d-flex text-center align-items-center justify-content-center">
      <div class="counter" data-target="12">0</div>+
     </span>
     <h3>Awards Winning</h3>
    </div>
   </div>
  </section>
 </section><!-- /Call To Action Section -->


 @include('partial/footer')
</body>

</html>
<script>
 const counters = document.querySelectorAll('.counter');
 const speed = 30; // The lower the speed value, the slower the counter animation

 counters.forEach(counter => {
  const updateCount = () => {
   const target = +counter.getAttribute('data-target');
   const count = +counter.innerText;

   // Calculate the increment step
   const inc = Math.ceil(target / speed);

   // Check if the current count is less than the target
   if (count < target) {
    // Increment the count and update the counter text
    counter.innerText = count + inc > target ? target : count + inc;
    // Call the function again after a short delay
    setTimeout(updateCount, 100);
   } else {
    counter.innerText = target; // Ensure the counter ends at the target value
   }
  };

  updateCount();
 });
</script>
<script src="{{ asset('style/web/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('style/web/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('style/web/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('style/web/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('style/web/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('style/web/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>