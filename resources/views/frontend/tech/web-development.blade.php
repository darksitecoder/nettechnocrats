<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Trusted Web Development Company | Expert Website Development Services</title>
  <meta name="description" content="We are a professional web development company with a team of expert web developers. Hire Developers for custom web solutions." />
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/web/favicon.webp') }}">
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
    .types__seo .col-xl-6 p {
      padding: 5px 5px;
      height: 80px;
      border: 1px solid black;
      margin: 0px 10px;
      display: flex;
      align-items: center;
    }

    .types__seo {
      margin: 20px 0px;
    }

    .service .service-item {
      height: 600px;
    }
  </style>
  @include('partial/google_analytics')
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
            <h1 class="display-5 mb-4 text-white">Web Development Services</h1>
            <p class="mb-4 text-white">Open-Source Solutions To Build Your Business Websites</p>
            @include('partial/proposal')
          </div>
        </div>
        <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
          <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
            <img src="{{ asset('assets/web/mobile-app-development-illustration-download-in-svg-png-gif-file-formats--application-programming-developer-pack-people-illustrations-3874584.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="Web Development Services">
            <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid service py-5">
    <div class="container pb-5">
      <h3 class="mb-4 fw-bolder fs-1 text-center">We build Business with a 360-degree solution to grow your brand online</h3>
      <p class="mb-4  text-center">Nettechnocrats is focused to provide web development solutions. Having in the biz since 2010, we understand what it takes to deliver effectively optimized website solutions. Being knowledgeable, skilful, and experienced, we provide an excellent website development service that includes:</p>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-item">
            <div class="service-img">
              <i class="fa-solid fa-microchip"></i>
            </div>
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4">Web Portal Development</a>
              <p class="mb-4">Turn your ideas into the real world with the exceptional web portal development that consists of ENTERPRISE PORTAL DEVELOPMENT, B2B CUSTOMER PORTAL along B2C PORTAL DEVELOPMENT, SERVICE PORTAL, PARTNER PORTAL, COMMUNITY PORTAL, eLEARNRING PORTAL etc. At Nettechnocrats, our pool of experts constructs website portal with the use of expertise and brings a functional website that delivers the feature-rich solution.</p>
              <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
          <div class="service-item">
            <div class="service-img">
              <i class="fa-solid fa-tachograph-digital"></i>
            </div>
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4">CMS Development</a>
              <p class="mb-4">Customized functionality that has unmatched security along with full ownership is everything a client or customer looking ahead for CMS development requires. Nettechnocrats offers CMS services that facilitate you to update, modify, and create digital content, business data, and other essential information on the website. The database-driven nature of a CMS also gives us the capability to develop useful features for your site, like eCommerce capabilities, news posting, and social networking elements etc.</p>
              <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
          <div class="service-item">
            <div class="service-img">
              <i class="fa-solid fa-cash-register"></i>
            </div>
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4">E-Commerce Development</a>
              <p class="mb-4">We understand that a robust eCommerce and Marketplace serves the foundation of your online retail business. We create a custom-designed eCommerce website with a high-level of security and scalability that is capable of functionally-streamline the trade. Our eCommerce solutions offer the best in standard features while remaining agile and completely customizable. Our team discusses functionality needs to tailor a solution that matches your brand and eCommerce goals.</p>
              <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-item">
            <div class="service-img">
              <i class="fa-solid fa-shield-halved"></i>
            </div>
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4">Website Maintainance</a>
              <p class="mb-4">We are offering a complete website maintenance service in which our expert will regularly monitor the website, fix bugs and errors, database backups, upgrade versions, content update, troubleshooting, security check, feature enhancement in the existing website, maintain ranking the website by following google guidelines etc.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-item">
            <div class="service-img">
              <i class="fa-solid fa-building"></i>
            </div>
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4">Enterprise Web Development</a>
              <p class="mb-4">Our web development firm holds expertise in developing a website or an application for an enterprise-level business that are agile and versatile to work on both web and mobile devices. We have expertise in developing enterprise websites, enterprise web application development, and enterprise software development.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-item">
            <div class="service-img">
              <i class="fa-solid fa-business-time"></i>
            </div>
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4">B2B and B2C Portal</a>
              <p class="mb-4">Nettechnocrats is one of the best portal development services that develop a portal according to the customer’s business requirement and provide them a custom, scalable, robust, secure, responsive etc which help them to sustain this competitive world.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-item">
            <div class="service-img">
              <i class="fa-solid fa-tape"></i>
            </div>
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4">API Development</a>
              <p class="mb-4">API or Application Programming Interface development is one of the important needs of businesses to offer their service on mobile devices to reach more users or customers. Nettechnocrats provides the best custom API development and integration solution which helps clients to showcase their presence in Mobile App stores.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>


  <div class="container-fluid offer-section py-5">
    <div class="container pb-5">
      <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
        <h3 class="display-5 mb-4 fw-bolder">As a leading website development firm, we provide industry expertise to take your business to the next level.</h3>
      </div>
      <div class="row g-5 align-items-center">
        <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
          <div class="nav nav-pills rounded p-5" style="background-color: rgb(212 241 228);">
            <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
              <h5 class="mb-0">Enterprise Web Development</h5>
            </a>
            <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
              <h5 class="mb-0">Intranet Development</h5>
            </a>
            <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
              <h5 class="mb-0">Technology Consulting</h5>
            </a>
            <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFour">
              <h5 class="mb-0">
                Enterprise Web Development</h5>
            </a>
            <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFive">
              <h5 class="mb-0">Third-Party Integration</h5>
            </a>
          </div>
        </div>
        <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
          <div class="tab-content">
            <div id="collapseOne" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div class="col-md-12">
                  <h1 class="display-5 mb-4">Enterprise Web Development</h1>
                  <p class="mb-4">The credit goes to our proficient programmers holding ample experience in writing error-free codes for creating feature-rich Website</p>
                </div>
              </div>
            </div>
            <div id="collapseTwo" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-md-12">
                  <h1 class="display-5 mb-4">Intranet Development</h1>
                  <p class="mb-4">The credit goes to our proficient programmers holding ample experience in writing error-free codes for creating Intranet Development software</p>
                </div>
              </div>
            </div>
            <div id="collapseThree" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-md-12">
                  <h1 class="display-5 mb-4">Technology Consulting</h1>
                  <p class="mb-4">We offer Technology Consulting services to our worldwide client to server them better.</p>
                </div>
              </div>
            </div>
            <div id="collapseFour" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-md-12">
                  <h1 class="display-5 mb-4">Product Reengineering</h1>
                  <p class="mb-4">Product Reengineering is our core part of the company. we use below technologies for Product Reengineering/reverse engineering.</p>
                </div>
              </div>
            </div>
            <div id="collapseFive" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-md-12">
                  <h1 class="display-5 mb-4">Third-Party Integration</h1>
                  <p class="mb-4">We do seemless Third-Party Integration for exisitn projects. Below are the technologies for third party integrations.</p>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid about py-5">
    <div class="container py-5">

      <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100">
        <h2 class="display-5 mb-4">Sneak peek of our Website Development Cycle</h2>
        <p class="mb-0">Development of a website is a long-time consuming process. The overall development of the website generally follows major steps.</p>
      </div>
      <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 wow fadeInLeft">
          <div>
            <h4 class="text-primary1">Gathering information</h4>
            <!-- <p class="mb-4 fw-bold fs-3">What is Laravel Web Development ?</p> -->
            <p class="mb-4">To create a website, primarily we start with “DRD”. This means, we discover, research and determine and hence gather entire information to create a website for the esteemed customer.</p>
            <h4 class="text-primary1">The Planning</h4>
            <!-- <p class="mb-4 fw-bold fs-3">What is Laravel Web Development ?</p> -->
            <p class="mb-4">second stage includes planning. Based on the information that we gathered in the first cycle, our team gather the sitemap. Nettechnocrats site map describes the relation of major things on the website. A site map allows our customers to understand the look and inner structure of the website.</p>
          </div>
        </div>
        <div class="col-xl-6 d-flex justify-content-center wow fadeInRight" data-wow-delay="0.2s">
          <div class="rounded position-relative overflow-hidden">
            <img src="{{ asset('assets/web/custom_app.webp') }}" class="img-fluid rounded image-with-shadow" alt="Custom app" style="width:150px;">

          </div>
        </div>
      </div>
      <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-6 d-flex justify-content-center wow fadeInRight" data-wow-delay="0.2s">
          <div class="rounded position-relative overflow-hidden">
            <img src="{{ asset('assets/web/price_icon.webp') }}" class="img-fluid rounded image-with-shadow" alt="price" style="width:150px;">

          </div>
        </div>
        <div class="col-xl-6 wow fadeInLeft">
          <div>
            <h4 class="text-primary1">Web Development Coding and Development</h4>
            <p class="mb-4">At this cycle, we finally start creating the website. We use the graphic elements and start creating the home page along with other pages as per the sitemap.</p>
            <h4 class="text-primary1">Testing</h4>
            <!-- <p class="mb-4 fw-bold fs-3">What is Laravel Web Development ?</p> -->
            <p class="mb-4">Testing is probably the most important cycle of website development followed by Nettechnocrats. Our tester checks every single link and makes sure that there is no broken link. The tester checks every script, run a spell check software, and use code valuators’ to find if the coding has been done according to coding standards.</p>
          </div>
        </div>


      </div>
      <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">

        <div class="col-xl-6 wow fadeInLeft">
          <div>
            <h4 class="text-primary1">Review and Launch</h4>
            <p class="mb-4">Retention of customers is at the heart of our digital marketing solutions in maintaining and building communication with your existing customer base. We make use of special designed continual engagement tactics, as well as conversion rate optimization services to ensure that visitors do exactly what you want them to.</p>
            <p class="mb-4">Retention of customers is at the heart of our digital marketing solutions in maintaining and building communication with your existing customer base. We make use of special designed continual engagement tactics, as well as conversion rate optimization services to ensure that visitors do exactly what you want them to.</p>
          </div>
        </div>
        <div class="col-xl-6 d-flex justify-content-center wow fadeInRight" data-wow-delay="0.2s">
          <div class="rounded position-relative overflow-hidden">
            <img src="{{ asset('assets/web/custom_app.webp') }}" class="img-fluid rounded image-with-shadow" alt="Custom App" style="width:150px;">

          </div>
        </div>

      </div>


    </div>
  </div>


  <section id="call-to-action" class="call-to-action section accent-background">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Web Application Development Samples</h3>
            <p>We have served 2500+ clients globally and completed 4200+ projects for them. Checkout some of the best custom web development case studies here:</p>
            <a class="cta-btn" href="{{ url('contact-us.php')}}">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

  </section>


  <div class="container-fluid service py-5">
    <div class="container pb-5">
      <h3 class="mb-4 fw-bolder fs-1 text-center">Speedy, Secure & Responsive Web Development</h3>
      <p class="mb-4  text-center">At Nettechnocrats, we provide speedy, secure and responsive web design to our clients that comply with all the preset standards to deliver exceptional results. Some of the important perquisites of our developed website are the following:</p>
      <div class="row g-4">
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-item">
            <div class="service-img">
              <i class="fa-solid fa-microchip"></i>
            </div>
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4">Quick And Easy Navigation</a>
              <p class="mb-4">The visitors must easily access your website. Our front end web developers develop the website with a friendly navigation scheme including a call to actions and easy-to-understand labels which allows the visitors to navigate the website quickly. If the website comprises a plethora of content, we also recommend clients to use a search box to make it faster to reach more specific pages within a website.</p>
              <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
          <div class="service-item">
            <div class="service-img">
              <i class="fa-solid fa-tachograph-digital"></i>
            </div>
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4">High Loading Speed</a>
              <p class="mb-4">Your visitors can get frustrated if your website takes a bit longer to load. Beautiful graphics and substantial content will be useless if the website speed hampers its speed to load content quickly. Being an experienced web development company, we make sure to minimize all the controllable factors slowing down the speed of the website by using reliable site hosting, proper coding, and optimized graphics.</p>
              <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
          <div class="service-item">
            <div class="service-img">
              <i class="fa-solid fa-clock"></i>
            </div>
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4">High-Security Protocols</a>
              <p class="mb-4">As digital channels are growing for commerce, so does the chances of fraud to thrive. Security is of paramount for your business website. In order to outpace all those frauds and thefts, our back-end developers always implement stringent security protocols and encryption to protect your website from identity theft, data theft as well as any type of fraud transactions.</p>
              <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  <!-- Offer End -->


  <section class="light-background why__choose__Net">
    <div class="container">
      <h2>Why Nettechnocrats for Web Application Development Services ?</h2>
      <p>If you require enterprise Web application development services from the experts, Nettechnocrats perfectly fits into your requirements. Our Web Application experts have hands-on expertise in delivering diverse range of projects for enterprise business clients. Our robust app solutions enable you unlock the real potential of Web Application for attracting improved profitability and augmented growth for your business. Here’s why Nettechnocrats is the most sought-after mobility solutions provider:</p>
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
              <img src="{{ asset('assets/web/ecommerce-nettechnocrats.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="Ecommerce App">

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
        <div class="brands"><img src="{{ asset('assets/web/common-img/Coca-Cola.webp') }}" alt="Coca Cola" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/5-1.webp') }}" alt="Slimbroswer" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/7-1.webp') }}" alt="Dcatalog" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/8-1.webp') }}" alt="Lexus" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/9-1.webp') }}" alt="MensUSA" srcset=""></div>
      </div>
      <div class="img__row">
        <div class="brands"><img src="{{ asset('assets/web/common-img/10-1.webp') }}" alt="MADStyle" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/11-1.webp') }}" alt="MRKT360" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/bjp-1.webp') }}" alt="BJP" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/bubble.webp') }}" alt="Bubble" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/chemists-world.webp') }}" alt="Chemistsworld" srcset=""></div>
      </div>
      <div class="img__row">
        <div class="brands"><img src="{{ asset('assets/web/common-img/dbl-1.webp') }}" alt="DUNLAP" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/omni-1.webp') }}" alt="MniSecure" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/Preapps.webp') }}" alt="Preapps" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/tolo-1.webp') }}" alt="ToloToys" srcset=""></div>
        <div class="brands"><img src="{{ asset('assets/web/common-img/1-1.webp') }}" alt="" srcset="ZANGI"></div>
      </div>
    </div>
  </section>

  <!-- FAQs Start -->

  <!-- FAQs End -->


  <!-- Call To Action Section -->
  <section id="call-to-action" class="call-to-action section accent-background">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Ready To Get Started?</h3>
            <p>Stay ahead from Crowd. We have an expert team of application developers who are experienced and proficient. We have good experience in bespoke web and mobile app development and are committed to delivering the best of the class solutions.</p>
            <a class="cta-btn" href="{{ url('contact-us.php')}}">Contact Us</a>
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