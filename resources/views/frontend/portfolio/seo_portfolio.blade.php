@extends('layouts.app')

@section('title', 'Chatbot Development Company In India')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')
<style>
 .service-img img {
  width: 120px;
 }

 .service-item i {
  color: green;
  font-size: 50px;
 }

 /*** Service Start ***/
 .service .service-item {
  background: var(--bs-light);
  border-radius: 10px;
  transition: 0.20s;
  border: 1px solid var(--accent-color);
  height: 400px;
 }


 .service-item::after {
  content: '';
  /* position: absolute; */
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  /* Adjust the opacity here */
  z-index: 1;
 }

 .service .service-item .btn {
  font-weight: 700;
 }

 .service .service-item:hover .btn {
  font-weight: 700;
  color: var(--white) !important;
 }

 .service .service-item .btn:hover {
  color: var(--accent-color) !important;
 }

 .service .service-item:hover {
  box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
 }

 .service .service-item:hover a {
  color: black !important;
 }

 .service .service-item:hover i {
  color: green !important;
 }

 .service .service-item .service-img {
  display: flex;
  justify-content: center;
  padding: 20px 0px 0px 0px;
  transition: 0.20s;
 }

 .service .service-item .service-img i {
  transition: 0.20s;
  font-size: 70px;
 }

 .service .service-item:hover .service-img i {
  transform: scale(1.2);
 }

 .service .service-item .h4 {
  font-weight: 600;
  font-size: 18px;
  text-align: center;
  cursor: default;
 }
</style>

@section('content')
<!-- Abvout Start -->
<div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.png') }}'); background-repeat:no-repeat; background-size:cover;">
 <div class="container py-5">
  <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
   <div class="col-xl-12 wow fadeInLeft">
    <div>
     <!-- <h4 class="text-primary1">About Us</h4> -->
     <h1 class="display-5 mb-4 text-white text-center">Case Studies</h1>
     <p class="mb-4 text-white text-center">Take a look at the following case studies to see the success we have generated for our clients</p>
    </div>
   </div>

  </div>
 </div>
</div>

<!-- Services Start -->
<div class="container-fluid service py-5">
 <div class="container py-5">

  <div class="row g-4 pt-5">
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>

  </div>
  <div class="row g-4 pt-5">
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>

  </div>
  <div class="row g-4 pt-5">
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>

  </div>
  <div class="row g-4 pt-5">
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>
   <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
    <div class="service-item" style="background: url('{{ asset('assets/web/sample__banner.png') }}'); background-repeat:no-repeat; background-size:cover;">
     <div class="service-img">
      <img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset="">
     </div>
     <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
      <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
      <div class="h4 text-center">
       <p class="fs-1 m-0 p-0 text-white">320%</p>
       <p class=" m-0 p-0 text-white">Website Leads</p>
      </div>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <a class="btn btn-primary rounded-pill py-2 px-4" href="#">SEE CASE STUDY</a>
     </div>
     <div class="rounded-bottom text-center pt-3">
      <p class="text-center p-0 m-0 fw-bold text-white">Pranava Kerala Ayurvedic Clinic</p>
      <p class="mb-4 p-0 m-0 fw-bold text-white">| Health |</p>
     </div>
    </div>
   </div>

  </div>
 </div>
</div>

@endsection