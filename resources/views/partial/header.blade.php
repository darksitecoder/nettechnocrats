﻿<!-- header start -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/web/favicon.webp') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<header class="header">
  <div class="nav_container">
    <div class="row v-center">
      <div class="header-item item-left">
        <div class="logo">
          <a href="{{ url('/')}}"><img src="{{ asset('assets/web/nettechnocrats-logo.webp') }}" alt="" srcset=""></a>
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
            <li class="menu-item-has-children">
              <a href="#">About <i class="fa fa-angle-down"></i></a>
              <div class="sub-menu mega-menu mega-menu-column-4">
                <div class="list-item">
                  <img src="{{ asset('assets/web/about-us-company.webp') }}" class="img-fluid rounded " alt="" style="width: 250px; height:100px;">
                  <h5 class="title  m-0 fw-bolder">About Nettechnocrats</h5>
                  <p class=" m-0">We design and build world class websites and mobile app that understands your business and help our client to grow</p><a href="{{url('/about-us.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}" class=" fw-bolder">Read more <i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="list-item">
                  <img src="{{ asset('assets/web/basic-hero-awards-and-accolades.jpg') }}" class="img-fluid rounded " alt="" style="width: 250px; height:100px;">
                  <h5 class="title m-0 fw-bolder">Awards & Accolades</h5>
                  <p class="m-0">The biggest awards we have achieved are the many friendships and relationships that we have discovered while doing business with you. It is our pride to see you smile.</p><a href="{{url('certificate.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}" class="fw-bolder">Read more <i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="list-item">
                  <img src="{{ asset('assets/web/ai-generated-multi-ethnic-diverse-group-of-people-free-photo.jpg') }}" class="img-fluid rounded" alt="" style="width: 250px; height:100px;">
                  <h5 class="title m-0 fw-bolder">Client’s Words</h5>
                  <p class="m-0">We Follow A Pursuit For Developing Customer-Centric Products For Web And Mobile</p><a href="{{url('/testimonial.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}" class="fw-bolder">Read more <i class="fa-solid fa-chevron-right"></i></a>
                  <h5 class="title ps-0 m-0 fw-bolder">Partners</h5><a href="{{url('partners.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}" class="ps-0 fw-bolder">Read more <i class="fa-solid fa-chevron-right"></i></a>
                </div>

                <div class="list-item">
                  <h5 class="title ps-3 m-0 fw-bolder">How we work and Function</h5>
                  <p class="ps-3 m-0">We Follow A Pursuit For Developing Customer-Centric Products For Web And Mobile
                  </p><a href="{{url('/methodology.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}" class="ps-3 fw-bolder">Read more <i class="fa-solid fa-chevron-right"></i></a>
                  <h5 class="title ps-3 m-0 fw-bolder">Clientele</h5>
                  <p class="ps-3 m-0">We’re proud to be globally acknowledged</p><a href="{{url('clients.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}" class="ps-3 fw-bolder">Read more <i class="fa-solid fa-chevron-right"></i></a>
                </div>

              </div>
            </li>
            <li class="menu-item-has-children">
              <a href="#">Services <i class="fa fa-angle-down"></i></a>
              <div class="sub-menu mega-menu mega-menu-column-4">
                <div class="list-item">
                  <span class=" fw-bolder fs-4">Made to <span class="title fs-4 fw-bolder">Scale</span></span>
                  <img src="{{ asset('assets/web/software-development-strategy_01-cover.webp') }}" class="img-fluid rounded" alt="" style="width: 250px; height:100px;">
                  <p class="m-0">Our software development services are built to evolve your business idea into a successful growth story</p><a href="{{url('/software-development.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}" class="fw-bolder">Read more <i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="list-item">
                  <h4 class="title fw-bold ps-4">Digital Marketing</h4>
                  <ul>
                    <li><a href="{{url('/seo-services.php')}}" data-image="{{ asset('assets/web/nav-images/seo.webp') }}">SEO</a></li>
                    <li><a href="{{url('/smo-services.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}">SMO</a></li>
                    <li><a href="{{url('/ppc-services.php')}}" data-image="">PPC</a></li>
                    <li><a href="{{url('/online-reputation-management.php')}}" data-image="">ORM</a></li>
                    <li><a href="" data-image="">AEO</a></li>
                    <li><a href="{{url('/local-seo-services.php')}}" data-image="">Local SEO</a></li>
                    <li><a href="{{url('/#/')}}" data-image="">SEO Reseller</a></li>
                  </ul>
                  <h4 class="title fw-bold ps-4">Mobile App</h4>
                  <ul>
                    <li><a href="{{url('/ui-ux-design-services.php')}}" data-image="">UI/UX/Product Design</a></li>
                    <li><a href="{{url('#')}}" data-image="">PWA</a></li>
                  </ul>

                </div>
                <div class="list-item">
                  <h4 class="title fw-bold ps-4">Software Development</h4>
                  <ul>
                    <li><a href="{{url('/software-development.php')}}" data-image="">Customer Software Development</a></li>
                    <li><a href="{{url('/erp-software-development.php')}}" data-image="">ERP Software Development</a></li>
                    <li><a href="{{url('/microsoft-dynamic-crm.php')}}" data-image="">CRM Development</a></li>
                    <li><a href="{{url('/salesforce-development.php')}}" data-image="">Salesforce Development</a></li>
                    <li><a href="{{url('/iot-applications-development-company.php')}}" data-image="">Iot
                      </a></li>
                  </ul>
                  <h4 class="title fw-bold ps-4">Cloud Service</h4>
                  <ul>
                    <li><a href="{{url('/cloud-computing.php')}}" data-image="">Cloud Computing</a></li>
                  </ul>
                  <h4 class="title fw-bold ps-4">ML/AI</h4>
                  <ul>
                    <li><a href="#" data-image="">Generative AI</a></li>
                    <li><a href="#" data-image="">Google Vision</a></li>
                    <li><a href="{{url('/chatbot-development-company.php')}}" data-image="">Chatbot</a></li>
                  </ul>
                </div>
                <div class="list-item">
                  <h4 class="title fw-bold ps-4">Web Development</h4>
                  <ul>
                    <li><a href="{{url('/python-django-development-company.php')}}" data-image="">Python</a></li>
                    <li><a href="{{url('/wordpress-development-services.php')}}" data-image="">WordPress</a></li>
                    <li><a href="{{url('/magento-web-development.php')}}" data-image="">Magento</a></li>
                    <li><a href="{{url('/joomla-web-development.php')}}" data-image="">Joomla</a></li>
                    <li><a href="{{url('/drupal-web-development.php')}}" data-image="">Drupal</a></li>
                  </ul>
                  <h4 class="title fw-bold ps-4">Quality Analysis</h4>
                  <ul>
                    <li><a href="{{url('/#')}}" data-image="}">QA</a></li>
                  </ul>
                  <h4 class="title fw-bold ps-4">Others</h4>
                  <ul>
                    <li><a href="{{url('/big-data-analytics.php')}}" data-image="}">Big Data</a></li>
                    <li><a href="{{url('/ibeacon-app-development-company.php')}}" data-image="}">IBeacon</a></li>
                    <li><a href="{{url('/blockchain-application-development-company.php')}}" data-image="}">Blockchain</a></li>
                    <li><a href="{{url('/data-science.php')}}" data-image="}">Data Science</a></li>
                  </ul>
                </div>
              </div>
            </li>

            <!-- <li class="menu-item-has-children">
       <a href="#">Industries <i class="fas fa-angle-down"></i></a>
       <div class="sub-menu single-column-menu">
        <ul>
         <li><a href="#">Login</a></li>
         <li><a href="#">Register</a></li>
         <li><a href="#">Faq</a></li>
         <li><a href="#">404 Page</a></li>
        </ul>
       </div>
      </li> -->
            <li class="menu-item-has-children">
              <a href="#">Industries <i class="fa fa-angle-down"></i></a>
              <div class="sub-menu mega-menu mega-menu-column-4 industries">
                <div class="list-item">
                  <span class=" fw-bolder fs-4">Diverse<span class="title fs-4 fw-bolder"> Capabilities</span></span>
                  <img src="{{ asset('assets/web/industry.jpg') }}" class="img-fluid rounded" alt="" style="width: 250px; height:100px;">
                  <p class="m-0">Our software development services are built to evolve your business idea into a successful growth story</p><a href="{{url('/e-wallet-app-development.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}" class="fw-bolder">Read more <i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="list-item">
                  <h4 class="title fw-bold ps-4">Digital Marketing</h4>
                  <ul>
                    <li><a href="{{url('/healthcare-seo-services.php')}}" data-image="{{ asset('assets/web/nav-images/seo.webp') }}">Healthcare</a></li>
                    <li><a href="{{url('/limo-seo-services.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}">Limo</a></li>
                    <li><a href="{{url('/e-commerce-seo-services.php')}}" data-image="">E-commerece</a></li>
                    <li><a href="{{url('/law-firm-seo.php')}}" data-image="">Law</a></li>
                  </ul>

                </div>
                <div class="list-item">
                  <h4 class="title fw-bold ps-4">Technology</h4>
                  <ul>
                    <li><a href="{{url('/e-wallet-app-development.php')}}" data-image="">E-Wallet</a></li>
                    <li><a href="{{url('/banking-and-finance-app-development.php')}}" data-image="">Banking</a></li>
                    <li><a href="{{url('/multi-vendor-marketplace.php')}}" data-image="">Multi-Vendor</a></li>
                    <li><a href="{{url('/affiliate-marketplace')}}" data-image="">Affiliate</a></li>
                    <li><a href="{{url('/on-demand-app-development.php')}}" data-image="">On demand</a></li>
                    <li><a href="{{url('/taxi-booking-app')}}" data-image="">Taxi Booking</a></li>
                    <li><a href="{{url('/job-portal-development.php')}}" data-image="">Job Portal</a></li>
                    <li><a href="{{url('/food-delivery-app.php')}}" data-image="">Food Delivery</a></li>
                    <li><a href="{{url('/real-estate-app-development.php')}}" data-image="">Real Estate</a></li>
                    <li><a href="{{url('/social-media-app-development.php')}}" data-image="">Social Media</a></li>
                    <li><a href="{{url('/ott-video-app-development.php')}}" data-image="">OTT</a></li>
                    <li><a href="{{url('/education-portal-development.php')}}" data-image="">Education</a></li>
                    <li><a href="{{url('/tour-travel-app-development.php')}}" data-image="">Travel and Tourism</a></li>
                  </ul>
                </div>
                <!-- <div class="list-item">
         <h4 class="title fw-bold ps-4">Web Development</h4>
         <ul>
          <li><a href="{{url('/android-app-development')}}" data-image="">Python</a></li>
          <li><a href="{{url('/iphone-ios-development-company')}}" data-image="">WordPress</a></li>
          <li><a href="{{url('/swift-platform-development')}}" data-image="">Magento</a></li>
          <li><a href="{{url('/wearable-app-development')}}" data-image="">Joomla</a></li>
          <li><a href="{{url('/wearable-app-development')}}" data-image="">Drupal</a></li>
         </ul>
         <h4 class="title fw-bold ps-4">Quality Analysis</h4>
         <ul>
          <li><a href="{{url('/php-development')}}" data-image="}">QA</a></li>
         </ul>
         <h4 class="title fw-bold ps-4">Others</h4>
         <ul>
          <li><a href="" data-image="}">Big Data</a></li>
          <li><a href="" data-image="}">IBeacon</a></li>
          <li><a href="" data-image="}">Blockchain</a></li>
          <li><a href="" data-image="}">Data Science</a></li>
         </ul>
        </div> -->
              </div>
            </li>
            <li class="menu-item-has-children">
              <a href="{{url('/portfolio-seo-list.php')}}">Portfolio <i class="fa fa-angle-down"></i></a>
              <div class="sub-menu mega-menu mega-menu-column-2">
                <div class="list-item">
                  <h4 class="title fw-bold ps-4">Digital Marketing</h4>
                  <ul>
                    <li><a href="{{url('/portfolio-seo-list.php')}}" data-image="{{ asset('assets/web/nav-images/seo.webp') }}">Digital Marketing</a></li>

                  </ul>
                </div>
                <div class="list-item">
                  <h4 class="title fw-bold ps-4">Development</h4>
                  <ul>
                    <li><a href="{{url('/portfolio/software-development.php')}}" data-image="">Software Development</a></li>
                    <li><a href="{{url('/portfolio/web-development.php')}}" data-image="">Web Development</a></li>
                    <li><a href="{{url('/portfolio/Apps-development.php')}}" data-image="">App Development</a></li>

                  </ul>
                </div>

              </div>
            </li>
            <li class="menu-item-has-children">
              <a href="#">Resources <i class="fas fa-angle-down"></i></a>
              <div class="sub-menu single-column-menu">
                <div class="list-item">
                  <img src="{{ asset('assets/web/blog.jpg') }}" class="img-fluid rounded " alt="" style="width: 250px; height:100px;">
                  <h5 class="  m-0 fw-bolder pt-3">Nettechnocrats Blog</h5>
                  <a href="{{url('/blogs.php')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}" class=" fw-bolder" style="color:var(--green);">Read more <i class="fa-solid fa-chevron-right"></i></a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <!-- menu end here -->
      <div class="header-item item-right">
        <a href="#" class="phone__number"><i class="fa-solid fa-phone"></i>+91-9711411002</a>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=9711411002&amp;text=Hello Nettechnocrats, I'm looking for SEO & digital marketing services. Can you help boost my online presence?" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="{{ url('contact-us.php')}}"><span class="get__in__touch">Get In Touch</span></a>
        <!-- <a href="{{ url('login_page')}}"><span class="get__in__touch">Login</span></a> -->
        <!-- mobile menu trigger -->
        <div class="mobile-menu-trigger">
          <span></span>
        </div>
      </div>
    </div>
  </div>

