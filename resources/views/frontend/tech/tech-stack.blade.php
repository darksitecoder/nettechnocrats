<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Tech Stack</title>
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

  .showcards {
   width: 100%;
   height: 350px;
   margin: 10px 0px;
   border-radius: 10px;
   align-items: center;
   display: flex;
   justify-content: center;
  }

  .showcards .content {
   text-align: center;
   color: var(--white);
   font-size: 25px;
   padding: 0px 10px;
   font-weight: 600;
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
    <div class="col-xl-12 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <h1 class="display-5 mb-4 text-white">Tech Stack</h1>
      <!-- <p class="mb-4 text-white">In the rapidly evolving world of e-commerce, affiliate marketing has emerged as a powerful strategy for driving sales and revenue.​</p> -->
     </div>
    </div>
   </div>
  </div>
 </div>

 <div class="container py-5 mt-3">
  <h3 class="fw-bold py-3">Software Development</h3>
  <div class="row">
   <div class="col-md-3">
    <a href="{{url('/software-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/Microsoft-Dynamics-CRM.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Software Development
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('/erp-software-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/ERP-1024x724.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       ERP Software Development
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('/salesforce-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/a-complete-guide-to-salesforce-qa-testing-transformed.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Salesforce Development
      </div>
     </div>
    </a>
   </div>

   <div class="col-md-3">
    <a href="{{url('/iot-applications-development-company.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/iot.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       IOT
      </div>
     </div>
    </a>
   </div>
  </div>


  <h3 class="fw-bold py-3">Web Development</h3>
  <div class="row">
   <div class="col-md-3">
    <a href="{{url('/python-django-development-company.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/django-logo.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Python Development
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('/wordpress-development-services.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/wordPress-website-migration.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Wordpress Development
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('/magento-web-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/magento.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Magento Development
      </div>
     </div>
    </a>
   </div>

   <div class="col-md-3">
    <a href="{{url('/joomla-web-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/og_joomla.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Joomla Development
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('/drupal-web-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/drupal-nettechnocrats.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Drupal Development
      </div>
     </div>
    </a>
   </div>
  </div>

  <h3 class="fw-bold py-3">Cloud Service</h3>
  <div class="row">
   <div class="col-md-3">
    <a href="{{url('/cloud-computing.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/cloud-computing.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Cloud Computing
      </div>
     </div>
    </a>
   </div>
  </div>

  <h3 class="fw-bold py-3">Data storage</h3>
  <div class="row">

   <div class="col-md-3">
    <a href="{{url('/big-data-analytics.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/big-data-datenquellen-transformed.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Big Data
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('/ibeacon-app-development-company.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/iBeacon-App-Development-1.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       IBeacon
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('/blockchain-application-development-company.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/blockchain__lower.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Blockchain
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('/data-science.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/datascience-nettechnocrats.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Data Science
      </div>
     </div>
    </a>
   </div>

  </div>


  <h3 class="fw-bold py-3">Mobile App</h3>
  <div class="row">

   <div class="col-md-3">
    <a href="{{url('/iphone-ios-development-company.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/ios-image.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       IOS App Development
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('/android-app-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/android-image.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Android App Development
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('/ui-ux-design-services.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/uiux-img.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       UI UX Services
      </div>
     </div>
    </a>
   </div>

  </div>
 </div>

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