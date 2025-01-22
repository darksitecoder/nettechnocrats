<?php 

include 'include/home_header.php';

include 'include/connection.php';

?>

<link rel="shortcut icon" type="image/ico" href="/favicon.ico"/>

<section class="top_banner">

  <div id="home_banner" class="carousel slide" data-ride="carousel">

    <ul class="carousel-indicators">

      <li data-target="#home_banner" data-slide-to="0" class="active"></li>

      <li data-target="#home_banner" data-slide-to="1"></li>

      <li data-target="#home_banner" data-slide-to="2"></li>

      <li data-target="#home_banner" data-slide-to="3"></li>

    </ul>

    <div class="carousel-inner">

      <div class="carousel-item active"> <img src="images/web_develepment_new.jpg" alt="Website development">

        <div class="carousel-caption banner_txt">

          <h2>Website development </h2>

          <p>Attain incredible digital presence with high-performing & responsive websites that are integrated with engaging features & interactive UI/UX designs. Count on our award-winning excellence in developing highly scalable websites for popular platforms. </p>

          <a href="<?=BaseUrl?>web-development.php">Learn more</a> </div>

      </div>

      <div class="carousel-item"> <img src="images/mobile_app_banner_new.jpg" alt="Mobile App Development" >

        <div class="carousel-caption banner_txt">

          <h2>Mobile App Development </h2>

          <p>Innovative mobile app solutions to exemplify your business aspirations. Our feature-rich mobile apps are leveraged with stunning user interface & engaging features. We hold expertise in delivering fully-functional mobile apps with highly responsive & interactive user interface designs.</p>

          <a href="<?=BaseUrl?>mobile-app-development.php">Learn more</a> </div>

      </div>

      <div class="carousel-item"> <img src="images/enterprise_banner_new.jpg" alt="Enterprise Software Development" >

        <div class="carousel-caption banner_txt">

          <h2>Enterprise Software Development</h2>

          <p>Empower your business across different verticals with the right enterprise software development</p>

          <a href="<?=BaseUrl?>enterprise-software-development.php">Learn more</a> </div>

      </div>

      <div class="carousel-item"> <img src="images/main_banner.jpg" alt="Digital Marketing" >

        <div class="carousel-caption banner_txt">

          <h2>Digital Marketing </h2>

          <p>Shine across the digital world with an intense online presence on Google. Let our digital marketers encourage your brand’s visibility to attain top rankings on SERPs for double-fold conversion rates. Generate increased online sales & drive heavy traffic on your online platform. </p>

          <a href="<?=BaseUrl?>digital-marketing.php">Learn more</a> </div>

      </div>

    </div>

  </div>

  <div class="right_trust">

    <h3>TRUSTED BY</h3>

    <ul>

      <li><a href="https://clutch.co/profile/nettechnocrats" target="_blank"><img src="images/clutch_logo.png" alt="trusted by clutch"></a></li>

      <li><a href="https://extract.co/nettechnocrats" target="_blank"><img src="images/extract_logo.png" alt="trusted by extract"></a></li>

      <li><a href="https://www.goodfirms.co/companies/view/769/nettechnocrats-it-services-pvt-ltd" target="_blank"><img src="images/good_firms.png" alt="trusted by good firms"></a></li>

      <li><a href="https://www.appfutura.com/developers/nettechnocrats1" target="_blank"><img src="images/app_futura.png" alt="trusted by app flutra"></a></li>

    </ul>

  </div>

  <div class="client_area_top">

    <div class="container">

      <div class="row">

        <div class="col-md-2">

          <div class="head_side">

            <h3>900+</h3>

            <p>Overseas Clients</p>

          </div>

        </div>

        <div class="col-md-10">

          <ul>

            <li><img src="images/cocacola.png" alt="cocacola"></li>

            <li><img src="images/lexus.png" alt="lexus"></li>

            <li><img src="images/preapps.png" alt="preapps"></li>

            <li><img src="images/slim_browser.png" alt="slim browser"></li>

            <li><img src="images/zangi.png" alt="zangi"></li>

            <li><img src="images/dunlap.png" alt="dunlap"></li>

          </ul>

        </div>

      </div>

    </div>

  </div>

</section>

