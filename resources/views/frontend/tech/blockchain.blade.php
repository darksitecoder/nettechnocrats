@extends('layouts.app')

@section('title', 'Blockchain App Development Company')

@section('meta_description', 'This is a brief description of the home page for SEO purposes.')

@section('meta_keywords', 'laravel, home, keywords')

@section('content')
<!-- Abvout Start -->
<div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.png') }}'); background-repeat:no-repeat; background-size:cover;">
  <div class="container py-5">
    <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-7 wow fadeInLeft">
        <div>
          <!-- <h4 class="text-primary1">About Us</h4> -->
          <h1 class="display-5 mb-4 text-white">Blockchain App Development Company</h1>
          <p class="mb-4 text-white">Enable Blockchain & get Better Traceability of Transaction that Enhances Engagement with Loyalty</p>
        </div>
        @include('partial/proposal')
      </div>
      <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
        <div class=" rounded position-relative overflow-hidden  d-flex justify-content-center">
          <img src="{{ asset('assets/web/The-mining-process-in-crypto-and-blockchain-technology-1024x614-removebg-preview-removebg-preview.webp') }}" class="img-fluid rounded w-100 " alt="">
          <!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/c7bfe87d-3ff6-4393-a188-2e75c4e054f6/K6w0F2mLOc.json" background="#fff" speed="1" style="width: 100%; height: 400px" loop autoplay direction="1" mode="normal"></lottie-player> -->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid about py-5">
  <div class="container py-5">

    <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
      <h2 class="display-5 mb-4">How Blockchain work in mobile appliation development</h2>
      <p class="mb-0">The next huge wave in the technological world. It is the latest introduced technology that will change
        the way you deal with your business.</p>
    </div>
    <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-6 wow fadeInLeft">
        <div>
          <!-- <h4 class="text-primary1">About Us</h4> -->
          <!-- <p class="mb-4 fw-bold fs-3">What is Laravel Web Development ?</p> -->
          <p class="mb-4">The blockchain is a block chain which has a growing list of records. By its design, the blockchain is a decentralized technology. It is an incorruptible digital ledger of economic transactions which is programmed to record the financial transaction and virtually everything of value. This technology is creating a backbone for a new type of Internet and it allows easy distribution of blockchain technology. However, copying this digital information is strictly prohibited.</p>
          <p class="mb-4">Originally devised for the digital currency- Bitcoin the technical communities are now using blockchain technology as a common date layer. This is something which enables a new application. A global network of computers uses blockchain technology to jointly manage database which records Bitcoin transaction.</p>

        </div>
      </div>
      <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
        <div class="rounded position-relative overflow-hidden">
          <img src="{{ asset('assets/web/blockchain-mid-image.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">

        </div>
      </div>
    </div>
    <p class="mb-4">The blockchain is a shared public ledger onto which the entire Bitcoin network relies upon. It allows Bitcoin wallet to calculate their spendable balance. Now the data and process adopted by the business can be shared across the various organization which eliminate the risk of fraud and waste. It creates a new revenue stream for companies.</p>
    <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Contact Us</a>

  </div>
</div>
<!-- About End -->



