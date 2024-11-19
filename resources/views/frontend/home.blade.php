<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Marketing, Web Development & Mobile App Development Company</title>
    <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .slider-container {
            position: relative;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
        }

        .left-slide {
            height: 100%;
            width: 35%;
            position: absolute;
            top: 0;
            left: 0;
            transition: transform 0.5s ease-in-out;
        }

        .left-slide>div {
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #fff;
        }

        .left-slide h1 {
            font-size: 40px;
            margin-bottom: 10px;
            margin-top: -30px;
        }

        .right-slide {
            height: 100% !important;
            position: absolute !important;
            left: 35% !important;
            width: 65% !important;
            transition: transform 0.5s ease-in-out;
        }

        .right-slide>div {
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-position: center center !important;
            height: 100%;
            width: 100%;
        }

        button {
            border: none;
            background-color: #fff;
            color: #aaa;
            cursor: pointer;
            font-size: 16px;
            width: 40px !important;
            height: 40px !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .slider-container .action-buttons button {
            position: absolute;
            left: 35%;
            top: 50%;
            z-index: 100;
        }

        .slider-container .action-buttons .down-button {
            transform: translateX(-100%);
            border-radius: 4px 0 0 4px;
        }

        .slider-container .action-buttons .up-button {
            transform: translateY(-100%);
            border-radius: 0 4px 4px 0;
        }

        .down-button:hover,
        .up-button:hover {
            background-color: #f0f0f0;
        }

        .content {
            border-radius: 0px 0px 240px 0px;
            background-color: var(--blue);
            padding: 2rem;
        }

        .content * {
            color: var(--white);
        }

        .content .card__read__more:hover {
            background-color: var(--white);
            color: var(--blue);
        }

        .industries__tag {
            background-color: var(--white);
            color: var(--blue);
            border-radius: 50px;
            width: fit-content;
            padding: 2px 8px;
            font-weight: 600;

        }

        .industries__card {
            border: 1px solid var(--blue);
            border-radius: 20px;
            padding: 15px 10px;
            transition: 0.5s ease-in-out;
            cursor: pointer;
        }

        .industries__card:hover {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border: 1px solid var(--green);
        }

        .industries__card * {
            transition: 0.5s ease-in-out;
        }

        .industries__card:hover * {
            color: var(--green);
        }

        .industries__card i {
            font-size: 45px;
        }

        .industries__card p {
            font-size: 20px;
            font-weight: 600;
            margin: 0;

        }

        .case__study {
            text-decoration: none;
            color: var(--blue);
            background-color: var(--white);
            border: 1px solid var(--blue);
            padding: 5px 15px;
            font-weight: 700;
            border-radius: 5px;
            transition: 0.5s ease-in-out;
        }

        .case__study:hover {
            color: var(--white);
            background-color: var(--blue);
            border: 1px solid var(--white);
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
    </style>
</head>

<body>
    @include('partial/header')
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

            </div>
            <section class="industries py-5 my-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content">
                            <p class="industries__tag">INDUSTRIES</p>
                            <h3>A Unified Vision That Caters to Diverse Industry Demands</h3>
                            <p class="pb-3">As an experienced Search Engine Optimization company in India, we level up your SEO efforts to create brand awareness and ensure increased revenues. By utilizing cutting-edge strategies, conducting detailed analyses, and establishing innovative approaches, we go above and beyond to help you expand your businesses and ensure long-term success.</p>
                            <a href="#" class="card__read__more mt-5">Contact Us <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-burger "></i>
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <p>Retail</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    <p>Education</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-user-group"></i>
                                    <p>B2B</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-gear"></i>
                                    <p>Utilties</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-house"></i>
                                    <p>Realestate</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-earth-europe"></i>
                                    <p>Travel</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-filter"></i>
                                    <p>Chemical</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-robot"></i>
                                    <p>Technology</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-shop-lock"></i>
                                    <p>E-commerce</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-coins"></i>
                                    <p>Finance</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="industries__card my-2 d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-bed-pulse"></i>
                                    <p>Healthcare</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="industries">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-container">
                            <div class="left-slide">
                                <div style="background-color: #7f7856;">
                                    <h1>Nature Flower</h1>
                                    <p>All in pink</p>
                                    <a href="#" class="case__study">Read Case Study</a>
                                </div>
                                <div style="background-color: #6d6b9f;">
                                    <h1>Nature Flower</h1>
                                    <p>All in pink</p>
                                    <a href="#" class="case__study">Read Case Study</a>
                                </div>
                                <div style="background-color: #252e33;">
                                    <h1>Nature Flower</h1>
                                    <p>All in pink</p>
                                    <a href="#" class="case__study">Read Case Study</a>
                                </div>
                                <div style="background-color: #739c10;">
                                    <h1>Nature Garden</h1>
                                    <p>All in Green</p>
                                    <a href="#" class="case__study">Read Case Study</a>
                                </div>
                            </div>
                            <div class="right-slide">
                                <div style="background: url('https://plus.unsplash.com/premium_photo-1661963972388-1da70b60752b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHdpZGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60')">

                                </div>
                                <div style="background: url('https://images.unsplash.com/photo-1565432629946-62b4a2311557?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHdpZGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60')">

                                </div>
                                <div style="background: url('https://images.unsplash.com/photo-1547327195-59a16bed035e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHdpZGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60')">

                                </div>
                                <div style="background: url('https://images.unsplash.com/photo-1500067737767-0276d2605978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fHdpZGV8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=800&q=60')">

                                </div>
                            </div>
                            <div class="action-buttons">
                                <button class="up-button">
                                    <i class="fa-solid fa-arrow-up"></i>
                                </button>
                                <button class="down-button">
                                    <i class="fa-solid fa-arrow-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @include('partial/footer')
        </div>
</body>

<!--  -->
<script>
    // Get references to HTML elements
    const sliderContainer = document.querySelector(".slider-container");
    const slidesLeft = document.querySelector(".left-slide");
    const slidesRight = document.querySelector(".right-slide");
    const upButton = document.querySelector(".up-button");
    const downButton = document.querySelector(".down-button");

    // Calculate the total number of slides
    const slidesLength = slidesRight.querySelectorAll("div").length;

    // Initialize the active slide index
    let activeSlidesIndex = 0;

    // Set initial position for left slides
    slidesLeft.style.top = `-${(slidesLength - 1) * 100}vh`;

    // Add click event listeners to up and down buttons
    upButton.addEventListener("click", () => changeSlide("up"));
    downButton.addEventListener("click", () => changeSlide("down"));

    // Function to change the active slide
    const changeSlide = (direction) => {
        const sliderHeight = sliderContainer.clientHeight;
        if (direction === "up") {
            activeSlidesIndex++;
            if (activeSlidesIndex > slidesLength - 1) {
                activeSlidesIndex = 0;
            }
        } else if (direction === "down") {
            activeSlidesIndex--;
            if (activeSlidesIndex < 0) {
                activeSlidesIndex = slidesLength - 1;
            }
        }

        // Update the transform property to change the slide position
        slidesRight.style.transform = `translateY(-${
    activeSlidesIndex * sliderHeight
  }px)`;
        slidesLeft.style.transform = `translateY(${
    activeSlidesIndex * sliderHeight
  }px)`;
    };
</script>

</html>