<section class="about_us_area">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <h2>A Sneak Peak To Our Exclusive Services </h2>

        <p>Take a tour of our major service areas to join the digital revolution with talented & energetic minds. Nettechnocrats is partnered with leading brands and recognized for facilitating the best-in-class services as enlisted.</p>

        <ul>

          <li>

            <figure><img src="images/web_development_icon.png" alt="Web Development"></figure>

            <h3><a href="<?=BaseUrl?>web-development.php">Web Development</a></h3>

            <p>Our developers create highly responsive websites inspired by emerging technologies & trends to establish a remark in the digital sphere. Our creative web designers & programmers deliver innovative digital solutions to meet the clients’ requirements. </p>

            <ul class="more_services">

              <li><a href="<?=BaseUrl?>asp.net-development.php">ASP.Net</a></li>

              <li><a href="<?=BaseUrl?>laravel-development.php">Laravel</a></li>

              <li><a href="<?=BaseUrl?>python-django-development-company.php">Python</a></li>

              <li><a href="<?=BaseUrl?>cake-php-development.php">PHP</a></li>

            </ul>

          </li>

          <li>

            <figure><img src="images/mobile_app_icon.png" alt="Mobile Application"></figure>

            <h3><a href="<?=BaseUrl?>mobile-app-development.php">Mobile Application</a></h3>

            <p>Innovation & perfection meet at Nettechnocrats as we create high-performing mobile applications integrated with user-friendly features & functionalities to deliver stunning user experience for improved user engagement. </p>

            <ul class="more_services">

              <li><a href="<?=BaseUrl?>iphone-application-development.php">iOS App</a></li>

              <li><a href="<?=BaseUrl?>android-app-development.php">Android App</a></li>

              <li><a href="<?=BaseUrl?>wearable-app-development.php">Wearable App</a></li>

              <li><a href="<?=BaseUrl?>swift-cross-platform-development.php">Swift App</a></li>

            </ul>

          </li>

          <li>

            <figure><img src="images/erp_icon.png" alt="Enterprise Software"></figure>

            <h3><a href="<?=BaseUrl?>enterprise-software-development.php">Enterprise Software</a></h3>

            <p>Let our experts design and develop enterprise applications to simplify your business operations and increased ROI. Our experienced developers ensure to provide tailor-made applications that enable you to streamline your existing process in-line with the latest standards. </p>

            <ul class="more_services">

              <li><a href="<?=BaseUrl?>blockchain-application-development-company.php">Blockchain</a></li>

              <li><a href="<?=BaseUrl?>ai-application-development-company.php">Artificial Intelligence</a></li>

              <li><a href="<?=BaseUrl?>iot-applications-development-company.php">Internet of Things</a></li>

              <li><a href="<?=BaseUrl?>big-data-analytics.php">Big Data</a></li>

            </ul>

          </li>

          <li>

            <figure><img src="images/digital_marketing_icon.png" alt="Digital Marketing"></figure>

            <h3><a href="<?=BaseUrl?>digital-marketing.php">Digital Marketing</a></h3>

            <p>Our talented digital marketers involve result-driven practices & run top-performing campaigns for Search engine optimization, brand promotion, social media advertising, PPC management, Email marketing, & more. </p>

            <ul class="more_services">

              <li><a href="<?=BaseUrl?>seo-services.php">SEO</a></li>

              <li><a href="<?=BaseUrl?>smo-services.php">SMO</a></li>

              <li><a href="<?=BaseUrl?>ppc-services.php">PPC </a></li>

              <li><a href="<?=BaseUrl?>">Amazon SEO </a></li>

            </ul>

          </li>

        </ul>

      </div>

    </div>

  </div>

</section>

