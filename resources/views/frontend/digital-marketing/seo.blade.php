@extends('layouts.app')

@section('title', 'Home Page Title')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')

@section('content')
<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section">

    <div class="">
      <div class="row gy-4">
        <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <img src="{{ asset('assets/web/seo-banner.png') }} " alt="" srcset="">

        </div>

      </div>
    </div>

  </section><!-- /Hero Section -->

  <!-- Featured Services Section -->
  <section id="featured-services" class="featured-services section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-activity icon"></i></div>
            <h4><a href="" class="stretched-link">Brand Visibility</a></h4>
            <p>Since the top positioned website results in significant impressions, having your website in these top positions on the SERPs assure more exposure of the website in front of your potential customers.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
            <h4><a href="" class="stretched-link">Increased Traffic</a></h4>
            <p>Top positions on the search engine results receive a majority of impressions and clicks, so ranking on the top may help you to get significant increases in traffic of your website. </p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
            <h4><a href="" class="stretched-link">Lead Generation</a></h4>
            <p>SEO marketing is all about getting rank on the search engine results which will help the website attract a lot of traffic and eventually convert them into leads and sales. </p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Featured Services Section -->

  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>About Us<br></span>
      <h2><strong>What sets<br> our company apart?</strong></h2>
      <p>We have already spent enough years in SEO, ensuring that we understand the algorithm employed by all the major search engines. That's why we are consistently able to achieve positive results for our clients. </p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
          <div class="seo__animation__gif">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player>
            <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> -->
          </div>
        </div>
        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
          <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> -->
          <p class="">
            There is no shortage of SEO consultants and experts offering SEO services in India, but only a few of them have enough skills and experience to match with Nettechnocrats. Backed by a pool of SEO experts, we help you develop a unique strategy and plan so that you know what you exactly need to do to get higher rankings. We execute the best plan for you and help to get the top position in the marketplace.
          </p>
          <p>
            Standing out in Google is no easy feat, it requires lots of efforts and strategies. But with a leading SEO company like us, we assure to make it happen.
          </p>
          <p>
            We take a consultative approach with clients. Our client's SEO marketing needs are paramount and that's why we work closely with you at every step of SEO process. Our SEO services are proven to bring more traffic on the website from the search engines and resulting in more customers, sales and ROI.
          </p>

          <a href="#" class="contact__btn mt-5">Talk to our consultant</a>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

<<<<<<< HEAD
  <!-- Stats Section -->
  <section id="stats" class="stats section">
=======
      <div class="py-4" style="background-color: rgba(50,197,181,0.2);">
        <div class="row gy-4 py-5" style="background: url('{{ asset('assets/web/dot-shape.png') }}');">
          <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center px-5" data-aos="fade-up">
            <h1 class="text-center">How do we help?</h1>
            <p class="text-center px-5"><strong>Our Exceptional SEO Services Redefined!</strong></p>
            <p class="text-center px-5">In today's digital-dominated world, our SEO services stand out. We elevate Brand Visibility, making your business a recognizable name in crowded markets. By optimizing your online presence, we guarantee Increased Traffic, driving potential clients to your doorstep.</p>
            <p class="text-center px-5">Beyond mere numbers, our focus on Lead Generation ensures a quality audience engages with your content. This naturally translates to Increased Sales as more visitors convert to customers. And speaking of conversion, our strategies finesse user journeys, enhancing the Conversion Rate. Simply put, we are not just about drawing crowds; we are about drawing the right crowd and ensuring they take action.</p>
