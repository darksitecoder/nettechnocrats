<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Online Reputation Management</title>

 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous"
  referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">

 <!-- Vendor CSS Files -->
 <link href="{{ asset('js/vendor/bootstrap-icons/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('js/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
 <link href="{{ asset('js/vendor/aos/aos.css') }}" rel="stylesheet">
 <link href="{{ asset('js/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
 <link href="{{ asset('js/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

 <!-- Main CSS File -->
 <link href="{{ asset('style/web/seo-services/main.css') }}" rel="stylesheet">

</head>

<body>
 @include('partial/header')
 <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

 <main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section">

   <div class="hero__banner__base" style="background: url('{{ asset('assets/web/smm-banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
    <div class="container">
     <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
       <h1 style="font-size: 38px;">ORM Services That Define Excellence</h1><br>
       <p style="font-size: 25px;">Experience the Pinnacle of Online Reputation Management Services with Nettechnocrats. <br /><br>
        <strong>Precision. Protection. Perfection.</strong>
       </p>
      </div>
      <div class="col-lg-6 order-2 order-lg-1 d-flex justify-content-end" data-aos="fade-up">
       <img class="hero__image pe-3" src="{{ asset('assets/web/smm-banner-img.png') }} " alt="" srcset="">
      </div>

     </div>
    </div>
   </div>

  </section><!-- /Hero Section -->

  <!-- Featured Services Section -->
  <!-- <section id="featured-services" class="featured-services section">

   <div class="container">

    <div class="row gy-4">

     <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
      <div class="service-item position-relative">
       <div class="icon"><i class="bi bi-activity icon"></i></div>
       <h4><a href="" class="stretched-link">Brand Visibility</a></h4>
       <p>Since the top positioned website results in significant impressions, having your website in these top positions on the SERPs assure more exposure of the website in front of your potential customers.</p>
      </div>
     </div>

     <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
      <div class="service-item position-relative">
       <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
       <h4><a href="" class="stretched-link">Increased Traffic</a></h4>
       <p>Top positions on the search engine results receive a majority of impressions and clicks, so ranking on the top may help you to get significant increases in traffic of your website. </p>
      </div>
     </div>

     <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
      <div class="service-item position-relative">
       <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
       <h4><a href="" class="stretched-link">Lead Generation</a></h4>
       <p>SEO marketing is all about getting rank on the search engine results which will help the website attract a lot of traffic and eventually convert them into leads and sales. </p>
      </div>
     </div>

    </div>

   </div>

  </section> -->
  <!-- /Featured Services Section -->

  <!-- About Section -->
  <section id="about" class="about section">

   <!-- Section Title -->
   <div class="container section-title" data-aos="fade-up">
    <!-- <span>About Us<br></span> -->
    <h2><strong>Choose Nettechnocrats for Top ORM Services</strong></h2>
    <p>Your Brand’s Best Friend in the Digital World.</p>
   </div><!-- End Section Title -->

   <div class="container">

    <div class="row gy-4">

     <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
      <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> -->
      <p class="pt-3">
       Navigating the online realm can be tricky. One negative comment can overshadow a hundred good ones. But with Nettechnocrats by your side:
      </p><br />
      <p>
       <strong>We Push Back:</strong>
       Using reverse SEO, we help the good shine and the bad fade away.
      </p><br />
      <p>
       <strong>Custom Just for You:</strong>
       Our strategies are tailored to fit your specific needs.
      </p><br />
      <p>
       <strong>Always on Watch:</strong>
       Keeping an eye out 24/7, making sure your online image stays spotless.
      </p><br />
      <p>
       With Nettechnocrats, keep your reputation as stellar as your services.
      </p><br />

      <a href="#" class="contact__btn mt-5">GET IN TOUCH</a>
     </div>

     <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
      <div class="seo__animation__gif">
       <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
       <lottie-player src="https://lottie.host/abca318a-291e-4824-b5ae-eed51ec9032c/51k5jwdlmr.json" background="##FFFFFF" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player>
      </div>
     </div>
    </div>

   </div>

  </section><!-- /About Section -->

  <!-- Stats Section -->
  <section id="stats" class="stats section">

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
  <!-- <section id="hero1" class="hero1 section">

   <div class="py-4" style="background-color: rgba(50,197,181,0.2);">
    <div class="row gy-4 py-5" style="background: url('{{ asset('assets/web/dot-shape.png') }}');">
     <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center px-5" data-aos="fade-up">
      <h1 class="text-center">Your Search for PPC Management Services Ends with Nettechnocrats</h1>
      <p class="text-center px-5">No more hours lost in Google Ads! Partner with Nettechnocrats, and we’ll manage the nitty-gritty of PPC for you. We’ll keep you in the loop with easy-to-understand reports, and you can chat with your dedicated manager anytime about your strategy and goals.</p>
      <p class="text-center px-5">Our team of experts, backed by powerful tools, ensures your campaigns are smart from the get-go. Our clients, on average, witness an incredible boost in their PPC results. It’s about getting more for less.</p>

     </div>
    </div>

   </div>

  </section> -->
  <!-- Consultent -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">

   <!-- Section Title -->
   <div class="container section-title" data-aos="fade-up">
    <span>Services</span>
    <h2>Unlock Digital Potential with Online Reputation Management Services</h2>
    <p class="fs-5"><strong>Nettechnocrats ORM Services: Steering Conversations, Crafting Impressions.</strong></p>
    <p class="fs-5">In the vast expanse of the digital realm, every narrative shapes perceptions. Dive into the suite of ORM Services offered by Nettechnocrats to ensure your brand resonates with authenticity and trust.</p><br />
    <!-- <p class="fs-5">
          </p> -->
   </div><!-- End Section Title -->

   <div class="container">

    <div class="row gy-4">

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-regular fa-thumbs-up"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>Website Audits</h3>
       </a>
       <p><strong>"Diagnostic Excellence"</strong><br></strong><br />
        We delve deep, spotting both opportunities and glitches. Comprehensive scrutiny of technical aspects, on-page and off-page elements, and even competitor landscapes ensure you're always a step ahead.</p>
      </div>
     </div><!-- End Service Item -->

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-regular fa-copyright"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>Keyword Research & Analysis</h3>
       </a>
       <p><strong>"Strategic Precision"</strong><br />
        SEO hinges on pinpoint keyword targeting. We discern between mere browser magnets and genuine buyer attractors, laying the foundation for a triumphant SEO campaign.</p>
      </div>
     </div><!-- End Service Item -->

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-solid fa-arrows-to-circle"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>On-Page Optimization</h3>
       </a>
       <p><strong>"Optimized for Excellence"</strong><br />
        Adhering to Google's guidelines, we meticulously refine every page of your website, amplifying its search engine prominence.</p>
      </div>
     </div><!-- End Service Item -->

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-solid fa-people-group"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>Content Creation</h3>
       </a>
       <p><strong>"Engagement Crafted"</strong><br />
        Engaging content is the cornerstone of retention. Witness the prowess of our copywriters as they transform casual readers into committed customers.</p>
       <a href="service-details.html" class="stretched-link"></a>
      </div>
     </div><!-- End Service Item -->

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-solid fa-bars-staggered"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>Analytics Tracking</h3>
       </a>
       <p><strong>"Measurable Progress"</strong><br />
        In the world of SEO, what gets measured gets improved. Monitor rankings, referrals, and links. Quantify, assess, and adapt with our ORM Services.</p>
       <a href="service-details.html" class="stretched-link"></a>
      </div>
     </div><!-- End Service Item -->

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-solid fa-magnifying-glass-chart"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>Organic Link Building</h3>
       </a>
       <p><strong>"Building Bridges"</strong><br />
        Our strategies blend compelling content with robust link-building techniques, drawing organic links and establishing your website's authority.</p>
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
       <h3>Know More ?</h3>
       <p>With Nettechnocrats, navigate the complexities of Online Reputation Management Services, solidifying your brand's digital reputation.</p>
       <a class="cta-btn" href="#">Talk with our SEO Expert
       </a>
      </div>
     </div>
    </div>
   </div>

  </section><!-- /Call To Action Section -->

  <section class="light-background why__choose__Net">
   <div class="container">
    <h2>Why Nettechnocrats for Digital Marketing Services?</h2>
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
       <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
       <lottie-player src="https://lottie.host/3164fe9c-5f5d-4d73-8cae-c90c170f6d37/0T5PcvFgti.json" background="##FFFFFF" speed="1" style="width: 100%; height: 100%" loop autoplay direction="1" mode="normal"></lottie-player>
      </div>
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
       <h3>Count On Our Passion For Technology</h3>
       <p>Stay ahead from Crowd. We have an expert team of application developers who are experienced and proficient. We have good experience in bespoke web and mobile app development and are committed to delivering the best of the class solutions.</p>
       <a class="cta-btn" href="#">Contact us</a>
      </div>
     </div>
    </div>
   </div>

  </section><!-- /Call To Action Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

   <!-- Section Title -->
   <div class="container section-title" data-aos="fade-up">
    <span>Contact us</span>
    <h2>Contact</h2>
    <p>Fill the form for more details</p>
   </div><!-- End Section Title -->

   <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

     <div class="col-lg-5">

      <div class="info-wrap">
       <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
         <h3>Address</h3>
         <p>G-192, Sec-63, Noida, Delhi (NCR) India</p>
        </div>
       </div><!-- End Info Item -->

       <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-telephone flex-shrink-0"></i>
        <div>
         <h3>Call Us</h3>
         <p> +91-9711411002</p>
        </div>
       </div><!-- End Info Item -->

       <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-envelope flex-shrink-0"></i>
        <div>
         <h3>Email Us</h3>
         <p>sales@nettechnocrats.com</p>
        </div>
       </div><!-- End Info Item -->
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2768.1690364594565!2d77.38490257189108!3d28.617918631000588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5041555554f%3A0x6c59d83bd08b7d6f!2sNettechnocrats!5e1!3m2!1sen!2sus!4v1729664445332!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
     </div>

     <div class="col-lg-7">
      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
       <div class="row gy-4">

        <div class="col-md-6">
         <label for="name-field" class="pb-2">Your Name</label>
         <input type="text" name="name" id="name-field" class="form-control" required="">
        </div>

        <div class="col-md-6">
         <label for="email-field" class="pb-2">Your Email</label>
         <input type="email" class="form-control" name="email" id="email-field" required="">
        </div>

        <div class="col-md-12">
         <label for="subject-field" class="pb-2">Subject</label>
         <input type="text" class="form-control" name="subject" id="subject-field" required="">
        </div>

        <div class="col-md-12">
         <label for="message-field" class="pb-2">Message</label>
         <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
        </div>

        <div class="col-md-12 text-center">
         <div class="loading">Loading</div>
         <div class="error-message"></div>
         <div class="sent-message">Your message has been sent. Thank you!</div>

         <button type="submit">Send Message</button>
        </div>

       </div>
      </form>
     </div><!-- End Contact Form -->

    </div>

   </div>

  </section><!-- /Contact Section -->

 </main>
 <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 @include('partial/footer')


 <!-- <script src=""></script>
  <script src="{{ asset('js/digital-marketing/jquery/jquery.js') }}"></script>
  <script src="{{ asset('js/digital-marketing/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/digital-marketing/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/digital-marketing/animation.js') }}"></script>
  <script src="{{ asset('js/digital-marketing/imagesloaded.js') }}"></script>
  <script src="{{ asset('js/digital-marketing/custom.js') }}"></script> -->

 <!-- Vendor JS Files -->
 <script src="{{ asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('js/vendor/php-email-form/validate.js') }}"></script>
 <script src="{{ asset('js/vendor/aos/aos.js') }}"></script>
 <script src="{{ asset('js/vendor/glightbox/js/glightbox.min.js') }}"></script>
 <script src="{{ asset('js/vendor/purecounter/purecounter_vanilla.js') }}"></script>
 <script src="{{ asset('js/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
 <script src="{{ asset('js/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
 <script src="{{ asset('js/vendor/swiper/swiper-bundle.min.js') }}"></script>

 <!-- Main JS File -->
 <script src="{{ asset('js/vendor/main.js') }}"></script>

</body>

</html>