<section class="industry_area">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <h2>A Quick Glance Of Top Industries We Serve</h2>

        <p>Nettechnocrats emerged as a market leader in such a shorter span of time with core competencies in facilitating the clientele from varied business verticals under these industries:</p>

        <ul class="nav nav-tabs" role="tablist">

          <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#real_estate">

            <figure><img src="images/real_estate.png" alt="Real Estate"></figure>

            Real Estate </a> </li>

          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#healthcare">

            <figure><img src="images/healthcare_icon.png" alt="Healthcare"></figure>

            Healthcare </a> </li>

          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#travel">

            <figure><img src="images/travel_icon.png" alt="Travel & Tourism"></figure>

            Travel & Tourism </a> </li>

          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#automotive">

            <figure><img src="images/automative_icon.png" alt="Automotive"></figure>

            Automotive </a> </li>

          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#retail">

            <figure><img src="images/retail_icon.png" alt="Retail & E-commerce"></figure>

            Retail & E-commerce </a> </li>

          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#banking">

            <figure><img src="images/banking_icon.png" alt="Banking & Finance"></figure>

            Banking & Finance </a> </li>

          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#media">

            <figure><img src="images/media_entertainment_icon.png" alt="Media & Entertainment"></figure>

            Media & Entertainment </a> </li>

          <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#e_learning">

            <figure><img src="images/e_learning_icon.png" alt="Education & E-Learning"></figure>

            Education & E-Learning </a> </li>

        </ul>

        

        <!-- Tab panes -->

        <div class="tab-content">

          <div id="real_estate" class="container tab-pane active">

            <h3><a href="real-state-portal-development-company.php"><img src="images/real_estate2.png" alt="Real Estate"> Real Estate</a></h3>

            <p>We have been catering to real estate & property industry with incredible excellence in delivering profit-driven solutions for business success. Our professionals mend the technology & artistry to deliver distinctive digital solutions based on ERP, CMS, responsive web designs, feature-loaded mobile apps, & more to maximize ROI rates.</p>

          </div>

          <div id="healthcare" class="container tab-pane fade">

            <h3><a href="medical-healthcare-app-development.php"><img src="images/healthcare_icon_2.png" alt="Healthcare"> Healthcare</a></h3>

            <p>Being trusted by the global clientele, Nettechnocrats have earned a prominent space in the healthcare & medical industry. Our mHealth apps not simplify the accessibility to healthcare services but also facilitate health startups or doctors to reach their clients. From Android & iOS to Wearable & IoT, our apps are achieving the goals for many businesses. </p>

          </div>

          <div id="travel" class="container tab-pane fade">

            <h3><a href="tour-travel-app-development-company.php"><img src="images/travel_icon_2.png" alt="Travel & Tourism"> Travel & Tourism</a></h3>

            <p>Our digital solutions are customized to enthral users with immersive experience & captivating graphics. We brainstorm ideas & strategize to deliver what your travellers actually prefer. Intending to raise domestic & international travel bookings, our professionals step beyond their limits to come up with business-centric solutions for the fastest-moving customers. </p>

          </div>

          <div id="automotive" class="container tab-pane fade">

            <h3><a href="automobile-software-solutions.php"><img src="images/automative_icon_2.png" alt="Automotive"> Automotive</a></h3>

            <p>Right from real-time access to one-click booking, route planning, & managed freight consignment, our custom-built web & mobile app solutions bring great profits to our valuable clients involved in logistics & automotive business. We intend to introduce multifarious opportunities for B2C to B2E businesses. </p>

          </div>

          <div id="retail" class="container tab-pane fade">

            <h3><a href="retailer-wholeseller.php"><img src="images/retail_icon_2.png" alt="Retail & E-commerce"> Retail & E-commerce</a></h3>

            <p>Online shopping is the future of retail industry & we’re ahead to incorporate this concept with the digital technology that is based on Magento, WooCommerce, Shopify, & other aspects of custom mobile commerce development. </p>

          </div>

          <div id="banking" class="container tab-pane fade">

            <h3><a href="finance-banking-software-development.php"><img src="images/banking_icon_2.png" alt="Banking & Finance"> Banking & Finance</a></h3>

            <p>We create feature-packed apps & highly responsive websites based on financial & banking services. Our digital solutions are designed to facilitate one-click accessibility to finance & banking groups to let them build loyal engagements across various platforms. </p>

          </div>

          <div id="media" class="container tab-pane fade">

            <h3><a href="media-advertisement.php"><img src="images/media_entertainment_icon_2.png" alt="Media & Entertainment"> Media & Entertainment</a></h3>

            <p>Our exclusive service area for media & entertainment circumscribes various digital services including editing, stand-out animation, maintenance of flash digital media, performance advertising, flash digital media, & more. </p>

          </div>

          <div id="e_learning" class="container tab-pane fade">

            <h3><a href="education-portal-development.php"><img src="images/e_learning_icon_2.png" alt="Education & E-Learning"> Education & E-Learning</a></h3>

            <p>We create innovative websites & mobile apps to match the standards of eLearning for universities & institutes. We’re focused on bringing a host of e-learning services & online modules to assist students & learners. </p>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<section class="why_us_area">

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <h2>Our Key Offerings Based On Technologies </h2>

        <p>Nettechnocrats is backed by a team of highly competent, skilled, & experienced designers, developers, & project managers committed to bringing business-centric solutions with integration of various advanced technologies. </p>

        <ul>

          <li>

            <figure><img src="images/blockchain_tech_icon.png" alt="Blockchain Technology"></figure>

            <h3><a href="<?=BaseUrl?>blockchain-application-development-company.php">Blockchain Technology</a></h3>

            <p>Let us bring another level of transparency, business efficiency & automation in your operations with the integration of Blockchain technology. Our passionate experts hold capabilities to implement this technology across their organizations.</p>

          </li>

          <li>

            <figure><img src="images/cloud_computing_icon.png" alt="Cloud Computing"></figure>

            <h3><a href="<?=BaseUrl?>cloud-computing.php">Cloud Computing</a></h3>

            <p>Integrating robust cloud computing solutions to integrate a responsive, connected, & smooth network for simplifying business operations. We bring business-driven cloud computing solutions leveraged with important data.</p>

          </li>

          <li>

            <figure><img src="images/ar_icon.png" alt="Augmented Reality Solutions"></figure>

            <h3><a href="<?=BaseUrl?>">Augmented Reality Solutions</a></h3>

            <p>Increase your business productivity in varied areas of Architecture, Engineering, and Construction with key AR tools for visual effects & streamline user experiences. </p>

          </li>

          <li>

            <figure><img src="images/ui_ux_design_icon.png" alt="UI/UX designs"></figure>

            <h3><a href="<?=BaseUrl?>ui-ux-design-services.php">UI/UX designs</a></h3>

            <p>Stunning user interfaces designs with high-quality graphics & features to deliver interactive user experiences with every product. Our creative designing team builds engaging product designs with brilliance in delivering quality-based UI/UX design services. </p>

          </li>

          <li>

            <figure><img src="images/iot_icon.png" alt="Internet Of Things"></figure>

            <h3><a href="<?=BaseUrl?>iot-applications-development-company.php">Internet Of Things</a></h3>

            <p>Our experts deliver performance-driven solutions inspired by IoT technology to empower enterprises with custom software engineering models for Internet-friendly devices.</p>

          </li>

          <li>

            <figure><img src="images/artificial_integ_icon.png" alt="Artificial Intelligence"></figure>

            <h3><a href="<?=BaseUrl?>ai-application-development-company.php">Artificial Intelligence</a></h3>

            <p>Deploy deep learning models development in your business operations with the integration of Big data, cloud technology, & AI solutions as specified for your industry. </p>

          </li>

        </ul>

      </div>

    </div>

  </div>

