<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Magento Web Development</title>
 <!-- <link rel="stylesheet" href="style.css"> -->

 <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
 <link rel="icon" type="image/x-icon" href="{{ asset('assets/web/favicon.png') }}">
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
   height: 450px;
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
    <div class="col-xl-7 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <h1 class="display-5 mb-4 text-white">Amazon PPC</h1>
     </div>
     <div id="contact" class="contact__section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

       <div class="row gy-4">



        <div class="col-lg-12">
         <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-4">

           <div class="col-md-6">
            <input type="text" name="name" id="name-field" class="form-control" placeholder="Your Name">
           </div>

           <div class="col-md-6">
            <input type="email" class="form-control" name="email" id="email-field" placeholder="Your Email" required="">
           </div>

           <div class="col-md-6">
            <input type="text" class="form-control" name="subject" id="subject-field" placeholder="Request For...." required="">
           </div>

           <div class="col-md-6 text-center">
            <button type="submit">Send Me a Proposal <i class="fa-solid fa-arrow-right"></i>
            </button>
           </div>

          </div>
         </form>
        </div><!-- End Contact Form -->

       </div>

      </div>

     </div>
    </div>
    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
     <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
      <img src="{{ asset('assets/web/amazonppc.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">
      <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="container-fluid about py-5">
  <div class="container py-5">

   <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
    <h2 class="display-5 mb-4">Supercharge your business with Amazon PPC advertising</h2>
    <p class="mb-0">Amazon PPC campaigns are a great way to define success in business. Stimulate brand recognition across the Internet by hiring Amazon PPC consultant</p>
   </div>
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <p class="mb-4">Amazon PPC is a well-known advertising platform that helps sellers amplify online sales. It is a correct podium to explore your products sells online. With appropriate management of Amazon PPC, for sure you are going to rank high and get good advertising sells for your product.</p>
      <p class="mb-4">When the ad platform is created, managed and executed properly, it helps to increase the sales. For Amazon PPC options based on your strategy, it is most likely to choose campaigns that start out to collect data as Amazon will trigger your products for search terms. This lets you know which one converts the best.</p>


     </div>
    </div>

    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/amazon__ppc.webp.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

     </div>
    </div>

   </div>
   <p class="mb-4">Running Amazon Sponsored Products ads to compete and gain the optimum result can be extremely lucrative for your e-commerce business. However, competing on sales and website traffic with competitors is now easier with Nettechnocrats Amazon PPC. We have experience in performance driven Amazon PPC management whereby we create a unique blend between innovative technology and support system to help drive traffic on the website along with an increase in sales. Our focus is to optimize advertising and manage its services through a consultation.</p>
   <div class="row g-4">

    <div class="col-sm-6">
     <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Get In Touch</a>
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
       <a href="#" class="h4 d-inline-block mb-4">VISIBILITY TO PRODUCTS</a>
       <p class="mb-4">To rank high among other e-commerce websites and get better visibility of the products Amazon PPC model works the best. The PPC model and visibility in the online market gives good sales for the product on sale.</p>
       <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-brands fa-wordpress"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">GENERATE BIGGER SALES</a>
       <p class="mb-4">Amazon advertising that is an online marketing service has come a long way and is an excellent way to help the product reach a bigger audience and hence get bigger sales. Since Amazon hosts millions of products from different sellers, it becomes a little difficult to hit the market. However, Amazon PPC service helps do everything right.</p>
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
       <a href="#" class="h4 d-inline-block mb-4">GENERATE BIGGER REVENUE</a>
       <p class="mb-4">As a seller, when you do everything right by picking the ideal Amazon PPC service from the reputed place, there is a high chance for you to generate bigger revenue through sales.</p>
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
       <a href="#" class="h4 d-inline-block mb-4">BUILD TRUST AND REPUTATION</a>
       <p class="mb-4">Amazon Pay per Click helps to achieve a vast number of business and marketing goals. The goals range high and bring increased sales that ultimately results in building the trust and reputation in the market.</p>
      </div>
     </div>
    </div>
    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-swatchbook"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">REACH A DIVERSE CLIENT</a>
       <p class="mb-4">With keyword placement and Amazon PPC campaign, it is easy to target a diverse audience. The Amazon PPC services help to focus on the targeted audience.</p>
      </div>
     </div>
    </div>

   </div>
  </div>
 </div>
 <!-- Services End -->

 <!-- Offer Start -->
 <!-- <div class="container-fluid offer-section pb-5">
  <div class="container pb-5">
   <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
    <h3 class="display-5 mb-4 fw-bolder">Why choose PHP Laravel Framework?</h3>
    <p class="mb-0 fw-bold">Our PHP professionals are highly experienced in offering PHP web development services and able to cater to all the demands of the client’s successfully. Here are some points why should you choose the PHP programming language for developing your website.</p>
   </div>
   <div class="row g-5 align-items-center">
    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
     <div class="nav nav-pills rounded p-5" style="background-color: rgb(212 241 228);">
      <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
       <h5 class="mb-0">Global Implementation</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
       <h5 class="mb-0">Extension Ability</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
       <h5 class="mb-0">Less Time Required</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFour">
       <h5 class="mb-0">Uncomplicated Integration</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFive">
       <h5 class="mb-0">Wide User & Community Base</h5>
      </a>
      <a class="accordion-link p-4 mb-0" data-bs-toggle="pill" href="#collapseSix">
       <h5 class="mb-0">Allows To Do Multiple Things</h5>
      </a>
     </div>
    </div>
    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
     <div class="tab-content">
      <div id="collapseOne" class="tab-pane fade show p-0 active">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Global Implementation</h1>
         <p class="mb-4">With the Laravel framework, a developer need not worry about the application will be suitable for users or not who are from a different country and follow different time, language or currency. Developers can easily integrate different functions in the application with Laravel framework support.</p>
        </div>
       </div>
      </div>
      <div id="collapseTwo" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Extension Ability</h1>
         <p class="mb-4">With countless components and still adding, the Laravel framework is a versatile and fully object-oriented framework, utilizing a lot of object-oriented concepts like inheritance and interfaces. This allows most of ZF’s components to extend to some point.</p>
        </div>
       </div>
      </div>
      <div id="collapseThree" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Less Time Required</h1>
         <p class="mb-4">As Laravel is an object-oriented programming language, this framework helps PHP developers by providing complete support for PHP development. By easily reusing the code, developers can develop multi-interface applications quickly.</p>
        </div>
       </div>
      </div>
      <div id="collapseFour" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Uncomplicated Integration</h1>
         <p class="mb-4">Another benefit of choosing Laravel application development is its class that allows a trouble-free integration with other libraries that you want to use. Laravel web application development can be facilitated to a great extent using this feature.</p>
        </div>
       </div>
      </div>
      <div id="collapseFive" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Wide User & Community Base</h1>
         <p class="mb-4">The Laravel framework has a large thriving community of developers. Thanks to the vast and active community who keeps on augmenting the pool of knowledge. The reference guide of Laravel explains all the components and their use properly.</p>
        </div>
       </div>
      </div>
      <div id="collapseSix" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Allows To Do Multiple Things</h1>
         <p class="mb-4">With Laravel framework development, you’re allowed to do multiple things. Right from user authentication and controlling the action to resources to creating forms, you can go for much more.</p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div> -->
 <!-- Offer End -->

 <section class="light-background why__choose__Net">
  <div class="container">
   <h2>Why Nettechnocrats for Amazon PPC Services.</h2>

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
       <img src="{{ asset('assets/web/amazon__ppc__lower.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

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