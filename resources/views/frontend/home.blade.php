@extends('layouts.app')

@section('title', 'Home Page Title')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')

@section('content')
<div id="editor">
   
  

   <div id="editor" style="height: 500px;">



       <section class="hero__banner">
           <div class="row">
               <div class="col-lg-8">
                   <h1 class="py-2">Unlock Digital <br> Excellence, Propel Your <br> Brand Forward! </h1>
                   <p class="py-3 banner__description">Experience digital dominance with Nettechnocrats. Our data-driven SEO and digital marketing expertise empower your brand to thrive online. Watch as your business soars with top SERP rankings, high conversion rates, and a surge in web traffic. Join us on this exhilarating journey to successin the digital realm!</p>
                   <div class="banner__btn d-flex">
                       <a href="#" class="btn get__touch mx-1">Get In Touch</a>
                       <a href="#" class="btn audit mx-1">Request For Audit</a>
                   </div>
               </div>
               <div class="col-lg-4"><img src="{{ asset('assets/web/hero_banner.webp') }}" alt="" srcset=""></div>
           </div>
       </section>
       <div class="container">
           <section class="about__seo">
               <div class="row">
                   <div class="col-lg-5">
                       <img src="{{ asset('assets/web/clutch.png') }}" alt="" srcset="">
                   </div>
                   <div class="col-lg-7">
                       <p class="colored__text">Awarded as Top SEO Company in 2023</p>
                       <h2>Boosting ROI and Traffic: The Nettechnocrats Way!</h2>
                       <p>
                           At Nettechnocrats, we take immense pride in being recognized as a Top SEO company by Clutch, renowned for our exceptional ability to boost ROI and drive traffic like never before. Our mission is simple: aim high with your ROI and witness the phenomenal surge in your website traffic!</p>

                       <p>Experience exponential growth and unparalleled success by attracting precisely the right audience through strategically chosen industry-relevant search terms. We don’t just scratch the surface; we plunge into the depths of every aspect that influences your visibility on search engine results pages – from your website’s authority to its lightning-fast speed. Our strategic approach ensures that the results you achieve are nothing short of transformative.</p>

                       <p>With Nettechnocrats, you gain access to our expertise and industry insights, empowering your business to thrive in the long run. Embark on your journey toward lasting success today!
                       </p>
                       <br>
                       <a href="#" class="about__btn mt-4">Talk With Our Experts</a>
                   </div>
               </div>
           </section>

       


           <section class="spectrum__services">
               <div class="row">
                   <div class="col-lg-12">
                       <h2 class="text-center">Unveiling Our Spectrum of Services</h2>
                       <p class="text-center">Leveraging a robust team force, we’re helping businesses across various sectors amplify their online presence. Through trusted methods like White Hat SEO, SEM, and SMO, we elevate brand recognition and foster growth.</p>
                   </div>
               </div>
               <div class="row services__cards">
                   <div class="col-lg-12">
                       <div class="row">
                           <div class="col-lg-3">
                               <div class="cards__details">
                                   <img src="{{ asset('assets/web/digital-marketing.png') }}" alt="" srcset="">
                                   <h3>Digital Marketing</h3>
                                   <p>Backed by expert marketers, we craft strategies that ensure your brand voice is heard, resonating with your audience seamlessly.</p>
                               </div>
                               <div class="text-center">
                                   <a href="#" class="card__read__more">Read More <i class="fa-solid fa-angle-right"></i></a>
                               </div>
                           </div>
                           <div class="col-lg-3">
                               <div class="cards__details">
                                   <img src="{{ asset('assets/web/seo.png') }}" alt="" srcset="">
                                   <h3>Search Engine Optimization</h3>
                                   <p>Leading SEO company and digital marketing agency at your service. Boost traffic, garner customers, and elevate profits with our on-page and off-page expertise.</p>
                               </div>
                               <div class="text-center">
                                   <a href="#" class="card__read__more">Read More <i class="fa-solid fa-angle-right"></i></a>
                               </div>
                           </div>
                           <div class="col-lg-3">
                               <div class="cards__details">
                                   <img src="{{ asset('assets/web/smo.png') }}" alt="" srcset="">
                                   <h3>Social Media Optimization</h3>
                                   <p>We recognize that every client campaign demands unique audience targeting on the right social media platforms.</p>
                               </div>
                               <div class="text-center">
                                   <a href="#" class="card__read__more">Read More <i class="fa-solid fa-angle-right"></i></a>
                               </div>
                           </div>
                           <div class="col-lg-3">
                               <div class="cards__details">
                                   <img src="{{ asset('assets/web/ppc.png') }}" alt="" srcset="">
                                   <h3>Pay Per Click</h3>
                                   <p>Specializing in PPC services that drive organic traffic and connect you with your target audience instantly. Our savvy strategies ensure maximum ROI on your investment.</p>
                               </div>
                               <div class="text-center">
                                   <a href="#" class="card__read__more">Read More <i class="fa-solid fa-angle-right"></i></a>
                               </div>
                           </div>

                       </div>
                       <div class="row pt-5">
                           <div class="col-lg-3">
                               <div class="cards__details">
                                   <img src="{{ asset('assets/web/webd.png') }}" alt="" srcset="">
                                   <h3>Web Development</h3>
                                   <p>Responsive, sleek, and user-centric websites are our specialty. Experience the perfect blend of design and functionality with us.</p>
                               </div>
                               <div class="text-center">
                                   <a href="#" class="card__read__more">Read More <i class="fa-solid fa-angle-right"></i></a>
                               </div>
                           </div>
                           <div class="col-lg-3">
                               <div class="cards__details">
                                   <img src="{{ asset('assets/web/mobile.png') }}" alt="" srcset="">
                                   <h3>Mobile Application</h3>
                                   <p>User experience is at the heart of our apps. We bring innovation to your fingertips, promoting user engagement and satisfaction.</p>
                               </div>
                               <div class="text-center">
                                   <a href="#" class="card__read__more">Read More <i class="fa-solid fa-angle-right"></i></a>
                               </div>
                           </div>
                           <div class="col-lg-3">
                               <div class="cards__details">
                                   <img src="{{ asset('assets/web/mvm.png') }}" alt="" srcset="">
                                   <h3>Multi-Vendor Marketplace</h3>
                                   <p>We are rated as one of the top multi-vendor marketplace development companies, we will help you build the application for B2C, B2B and suppliers multi-vendor eCommerce marketplace.</p>
                               </div>
                               <div class="text-center">
                                   <a href="#" class="card__read__more">Read More <i class="fa-solid fa-angle-right"></i></a>
                               </div>
                           </div>
                           <div class="col-lg-3">
                               <div class="cards__details">
                                   <img src="{{ asset('assets/web/cloud.png') }}" alt="" srcset="">
                                   <h3>Cloud Services</h3>
                                   <p>Gain the control and confidence you need to securely run your organization with the most flexible and secure cloud computing environment available. </p>
                               </div>
                               <div class="text-center">
                                   <a href="#" class="card__read__more">Read More <i class="fa-solid fa-angle-right"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>

           <section class="testimonial__video">
               <div class="row">
                   <div class="col-lg-6">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/f-MAIzGxWc0?si=GkZPmhg-MKDbM0Dl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                   </div>
                   <div class="col-lg-6">
                       <h2>We Are Ranked Among the Top Global Leaders in Digital Marketing</h2>
                       <p>Nettechnocrats quickly ascended to digital prominence, catering to a diverse clientele across various business sectors. Partner with the best in digital innovation.</p>

                       <div class="slider-wrapper left">
                           <div class="item item1"><img src="{{ asset('assets/web/clutch_review.png') }}" alt="" srcset=""></div>
                           <div class="item item2"><img src="{{ asset('assets/web/appfuture.png') }}" alt="" srcset=""></div>
                           <div class="item item3"><img src="{{ asset('assets/web/upwork.png') }}" alt="" srcset=""></div>
                           <div class="item item4"><img src="{{ asset('assets/web/extract.png') }}" alt="" srcset=""></div>
                           
                       </div>
                   </div>
               </div>
           </section>
       </div>
       <section class="sample__banner" style="background: url('{{ asset('assets/web/sample__banner.png') }}');   background-size: cover;  background-position: center;  background-repeat: no-repeat;">
           <div class="row">
               <div class="col-lg-12">
                   <h2>
                       What Comprise A Robust Digital Marketing Strategy? Straight from the horse's Mouth
                   </h2>
                   <p>Well, it's not the rocket science, but to be truthful, it is not that much easier too. But before you hire us as your digital marketing consultant, let us know you what processes we have adopted to serve you.</p>
               </div>
           </div>
       </section>
       <div class="container">
           <section class="industries">
               <div class="row">
                   <div class="col-lg-6">
                       <div class="content">
                           <p>INDUSTRIES</p>
                           <h3>A Unified Vision That Caters to Diverse Industry Demands</h3>
                           <p>As an experienced Search Engine Optimization company in India, we level up your SEO efforts to create brand awareness and ensure increased revenues. By utilizing cutting-edge strategies, conducting detailed analyses, and establishing innovative approaches, we go above and beyond to help you expand your businesses and ensure long-term success.</p>
                           <a href="#" class="card__read__more">Contact Us <i class="fa-solid fa-angle-right"></i></a>
                       </div>
                   </div>
                   <div class="col-lg-6"></div>
               </div>
           </section>
       </div>



                       </div>
@endsection