</header>
<!-- header end -->




<script>
  const menu = document.querySelector(".menu");
  const menuMain = menu.querySelector(".menu-main");
  const goBack = menu.querySelector(".go-back");
  const menuTrigger = document.querySelector(".mobile-menu-trigger");
  const closeMenu = menu.querySelector(".mobile-menu-close");
  let subMenu;
  menuMain.addEventListener("click", (e) => {
    if (!menu.classList.contains("active")) {
      return;
    }
    if (e.target.closest(".menu-item-has-children")) {
      const hasChildren = e.target.closest(".menu-item-has-children");
      showSubMenu(hasChildren);
    }
  });
  goBack.addEventListener("click", () => {
    hideSubMenu();
  })
  menuTrigger.addEventListener("click", () => {
    toggleMenu();
  })
  closeMenu.addEventListener("click", () => {
    toggleMenu();
  })
  document.querySelector(".menu-overlay").addEventListener("click", () => {
    toggleMenu();
  })

  function toggleMenu() {
    menu.classList.toggle("active");
    document.querySelector(".menu-overlay").classList.toggle("active");
  }

  function showSubMenu(hasChildren) {
    subMenu = hasChildren.querySelector(".sub-menu");
    subMenu.classList.add("active");
    subMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
    menu.querySelector(".current-menu-title").innerHTML = menuTitle;
    menu.querySelector(".mobile-menu-head").classList.add("active");
  }

  function hideSubMenu() {
    subMenu.style.animation = "slideRight 0.5s ease forwards";
    setTimeout(() => {
      subMenu.classList.remove("active");
    }, 300);
    menu.querySelector(".current-menu-title").innerHTML = "";
    menu.querySelector(".mobile-menu-head").classList.remove("active");
  }

  window.onresize = function() {
    if (this.innerWidth > 991) {
      if (menu.classList.contains("active")) {
        toggleMenu();
      }

    }
  }
</script>
<script>
  const links = document.querySelectorAll('.list-item a');
  const image = document.getElementById('image');

  links.forEach(link => {
    link.addEventListener('mouseover', function() {
      image.src = this.getAttribute('data-image');
    });

    link.addEventListener('mouseout', function() {
      image.src = '{{ asset("assets/web/nav-images/seo.webp") }}'; // Use double quotes inside the asset function
    });
  });
</script>