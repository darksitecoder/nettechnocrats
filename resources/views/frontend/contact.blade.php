@extends('layouts.app')

@section('title', 'Home Page Title')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')

<style>
 .contact .info-item i {
  font-size: 10px;
  color: var(--accent-color);
  background:
   color-mix(in srgb, var(--accent-color), transparent 92%);
  width: 44px;
  height: 44px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
  margin-right: 0px;
 }
</style>
@section('content')
<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

<main class="main">

 <!-- Hero Section -->
 <section id="hero" class="hero1 section" style="background: url('{{ asset('assets/web/tech__background.png') }}'); background-repeat:no-repeat; background-size:cover;">

  <div class="">
   <div class="row gy-4">
    <div class="col-lg-12 order-2 order-lg-1 " data-aos="fade-up">
     <div class="container ">
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <h1 class="display-5 mb-4 text-white text-center">We Are Top Rated!!! Hire Best SEO, Mobile App And Website Development Experts</h1>
     </div>
    </div>

   </div>
  </div>

 </section><!-- /Hero Section -->


 <!-- Contact Section -->
 <section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
   <span>Contact Us</span>
   <h2>Contact</h2>
   <p>Fill the form for more details</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

   <div class="row gy-4">

    <div class="col-lg-6">

     <div class="info-wrap">
      <h3 class="fw-bold">Got a big Idea? Or want to Innovate? Let's Connect.</h3>
      <p>From B2B to B2E, IT provides multiple projects, which consist of websites and web apps for top brands, medium-level enterprises, and startups.</p>
      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
       <div class="row">
        <div class="col-md-6 d-flex justify-content-between">
         <img src="{{ asset('assets/web/Flag_of_India.svg.png') }}" class="me-2" alt="" srcset="" style="width: 40px; height:25px; border-radius:2px;">
         <div>
          <h3>INDIA</h3>
          <p> G-75, Sec-63, Noida, Delhi (NCR) India</p>
          <p class="d-flex"> <i class="fa-solid fa-phone"></i> +91-9711411002</p>
          <p> G-75, Sec-63, Noida, Delhi (NCR) India</p>
         </div>
        </div>
        <div class="col-md-6 d-flex justify-content-between">
         <img src="{{ asset('assets/web/flag-Stars-and-Stripes-May-1-1795.webp') }}" class="me-2" alt="" srcset="" style="width: 40px; height:25px; border-radius:2px;">
         <div>
          <h3>USA</h3>
          <p>9240 SW 72nd St Miami, FL 33173</p>
         </div>
        </div>
       </div>
      </div><!-- End Info Item -->
      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
       <div class="row">
        <div class="col-md-6 d-flex">
         <i class="bi bi-geo-alt flex-shrink-0"></i>
         <div>
          <h3>Address</h3>
          <p>G-192, Sec-63, Noida, Delhi (NCR) India</p>
         </div>
        </div>
        <div class="col-md-6 d-flex">
         <i class="bi bi-geo-alt flex-shrink-0"></i>
         <div>
          <h3>Address</h3>
          <p>G-192, Sec-63, Noida, Delhi (NCR) India</p>
         </div>
        </div>
       </div>
      </div><!-- End Info Item -->

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2768.1690364594565!2d77.38490257189108!3d28.617918631000588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5041555554f%3A0x6c59d83bd08b7d6f!2sNettechnocrats!5e1!3m2!1sen!2sus!4v1729664445332!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
    </div>

    <div class="col-lg-6">
     <h2 class="pt-4">Get a Project Idea for a Startup or Enterprise Business</h2>
     <p>We guarantee a response within one business day—fast, reliable, no waiting around.</p>
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