</section>

<section class="portfolio_area">

  <div class="container-fluid">

    <div class="row">

      <div class="col-md-12 heading">

        <h2><span>1000+</span> Completed Projects In <span>15+</span> Countries</h2>

        <p>We deliver globally, providing result-driven project management and seamless communication.</p>

      </div>

    </div>

    <div class="row">

      <div class="column"> <a href="#" class="column-content cards-item icons--hover-white" style="height: 423px;">

        <div class="cards-wrapper">

          <div class="cards-item-link-image" style="background-image:url(images/port_01.jpg);"></div>

          <figure class="cards-icon"> <img src="images/rei_pro_logo.png" alt="REI Property Pro"> </figure>

          <div class="cards-name">

            <h4>REI Property Pro</h4>

          </div>

          <div class="cards-text">

            <p>REI Property Pro partnered with Nettechnocrats to assist the new and experienced real estate investors as well agents with a CRM management system to manage all their tasks such as setting automated email campaigns, launching social media ads & landing pages, generate repair estimates and much more!</p>

          </div>

          <ul class="tag_item">

            <li>.Net</li>

            <li>CRM</li>

          </ul>

        </div>

        </a> </div>

      <div class="column"> <a href="#" class="column-content cards-item icons--hover-white" style="height: 423px;">

        <div class="cards-wrapper">

          <div class="cards-item-link-image" style="background-image:url(images/port_02.jpg);"></div>

          <figure class="cards-icon"> <img src="images/revjolt_logo.png" alt="revJOLT"> </figure>

          <div class="cards-name">

            <h4>revJOLT</h4>

          </div>

          <div class="cards-text">

            <p>revJOLT partnered with Nettechnocrats to build a platform for aspiring content publishers where they can post their content with a distinctive ping-post system with integration of a robust reporting dashboard & API-specific framework and extend their clientele across industries. </p>

          </div>

          <ul class="tag_item">

            <li>Laravel</li>

   

          </ul>

        </div>

        </a> </div>

      <div class="column"> <a href="#" class="column-content cards-item icons--hover-white" style="height: 423px;">

        <div class="cards-wrapper">

          <div class="cards-item-link-image" style="background-image:url(images/port_03.jpg);"></div>

          <figure class="cards-icon"> <img src="images/astoria_logo.png" alt="Astoria"> </figure>

          <div class="cards-name">

            <h4>Astoria</h4>

          </div>

          <div class="cards-text">

            <p>Nettechnocrats designed, developed and delivered the most featured website embedded with compelling UI designs for Astoria to connect thousands of advertisers for pay-per-call marketing with an interface for strategic relationship tracking program. </p>

          </div>

          <ul class="tag_item">

            <li>Web Design</li>

            <li>Laravel</li>

          </ul>

        </div>

        </a> </div>

      <div class="column"> <a href="#" class="column-content cards-item icons--hover-white" style="height: 423px;">

        <div class="cards-wrapper">

          <div class="cards-item-link-image" style="background-image:url(images/port_04.jpg);"></div>

          <figure class="cards-icon"> <img src="images/zangi.png" alt="ZANGI"> </figure>

          <div class="cards-name">

            <h4>ZANGI</h4>

          </div>

          <div class="cards-text">

            <p>An outstanding corporation in the USA, Zangi approached Nettechnocrats for development of a private messenger app, to provide its users a platform with no charges to make interrupted voice and video calls, fast and private messaging, as well as file sharing, no matter where they're in the world. </p>

          </div>

          <ul class="tag_item">

            <li>Mobile App</li>

            <li>iOS Development</li>

          </ul>

        </div>

        </a> </div>

      <div class="column"> <a href="#" class="column-content cards-item icons--hover-white" style="height: 423px;">

        <div class="cards-wrapper">

          <div class="cards-item-link-image" style="background-image:url(images/port_05.jpg);"></div>

          <figure class="cards-icon"> <img src="images/twis_logo.png" alt="TSIG TWMobile"> </figure>

          <div class="cards-name">

            <h4>TSIG TWMobile</h4>

          </div>

          <div class="cards-text">

            <p>The TWMobile is an innovative app designed to provide users a quick way to download AutoCAD drawings to their iPad. The mobile app provides a niche software to conduct various  CAD based tasks such as creating asset inventories, surveys, and inspections related to healthcare compliance and facility management. </p>

          </div>

          <ul class="tag_item">

            <li>Mobile App</li>

            <li>iOS Development</li>

          </ul>

          </ul>

        </div>

        </a> </div>

      <div class="column"> <a href="#" class="column-content cards-item icons--hover-white" style="height: 423px;">

        <div class="cards-wrapper">

          <div class="cards-item-link-image" style="background-image:url(images/port_06.jpg);"></div>

          <figure class="cards-icon"> <img src="images/dbl_logo.png" alt="DBL LexFect"> </figure>

          <div class="cards-name">

            <h4>DBL LexFect</h4>

          </div>

          <div class="cards-text">

            <p>Nettechnocrats helped Bennett & Ludwig to design a mobile app for iPhone to facilitate their clients with top-notch legal advice and services at affordable prices. This mobile app allows their clients to access their services right from booking an appointment with the lawyers to taking a review of case/disputes.</p>

          </div>

          <ul class="tag_item">

             <li>Mobile App</li>

            <li>iOS Development</li>

          </ul>

        </div>

        </a> </div>

      <div class="column"> <a href="#" class="column-content cards-item icons--hover-white" style="height: 423px;">

        <div class="cards-wrapper">

          <div class="cards-item-link-image" style="background-image:url(images/port_07.jpg);"></div>

          <figure class="cards-icon"> <img src="images/lakanto_logo.png" alt="Lakanto"> </figure>

          <div class="cards-name">

            <h4>Lakanto </h4>

          </div>

          <div class="cards-text">

            <p>Lakanto partnered with Nettechnocrats team to get an online portal as a store of sweeteners to facilitate buyers with one-click accessibility to related products. Our team delivered a fully-functional website with an intriguing user interface that delivers an impeccable user experience.  </p>

          </div>

          <ul class="tag_item">

            <li>Magento</li>

            <li>E-Commerce</li>

          </ul>

        </div>

        </a> </div>

      <div class="column"> <a href="#" class="column-content cards-item icons--hover-white" style="height: 423px;">

        <div class="cards-wrapper">

          <div class="cards-item-link-image" style="background-image:url(images/port_08.jpg);"></div>

          <figure class="cards-icon"> <img src="images/weely_voice_logo.png" alt="Weekly Voice"> </figure>

          <div class="cards-name">

            <h4>Weekly Voice</h4>

          </div>

          <div class="cards-text">

            <p>Weekly Voice approached Nettechnocrats to assist them with a news portal with dynamic categories and sections like national and international news, lifestyle, sports, entertainment, business, etc. The website CMS allows owners to publish, edit and update news, press releases, articles & blogs through an easy-to-use admin panel. </p>

          </div>

          <ul class="tag_item">

            <li>CMS</li>

            <li>Wordpress Development</li>

          </ul>

        </div>

        </a> </div>

    </div>

  </div>

  </div>

  </div>

