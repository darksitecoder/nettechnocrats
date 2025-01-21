@extends('layouts.app')

@section('title', 'Magento Web Development')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')

@section('content')
<!-- Abvout Start -->
<div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.webp') }}'); background-repeat:no-repeat; background-size:cover;">
  <div class="container py-5">
    <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-7 wow fadeInLeft">
        <div>
          <!-- <h4 class="text-primary1">About Us</h4> -->
          <h1 class="display-5 mb-4 text-white">Magento Web Development</h1>
          <p class="mb-4 text-white">Nettechnocrats offers a broad array of Magento development services to build and manage your eCommerce store</p>
        </div>
      </div>
      <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
        <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
          <img src="{{ asset('assets/web/magento.webp') }}" class="img-fluid rounded w-50 image-with-shadow" alt="">
          <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid about py-5">
  <div class="container py-5">

    <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
      <h2 class="display-5 mb-4">To Magento Web Development</h2>
      <p class="mb-0">Magento is a popular development framework used for the development of faster server tools and
        network apps.
      </p>
    </div>
    <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-6 wow fadeInLeft">
        <div>
          <!-- <h4 class="text-primary1">About Us</h4> -->
          <p class="mb-4 fw-bold fs-3">Magento Web Development</p>
          <p class="mb-4">At present, Magento is the most demanding eCommerce platform all over the world. Magento web development is the most excellent platform available for an eCommerce website that can be termed as the heart of many online store successes.</p>
          <p class="mb-4">With years of eCommerce experience, a large pool of customers and exceptional in-house Magento eCommerce developers, we provide powerful custom Magento development solutions to our clients to gain a competitive edge in the market. From the initial consulting to the go-live and the on-going strategy, Nettechnocrats offers a broad array of Magento development services to build and manage your eCommerce store.</p>


          <div class="row g-4">

            <div class="col-sm-6">
              <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Contact Us</a>
            </div>

          </div>
        </div>
      </div>
      <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
        <div class="rounded position-relative overflow-hidden">
          <img src="{{ asset('assets/web/adobecommerce-banner.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

        </div>
      </div>
    </div>
    <p class="mt-4">Every client has some unique requirements, and thus, our Magento eCommerce developers build bespoke eCommerce websites to specifically target core markets and ensuring happy experiences of customers. Hire our Magento developers who can develop a new eCommerce platform from the scratch using Magento 2.0 and also can convert the store from Magento 1.x to Magento 2.0. Our certified Magento developers make sure to maintain the highest quality standards by using aesthetically pleasing plugins and extensions of Magento. No matter how big or small the project is, our Magento developers pay equal attention to all.</p>
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
              PSD TO MAGENTO CONVERSION</a>
            <p class="mb-4">Convert your high-quality PSD design to highly functional Magento integration solutions that will provide you the desired business growth.</p>
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
            <a href="#" class="h4 d-inline-block mb-4">MAGENTO WEBSITE DEVELOPMENT</a>
            <p class="mb-4">We provide a more powerful and intuitive Magento eCommerce development for your business so you can have more control over business work-flow.</p>
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
            <a href="#" class="h4 d-inline-block mb-4">MAGENTO 2.0 MIGRATION</a>
            <p class="mb-4">If you are looking out for migrating to Magento 2.0, we will provide you with all the Magento 2.0 website development services that can enhance your online store.</p>
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
            <a href="#" class="h4 d-inline-block mb-4">CUSTOM E-COMMERCE SOLUTIONS</a>
            <p class="mb-4">We provide our clients with fully customized eCommerce solutions to suit their specific business needs including CRM, payroll, accounting and more.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-solid fa-swatchbook"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">RESPONSIVE MAGENTO SITES</a>
            <p class="mb-4">Take advantage of the explosive growth in mobile commerce with end-to-end responsive Magento websites that display your website across all types of devices.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-solid fa-link"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">MAGENTO THEME DEVELOPMENT</a>
            <p class="mb-4">Every brand requires a distinctive layout and we ensure our clients a strong global existence and widest customer reach with precise theme development services.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-brands fa-magento"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">CUSTOM MAGENTO WEB DEVELOPMENT</a>
            <p class="mb-4">Whether you want simple or complex functional requirements, our custom Magento development assures to provide a robust, flexible and custom eCommerce platform</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-solid fa-shield-halved"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">INTEGRATING SECURE PAYMENT</a>
            <p class="mb-4">We maintain a secure transaction environment for the customers by implementing PCI compliant Payment Bridge with Magento Enterprise.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-brands fa-intercom"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">CUSTOM MAGENTO EXTENSION DEVELOPMENT</a>
            <p class="mb-4">We develop custom qualitative Magento extensions with great care and specific detail that perfectly fit your unique eCommerce store needs and requirements.</p>
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
    <h2>Why Nettechnocrats for Magento Web Development Services?</h2>

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
            <img src="{{ asset('assets/web/megento-nettechnocrats.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

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