>>>>>>> 9c896838ea55936ae5c0d3cc27503bc1063ab15f

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="3" class="purecounter"></span>
            <p>Clients</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="4" class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="5" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div><!-- End Stats Item -->

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="4" class="purecounter"></span>
            <p>Members</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- /Stats Section -->

  <!-- Consultent -->
  <section id="hero" class="hero section">

    <div class="py-4" style="background-color: rgba(50,197,181,0.2);">
      <div class="row gy-4 py-5" style="background: url('{{ asset('assets/web/dot-shape.png') }}');">
        <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <h1 class="text-center">How do we help?</h1>
          <p class="text-center"><strong>Our Exceptional SEO Services Redefined!</strong></p>
          <p class="text-center">In today’s digital-dominated world, our SEO services stand out. We elevate Brand Visibility, making your business a recognizable name in crowded markets. By optimizing your online presence, we guarantee Increased Traffic, driving potential clients to your doorstep.</p>
          <p class="text-center">Beyond mere numbers, our focus on Lead Generation ensures a quality audience engages with your content. This naturally translates to Increased Sales as more visitors convert to customers. And speaking of conversion, our strategies finesse user journeys, enhancing the Conversion Rate. Simply put, we are not just about drawing crowds; we are about drawing the right crowd and ensuring they take action.</p>

        </div>
      </div>

    </div>

  </section>
  <!-- Consultent -->

  <!-- <section class="our__clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <div class="wheel">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
            <div class="cabin"><img src="{{ asset('assets/web/google__ads.png') }} " alt="" srcset=""></div>
            <div class="cabin"></div>
            <div class="cabin"></div>
            <div class="cabin"></div>
            <div class="cabin"></div>
            <div class="cabin"></div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <span>Services</span>
      <h2>Tailored SEO Solutions for Every Business Need</h2>
      <p>Why Choose Us For SEO Services?</p>
      <p class="fs-5">In the dynamic domain of SEO, our history is rich with over two decades of proficiency. As a forefront SEO company, we’ve seamlessly blended deep-rooted expertise with agility, navigating through the intricate terrains of search engine algorithms and user behaviours. Our commitment isn’t just about recalling the past—it’s about constantly driving towards unparalleled excellence. With rigorous attention to keyword research and a constant ear to the industry’s heartbeat, our SEO services are meticulously curated and unparalleled in delivery.</p><br />
      <!-- <p class="fs-5">
        </p> -->
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-shop-lock"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Local SEO</h3>
            </a>
            <p>Expand your local footprint! Reach out to your immediate audience seamlessly and make your mark in your neighborhood. Be the local buzz!</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-brands fa-amazon"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Amazon SEO</h3>
            </a>
            <p>Navigate the giant e-commerce platform effortlessly. Skyrocket your products' visibility amidst millions and drive stellar sales on Amazon. </p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>E-commerce SEO</h3>
            </a>
            <p>Optimize your online store for maximum visibility. Attract, engage, and convert your site visitors into loyal customers. Boost your online sales!</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-gears"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Technical SEO</h3>
            </a>
            <p>Dive deep into the backend of your website. Enhance its functionality, speed, and overall user experience. Make your website loved not just by users but by search engines too!</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-brands fa-wix"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>WIX SEO</h3>
            </a>
            <p>Wix SEO is a powerful tool that empowers website owners to optimize their online presence effortlessly.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-brands fa-wordpress"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>WordPress SEO</h3>
            </a>
            <p>When it comes to optimizing your WordPress website for search engines, look no further than our WordPress SEO agency.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-brands fa-shopify"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Shopify SEO</h3>
            </a>
            <p>Shopify SEO is a critical component of driving organic traffic and increasing visibility for your online store on the Shopify platform.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-brands fa-squarespace"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Squarespace SEO</h3>
            </a>
            <p>Our Squarespace SEO services encompass a range of strategies and techniques to ensure your website ranks higher.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-mobile-screen-button"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Mobile SEO</h3>
            </a>
            <p>Our Squarespace SEO services encompass a range of strategies and techniques to ensure your website ranks higher.</p>
            <a href="service-details.html" class="stretched-link"></a>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->

  <!-- Call To Action Section -->
  <section id="call-to-action" class="call-to-action section accent-background">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Now When You Know All <span>About Our Brilliance </span></h3>
            <p>Let's Connect to discuss your <strong>SEO Services</strong> project.</p>
            <p><strong>Go Ahead & Fill The Form Below</strong></p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>
      </div>
    </div>

  </section><!-- /Call To Action Section -->

  <section class="light-background why__choose__Net">
    <div class="container">
      <h2>Why Nettechnocrats for Digital Marketing Services?</h2>
      <p>Be it an ambitious startup eager to etch its digital footprint or an established brand aspiring to refurbish its SEO techniques and fortify its online presence, our holistic SEO services are your passport to digital triumph. Put your digital dreams in the hands of an eminent SEO company that meticulously crafts strategies tailor-made for your distinct business aspirations, and observe as we navigate your digital trajectory towards unmatched growth.</p>
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
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/578e205c-f7c1-49b6-936b-691653dfbb40/gP7yHNusgA.json" background="##fff" speed="1" style="width: 100%; height: 100%" loop autoplay direction="1" mode="normal"></lottie-player>

      </div>
    </section>

   

  @include('frontend/portfolio/contact_form');

 
</main>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection
