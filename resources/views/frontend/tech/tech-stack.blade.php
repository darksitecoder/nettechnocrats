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
   border-radius: 20px;
   align-items: center;
   display: flex;
   justify-content: center;
  }

  .showcards .content {
   text-align: center;
   color: var(--white);
   font-size: 25px;
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
    <a href="{{url('education-portal-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/4458808_2351583.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Education Portal Development
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('lamp-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/Lamp-stack-development.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       LAMP Development
      </div>
     </div>
    </a>
   </div>
   <div class="col-md-3">
    <a href="{{url('affiliate-marketplace.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/10780611_19199574.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Affiliate marketplace
      </div>
     </div>
    </a>
   </div>

   <div class="col-md-3">
    <a href="{url('on-demand-app-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/7473101_3682361.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Taxi Booking App Development
      </div>
     </div>
    </a>
   </div>




   <div class="col-md-3">
    <a href="{{url('social-media-app-development.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/12491662_4950546.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Social Media App Development
      </div>
     </div>
    </a>
   </div>

   <div class="col-md-3">
    <a href="{{url('food-delivery-app.php')}}">
     <div class="showcards" style="background: linear-gradient(rgba(14, 14, 14, 0.75), rgba(14, 14, 14, 0.85)), url('{{ asset('assets/web/7574104_3707363.webp') }}'); background-repeat: no-repeat; background-size: cover;">
      <div class="content">
       Food Delivery App
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