!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Social Media Marketing Services</title>
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
  .card__space {
   background: rgba(255, 255, 255, 0.25);
   box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
   backdrop-filter: blur(2px);
   -webkit-backdrop-filter: blur(2px);
   border-radius: 10px;
   border: 1px solid rgba(255, 255, 255, 0.18);
   height: 250px;
   padding: 3rem 1rem;
   cursor: pointer;
   transition: 0.5s ease-in-out;

  }

  .card__space:hover {
   background: transparent;
   box-shadow: none;
   backdrop-filter: blur(0px);
   -webkit-backdrop-filter: blur(0px);

  }

  .card__space a {
   font-weight: 600;
   font-size: 18px;
   color: var(--blue);
   transition: 0.5s ease-in-out;
  }

  .card__space a:hover {
   color: var(--green);
  }
 </style>
</head>

<body>
 @include('partial/header')
 <!-- Abvout Start -->
 <div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/location__background.png') }}'); background-repeat:no-repeat; background-size:cover;">
  <div class="container py-5">
   <div class="row">
    <div class="col-lg-4 text-center">
     <div class="card__space">
      <i class="fa-solid fa-mobile-screen-button fs-1 mb-4"></i>
      <h3 class="fw-bolder fs-4 mb-3">Give us a call</h3>
      <a href="tel:+9711411002" class="">+91-9711411002</a>
     </div>
    </div>
    <div class="col-lg-4 text-center">
     <div class="card__space">
      <i class="fa-solid fa-location-dot fs-1 mb-4"></i>
      <h3 class="fw-bolder fs-4 mb-3">We're On The Map</h3>
      <a href="https://maps.app.goo.gl/WqhreM9orzHTrmcV9" class="">G-75, Sec-63, Noida, Delhi (NCR) India</a>
     </div>
    </div>
    <div class="col-lg-4 text-center">
     <div class="card__space">
      <i class="fa-regular fa-comment fs-1 mb-4"></i>
      <h3 class="fw-bolder fs-4 mb-3">Send Us A Message</h3>
      <a href="mailto:sales@nettechnocrats.com" class="">sales@nettechnocrats.com</a>
     </div>
    </div>
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