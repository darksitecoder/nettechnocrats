<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    <!-- Meta tags for SEO -->
    <meta name="description" content="@yield('meta_description', 'Default description here.')">
    <meta name="keywords" content="@yield('meta_keywords', 'default, keywords')">


    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('js/vendor/bootstrap-icons/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('js/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('js/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('js/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('js/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('style/web/seo-services/main.css') }}" rel="stylesheet">

</head>

<body>
    <header>
        <!-- header start -->
        <header class="header">
            <div class="nav_container">
                <div class="row v-center">
                    <div class="header-item item-left">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('assets/web/nettechnocrats-logo.png') }}" alt="" srcset=""></a>
                        </div>
                    </div>
                    <!-- menu start here -->
                    <div class="header-item item-center">
                        <div class="menu-overlay"></div>
                        <nav class="menu">
                            <div class="mobile-menu-head">
                                <div class="go-back"><i class="fa fa-angle-left"></i></div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="menu-main">
                                <li>
                                    <a href="#">About</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Tech <i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu mega-menu mega-menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Web Development</h4>
                                            <ul>
                                                <li><a href="#" data-image=""> the key for every business success. Backed by a dedicated team of SEO professionals</a></li>
                                            </ul>
                                            <h4 class="title">Mobile App Development</h4>
                                            <ul>
                                                <li><a href="#" data-image=""> Visibility and Drive Targeted Traffic with a Top-tier PPC Management Company</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">CMS</h4>
                                            <ul>
                                                <li><a href="#" data-image=""> Social media experts to increase brand awareness and loyalty</a></li>
                                            </ul>
                                            <h4 class="title">Local SEO Services</h4>
                                            <ul>
                                                <li><a href="#" data-image="}">Boost Your Local Presence with Local SEO Services Choose the premier Local SEO Company</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">CRM</h4>
                                            <ul>
                                                <li><a href="#" data-image="}">Boost Agency Revenue with Our Trusted White Label Services</a></li>
                                            </ul>
                                            <h4 class="title">Microsoft</h4>
                                            <ul>
                                                <li><a href="#" data-image="}">Experience the Pinnacle of Online Reputation Management Services with Nettechnocrats.</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item" id="imge">
                                            <img src="{{ asset('assets/web/nav-images/seo.png') }}" alt="Service Image" id="imae" />
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Digital Marketing <i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu mega-menu mega-menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">SEO Services</h4>
                                            <ul>
                                                <li><a href="#" data-image="{{ asset('assets/web/nav-images/seo.png') }}">SEO is the key for every business success. Backed by a dedicated team of SEO professionals</a></li>
                                            </ul>
                                            <h4 class="title">PPC Services</h4>
                                            <ul>
                                                <li><a href="#" data-image="{{ asset('assets/web/nav-images/ppc.png') }}">Maximize Visibility and Drive Targeted Traffic with a Top-tier PPC Management Company</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">SMO Services</h4>
                                            <ul>
                                                <li><a href="#" data-image="{{ asset('assets/web/nav-images/smo.webp') }}">Hire Social media experts to increase brand awareness and loyalty</a></li>
                                            </ul>
                                            <h4 class="title">Local SEO Services</h4>
                                            <ul>
                                                <li><a href="#" data-image="{{ asset('assets/web/nav-images/local-seo.png') }}">Boost Your Local Presence with Local SEO Services Choose the premier Local SEO Company</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item">
                                            <h4 class="title">SEO Reseller</h4>
                                            <ul>
                                                <li><a href="#" data-image="{{ asset('assets/web/nav-images/seo-reseller.png') }}">Boost Agency Revenue with Our Trusted White Label Services</a></li>
                                            </ul>
                                            <h4 class="title">ORM</h4>
                                            <ul>
                                                <li><a href="#" data-image="{{ asset('assets/web/nav-images/orm.webp') }}">Experience the Pinnacle of Online Reputation Management Services with Nettechnocrats.</a></li>
                                            </ul>
                                        </div>
                                        <div class="list-item" id="imageContainer">
                                            <img src="{{ asset('assets/web/nav-images/seo.png') }}" alt="Service Image" id="image" />
                                        </div>
                                    </div>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="#">Industries <i class="fas fa-angle-down"></i></a>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            <li><a href="#">Login</a></li>
                                            <li><a href="#">Register</a></li>
                                            <li><a href="#">Faq</a></li>
                                            <li><a href="#">404 Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Portfolio</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog <i class="fas fa-angle-down"></i></a>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            <li><a href="#">Standard Layout</a></li>
                                            <li><a href="#">Grid Layout</a></li>
                                            <li><a href="#">single Post Layout</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- menu end here -->
                    <div class="header-item item-right">
                        <a href="#" class="phone__number"><i class="fa-solid fa-phone"></i>+91-9711411002</a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#"><span class="get__in__touch">Get In Touch</span></a>
                        <a href="{{'/login_page'}}"><span class="get__in__touch">Login</span></a>
                        <!-- mobile menu trigger -->
                        <div class="mobile-menu-trigger">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
 <div class="row">
  <div class="col-lg-2">
   <h5>Experties</h5>
   <p><a href="#">SEO Services</a></p>
   <p><a href="#">SEO Services</a></p>
   <p><a href="#">SEO Services</a></p>
   <p><a href="#">SEO Services</a></p>
   <p><a href="#">SEO Services</a></p>
  </div>
  <div class="col-lg-2">
   <h5>Experties</h5>
   <p><a href="#">SEO Services</a></p>
   <p> <a href="#">SEO Services</a></p>
   <p><a href="#">SEO Services</a></p>
   <p> <a href="#">SEO Services</a></p>
   <p><a href="#">SEO Services</a></p>
  </div>
  <div class="col-lg-2">
   <h5 class="invisible">More Links</h5>
   <p><a href="#">SEO Services</a></p>
   <p><a href="#">SEO Services</a></p>
   <p><a href="#">SEO Services</a></p>
   <p><a href="#">SEO Services</a></p>
   <p><a href="#">SEO Services</a></p>
  </div>
  <div class="col-lg-6">
   <h5>About Company</h5>
   <div class="row">
    <div class="col-lg-6">
     <p><a href="#">About Us</a></p>
     <p><a href="#">Certifications</a></p>
    </div>
    <div class="col-lg-6">
     <p> <a href="#">Testimonials</a></p>
     <p> <a href="#">Methodology</a></p>
    </div>
   </div>
   <h5>Resources</h5>
   <p>The Greatest Benefits Of Joining Hands With A Custom Web Design Company</p>
   <p>How To Identify A Quality Mobile App Development Company India?</p>
  </div>
 </div>
 <div class="row pt-4">
  <div class="col-lg-12">
   <h5>INDUSTRIES THAT WE SERVED:</h5>
   <div class="keywords__footer">
    <a href="#">E-Wallet App Development </a>
    <a href="#">Banking App Development </a>
    <a href="#">Multi-Vendor Marketplace Development </a>
    <a href="#">Affiliate marketplace </a>
    <a href="#">On demand App Development </a>
    <a href="#">Taxi Booking App Development </a>
    <a href="#">Job Portal Development </a>
    <a href="#">Food Delivery App </a>
    <a href="#">Real Estate App Development </a>
    <a href="#">LAMP Development </a>
    <a href="#">Social Media App Development </a>
    <a href="#">OTT Video App Development </a>
    <a href="#">Education Portal Development </a>
    <a href="#">Travel and Tourism </a>
   </div>
  </div>
 </div>
 <div class="row pt-4">
  <div class="col-lg-3">
   <h5>Follow us</h5>
   <div class="social__media__icons pt-3">
    <a href="#"><i class="fa-brands fa-facebook"></i></a>
    <a href="#"><i class="fa-brands fa-twitter"></i></a>
    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
   </div>
  </div>
  <div class="col-lg-3">
   <h5>CLIENT 1ST</h5>
   <a href="#"><img src="{{ asset('assets/web/footer-images/client-partners-verified-300x91-1.webp') }}" alt="" srcset="" style="width:200px;"></a>
  </div>
  <div class="col-lg-6">
   <h5>PARTNER & CERTIFICATIONS</h5>
   <div class="certificates">
    <div class="row">
     <div class="col-lg-3"><a href="#"><img src="{{ asset('assets/web/footer-images/google_certified.webp') }}" alt="" srcset=""></a></div>
     <div class="col-lg-3"><a href="#"><img src="{{ asset('assets/web/footer-images/9001_certified.webp') }}" alt="" srcset=""></a></div>
     <div class="col-lg-3"><a href="#"><img src="{{ asset('assets/web/footer-images/amazon_services.webp') }}" alt="" srcset=""></a></div>
     <div class="col-lg-3"><a href="#"><img src="{{ asset('assets/web/footer-images/paypal.webp') }}" alt="" srcset=""></a></div>
    </div>




   </div>
  </div>
 </div>
 <div class="row pt-4">
  <!-- <div class="col-lg-12">
   <p class="text-center">Copyright © 2024 Nettechnocrats IT Services Pvt. Ltd</p>
  </div> -->
 </div>
</footer>

  <!-- Vendor JS Files -->
  <script src="{{ asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('js/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('js/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('js/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('js/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/vendor/main.js') }}"></script>
</body>

</html>