@extends('layouts.app')

@section('title', 'Seo services')

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
          <h1 class="display-5 mb-4 text-white">WordPress Development Services</h1>
          <p class="mb-4 text-white">We at Nettechnocrats help you with custom WordPress theme development</p>
        </div>

        <section id="contact" class="contact__section">

          <!-- Section Title -->
          <div class="container section-title" data-aos="fade-up">

          </div><!-- End Section Title -->

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

        </section>
      </div>
      <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
        <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
          <img src="{{ asset('assets/web/sharepoint.webp') }}" class="img-fluid rounded " alt="">
          <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid about py-5">
  <div class="container py-5">

    <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
      <h2 class="display-5 mb-4">WordPress Development Services</h2>
      <p class="mb-0">Nettechnocrats is a leading WordPress development company in India offering cutting edge solutions
        in building, customizing and implementing a WooCommerce platform for diverse industries.</p>
    </div>
    <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-6 wow fadeInLeft">
        <div>
          <!-- <h4 class="text-primary1">About Us</h4> -->
          <p class="mb-4 fw-bold fs-3">What is WordPress Development?</p>
          <p class="mb-4">Nettechnocrats is a leading WordPress development company in India offering cutting edge solutions in building, customizing and implementing a WooCommerce platform for diverse industries. WordPress is an open source blogging platform that uses PHP coding and enormously popular among developers and users due to their functionalities and features. We have a great understanding of WooCommerce plug-ins and extensions along with some essential factors of e-commerce that includes UX and interaction design. Using the power, scalability, and flexibility that WordPress offers, our veteran team of custom WordPress development professionals delivers a customized solution that makes you stand out from your competitors.</p>
          <p class="mb-4">We at Nettechnocrats help you with custom WordPress theme development to meet all your design expectations and also stay consistent with your brand goals. Moreover, by offering World Class WordPress website design solutions for all your business needs, with prompt service and an added value, we assure 100% clients’ satisfaction.</p>

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
            <a href="#" class="h4 d-inline-block mb-4">TEMPLATE INTEGRATION</a>
            <p class="mb-4">Choosing the right WooCommerce theme will naturally be very subjective. Experienced website designers at Nettehnocrats offer you bespoke WordPress theme development solution, especially for your business.</p>
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
            <a href="#" class="h4 d-inline-block mb-4">WORDPRESS IMPLEMENTATION</a>
            <p class="mb-4">WordPress implementation is all about creating things with WordPress, so you have the right configuration and the best tool to grow your blog. Choose unique custom WordPress themes and plugins to get a custom website.</p>
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
            <a href="#" class="h4 d-inline-block mb-4">WORDPRESS EXISTING MODIFICATION</a>
            <p class="mb-4">Embed new WordPress website design into your existing one and create a richer and more enjoyable experience. Let us help you get a robust and secure website that meet your projects’ demands as closely as possible.</p>
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
            <a href="#" class="h4 d-inline-block mb-4">CUSTOM PLUGIN DEVELOPMENT</a>
            <p class="mb-4">Ensure great profits through smart and well-placed plugins that are of high impact as well as productivity. We provide versatile and significant WordPress Plugin development services that can take your website to the next level.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-solid fa-swatchbook"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">DEVELOPMENT & DESIGN</a>
            <p class="mb-4">Increase your operative competence with a well-designed and functional CMS that uses proper functions, advanced technology, and trends for the CMS development work. We can assist you in making the most of this platform.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-solid fa-link"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">PSD TO WORDPRESS</a>
            <p class="mb-4">PSD to WordPress web development assistance ushers the way for a fully-functional and striking website. We ensure a seamless conversion for this and provide a fully functional and custom website at an affordable cost.</p>
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
    <h2>Why Nettechnocrats for WordPress Development Services?
    </h2>

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