<!-- Offer Start -->
<div class="container-fluid offer-section pb-5">
  <div class="container pb-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
      <h2 class="display-5 mb-4">Blockchain Development Services</h2>
    </div>
    <div class="row g-5 align-items-center">
      <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
        <div class="nav nav-pills rounded p-5" style="background-color: rgb(212 241 228);">
          <a class="accordion-link p-4 active mb-4" data-bs-toggle="pill" href="#collapseOne">
            <h5 class="mb-0">ICO Development</h5>
          </a>
          <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseTwo">
            <h5 class="mb-0">ICO Marketing</h5>
          </a>
          <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseThree">
            <h5 class="mb-0">Wallet app Development</h5>
          </a>
          <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFour">
            <h5 class="mb-0">Blockchain development</h5>
          </a>
          <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseFive">
            <h5 class="mb-0">Coin creation</h5>
          </a>
          <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseSix">
            <h5 class="mb-0">Smart Contract Development</h5>
          </a>
          <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseSeven">
            <h5 class="mb-0">Hypeledger Development</h5>
          </a>
          <a class="accordion-link p-4 mb-4" data-bs-toggle="pill" href="#collapseEight">
            <h5 class="mb-0">Multichain Development</h5>
          </a>
        </div>
      </div>
      <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.4s">
        <div class="tab-content">
          <div id="collapseOne" class="tab-pane fade show p-0 active">
            <div class="row g-4">
              <div class="col-md-12">
                <h1 class="display-5 mb-4">ICO Development</h1>
                <p class="mb-4">Customized ICO development services from design to launch ensures success.</p>
              </div>
            </div>
          </div>
          <div id="collapseTwo" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-md-12">
                <h1 class="display-5 mb-4">ICO Marketing</h1>
                <p class="mb-4">Dedicated strategic marketing to get ultimate fame in the field of ICO development.</p>
              </div>
            </div>
          </div>
          <div id="collapseThree" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-md-12">
                <h1 class="display-5 mb-4">Wallet app Development</h1>
                <p class="mb-4">Wallet app is developed ensures timely payments, quick transfer of funds, easy accessibility, and simple money transaction</p>
              </div>
            </div>
          </div>
          <div id="collapseFour" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-md-12">
                <h1 class="display-5 mb-4">Blockchain development</h1>
                <p class="mb-4">Blockchain development develops and implements an incorruptible digital ledger for economic transactions.</p>
              </div>
            </div>
          </div>
          <div id="collapseFive" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-md-12">
                <h1 class="display-5 mb-4">Coin creation</h1>
                <p class="mb-4">Coin creation gives the much-needed headway in the transaction into cutting edge blockchain</p>
              </div>
            </div>
          </div>
          <div id="collapseSix" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-md-12">
                <h1 class="display-5 mb-4">Smart Contract Development</h1>
                <p class="mb-4">For business authenticity and reliability-smart contract development acts indelible and traceable.</p>
              </div>
            </div>
          </div>
          <div id="collapseSeven" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-md-12">
                <h1 class="display-5 mb-4">Hypeledger Development</h1>
                <p class="mb-4">Keeping the business ahead, hyper ledger maintains and manages everything with the best results.</p>
              </div>
            </div>
          </div>
          <div id="collapseEight" class="tab-pane fade show p-0">
            <div class="row g-4">
              <div class="col-md-12">
                <h1 class="display-5 mb-4">Multichain Development</h1>
                <p class="mb-4">Multi chains enables the business to complete vivid tasks. Also, it keeps a business ready for any challenge.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Offer End -->


<div class="container-fluid about py-5">
  <div class="container py-5">

    <div class="text-center mx-auto pb-5 wow fadeInUp" data-aos="fade-up" data-aos-delay="100" style="max-width: 800px;">
      <h2 class="display-5 mb-4">Benefits Of Using Blockchain Technology</h2>
    </div>
    <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
        <div class="rounded position-relative overflow-hidden">
          <img src="{{ asset('assets/web/blockchain-technology.webp') }}" class="img-fluid rounded w-100 image-with-shadow" alt="">
        </div>
      </div>

      <div class="col-xl-6 wow fadeInLeft">
        <div>
          <!-- <h4 class="text-primary1">About Us</h4> -->
          <!-- <p class="mb-4 fw-bold fs-3">What is Laravel Web Development ?</p> -->
          <p class="mb-4">Utilizing artificial intelligence has simplified manpower efforts in many ways. While blockchain app development was designed to serve the digital master, it can also be used to serve your needs. Artificial intelligence has eased human effort. In many ways, it will not be a mistake to say that our lives have become advanced with the technology.</p>
          <p class="mb-4">As a blockchain development company the projects developed and delivered by our experts seamlessly integrates with our clients business. We use ethereum as a decentralized platform for application. This is the reason, chances of fraud, censorship and third-party interference get almost nullified. We are the blockchain solution providers who offer AI specialization in</p>
        </div>
      </div>

    </div>

  </div>
</div>

