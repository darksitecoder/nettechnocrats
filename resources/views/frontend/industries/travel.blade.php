<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Website Development Company</title>
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
      height: 300px;
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
        <div class="col-xl-12 wow fadeInLeft">
          <div>
            <!-- <h4 class="text-primary1">About Us</h4> -->
            <h1 class="display-5 mb-4 text-white">Travel Website Development Company</h1>
            <p class="mb-4 text-white">World’s best travel development company providing custom solutions for your travel business!

              ​</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid pt-5">
    <div class="container py-2">
      <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-12 wow fadeInLeft">
          <div class=" rounded d-flex justify-content-center">
            <img src="{{ asset('assets/web/tour&travel.png') }}" class="img-fluid rounded" alt="" style="width: 100%; height:500px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid about py-1">
    <div class="container py-5">

      <!-- <div class=" mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="">
    <h2 class="display-5 mb-4">Healthcare SEO Company</h2>
    <p class="mb-0">Craft Excellence with Nettechnocrats</p>
   </div> -->
      <div class="row align-items-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-xl-12 wow fadeInLeft">
          <div>
            <!-- <h4 class="text-primary1">About Us</h4> -->
            <p class="mb-4">Travel technology is an all-time boom industry and there is a lot of competition. The customers are always looking for the best fares, best offers, faster results as well as an easy online booking process. The online development of travel booking has been totally redefined the means of travel for customers.</p>
            <p class="mb-4">The travel companies are also ready for cost-effective and innovative ways to market travel packages and their products. We at Nettechnocrats are committed to providing our clients with the best travel solutions for clients and their families. We will help you manage your clients with the travel business will full transparency and efficacy.</p>

            <h2 class="display-5 mb-4">Specialized Travel Booking Solutions</h2>
            <p class="mb-0">We are going to help you build an app that will take care of ticket planning and hotel booking. With our app solutions, you can help your clients with a stress-free vacation. Currently, we have formulated more than 50 apps for our clients</p>

            <div class="row g-4">

              <div class="col-sm-6">
                <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Contact Us</a>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Services Start -->
  <!-- <div class="container-fluid service pb-5">
  <div class="container pb-5">
   <h2 class="">Understanding Medical SEO: How It Stands Apart from Traditional SEO</h2>
   <p class="pb-2">Medical SEO, uniquely tailored by experts, is a specific branch of search engine optimization crafted for websites within the medical domain. While the foundational principles of SEO remain, the approach for medical websites demands added precision.</p>
   <p class="pb-5">The distinction is evident in how search engines, particularly Google, rank and evaluate medical websites. These platforms expect such sites to consistently exhibit expertise, authority, and trustworthiness in their content. Medical SEO Services from Nettechnocrats ensure that these elevated criteria are not just met, but exceeded.</p>
   <h2 class="pb-5">Why Choose a Dedicated Medical SEO Services Provider?</h2>
   <div class="row g-4">
    <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-item">
      <div class="service-img">
       <i class="fa-solid fa-disease"></i>
      </div>
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4">Precision-Crafted Content</a>
       <p class="mb-4">Choosing experts for your Medical SEO needs ensures access to expertly curated content. Our specialized in-house writers craft content that satisfies Google's rigorous standards for medical portals.</p>
 </div>
 </div>
 </div>
 <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
  <div class="service-item">
   <div class="service-img">
    <i class="fa-solid fa-gauge-high"></i>
   </div>
   <div class="rounded-bottom p-4">
    <a href="#" class="h4 d-inline-block mb-4">Medically Relevant Backlinking</a>
    <p class="mb-4">With our Medical SEO Services, benefit from strategic backlinks that bolster your website's credibility. Google values the quality, relevance, and number of these links, and we ensure they always work in your favour.</p>
   </div>
  </div>
 </div>
 <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
  <div class="service-item">
   <div class="service-img">
    <i class="fa-solid fa-shield-halved"></i>
   </div>
   <div class="rounded-bottom p-4">
    <a href="#" class="h4 d-inline-block mb-4">
     Industry-Connected Guest Posting</a>
    <p class="mb-4">Our expertise in Medical SEO extends to robust networking within the healthcare community. We can secure guest posts and backlinks from influential entities in the medical online space, reinforcing your site's industry authority.</p>
   </div>
  </div>
 </div>
 <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
  <div class="service-item">
   <div class="service-img">

    <i class="fa-solid fa-award"></i>
   </div>
   <div class="rounded-bottom p-4">
    <a href="#" class="h4 d-inline-block mb-4">By aligning with Nettechnocrats</a>
    <p class="mb-4">a top-notch healthcare SEO Company, you ensure your medical website is optimized for top rankings while delivering trustworthy and authoritative content to users.</p>
   </div>
  </div>
 </div>
 </div>
 </div>
 </div> -->
  <!-- Services End -->

  <!-- Services Start -->
  <div class="container-fluid service pb-5">
    <div class="container pb-5">
      <h2 class="">Benefits of the Travel app and website Solutions</h2>
      <!-- <p class=" pb-2">Nettechnocrats offers feature-rich and fully-protected Banking and Finance Application Development Services for Android, iPhone and Wearable Devices.</p> -->

      <div class="row g-4">
        <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <img src="{{ asset('assets/web/get-1.webp') }}" class="img-fluid rounded" alt="" style="width: 100%;">
            </div>
          </div>
        </div>
        <div class="col-md-9 col-lg-9 wow fadeInUp  d-flex align-items-center" data-wow-delay="0.4s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4 fw-bolder">
                24X7 ACCESS:</a>
              <p class="mb-4">Imagine a moment in time when travelers had to physically visit a travel agent’s office to check for ticket availability and wait for their turn to book their tickets. There were no hotel bookings attached to the travel agent’s services and travel plans were made in a haphazard manner. Limited working hours and inaccessibility were issues that had no apparent solution. A rather irritating beginning to the travel process. Well, we have definitely accelerated a great deal from then. Be it booking information or tour plans, they are all just a few clicks away from the potential traveler. Travel portals have the best possible deals (standards with regard to cost and quality maintained) listed and this saves both the time and money of the traveler.</p>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-lg-9 wow fadeInUp  d-flex align-items-center" data-wow-delay="0.4s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4 fw-bolder">HOTEL BOOKINGS</a>
              <p class="mb-4">A travel portal must have a module for hotel booking as well. We integrate your apps or website with different options for booking hotels along with all the associated amenities and price tags.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <img src="{{ asset('assets/web/get-2.webp') }}" class="img-fluid rounded" alt="" style="width: 100%;">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <img src="{{ asset('assets/web/get-1.webp') }}" class="img-fluid rounded" alt="" style="width: 100%;">
            </div>
          </div>
        </div>
        <div class="col-md-9 col-lg-9 wow fadeInUp  d-flex align-items-center" data-wow-delay="0.4s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4 fw-bolder">
                CUSTOMER SUPPORT</a>
              <p class="mb-4">Traveling these days isn’t limited to a certain time of the day and one may face a lot many issues while traveling across latitudes and longitudes. There is a constant need for quality customer support and this possible only if travel agents develop and maintain a standardized travel portal that has a strong response rate. From support at the time of booking tickets to the check-out time for a package tour customer, it is mandatory for travel agents to be there all the time at the service of their customers.</p>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-lg-9 wow fadeInUp  d-flex align-items-center" data-wow-delay="0.4s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4 fw-bolder">COST BENEFITS:</a>
              <p class="mb-4">Deploying a travel portal may be a heavy investment yet it wouldn’t be wrong for one to point out the rate of return the investment attracts. From a customer’s point of view, it is easier for them to select a package or a flight ticket after comparing every probability. From a cheap round trip to a single flight with a stay at a 3-star hotel, there are great deals customers can search from. For a travel agent, it is possible to cater to the needs of a vast crowd based on cost as well as quality. Discounts, value packages, and loyalty programs; there are many ways in which an agent can pass cost benefits to their customers.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <img src="{{ asset('assets/web/get-2.webp') }}" class="img-fluid rounded" alt="" style="width: 100%;">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <img src="{{ asset('assets/web/get-1.webp') }}" class="img-fluid rounded" alt="" style="width: 100%;">
            </div>
          </div>
        </div>
        <div class="col-md-9 col-lg-9 wow fadeInUp  d-flex align-items-center" data-wow-delay="0.4s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4 fw-bolder">INCREASE CUSTOMER BASE:</a>
              <p class="mb-4">With a lot many opportunities floating in the travel industry, it is common for a lot many to be attracted to this lucrative business option. It takes a lot of effort for one to sustain the competition. The travel business has to do everything possible to attract, service, retain, and convert a customer into a loyalist. With a travel portal in place, it’s easier for the agent to track the customer’s previous travel details and preferences, the frequency of travel, and a lot more. The information received via the system may be used to design a customized offer for the most frequent passengers and it is also a lot easier to plan a loyalty program or a discount plan. With a perfect tracking system in place, it’s possible for an agent to provide specialized services for a category based customer base.</p>
            </div>
          </div>
        </div>

        <div class="col-md-9 col-lg-9 wow fadeInUp  d-flex align-items-center" data-wow-delay="0.4s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <a href="#" class="h4 d-inline-block mb-4 fw-bolder">BRAND IMAGE:</a>
              <p class="mb-4">With a well-developed travel portal in place, it is possible for a business unit to convert itself into a brand. Be it a portal like ‘Makemytrip.com’, they have evolved into a brand over the years and the common key to their success is the strong web support and consistency in maintaining their plan to become the best brand in their field. There is a lot that is involved in the making of a brand; from a plethora of deals to fabulous customer support and customized offers. Travel agents simply have to employ these tools to their benefit to become one of the trusted brand names in the field. Developing a travel portal isn’t a big deal. What is important here is the quality and the level of consistency one maintains. A strong system combined with all the other elements of cost, support, and additional benefits makes it a perfect travel solution to the customers.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
          <div class="service-items">
            <div class="rounded-bottom p-4">
              <img src="{{ asset('assets/web/get-2.webp') }}" class="img-fluid rounded" alt="" style="width: 100%;">
            </div>
          </div>
        </div>
        <!--<div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-items">
      <div class="rounded-bottom p-4">
       <img src="{{ asset('assets/web/get-1.webp') }}" class="img-fluid rounded" alt="" style="width: 100%;">
      </div>
     </div>
    </div>
    <div class="col-md-9 col-lg-9 wow fadeInUp  d-flex align-items-center" data-wow-delay="0.4s">
     <div class="service-items">
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4 fw-bolder">Franchise SEO:</a>
       <p class="mb-4">Expand your healthcare services with amplified visibility across multiple locations. We champion your brand's unique identity, optimizing for mobile users and harnessing the power of customer reviews.</p>
      </div>
     </div>
    </div> -->

        <!-- <div class="col-md-9 col-lg-9 wow fadeInUp  d-flex align-items-center" data-wow-delay="0.4s">
     <div class="service-items">
      <div class="rounded-bottom p-4">
       <a href="#" class="h4 d-inline-block mb-4 fw-bolder">Link Building:</a>
       <p class="mb-4">Ascend search engine rankings by engaging the right audience through potent platforms. We craft compelling content and establish connections with healthcare industry pioneers, amplifying your online footprint.</p>
      </div>
     </div>
    </div>
    <div class="col-md-3 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
     <div class="service-items">
      <div class="rounded-bottom p-4">
       <img src="{{ asset('assets/web/get-2.webp') }}" class="img-fluid rounded" alt="" style="width: 100%;">
      </div>
     </div>
    </div> -->

      </div>
    </div>
  </div>
  <!-- Services End -->

  <!-- Offer Start -->
  <!-- <div class="container-fluid offer-section pb-5">
  <div class="container pb-5">
   <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
    <h3 class="display-5 mb-4">Elevate Your Healthcare Brand with Prime Search Rankings</h3>
    <p class="mb-4">In an age where billions actively surf the web every month, healthcare search engine optimization is not just complex, but also pivotal. With ever-evolving search algorithms and fluctuating industry norms, ensuring your healthcare brand remains at the forefront is crucial.</p>
    <h4 class="display-5 mb-4 fs-2 fw-bold">Choosing us means you are in for unparalleled growth. Here is a glimpse into what our Healthcare SEO Services promise:</h4>
   </div>
   <div class="row g-5 align-items-center">
    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
     <div class="nav nav-pills rounded p-5" style="background-color: rgb(212 241 228);">
      <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
       <h5 class="mb-0">Proficient Healthcare SEO Maestros</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
       <h5 class="mb-0">Building Trust and Credibility</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFour">
       <h5 class="mb-0">Optimized Mobile SEO</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFive">
       <h5 class="mb-0">ROI-Focused SEO Approaches</h5>
      </a>
      <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseSix">
       <h5 class="mb-0">Affordable SEO Paradigms</h5>
      </a>
     </div>
    </div>
    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
     <div class="tab-content">
      <div id="collapseOne" class="tab-pane fade show p-0 active">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Proficient Healthcare SEO Maestros</h1>
         <p class="mb-4">Beyond mere medical SEO terminologies, we delve deep into industry nuances, continually enhancing our expertise via rigorous training and industry conferences. Partner with us, and together, we’ll chart your path to success.</p>
        </div>
       </div>
      </div>
      <div id="collapseThree" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Building Trust and Credibility</h1>
         <p class="mb-4">Since its inception in 2005, We have been the epitome of trust in the digital realm. Our ethos revolves around placing consumers at the heart of our ventures. Rest assured; we're geared to cultivate a similar trust quotient for your brand</p>
        </div>
       </div>
      </div>
      <div id="collapseFour" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Optimized Mobile SEO</h1>
         <p class="mb-4">In a mobile-centric era, it's imperative to be mobile-optimized. Our adept team ensures your website not only resonates with aesthetics but is also robust, secure, and seamlessly accessible across devices.</p>
        </div>
       </div>
      </div>
      <div id="collapseFive" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">ROI-Focused SEO Approaches</h1>
         <p class="mb-4">At Nettechnocrats, we don’t just aim for visibility; we aim for tangible results. Harnessing competitive insights and data-driven methodologies, we guarantee your SEO endeavours resonate with growth and conversions.</p>
        </div>
       </div>
      </div>
      <div id="collapseSix" class="tab-pane fade show p-0">
       <div class="row g-4">
        <div class="col-md-12">
         <h1 class="display-5 mb-4">Affordable SEO Paradigms</h1>
         <p class="mb-4">Excellence needn't be exorbitant. We curate bespoke SEO solutions, designed to align with your financial framework and business goals. Every strategy we devise is a reflection of your brand's aspirations, molded to ensure optimum ROI.</p>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div> -->
  <!-- Offer End -->


  <!-- Services Start -->

  <!-- Services End -->


  <div class="container-fluid about py-5">
    <div class="container py-5">

      <div class="mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100">
        <h2 class="display-5 mb-4">Tour and Travel App Development Samples</h2>
        <p class="mb-0">We have served 2500+ clients globally and completed 4200+ projects for them. Checkout some of the best Tour and Travel App development case studies here:</p>
      </div>
      <div id="call-to-action" class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100" style=" background-color: var(-accent-color) !important;">


        <div class="col-xl-6 wow fadeInLeft">
          <div>

            <h4 class="text-primary1 fw-bolder">Beycome Real Estate</h4>
            <p class="mb-4">Beycome is the first and only real estate company and listing platform that realizes 100% of your home transactions online; helping homeowners, buyers, and renters close a deal on their home, without the assistance of a real estate agent or broker. In turn, by cutting out agents, this saves homeowners from paying the 6% commission fee involved in a home sale (or 10% commission fee due in a rental transaction). And when the owner saves, buyers and renters get more negotiation power for a better deal.</p>
            <img src="{{ asset('assets/web/progress.png') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">
          </div>
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
          <div class="rounded position-relative overflow-hidden">
            <img src="{{ asset('assets/web/1-beycome.webp') }}" class="img-fluid rounded w-100" alt="">

          </div>
        </div>

      </div>
    </div>
  </div>

  <!--  -->

  <div class="container-fluid about hero__banner__tech py-5">
    <div class="container py-5">
      <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">

        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
          <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
            <img src="{{ asset('assets/web/10-3-transformed.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">
          </div>
        </div>
        <div class="col-xl-6 wow fadeInLeft">
          <div>
            <h4 class="text-primary1 fw-bolder">Why Nettechnocrats for your next project?</h4>
            <p class="mb-4 ">We are not your standard dev shop. Our human-centric approach puts your customer experience at the center of our design.</p>
            <p class="mb-4 ">We challenge our clients to think differently by asking the right questions, how can we leverage tech differently? Where are consumers talking and when, because the experience matters.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="light-background why__choose__Net">
    <div class="container">
      <h2>Why Nettechnocrats for Tour & Travel App Development Services?</h2>
      <p>Nettechnocrats has carved a niche by excelling in multiple technologies and serving its global clients. Our team of professional Android app developers brainstorms out-of-box ideas & result-driven strategies for every project to ensure clients’ satisfaction. Quality & relevance are our major USPs to mention behind successful project deliveries to valuable clients from varied business verticals. We’re pleased to serve these benefits with feasible Android app development solutions to our clientele.</p>
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
            <div class="rounded-4 position-relative overflow-hidden">
              <img src="{{ asset('assets/web/travel-vector.webp') }}" class="img-fluid w-100" alt="">

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