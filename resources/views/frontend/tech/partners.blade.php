<!DOCTYPE html>
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
  .fadeInRight p {
   font-weight: 500;
  }

  .partners__image {
   width: 50%;
  }

  .partners__image {
   width: 50%;
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
      <h1 class="display-5 mb-4 text-white text-center">Industry Awards & Accolades
       Across The Years</h1>
      <p class="mb-4 text-white text-center">The biggest awards we have achieved are the many friendships and relationships that we have discovered while doing business with you. It is our pride to see you smile.</p>
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="container-fluid about py-5">
  <div class="container py-5">
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-6 wow fadeInLeft">
     <img src="{{ asset('assets/web/laptop.webp') }}" class="img-fluid rounded image-with-shadow w-100" alt="Social Media Marketing Services">
    </div>
    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
     <h3 class="fw-bolder">Valuable
      Partnerships</h3>
     <p class="fs-6">Many ISVs and software-enabled companies have received offshore technological solutions from us since 2010. Our company’s strength lies in its project execution supported by experienced and skillful software engineers. We put in extra efforts to understand the client’s enterprise, its background, the existing procedures, and the nitty-gritties of the business in order to ensure that they get utmost advantages.</p>
     <p class="fs-6">Our clients depend on our domain and technical experts to reduce ‘Time to Market’, incidentally lowering down the total cost of ownership.</p>
    </div>
   </div>
  </div>
 </div>
 <div class="container-fluid about py-5">
  <div class="container py-5">
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-12 wow fadeInLeft">
     <div class="d-flex flex-wrap justify-content-between">
      <div class="w-50 d-flex justify-content-center py-5">
       <img src="{{ asset('assets/web/footer-images/google_certified.webp') }}" class="img-fluid image-with-shadow partners__image" alt="Google certify">
      </div>
      <div class="w-50 d-flex justify-content-center py-5">
       <img src="{{ asset('assets/web/footer-images/amazon_services.webp') }}" class="img-fluid image-with-shadow partners__image" alt="Amazon">
      </div>
      <div class="w-50 d-flex justify-content-center py-5">
       <img src="{{ asset('assets/web/footer-images/fdd9001_certified.webp') }}" class="img-fluid image-with-shadow partners__image" alt="ISO" style="background-color: black;">
      </div>
      <div class="w-50 d-flex justify-content-center py-5">
       <img src="{{ asset('assets/web/footer-images/sdsfdpaypal.webp') }}" class="img-fluid image-with-shadow partners__image" alt="Paypal">
      </div>
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