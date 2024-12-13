<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Multi-Disciplinary Project Development</title>
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
  .feature {
   border: 1px solid var(--blue);
   border-radius: 50px;
   width: fit-content;
   background-color: #ececec;
   padding: 3px 15px;
   margin: 0.5rem;
  }
 </style>
</head>

<body>
 @include('partial/header')
 <!-- Abvout Start -->
 <div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.png') }}'); background-repeat:no-repeat; background-size:cover;">
  <div class="container py-5">
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <h1 class="display-5 mb-4 text-white">Multi-Disciplinary Project Development</h1>
      <p class="mb-4 text-white">We Follow A Pursuit For Developing Customer-Centric Products For Web And Mobile</p>
     </div>
    </div>
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
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
    <h2 class="display-5 mb-4">The Most Intelligently Integrated End-to-End
     Development Process</h2>
    <p>From B2B to B2E, IT provides multiple projects, which consist of websites and web apps for top brands, medium-level enterprises, and startups. There is a considerable amount we offer through our integrated, adaptive agile approach. Great things are not achieved by impulse but through a series of processes brought together. Here are the steps we take for our à la carte development process.</p>
   </div>
  </div>
 </div>
 <!-- About End -->


 <div class="container-fluid about py-0">
  <div class="container py-0">


   <div class="row g-5  align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/method1.webp') }}" class="img-fluid rounded w-100" alt="">

     </div>
    </div>
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <h4 class="text-primary1 fw-bolder">Sketching Your Idea</h4>
      <p class="mb-4">As clients express an interest in doing business with us, our expert strategists begin the work process. Once everyone in the team has an agreement on an idea, all of us immerse ourselves in the project.</p>

      <div class="row g-4">
       <p class="feature">First Contact</p>
       <p class="feature">In-Depth Research And Planning</p>
       <p class="feature">Conceptualizing The Idea</p>
       <p class="feature">Requirement & Estimation Approval</p>

      </div>
     </div>
    </div>
   </div>
   <div class="row g-5 py-5 mt-5 align-items-center" data-aos="fade-up" data-aos-delay="100">

    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <h4 class="text-primary1 fw-bolder">Analysis & Prototyping</h4>
      <p class="mb-4">After approval of the project, we advance to the pre-engineering process. This is where we address the root-level construction, comprehensive analysis, concept strategy, technical consultation, and complete the specifications with submission of the resource plan. Through the practice of prototyping, we can formulate the right development platforms and structures.</p>

      <div class="row g-4">
       <p class="feature">Internal Analysis
       </p>
       <p class="feature">Submit A Resource Plan</p>
       <p class="feature">Creating Wireframe/ Prototype/ Storyboards</p>
       <p class="feature">Select Right Development Platforms And Structures</p>

      </div>
     </div>
    </div>
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/method2.webp') }}" class="img-fluid rounded w-100" alt="">

     </div>
    </div>
   </div>
   <div class="row g-5 py-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/method3.webp') }}" class="img-fluid rounded w-100" alt="">

     </div>
    </div>
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <h4 class="text-primary1 fw-bolder">Design: User Interface (UI) &
       User Experience (UX)</h4>
      <p class="mb-4">To us, design is much more than just the aesthetics. It’s about the functionality. We want your users to have the best experience with your digital business, so we focus on making user experience intriguing, addictive, intuitive and friendly.</p>

      <div class="row g-4">
       <p class="feature">Study Demographics And Use Cases</p>
       <p class="feature">Emotional Design With Colors</p>
       <p class="feature">Use Of Latest, Relevant UI Design Features</p>
       <p class="feature">UX Personalization</p>
       <p class="feature">UX Metrics Evaluation</p>

      </div>
     </div>
    </div>
   </div>
   <div class="row g-5 py-5 align-items-center" data-aos="fade-up" data-aos-delay="100">

    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <h4 class="text-primary1 fw-bolder">Development & Implementation</h4>
      <p class="mb-4">Advanced project management tools like Jira, GitLab and Hubstaff form the essential part of our development process. Experienced and competent developers at Nettechnocrats take the lead and pair the right technology for a perfect solution. We update our routine status so that we can optimize the code.</p>

      <div class="row g-4">
       <p class="feature">Release Plan</p>
       <p class="feature">Full Stack Backend Development</p>
       <p class="feature">Coding With Stipulated Timeframe</p>
       <p class="feature">Update Routine Status</p>

      </div>
     </div>
    </div>
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/method4.webp') }}" class="img-fluid rounded w-100" alt="">

     </div>
    </div>
   </div>
   <div class="row g-5 py-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/method5-1.webp') }}" class="img-fluid rounded w-100" alt="">

     </div>
    </div>
    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <h4 class="text-primary1 fw-bolder">Beta Testing and Quality Assurance</h4>
      <p class="mb-4">Now starts the real excitement, when you can see your website or app being brought to life! We put the whole developed plan into action by creating a beta version of your product. Each module of the project is scrupulously tested and goes through multiple testing phases under various environments and conditions to ensure the best result.</p>

      <div class="row g-4">
       <p class="feature">Static And Automated TestsUse Of


       </p>
       <p class="feature">In-Depth Research And Planning</p>
       <p class="feature">Conceptualizing The Idea</p>
       <p class="feature">Requirement & Estimation Approval</p>

      </div>
     </div>
    </div>
   </div>
   <div class="row g-5 py-5 align-items-center" data-aos="fade-up" data-aos-delay="100">

    <div class="col-xl-6 wow fadeInLeft">
     <div>
      <h4 class="text-primary1 fw-bolder">Deployment & Final Launch</h4>
      <p class="mb-4">Get ready to see your finished masterpiece! After all of the testing has been completed and after incremental quality assurance, our experts deploy the end product on respective app stores and web browsers, assuring the passing of the fickle approval process and the standards of the online stores.</p>

      <div class="row g-4">
       <p class="feature">Release To Live Environment</p>
       <p class="feature">Post-Deployment Maintenance & Support</p>
       <p class="feature">Ensure Integrity</p>

      </div>
     </div>
    </div>
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <div class="rounded position-relative overflow-hidden">
      <img src="{{ asset('assets/web/method6.webp') }}" class="img-fluid rounded w-100" alt="">

     </div>
    </div>
   </div>


  </div>
 </div>





 <section class="light-background why__choose__Net">
  <div class="container">
   <h2>Why Nettechnocrats for Amazon Web Services?</h2>

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