<!-- Services Start -->
<div class="container-fluid service pb-5">
  <div class="container pb-5">
    <h3 class="mb-4 fw-bolder fs-1 text-center">Why Choose Blockchain Technology?</h3>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-solid fa-microchip"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">
              FRAUD PREVENTION</a>
            <p class="mb-4">With the blockchain mobile app development, frauds almost get nullified. An open sourced ledgers having the record of every single transaction provide an enormous amount of oversights. This is the ultimate technology which makes the blockchain mobile app completely invulnerable to fraud.</p>
            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-solid fa-tachograph-digital"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">CRYPTOGRAPHICALLY SECURE</a>
            <p class="mb-4">Blockchain app development based projects cannot meddle by anyone. This is something which makes them extremely resistant to hyperinflation. All the records can be easily found in the system where no one can intervene with the security. Ultimately a more secured way can be experienced with cryptographically secured blockchain app development.</p>
            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-solid fa-clock"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">IMPROVED TRACEABILITY</a>
            <p class="mb-4">Tracing goods with a blockchain is advantageous when you are seeking to trace the components actual position. Blockchain technology provides an audit trail for complex supply chains. The transactional data from the past can verify the authenticity of assets and hence this can prevent the fraud from happening.</p>
            <!-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-solid fa-shield-halved"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">INCREASED FINANCIAL EFFICIENCY</a>
            <p class="mb-4">Decentralized blockchain allow transactions to be easily made. The transaction is directly made from person to person. This effortlessly generates a clear statement for the client. Ultimately settling finance without seeking third part assistance gets effortless.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-brands fa-creative-commons-remix"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">REDUCED COSTS</a>
            <p class="mb-4">For a better business, a digestible cost is always the priority. With blockchain app development the need for intermediaries to guarantee the service is eliminated and hence cost gets reduced.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
        <div class="service-item">
          <div class="service-img">
            <i class="fa-solid fa-coins"></i>
          </div>
          <div class="rounded-bottom p-4">
            <a href="#" class="h4 d-inline-block mb-4">GREATER TRANSPARENCY</a>
            <p class="mb-4">With blockchain app development one can see the transaction history more clearly. All network participants share the same document as opposed to individual copies.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services End -->

<section class="light-background why__choose__Net">
  <div class="container">
    <h2>Why Nettechnocrats for your next Blockchain mobile application?</h2>
    <p class="pb-4 pt-4">Nettechnocrats blockchain app development addresses blockchain technology whereby they provide quality, performance, and the trust which are the four major pillars of an incredible service. The blockchain development services caters to help in the adoption, integration and realization of blockchain networks. Nettechnocrats also brings its ability in other technology whereby they combine with blockchain and help the client amplify more value. In short, Nettechnocrats is the sole blockchain app development company to cater all your technical needs.</p>
    <div class="row pt-2">
      <div class="col-lg-6 position-relative align-self-start " data-aos="fade-up" data-aos-delay="100">
        <div class="row mt-3">
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="200">5+ years of average experience
            </p>
          </div>
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="200">On time project delivery guaranteed
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="300">High sealed security
            </p>
          </div>
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="300">Dedicated Project Managers
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="400">24*7 Support
            </p>
          </div>
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="400">Hassle free communication
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="500">Maintenance Service
            </p>
          </div>
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="500">User-Friendly Data Structure
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="700">Integrity & transparency
            </p>
          </div>
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="700">Free no-obligation quote
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="800">Flexible Engagement Models
            </p>
          </div>
          <div class="col-lg-6">
            <p class="why__answer" data-aos="fade-up" data-aos-delay="800">Non-Discloser Agreement
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 content d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="seo__animation__gif">
          <div class="rounded position-relative overflow-hidden">
            <img src="{{ asset('assets/web/SharePoint-migration.webp') }}" class="img-fluid rounded w-100" alt="">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--  -->

<section class="brand__images py-4">
  <div class="container">
    <h3 class="text-center">Count On Our Passion For Technology</h3>
    <p class="text-center">Since 2011, we have been going that extra mile to create exceptional digital strategies for our clients and their customers. That said, we are awarded by top-tier research firms and featured in premium magazines and journals.</p>
    <div class="img__row">
      <div class="brands"><img src="{{ asset('assets/web/common-img/Coca-Cola.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/5-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/7-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/8-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/9-1.webp') }}" alt="" srcset=""></div>
    </div>
    <div class="img__row">
      <div class="brands"><img src="{{ asset('assets/web/common-img/10-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/11-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/bjp-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/bubble.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/chemists-world.webp') }}" alt="" srcset=""></div>
    </div>
    <div class="img__row">
      <div class="brands"><img src="{{ asset('assets/web/common-img/dbl-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/omni-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/Preapps.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/tolo-1.webp') }}" alt="" srcset=""></div>
      <div class="brands"><img src="{{ asset('assets/web/common-img/1-1.webp') }}" alt="" srcset=""></div>
    </div>
  </div>
</section>

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section accent-background">

  <div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-10">
        <div class="text-center">
          <h3>Ready To Get Started?</h3>
          <p>Stay ahead from Crowd. We have an expert team of application developers who are experienced and proficient. We have good experience in bespoke web and mobile app development and are committed to delivering the best of the class solutions.</p>
          <a class="cta-btn" href="#">Contact Us</a>
        </div>
      </div>
    </div>
  </div>

</section><!-- /Call To Action Section -->


@endsection