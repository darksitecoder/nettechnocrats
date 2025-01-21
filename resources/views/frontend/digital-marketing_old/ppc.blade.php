 <!DOCTYPE html>
@extends('layouts.app')

@section('title', 'PPC Services')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')

@section('content')


 <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

 <main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section">

   <div class="hero__banner__base" style="background: url('{{ asset('assets/web/smm-banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
    <div class="container">
     <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
       <h1>Boosting Brand Presence: The Power of Managed PPC Services
        Click. Convert. Celebrate</h1>
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
    <h2><strong>Elevate Your Brand with Expert PPC Services</strong></h2>
    <p>Maximize Visibility and Drive Targeted Traffic with a Top-tier PPC Management Company</p>
   </div><!-- End Section Title -->

   <div class="container">

    <div class="row gy-4">

     <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
      <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> -->
      <p class="pt-3">
       Nettechnocrats is your trusted partner for elite PPC Services, bridging the gap between your offerings and potential customers actively searching for them. As a leading PPC Management Company, we’ve teamed up with a diverse range of businesses, boosting their leads, elevating brand recognition, and meeting their objectives.
       <br>
       Over time, our dedicated team has not only refined the nuances of what PPC entails but also how to deploy it most effectively for varied industries. If the realm of pay-per-click advertising seems intricate, our PPC Management Company is poised to demystify it for you.
      </p>
      <p>
       <strong>Harness the Potential of PPC Services</strong>
       <br>
       Dive deep into the potential of PPC and let us steer your brand to uncharted territories. With the expertise of our seasoned professionals, embark on a journey of unparalleled digital growth support from our adept PPC Services team today.
      </p>

      <a href="#" class="contact__btn mt-5">Talk to our consultant</a>
     </div>

     <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
      <div class="seo__animation__gif">
       <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/561e24bf-9e13-4d14-b554-03b6c14f0a5a/7zodfqOj7e.json" background="##FFFFFF" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player>
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
  <section id="hero1" class="hero1 section">

   <div class="py-4" style="background-color: rgba(50,197,181,0.2);">
    <div class="row gy-4 py-5" style="background: url('{{ asset('assets/web/dot-shape.png') }}');">
     <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center px-5" data-aos="fade-up">
      <h1 class="text-center">Your Search for PPC Management Services Ends with Nettechnocrats</h1>
      <!-- <p class="text-center px-5"><strong>Our Exceptional SEO Services Redefined!</strong></p> -->
      <p class="text-center px-5">No more hours lost in Google Ads! Partner with Nettechnocrats, and we’ll manage the nitty-gritty of PPC for you. We’ll keep you in the loop with easy-to-understand reports, and you can chat with your dedicated manager anytime about your strategy and goals.</p>
      <p class="text-center px-5">Our team of experts, backed by powerful tools, ensures your campaigns are smart from the get-go. Our clients, on average, witness an incredible boost in their PPC results. It’s about getting more for less.</p>

     </div>
    </div>

   </div>

  </section>
  <!-- Consultent -->

  <!-- Services Section -->
  <section id="services" class="services section light-background">

   <!-- Section Title -->
   <div class="container section-title" data-aos="fade-up">
    <span>Services</span>
    <h2>OUR SMO APPROACH</h2>
    <p class="fs-5"><strong> Empower Your Business with Our SMO Services Expertise</strong></p>
    <p class="fs-5">Our Social media approach for businesses are provided through several stages. Such effective approaches
     make us the preferred social media marketing firm.</p><br />
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
        <h3>Bing & Google Ads Management</h3>
       </a>
       <p><strong>"Optimize Every Outcome."</strong><br></strong><br />
        We pit campaign variations against each other, assessing layout, imagery, and content. Drawing from these insights, we refine your PPC ads for peak performance.</p>
      </div>
     </div><!-- End Service Item -->

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-regular fa-copyright"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>Social Media Advertising</h3>
       </a>
       <p><strong>"Socialize Your Sales."</strong><br />
        Harness the power of social platforms. With 54% of users researching products on social media, we craft compelling content that bolsters brand engagement and reach.</p>
      </div>
     </div><!-- End Service Item -->

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-solid fa-arrows-to-circle"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>Remarketing Campaigns</h3>
       </a>
       <p><strong>"Recapture, Reengage."</strong><br />
        Target those who've shown interest. Our approach refines ad frequency, ensuring you remain top of mind without overwhelming your audience.</p>
      </div>
     </div><!-- End Service Item -->

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-solid fa-people-group"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>Amazon PPC</h3>
       </a>
       <p><strong>"Maximize Your Marketplace."</strong><br />
        Enhance your Amazon presence with our AI-driven approach. From keyword strategies to budgeting, we drive ROI by placing your products in front of keen shoppers.</p>
       <a href="service-details.html" class="stretched-link"></a>
      </div>
     </div><!-- End Service Item -->

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-solid fa-bars-staggered"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>YouTube Ads</h3>
       </a>
       <p><strong>"Visualize Victory."</strong><br />
        Captivate with compelling YouTube content. Our approach focuses on storytelling, crafting ads that resonate and engage your target audience effectively.</p>
       <a href="service-details.html" class="stretched-link"></a>
      </div>
     </div><!-- End Service Item -->

     <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
      <div class="service-item position-relative">
       <div class="icon">
        <i class="fa-solid fa-magnifying-glass-chart"></i>
       </div>
       <a href="service-details.html" class="stretched-link">
        <h3>Conversion Rate Optimization (CRO)</h3>
       </a>
       <p><strong>"Engage. Convert. Repeat."</strong><br />
        Attract and captivate your audience at pivotal moments. From crafting compelling ads to refining landing page designs, we enhance your Quality Score and drive conversions.</p>
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
       <h3>Our Customized PPC Plans – What all you
        need to Know?</h3>
       <p>Experience tailored pay-per-click solutions with Nettechnocrats, a leading PPC Management Company. We understand that every business, audience, and market had its unique nuances. Our 12+ years in the industry and status as a Google Premier Partner have reinforced our belief in building PPC strategies around your business rather than forcing your business into a pre-set plan. Discover the potential of our personalized plans and comprehensive PPC Services:</p>
      </div>
      <ul class="call_action_list">
       <li>Comprehensive keyword research and selection</li>
       <li>Analysis of competitors and industry</li>
       <li>Evidence-based keyword strategies</li>
       <li>Continuous Ad strategy supervision and enhancement</li>
       <li>End-to-end ROI tracking and customer journey insights</li>
       <li>Ad copy designed for conversions and performance</li>
       <li>Support from our extensive team of strategists</li>
       <li>Detailed reports on ad campaign performance and revenue outcomes</li>
      </ul>
      <a class="cta-btn" href="#">Talk with our PPC Expert
      </a>
     </div>
    </div>
   </div>

  </section><!-- /Call To Action Section -->


  <section class="portfolio-slider">
    <div class="slider owl-carousel">
      @foreach($datas as $data)
      <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">

        <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
          <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
          <div class="h4 text-center">
            <p class="fs-1 m-0 p-0 text-white">320%</p>
            <p class=" m-0 p-0 text-white">Website Leads</p>
          </div>
        </div>
        <div class="rounded-bottom text-center pt-3">
          <a class="btn btn-primary rounded-pill py-2 px-4" href="{{url('portfolio_seo_detail/'.$data->id)}}">SEE CASE STUDY</a>
        </div>
        <div class="rounded-bottom text-center pt-3">
          <p class="text-center p-0 m-0 fw-bold text-white">{{$data->company_name}}</p>
          <p class="mb-4 p-0 m-0 fw-bold text-white">| {{$data->industry}} |</p>
        </div>
      </div>
      @endforeach
    </div>
  </section>

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
       <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c3c3b494-acaf-42be-a42f-80f5c3f5b6e6/BIFg8v75Lq.json" background="##fff" speed="1" style="width: 100%; height: 100%" loop autoplay direction="1" mode="normal"></lottie-player>
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
       <h3>Ready To Get Started?</h3>
       <p>Stay ahead from Crowd. We have an expert team of application developers who are experienced and proficient. We have good experience in bespoke web and mobile app development and are committed to delivering the best of the class solutions.</p>
       <a class="cta-btn" href="#">Request a Quote
       </a>
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

 @endsection



</body>

</html>