</section>

<section class="resource_area ">



  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <h2 >Count On Our Passion For Technology</h2>

        <p>We love technology & our clients rely on our specialization in digital marketing, IT consulting, and website & mobile app development to match your business needs. </p>

      </div>

    </div>

  </div>

</section>

<section class="testmonial-section">

  <div class="container">

    <div class="row">

      <div class="col-lg-12">

        <div id="home_banner2" class="carousel slide" data-ride="carousel">

   

    <div class="carousel-inner">

      <div class="carousel-item active "> 

      <div class="row">

       <div class="col-md-1 col-sm-1 col-xs-12 col-lg-1">

        <img src="images/test-client.png" alt="Website development">

      </div>

       <div class="col-md-11 col-sm-11 col-xs-12 col-lg-11">

         <div class="carousel-caption testmonial-text">

          <h2>Project : Software Development</h2>

           <div class="test-rating">

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

        </div>



          <p>I contacted Nettechnocrates to create a Saas software application that's interactive, user friendly & filled with user permissions and restrictions. Their team took there time to understand what I wanted & delivered a product as described. Their response time was always reliable & the communication was great. This team is good at what they do!! I plan to use them again for a future project. Thanks for everything!! </p>

          <h4>Rolonda Andrews</h4>

           <p style="margin-top: 0px;">Role: Senior Mortgage Consultant at Premier Solutions</p>

           </div>

      </div>

    </div>

  </div>

     <div class="carousel-item "> 

      <div class="row">

      <div class="col-md-1 col-sm-1 col-xs-12 col-lg-1">

        <img src="images/test-client1.png" alt="Website development">

      </div>

        <div class="col-md-11 col-sm-11 col-xs-12 col-lg-11">

         <div class="carousel-caption testmonial-text">

          <h2>Project : Best Blockchain Development Company</h2>

          <div class="test-rating">

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

        </div>

          <p>We are a Dallas based Cryptocurrency wallet system(non-custodial wallet) on blockchain system where user can exchange one cryptocurrency to another cryptocurrency, crypto wallet to bank transfer, Smart lending, cross-border transfer, coin information with latest prices, news of cryptocurrencies and much more. </p>

          <h4>Chris Martin</h4>

           <p style="margin-top: 0px;">Role: Business Development Manager at mycryptocoin</p>

           </div>

      </div>

    </div>

  </div>

  <div class="carousel-item "> 

      <div class="row">

      <div class="col-md-1 col-sm-1 col-xs-12 col-lg-1">

        <img src="images/test-client5.png" alt="Website development">

      </div>

        <div class="col-md-11 col-sm-11 col-xs-12 col-lg-11">

         <div class="carousel-caption testmonial-text" style="bottom: -60px !important;">

          <h2>Project : Website and Mobile App development for Food Business</h2>

          <div class="test-rating">

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

        </div>

          <p>It was a great experience with team Nettechnocrats. They have a great development team with talented project managers who can deliver the project on time. Thank you Nettecnocrats.</p>

          <h4>Fazal Khan</h4>

          

           </div>

      </div>

    </div>

  </div>

   <div class="carousel-item "> 

      <div class="row">

       <div class="col-md-1 col-sm-1 col-xs-12 col-lg-1">

        <img src="images/test-client2.png" alt="Website development">

      </div>

       <div class="col-md-11 col-sm-11 col-xs-12 col-lg-11">

         <div class="carousel-caption testmonial-text">

          <h2>Project : Mobile App for client's website</h2>

           <div class="test-rating">

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

        </div>

          <p>I have given on-demand mobile app to nettechnocrats .. i was suggested from other firms for hybrid technology however Nettechnocrats came up with Native technology and now i can see the benefits of Native.I have been using them from last 1 year and they have strong team of mobile app. They came up with perfect idea for mobile app. I am very happy with Nettechnocrats and hoping to app launch soon... </p>

          <h4>Get Ranktop</h4>

           <p style="margin-top: 0px;">Role: Founder at GetRankTops</p>

           </div>

      </div>

    </div>

  </div>

    <div class="carousel-item "> 

      <div class="row">

        <div class="col-md-1 col-sm-1 col-xs-12 col-lg-1">

        <img src="images/test-client4.png" alt="Website development">

      </div>

      <div class="col-md-11 col-sm-11 col-xs-12 col-lg-11">

         <div class="carousel-caption testmonial-text" style="bottom: -100px !important;">

          <h2>Project : Good and Dependable Development Team</h2>

           <div class="test-rating">

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

        </div>

          <p>I have worked with the team at Nettechnocrats on several projects. They did a good job with the development of the sites. They are very responsive and are able to execute the vision for the project. I highly recommend Anand and his team of Developers. </p>

          <h4> Joseph Hathorn</h4>

          <p style="margin-top: 0px;">Role: Senior Mortgage Consultant at Premier Solutions</p>

           </div>

      </div>

    </div>

  </div>

  <div class="carousel-item "> 

      <div class="row">

        <div class="col-md-1 col-sm-1 col-xs-12 col-lg-1">

        <img src="images/test-client6.png" alt="Website development">

      </div>

      <div class="col-md-11 col-sm-11 col-xs-12 col-lg-11">

          <div class="carousel-caption testmonial-text" style="bottom: -100px !important;">

          <h2>Team Work</h2>

           <div class="test-rating">

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

        </div>

          <p>We have done work with the Nett Team and they are always available, dedicated, reliable and committed to providing the best work for our company.</p>

          <h4> Victoria Lewis</h4>

          <p style="margin-top: 0px;">Role: Local Authority Foster Carer at Bedfordshire Local Authority</p>

           </div>

      </div>

    </div>

  </div>

  <div class="carousel-item "> 

      <div class="row">

        <div class="col-md-1 col-sm-1 col-xs-12 col-lg-1">

        <img src="images/test-client7.png" alt="Website development">

      </div>

      <div class="col-md-11 col-sm-11 col-xs-12 col-lg-11">

         <div class="carousel-caption testmonial-text" style="bottom: -100px !important;">

          <h2>Great Experience</h2>

           <div class="test-rating">

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

        </div>

          <p>I been happy that Nettechnocrats has ability to develop my business's website in short time and logical rate comparing with other providers. For sure that will be only beginning for more projects will be relying on them to handle</p>

          <h4>  Sameer Maashi</h4>

          <p style="margin-top: 0px;">Role: IT Director at Armed Forces Hospitals-Southern Region</p>

           </div>

      </div>

    </div>

  </div>

  <div class="carousel-item "> 

      <div class="row">

        <div class="col-md-1 col-sm-1 col-xs-12 col-lg-1">

        <img src="images/test-client8.png" alt="Website development">

      </div>

      <div class="col-md-11 col-sm-11 col-xs-12 col-lg-11">

         <div class="carousel-caption testmonial-text" style="bottom: -80px !important;">

          <h2>Dynamic website</h2>

           <div class="test-rating">

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

        </div>

          <p>We are very pleased with this Company to which we have asked to do a dynamic website and it has been done quite professionally.</p>

          <h4>Claudio Gambarotta</h4>

          <p style="margin-top: 0px;">Role: Director at Exportier Limited</p>

           </div>

      </div>

    </div>

  </div>

  <div class="carousel-item "> 

      <div class="row">

        <div class="col-md-1 col-sm-1 col-xs-12 col-lg-1">

        <img src="images/test-client9.png" alt="Website development">

      </div>

      <div class="col-md-11 col-sm-11 col-xs-12 col-lg-11">

         <div class="carousel-caption testmonial-text" style="bottom: -140px !important;">

          <h2>Mobile App Development</h2>

           <div class="test-rating">

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

          <i class="fa fa-star" aria-hidden="true"></i>

        </div>

          <p>We want to bring out a new RIDE-SHARE-APP which is able to make RIDE-SHARE from an exception TO WHAT THE CLIMATE WOULD MAKE IT TO: to the normal-case ! I am the Founder and CEO. Nettechnocrats was responsible for Implementing 2 PC - Websites and 2 mobile Websites which are on the one hand demonstration material for the planned APP-Project and in the same time Crowdinvesting-Plattforms where interested persons can get mor informations about the Project and realise an Investment online. They worked hard. And they were fair and trustworthy.</p>

          <h4>  Gerd Frhlich</h4>

          <p style="margin-top: 0px;">Role: CEO at MoneyTramper</p>

           </div>

      </div>

    </div>

  </div>

   <a class="carousel-control-prev" href="#home_banner2" role="button" data-slide="prev">

    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

    <span class="sr-only">Previous</span>

  </a>

  <a class="carousel-control-next" href="#home_banner2" role="button" data-slide="next">

    <span class="carousel-control-next-icon" aria-hidden="true"></span>

    <span class="sr-only">Next</span>

  </a>

    </div>

  </div>

      </div>

     

    </div>

  </div>

