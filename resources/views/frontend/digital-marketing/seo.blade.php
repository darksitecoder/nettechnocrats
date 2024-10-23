<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEO Services</title>

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
        <h2>What sets<br> <strong>our company apart?</strong></h2>
        <p>We have already spent enough years in SEO, ensuring that we understand the algorithm employed by all the major search engines. That's why we are consistently able to achieve positive results for our clients. </p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('assets/web/seo-banner.png') }} " class="img-fluid" alt="">
            <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a> -->
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> -->
            <p class="fst-italic">
              There is no shortage of SEO consultants and experts offering SEO services in India, but only a few of them have enough skills and experience to match with Nettechnocrats. Backed by a pool of SEO experts, we help you develop a unique strategy and plan so that you know what you exactly need to do to get higher rankings. We execute the best plan for you and help to get the top position in the marketplace.
            </p>
            <p>
              Standing out in Google is no easy feat, it requires lots of efforts and strategies. But with a leading SEO company like us, we assure to make it happen.
            </p>
            <p>
              We take a consultative approach with clients. Our client's SEO marketing needs are paramount and that's why we work closely with you at every step of SEO process. Our SEO services are proven to bring more traffic on the website from the search engines and resulting in more customers, sales and ROI.
            </p>
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
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Consultent -->
    <section id="hero" class="hero section">

      <div class="py-4" style="background-color: var(--background-color);">
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

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Services</span>
        <h2>Services</h2>
        <p>Why Choose Us For SEO Services?</p>
        <p class="fs-5">In the dynamic domain of SEO, our history is rich with over two decades of proficiency. As a forefront SEO company, we’ve seamlessly blended deep-rooted expertise with agility, navigating through the intricate terrains of search engine algorithms and user behaviours. Our commitment isn’t just about recalling the past—it’s about constantly driving towards unparalleled excellence. With rigorous attention to keyword research and a constant ear to the industry’s heartbeat, our SEO services are meticulously curated and unparalleled in delivery.</p><br />
        <p class="fs-5">
          Be it an ambitious startup eager to etch its digital footprint or an established brand aspiring to refurbish its SEO techniques and fortify its online presence, our holistic SEO services are your passport to digital triumph. Put your digital dreams in the hands of an eminent SEO company that meticulously crafts strategies tailor-made for your distinct business aspirations, and observe as we navigate your digital trajectory towards unmatched growth.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Cutting-Edge Tools</h3>
              </a>
              <p>From high-level onsite SEO evaluation tools to resources for in-depth keywords research, we have all the cutting-edge tools that you need to succeed in today's digital world.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Ethical Practices</h3>
              </a>
              <p>Being the best SEO company, we only use white-hate techniques to get your website increased rankings in search engines such as Google, Yahoo, and Bing.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Experienced Professionals</h3>
              </a>
              <p>From great social media strategy to top-notch mobile web design, our highly trained qualified SEO consultant knows how to do it all.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-bounding-box-circles"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>Transparency</h3>
              </a>
              <p>Being a professional SEO company, we submit complete, detail and fact-based SEO and analytic reports just to make our work as transparent as it could be.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-calendar4-week"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>No Lock-In Contracts</h3>
              </a>
              <p>We are so confident in our SEO services that you don't need to tie yourself into a lengthy contract. Once you see the results, we are sure that you'll continue.</p>
              <a href="service-details.html" class="stretched-link"></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-chat-square-text"></i>
              </div>
              <a href="service-details.html" class="stretched-link">
                <h3>People-Driven</h3>
              </a>
              <p>You'll meet the people who will work on your account, and they'll be the people who will be in conversation with you and send you regular updates.</p>
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



    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Section Title</span>
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