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
         <h4 class="title">MICROSOFT</h4>
         <ul>
          <li><a href="{{url('/asp-net-development')}}" data-image="">ASP. Net</a></li>
          <li><a href="{{url('/c-sharp-development')}}" data-image="">C#</a></li>
          <li><a href="{{url('/share-point')}}" data-image="">SharePoint</a></li>
         </ul>
         <h4 class="title">CRM</h4>
         <ul>
          <li><a href="{{url('/microsoft-dynamic-crm')}}" data-image="">Microsoft Dynamic CRM</a></li>
          <li><a href="{{url('/salesforce-development')}}" data-image="">Salesforce</a></li>
         </ul>
        </div>
        <div class="list-item">
         <h4 class="title">MOBILE</h4>
         <ul>
          <li><a href="{{url('/android-app-development')}}" data-image="">Android</a></li>
          <li><a href="{{url('/iphone-ios-development-company')}}" data-image="">Iphone/IOS</a></li>
          <li><a href="{{url('/swift-platform-development')}}" data-image="">Swift</a></li>
          <li><a href="{{url('/wearable-app-development')}}" data-image="">Wearable</a></li>
         </ul>
         <h4 class="title">PHP TECHNOLOGY</h4>
         <ul>
          <li><a href="{{url('/php-development')}}" data-image="}">PHP</a></li>
          <li><a href="{{url('/zend-development')}}" data-image="}">Zend</a></li>
          <li><a href="{{url('/lamp-development')}}" data-image="}">Lamp</a></li>
          <li><a href="{{url('/codeigniter-development')}}" data-image="}">Codeigniter</a></li>
          <li><a href="{{url('/laravel-development')}}" data-image="}">Laravel</a></li>
         </ul>
        </div>
        <div class="list-item">
         <h4 class="title">JS FRAMEWORK</h4>
         <ul>
          <li><a href="{{url('/nodejs-development')}}" data-image="}">Node Js</a></li>
          <li><a href="{{url('/angular-js-development')}}" data-image="}">Angular Js</a></li>
         </ul>
         <h4 class="title">CMS</h4>
         <ul>
          <li><a href="{{url('/wordpress-development-services')}}" data-image="}">WordPress</a></li>
          <li><a href="{{url('/magento-web-development ')}}" data-image="}">Magento</a></li>
          <li><a href="{{url('/joomla-web-development')}}" data-image="}">Joomla</a></li>
          <li><a href="{{url('/drupal-web-development')}}" data-image="}">Drupal</a></li>
         </ul>
        </div>
        <div class="list-item">
         <h4 class="title">OTHERS</h4>
         <ul>
          <li><a href="{{url('/python-django-development-company')}}" data-image="}">Python Web development-company</a></li>
          <li><a href="{{url('/cloud-computing')}}" data-image="}">Cloud Computing</a></li>
          <li><a href="{{url('/big-data-analytics')}}" data-image="}">Big Data</a></li>
          <li><a href="{{url('/chatbot-development-company')}}" data-image="}">Chatbot</a></li>
          <li><a href="{{url('/ibeacon-app-development-company')}}" data-image="}">IBeacon</a></li>
          <li><a href="{{url('/iot-applications-development-company')}}" data-image="}">Iot</a></li>
          <li><a href="{{url('/blockchain-application-development-company')}}" data-image="}">Blockchain</a></li>
          <li><a href="{{url('/data-science')}}" data-image="}">Data Science</a></li>
          <li><a href="{{url('/ai-application-development-company')}}" data-image="}">Artificial Intelligence</a></li>
         </ul>
        </div>
        <!-- <div class="list-item" id="imge">
         <img src="{{ asset('assets/web/nav-images/seo.png') }}" alt="Service Image" id="imae" />
        </div> -->
       </div>
      </li>
      <li class="menu-item-has-children">
       <a href="#">Digital Marketing <i class="fa fa-angle-down"></i></a>
       <div class="sub-menu mega-menu mega-menu-column-4">
        <div class="list-item">
         <h4 class="title">SEO Services</h4>
         <ul>
          <li><a href="{{url('/seo-services/')}}" data-image="{{ asset('assets/web/nav-images/seo.png') }}">SEO is the key for every business success. Backed by a dedicated team of SEO professionals</a></li>
         </ul>
         <h4 class="title">PPC Services</h4>
         <ul>
          <li><a href="{{url('/ppc-services/')}}" data-image="{{ asset('assets/web/nav-images/ppc.png') }}">Maximize Visibility and Drive Targeted Traffic with a Top-tier PPC Management Company</a></li>
         </ul>
        </div>
        <div class="list-item">
         <h4 class="title">SMO Services</h4>
         <ul>
          <li><a href="{{url('/smo-services/')}}" data-image="{{ asset('assets/web/nav-images/smo.webp') }}">Hire Social media experts to increase brand awareness and loyalty</a></li>
         </ul>
         <h4 class="title">Local SEO Services</h4>
         <ul>
          <li><a href="{{url('/local-seo-services/')}}" data-image="{{ asset('assets/web/nav-images/local-seo.png') }}">Boost Your Local Presence with Local SEO Services Choose the premier Local SEO Company</a></li>
         </ul>
        </div>
        <div class="list-item">
         <h4 class="title">SEO Reseller</h4>
         <ul>
          <li><a href="{{url('//')}}" data-image="{{ asset('assets/web/nav-images/seo-reseller.png') }}">Boost Agency Revenue with Our Trusted White Label Services</a></li>
         </ul>
         <h4 class="title">ORM</h4>
         <ul>
          <li><a href="{{url('/online-reputation-management/')}}" data-image="{{ asset('assets/web/nav-images/orm.webp') }}">Experience the Pinnacle of Online Reputation Management Services with Nettechnocrats.</a></li>
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
    <a href="#"><span class="get__in__touch">Login</span></a>
    <!-- mobile menu trigger -->
    <div class="mobile-menu-trigger">
     <span></span>
    </div>
   </div>
  </div>
 </div>

 <svg width="0" height="0">
  <defs>
   <filter id="corner-shadow" x="0" y="0">
    <feDropShadow dx="0" dy="5" stdDeviation="3" flood-color="black" flood-opacity="0.8" />
   </filter>
  </defs>
 </svg>
</header>
<!-- header end -->