</section>



<section>

  <div class="home-blog-section">

    <div class="container">

      <div class="row">

        <?php

          $sql = 'SELECT name,post_image,slug from tbl_blog where status=1 order by post_date DESC LIMIT 3 ';

          $sql_query = mysqli_query($conn,$sql);

          while ($row = mysqli_fetch_array($sql_query)) {

            $post_name = nl2br(htmlspecialchars_decode($row['name']));

            if($row['post_image']){

              $row_img = BaseUrl.'BlogAdmin/uploads/'.$row['post_image'];

            }else{

              $row_img = BaseUrl.'images/imagenotavailable.png';

            }

          ?>

        <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4 blog-home-outer">

          <div class="home-blog-img">

           <img src="<?=$row_img?>" alt="<?=$post_name?>" title="<?=$post_name?>">

        </div>

        <div class="home-blog-text">

           <a href="<?=BaseUrl.'blog/'.$row['slug'].'/'?>"><h3><?=$post_name?></h3></a>

        </div>

      </div>

       <?php

        }

        ?>

      

    </div>

  </div>

</section>

    <section class="resource_area ">

      <div class="container">

    <div class="row">

      <div class="col-md-12">

        <ul class="stats">

          <li>

            <figure><img src="images/chart_icon.png" alt="7+ YEARS IN BUSINESS"></figure>

            <label>7+</label>

            <span>YEARS IN BUSINESS</span> </li>

          <li>

            <figure><img src="images/chart_icon.png" alt="700+ PROJECTS DELIVERED"></figure>

            <label>700+</label>

            <span>Clients Served</span> </li>

          <li>

            <figure><img src="images/chart_icon.png" alt="2500+ PROJECTS DELIVERED"></figure>

            <label>2500+</label>

            <span>PROJECTS DELIVERED</span> </li>

          <li>

            <figure><img src="images/chart_icon.png" alt="ISO CERTIFIED"></figure>

            <label>ISO</label>

            <span>CERTIFIED</span> </li>

          <li>

            <figure><img src="images/chart_icon.png" alt="100+ FULL-TIME EMPLOYEES"></figure>

            <label>100+</label>

            <span>FULL-TIME EMPLOYEES</span> </li>

        </ul>

      </div>

    </div>

  </div>

</section>

<section class="contact_us_area">

  <div class="container">

    <div class="row">

      <div class="col-md-7">

        <h2>Ready to get started?</h2>

        <p>Fill this out so we can know more about your requirements.</p>

       <?php include('include/EnquiryForm.php'); ?>

        </ul>

      </div>

      <div class="col-md-5">

        <figure><img src="images/customer_care.png" alt="24 X 7 Customer Care"></figure>

      </div>

    </div>

  </div>

</section>

<?php include 'include/footer.php'; ?>