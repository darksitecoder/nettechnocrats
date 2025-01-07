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


        /* Funnel */
        .digital__marketing__funnel {
            width: 100%;
            padding: 3rem 0rem;
        }

        .funnel-container {
            position: relative;
            max-width: 100%;
            margin: 0 auto;
            font-family: tahoma;
        }

        .funnel-container:after {
            content: "";
            display: block;
            clear: both;
        }

        .funnel-wrap {
            margin: 50px auto;
            position: relative;
            padding-top: 10px;
            max-width: 632px;
            float: right;
            width: 80%;
        }

        .funnel-wrap ul {
            margin: 0;
            padding: 0;
        }

        .funnel-wrap ul>li {
            background: #2c3d4f;
            color: #fff;
            margin: 0 auto;
            position: relative;
            display: block;
            padding: 25px 10px 0;
            text-align: center;
            font-size: 16px;
            height: 120px;
        }

        .funnel-wrap ul>li a {
            color: #fff;
            text-decoration: none;

        }

        .funnel-wrap ul>li a:hover {
            color: #e6e6e6;
        }

        .funnel-wrap ul:hover li:not(:hover) {
            -webkit-filter: grayscale(70%) !important;
            filter: grayscale(70%);
            filter: #cdcdcd;
            transition: all .2s;
        }

        .funnel-wrap ul>li .content {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .funnel-wrap ul>li h3 {
            margin: 0;
            /* display: none; */
        }

        .funnel-wrap ul>li p {
            margin: 0;
        }

        .funnel-before {
            position: absolute;
            top: 0;
            left: 0px;
            width: 0;
            height: 0;
            border-right: 200px solid transparent;
            border-left: 0px solid transparent;
            border-bottom: 500px solid #fff;
            z-index: 20;
        }

        .funnel-after {
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border-left: 200px solid transparent;
            border-right: 0px solid transparent;
            border-bottom: 500px solid #fff;
            z-index: 20;
        }

        .funnel-wrap ul li:after {
            margin: 0 auto;
            height: 30px;
            border-radius: 50%;
            background: #5888bb;
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 100%;
            margin: auto;
            right: 0;
        }

        .funnel-wrap ul li:nth-child(1):before {
            margin: 0 auto;
            height: 30px;
            border-radius: 50%;
            background: #409bd5;
            content: '';
            position: absolute;
            top: -15px;
            left: 0;
            width: 100%;
            margin: auto;
            right: 0;
            z-index: 12;
        }

        .funnel-wrap ul li:nth-child(1),
        .funnel-wrap ul li:nth-child(1):after {
            background-color: #11BBFF;
            z-index: 10;
        }

        .funnel-wrap ul li:nth-child(1):before {
            background-color: #0cacec;
        }

        .funnel-wrap ul li:nth-child(2),
        .funnel-wrap ul li:nth-child(2):after {
            background-color: #1199DD;
            z-index: 9;
            width: 95%;
        }

        .funnel-wrap ul li:nth-child(2):before {
            background-color: #3178a9;
        }

        .funnel-wrap ul li:nth-child(3),
        .funnel-wrap ul li:nth-child(3):after {
            background-color: #1177BB;
            z-index: 8;
            width: 93%;
        }

        .funnel-wrap ul li:nth-child(3):before {
            background-color: #275e86;
        }

        .funnel-wrap ul li:nth-child(4),
        .funnel-wrap ul li:nth-child(4):after {
            background-color: #2d6198;
            z-index: 7;
            width: 69%;
        }

        .funnel-wrap ul li:nth-child(4):before {
            background-color: #263952;
        }

        .funnel-wrap ul li:nth-child(5),
        .funnel-wrap ul li:nth-child(5):after {
            background-color: #2c3d4f;
            z-index: 6;
            width: 37.5%;
            clip-path: polygon(0 0, 100% 0, 84% 100%, 14% 100%);
        }

        .funnel-wrap ul li:nth-child(5):before {
            background-color: #070b10;
        }

        .funnel-wrap .content {
            position: relative;
            z-index: 20;
            display: block;
        }

        .funnel-titles {
            margin: 3rem 0;
            padding: 0 20px;
            width: 40%;
            transform: rotate(-16deg);
            position: absolute;
            right: 55%;
            z-index: 30;
        }

        .funnel-titles div {
            height: 145px;
            margin: 0;
            transform: rotate(16deg);
        }

        .funnel-titles h3 {
            font-size: 24px;
            margin: 0;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }

        @media(max-width:800px) {
            .funnel-titles {
                display: none;
            }

            .funnel-wrap {
                width: 96%;
                float: none;
                margin: 5% auto
            }

            .funnel-wrap ul>li {
                height: auto;
            }

            .funnel-wrap ul>li .content {
                padding: 10px;
                top: 0;
                transform: translateY(0)
            }

            .funnel-wrap .content h3 {
                display: block;
            }
        }

        .digital__marketing__funnel .content {
            background-color: transparent !important;
        }

        .home__address img {
            width: 100px;
            margin-bottom: 10px;
        }

        .home__address .address {
            border: 1px solid black;
            border-radius: 70px;
        }

        .home__address .address .col-md-4 {
            padding: 3rem 0rem;
            transition: 0.5s ease-in-out;
            cursor: pointer;

        }

        /* .home__address .address .col-md-4:hover {
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        } */


        /*  */

        .fluid-tabs {
            /*change the following to the desired height*/
            /*best with 65vh*/
            height: 100% !important;
        }

        .tab-group {
            /*inherits the height of its ancestor*/
            height: inherit;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .tab-container {
            /* overflow-y: scroll; */
            /* -webkit-overflow-scrolling: touch; */
            /* iOS*/
            /* overflow-x: hidden; */
            height: 100%;
            -webkit-animation-name: text-appear;
            /* Safari 4.0 - 8.0 */
            -webkit-animation-duration: 1.6s;
            /* Safari 4.0 - 8.0 */
            animation-name: text-appear;
            animation-duration: 1.6s;
            /* -webkit-box-shadow: inset 4px 10px 30px -15px rgba(0, 0, 0, 0.6);
            -moz-box-shadow: inset 4px 10px 30px -15px rgba(0, 0, 0, 0.6);
            box-shadow: inset 4px 10px 30px -15px rgba(0, 0, 0, 0.6); */
        }

        /*if you need to add or remove a panel, you have to do some maths and rearrangements on this section.*/

        /* So for example, this demo has 4 panels; so the logic is the folowing
we want the selected tab to be the biggest and the other equally smaller.
Let's say we want the selected one to fill a 40% of the container; so we have a 60% left to cover . this is 60/3 = 20% */
        #panel-1 {
            width: 16%;
            background: var(--green);
        }

        #panel-2 {
            width: 16%;
            background: var(--green);
        }

        #panel-3 {
            width: 16%;
            background: var(--green);
        }

        #panel-4 {
            width: 16%;
            background: var(--green);
        }

        .selected {
            width: 40% !important;
        }

        .not-selected {
            width: 20%;
        }

        .panel {
            -webkit-transition: width 0.2s, transform 0.4s;
            /* Safari */
            transition: width 0.2s, transform 0.4s, box-shadow 0.4s;
            height: inherit;
            margin: 1rem 1rem;
            border-radius: 20px;
            height: 580px;
        }

        .hide {
            display: none;
        }

        .icon {
            width: 200px;
            padding: 0;
            margin: auto;
            fill: aliceblue;
            -webkit-transition: width 1s, padding-top 0.2s margin 0.2s;
            /* Safari */
            transition: width 1s, padding-top 0.2s margin 0.2s;
            margin-top: 5px;
        }

        .sm-icon {
            padding-top: 0;
            width: 100px;
            -webkit-transition: width 0.5s;
            /* Safari */
            transition: width 0.5s;
        }

        .panel:hover {
            position: relative;
            transform: scale(1.03);
            z-index: 100;
            -webkit-box-shadow: 0px 10px 34px -8px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 10px 34px -8px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 10px 34px -8px rgba(0, 0, 0, 0.75);
        }

        .ri {
            width: 15vw;
            animation-name: text-appear;
            animation-duration: 1s;
        }

        @media screen and (max-width: 600px) {
            .title {
                font-size: 1.9em !important;
                -webkit-transition: transform 0.5s;
                /* Safari */
                transition: transform 0.5s;
            }

            .rotate {
                -webkit-transform: rotate(-90deg);
                transform: rotate(-90deg);
                width: 100px;
                text-align: right;
                -webkit-transition: transform 0.5s;
                /* Safari */
                transition: transform 0.5s;
            }

            /*rotated title*/
            .rt {
                white-space: nowrap;
                /* adjust the following on your needs*/
                margin-top: 30vh;
                margin-left: -20px;
            }

            /* rotated icon */
            .ri {
                width: 15vw;
                animation-name: text-appear;
                animation-duration: 0.7s;
            }
        }

        /* fade in animation */
        @keyframes text-appear {
            from {
                opacity: 0;
            }

            to {
                opacity: 100;
            }
        }

        /* custom scrollbar */
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.575);
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: rgb(20, 20, 20);
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #b4edd2;
        }
    </style>
</head>

<body>
    @include('partial/header')
    <div id="editor">
        <div id="editor" style="height: 500px;">
            <section class="hero__banner">
                <div class="container">
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
                </div>
            </section>
            <div class="container">
                <section class="about__seo">
                    <div class="row">
                        <div class="col-lg-5 d-flex align-items-center">
                            <img src="{{ asset('assets/web/clutch.png') }}" alt="" srcset="" style="width:100%;">
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
                            <div class="row">
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

                <!-- <section class="digital__marketing__funnel">

                    <div class="funnel-container">
                        <h2 class=" text-center fw-bolder fs-1 pb-3">Digital Marketing Stages</h2>
                        <p class="text-center pb-3"> This approach involves dividing the funnel into three stages - Awareness, Consideration, and Conversion - and sometimes adding a fourth stage - Customer Retention. By optimizing campaigns for each stage of the funnel, businesses can reach potential and existing customers at every stage of their journey, building trust and credibility. </p>
                        <div class="funnel-titles">
                            <div>
                               
                <p>Generate initial interest through social media ads, blog posts, and SEO to reach potential customers not actively seeking solutions.</p>
            </div>
            <div>
                <p>
                    Customers research options by reading reviews, watching demos, and engaging with detailed content like case studies.</p>
            </div>
            <div>
                <p>Prospects compare features and pricing, influenced by strong calls-to-action and compelling offers to decide.</p>
            </div>
            <div>
                <p>Potential customers take desired actions like purchasing, signing up for newsletters, or downloading trials.</p>
            </div>
            <div>
                <p>The loyalty stage builds long-term relationships with excellent service, relevant content, and loyalty programs.</p>
            </div>
        </div>

        <div class="funnel-wrap">
            <ul>
                <li>
                    <span class="before"></span>
                    <span class="content">
                        <h3>Awareness</h3>
                    </span>
                    <span class="after"></span>
                </li>
                <li>
                    <span class="before"></span>
                    <span class="content">
                        <h3>Consideration</h3>
                    </span>
                    <span class="after"></span>
                </li>
                <li>
                    <span class="before"></span>
                    <span class="content">
                        <h3>Evaluation</h3>

                    </span>
                    <span class="after"></span>
                </li>
                <li>
                    <span class="before"></span>
                    <span class="content">
                        <h3>Conversion</h3>
                    </span>
                    <span class="after"></span>
                </li>
                <li>
                    <span class="before"></span>
                    <span class="content">
                        <h3>Loyalty</h3>
                    </span>
                    <span class="after"></span>
                </li>

            </ul>

            <div class="funnel-before"></div>
            <div class="funnel-after"></div>

        </div>
    </div>
    </section> -->






                <section class="testimonial__video">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/f-MAIzGxWc0?si=GkZPmhg-MKDbM0Dl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
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

            <section class="my-1">
                <div class="container-fluid fluid-tabs">

                    <div class="row tab-group">
                        <!-- FIRST BOX -->
                        <div class="panel selected" id="panel-1" onclick="changeSelected(1);">

                            <div class="vertical-center">
                                <div class="sm-icon icon" id="icon-1">

                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 462.589 462.589"
                                        style="enable-background:new 0 0 462.589 462.589;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M422.16,116.31c0,0,0.08-0.32,0-0.48l-0.48-0.48C358.019,36.142,242.2,23.538,162.992,87.199
        c-3.277,2.634-6.463,5.379-9.552,8.231H16c-8.837,0-16,7.163-16,16v130.32c0,8.837,7.163,16,16,16h79.6
        c14.512,100.847,108.029,170.834,208.876,156.322c46.077-6.631,87.943-30.436,117.204-66.642l0.48-0.4c0,0,0,0,0-0.56
        C476.066,279.219,476.066,183.562,422.16,116.31z M270.08,63.59v87.84c-17.466-0.422-34.852-2.511-51.92-6.24v-34.24
        c-0.05-2.837-0.88-5.604-2.4-8C231.28,80.23,250.16,66.47,270.08,63.59z M270.08,223.43h-51.92v-61.84
        c17.095,3.519,34.471,5.501,51.92,5.92L270.08,223.43z M219.44,73.27c-6.718,6.752-12.723,14.178-17.92,22.16h-22.88
        C191.149,86.191,204.88,78.733,219.44,73.27z M16.4,241.75v-130.4h138.96c0.9,0.155,1.82,0.155,2.72,0h44.4v130.32h-38.4
        c-3.937-0.057-7.331,2.759-8,6.64l-5.12,30.08l-16.56-32c-1.378-2.659-4.125-4.326-7.12-4.32L16.4,241.75z M142.16,331.51
        c-16.025-21.89-26.51-47.335-30.56-74.16h10.88l25.28,49.36c1.378,2.659,4.125,4.326,7.12,4.32h1.2
        c3.392-0.535,6.064-3.175,6.64-6.56l5.28-30.88c1.862,13.533,4.75,26.905,8.64,40C164.564,318.368,153.01,324.372,142.16,331.51z
         M152.24,343.99c9.329-6.025,19.214-11.142,29.52-15.28c8.071,22.792,20.949,43.582,37.76,60.96
        C193.691,380.183,170.587,364.497,152.24,343.99z M270.08,399.43c-30.08-4.48-56.88-33.76-73.04-76.16
        c23.674-7.338,48.26-11.324,73.04-11.84V399.43z M270.08,295.43c-26.63,0.505-53.054,4.788-78.48,12.72
        c-4.86-16.573-8.049-33.591-9.52-50.8h20.24c8.837,0,16-7.163,16-16v-1.92h51.92L270.08,295.43z M413.76,131.51
        c19.757,26.724,31.119,58.721,32.64,91.92h-55.36c-0.554-25.105-4.482-50.022-11.68-74.08
        C391.405,144.593,402.932,138.615,413.76,131.51z M403.6,119.43c-9.313,5.96-19.171,11.022-29.44,15.12
        c-8.113-22.688-20.926-43.407-37.6-60.8C362.283,83.31,385.293,98.988,403.6,119.43z M286.08,63.43
        c30.64,4.4,57.36,33.6,73.28,76.08c-23.747,7.39-48.415,11.402-73.28,11.92V63.43z M286.08,167.43
        c26.58-0.546,52.949-4.856,78.32-12.8c6.45,22.384,9.973,45.51,10.48,68.8h-88.8V167.43z M286.08,239.43h88.8
        c-0.508,23.29-4.031,46.415-10.48,68.8c-25.371-7.945-51.74-12.255-78.32-12.8V239.43z M286.08,399.43v-88
        c24.945,0.495,49.696,4.508,73.52,11.92C343.6,365.83,316.72,395.03,286.08,399.43z M336.56,389.51
        c16.676-17.392,29.489-38.111,37.6-60.8c10.255,3.968,20.112,8.897,29.44,14.72C385.338,364.019,362.325,379.837,336.56,389.51z
         M413.705,331.315c-10.812-7.09-22.32-13.056-34.345-17.805c7.198-24.058,11.126-48.975,11.68-74.08h55.36
        C444.856,272.624,433.475,304.608,413.705,331.315z" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <h1 id="title-1" class="text-center title ">DCatalog</h1>


                            </div>
                            <div id="content-panel-1" class="container tab-container justify-content">

                                <!--content goes here-->
                                <h4>+ 214% Traffic & 300% Traffic Growth</h4>
                                <p>
                                    Founded in 2008, DCatalog is the leader in the digital publishing industry. With the advanced HTML5 flip book technology, this platform empowers publishers, content creators, marketing and eCommerce professionals to easily create and publish engaging digital experiences. The website is formerly known by ePaperflip.


                                    <br>
                                    Results: With the rigorous efforts and amazing skills, experts from Nettechnocrats Team were able to provide 1st page ranking for those keywords and the traffic is still boosting. Mirit is very happy with the ranking and traffic.
                                </p>
                            </div>
                        </div>
                        <!-- SECOND BOX -->
                        <div class="panel" id="panel-2" onclick="changeSelected(2);">

                            <div class="icon rotate ri" id="icon-2">

                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 450.685 450.685"
                                    style="enable-background:new 0 0 450.685 450.685;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M154.912,209.5c1.17,0.935,2.232,1.998,3.168,3.168c2.765,3.446,7.8,3.999,11.246,1.234
        c1.902-1.526,3.004-3.836,2.994-6.274v-60.4c0-4.418-3.581-8-8-8c-0.027,0-0.054,0-0.08,0H119.6c1.852-4.407,2.804-9.14,2.8-13.92
        c-0.941-20.037-17.947-35.517-37.984-34.576c-18.719,0.879-33.697,15.856-34.576,34.576c-0.004,4.78,0.948,9.513,2.8,13.92H8
        c-4.418,0-8,3.582-8,8v60.48c-0.019,4.418,3.548,8.015,7.966,8.034c2.438,0.01,4.748-1.092,6.274-2.994
        c6.981-8.787,19.763-10.251,28.55-3.27s10.251,19.763,3.27,28.55s-19.763,10.251-28.55,3.27c-1.211-0.962-2.308-2.059-3.27-3.27
        c-2.765-3.446-7.8-3.999-11.246-1.234C1.092,238.32-0.01,240.63,0,243.068v60.48c0,4.418,3.582,8,8,8h43.92
        c-6.691,18.91,3.215,39.664,22.125,46.355c18.91,6.691,39.664-3.215,46.355-22.125c2.773-7.838,2.773-16.391,0-24.229h43.92
        c4.418,0,8-3.582,8-8v-60.56c0.019-4.418-3.548-8.015-7.966-8.034c-2.438-0.01-4.748,1.092-6.274,2.994
        c-6.981,8.73-19.717,10.149-28.448,3.168c-8.73-6.981-10.149-19.717-3.168-28.448C133.445,203.938,146.182,202.52,154.912,209.5z
         M138.912,261.628c1.135,0.053,2.273,0.053,3.408,0c4.781,0.011,9.515-0.941,13.92-2.8v36.64H106
        c-4.418,0.018-7.985,3.615-7.966,8.033c0.009,2.122,0.86,4.153,2.366,5.647c7.984,7.887,8.063,20.752,0.176,28.736
        c-7.887,7.984-20.752,8.063-28.736,0.176c-7.984-7.887-8.063-20.752-0.176-28.736c0.058-0.059,0.117-0.118,0.176-0.176
        c3.137-3.111,3.158-8.177,0.047-11.314c-1.494-1.506-3.525-2.357-5.646-2.366H16v-36.64c4.406,1.857,9.139,2.809,13.92,2.8
        c20.037-0.941,35.517-17.947,34.576-37.984c-0.879-18.719-15.856-33.697-34.576-34.576c-4.781-0.009-9.514,0.944-13.92,2.8v-36.64
        h52.48c4.417-0.112,7.906-3.784,7.794-8.2c-0.06-2.356-1.155-4.566-2.994-6.04c-8.787-6.981-10.251-19.763-3.27-28.55
        s19.763-10.251,28.55-3.27c8.787,6.981,10.251,19.763,3.27,28.55c-0.962,1.211-2.059,2.308-3.27,3.27
        c-3.446,2.765-3.999,7.8-1.234,11.246c1.526,1.902,3.836,3.004,6.274,2.994h52.48l0.16,36.64c-4.405-1.859-9.139-2.811-13.92-2.8
        c-20.037-0.941-37.043,14.539-37.984,34.576C103.395,243.681,118.875,260.687,138.912,261.628z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <g>
                                                <path d="M426.469,190.188c-3.902-1.38-8.01-2.084-12.149-2.08c-4.116-0.001-8.201,0.703-12.08,2.08v-43.92c0-4.418-3.582-8-8-8
            h-60.48c-4.418,0.035-7.971,3.646-7.936,8.064c0.019,2.36,1.079,4.591,2.896,6.096c8.804,6.959,10.301,19.737,3.342,28.542
            c-6.959,8.804-19.737,10.301-28.542,3.342s-10.301-19.737-3.342-28.542c0.98-1.24,2.102-2.362,3.342-3.342
            c3.446-2.765,3.999-7.8,1.234-11.246c-1.526-1.902-3.836-3.004-6.274-2.994H238c-4.418,0-8,3.582-8,8v44.64
            c-4.406-1.856-9.139-2.809-13.92-2.8c-20.037,0.941-35.517,17.947-34.576,37.984c0.879,18.719,15.856,33.696,34.576,34.576
            c4.781,0.006,9.514-0.946,13.92-2.8v44.64c0,4.418,3.582,8,8,8h60.64c4.418-0.001,7.999-3.584,7.998-8.002
            c-0.001-2.823-1.49-5.437-3.918-6.878c-8.444-7.392-9.297-20.23-1.905-28.674c7.392-8.444,20.23-9.297,28.674-1.905
            c8.444,7.392,9.297,20.229,1.905,28.674c-0.812,0.928-1.707,1.78-2.674,2.545c-3.446,2.765-3.999,7.8-1.234,11.246
            c1.526,1.902,3.836,3.004,6.274,2.994h60.48c4.418,0,8-3.582,8-8v-43.76c18.91,6.691,39.664-3.215,46.355-22.125
            S445.38,196.879,426.469,190.188z M428.447,238.989c-3.771,3.767-8.877,5.894-14.207,5.92l0.08-0.24
            c-5.411,0.013-10.6-2.149-14.4-6c-3.111-3.137-8.177-3.158-11.314-0.047c-1.506,1.494-2.357,3.525-2.366,5.646v50.24h-36.72
            c1.901-4.451,2.88-9.24,2.88-14.08c-0.941-20.037-17.947-35.517-37.984-34.576c-18.719,0.879-33.697,15.856-34.576,34.576
            c-0.004,4.78,0.948,9.513,2.8,13.92H246v-52.24c0.019-4.418-3.548-8.015-7.966-8.034c-2.438-0.01-4.748,1.092-6.274,2.994
            c-6.981,8.787-19.763,10.251-28.55,3.27c-8.787-6.981-10.251-19.763-3.27-28.55s19.763-10.251,28.55-3.27
            c1.211,0.962,2.308,2.059,3.27,3.27c2.765,3.446,7.8,3.999,11.246,1.234c1.902-1.526,3.004-3.836,2.994-6.274v-52.48h36.64
            c-1.911,4.476-2.891,9.293-2.88,14.16c-0.941,20.037,14.539,37.043,34.576,37.984s37.043-14.539,37.984-34.576
            c0.053-1.135,0.053-2.273,0-3.408c0.004-4.78-0.948-9.513-2.8-13.92h36.64v50.24c0.019,4.418,3.615,7.985,8.034,7.966
            c2.121-0.009,4.153-0.86,5.646-2.366c7.909-7.9,20.724-7.892,28.624,0.017C436.363,218.274,436.356,231.089,428.447,238.989z" />
                                                <polygon points="414.32,188.108 414.32,188.108 414.32,188.108 			" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                            </div>

                            <h1 id="title-2" class="text-center title rt rotate">Men's USA Case Study</h1>

                            <div id="content-panel-2" class="container tab-container hide justify-content">
                                <h4>+ 800% Revenue & 300% Traffic Growth</h4>
                                <p>
                                    Organic Search | keywords at first page successfully implemented SEO and PPC Strategies for Men;s USA, Resulting in remarkable outcomes.they achieved an impressive 800% increase in organic search, A significant 300% boost in organic revenue, attained first page rankings for 2000 keywords on google and generated over 10 million impressive within a span of just 3 months.
                                <p>
                                    Digital Strategy we Used: <br />
                                    – Targeted competitive and Low hanging keywords <br />
                                    – Targeted multiple websites <br />
                                    – Created high DA and PA backlinks <br />
                                    – We have done content syndication and outreach
                                </p>
                            </div>
                        </div>

                        <!-- THIRD BOX -->
                        <div class="panel" id="panel-3" onclick="changeSelected(3);">

                            <div class="vertical-center">
                                <div class="icon rotate ri" id="icon-3">

                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 424 424" style="enable-background:new 0 0 424 424;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M212,126.56c-46.88,0-76,24-76,62.88c0,4.418,3.582,8,8,8h136c4.418,0,8-3.582,8-8C288,150.64,258.88,126.56,212,126.56z
         M152.56,181.44c5.28-35.92,46.32-38.88,59.44-38.88s54.16,2.96,59.44,38.88H152.56z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M212,42.56c-20.987,0-38,17.013-38,38c0.044,20.969,17.031,37.956,38,38c20.987,0,38-17.013,38-38
        S232.987,42.56,212,42.56z M212,102.56c-12.15,0-22-9.85-22-22s9.85-22,22-22s22,9.85,22,22S224.15,102.56,212,102.56z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M76,310.56c-46.88,0-76,24-76,62.88c0,4.418,3.582,8,8,8h136c4.418,0,8-3.582,8-8C152,334.64,122.88,310.56,76,310.56z
         M16.56,365.44c5.28-35.92,46.24-38.88,59.44-38.88s54.16,2.96,59.44,38.88H16.56z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M76,226.56c-20.987,0-38,17.013-38,38c0.044,20.969,17.031,37.956,38,38c20.987,0,38-17.013,38-38
        S96.987,226.56,76,226.56z M76,286.56c-12.15,0-22-9.85-22-22s9.85-22,22-22s22,9.85,22,22S88.15,286.56,76,286.56z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M348,310.56c-46.88,0-76,24-76,62.88c0,4.418,3.582,8,8,8h136c4.418,0,8-3.582,8-8C424,334.64,394.88,310.56,348,310.56z
         M288.56,365.44c5.28-35.92,46.24-38.88,59.44-38.88s54.16,2.96,59.44,38.88H288.56z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M348,226.56c-20.987,0-38,17.013-38,38c0.044,20.969,17.031,37.956,38,38c20.987,0,38-17.013,38-38
        S368.987,226.56,348,226.56z M348,286.56c-12.15,0-22-9.85-22-22s9.85-22,22-22s22,9.85,22,22S360.15,286.56,348,286.56z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M253.36,296.72L220,263.2V216c0-4.418-3.582-8-8-8s-8,3.582-8,8v47.2l-33.36,33.36c-3.159,3.115-3.195,8.201-0.08,11.36
        s8.201,3.195,11.36,0.08L212,277.84L242.08,308c3.356,2.874,8.406,2.483,11.28-0.873
        C255.925,304.132,255.925,299.715,253.36,296.72z" />
                                            </g>
                                        </g>

                                    </svg>

                                </div>
                                <h1 id="title-3" class="text-center title rt rotate">Connect </h1>

                            </div>

                            <div id="content-panel-3" class="container tab-container hide justify-content">
                                <h4>150+ increase in leads & 100% Traffic Growth</h4>
                                <p>
                                    Whirlpool wstore is a Home Appliances website, you can purchase here online refrigerator, washing
                                    machine, air conditioner , water purifier etc. <br />

                                    Objective: <br />
                                    To Increase maximum number of potential leads and increased number of budget spent. Being service provider the
                                    requirement of campaign was quality of visitors with maximum quantity of users. <br />



                                    Goals Achieved: <br />
                                    We started our campaign for online shopping with Google Adwords by double the conversion rate. Google Results provide
                                    business to client and Expand its business by major PPC Networks.

                                    – Google Adwords <br />

                                    – Yahoo Search Marketing</p>
                            </div>
                        </div>

                        <!-- FOURTH BOX -->
                        <div class="panel" id="panel-4" onclick="changeSelected(4);">
                            <div class="vertical-center">
                                <div class="icon rotate ri" id="icon-4">

                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 431.76 431.76" style="enable-background:new 0 0 431.76 431.76;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M215.88,85.12C153.556,85.164,103.044,135.676,103,198c0.557,40.682,20.351,78.696,53.36,102.48V382
        c0.027,0.932,0.216,1.853,0.56,2.72v0.64c0.138,0.33,0.299,0.651,0.48,0.96l28.16,41.92c1.49,2.205,3.979,3.524,6.64,3.52h46.56
        c2.661,0.004,5.15-1.315,6.64-3.52l28.16-41.92c0.181-0.309,0.342-0.63,0.48-0.96v-0.64c0.344-0.867,0.533-1.788,0.56-2.72v-81.52
        c33.01-23.784,52.803-61.798,53.36-102.48C327.918,135.987,277.891,85.603,215.88,85.12z M234.92,416h-38.08l-17.44-25.92h72.88
        L234.92,416z M172.44,374.08v-21.2h86.88l0.08,21.2H172.44z M263,289.52l0,0.24c-2.259,1.487-3.613,4.015-3.6,6.72v40.64h-86.96
        V296c0.013-2.705-1.341-5.233-3.6-6.72c-30.628-20.467-49.233-54.687-49.76-91.52c1.537-53.483,46.14-95.594,99.623-94.057
        c51.323,1.475,92.582,42.734,94.057,94.057C312.312,234.679,293.697,269.005,263,289.52z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M219.08,121.36c-4.418,0-8,3.582-8,8s3.582,8,8,8c33.251,0.044,60.196,26.989,60.24,60.24c0,4.418,3.582,8,8,8
        s8-3.582,8-8C295.276,155.512,261.168,121.404,219.08,121.36z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M81.48,189.6h-57.6c-4.418,0-8,3.582-8,8s3.582,8,8,8h57.6c4.418,0,8-3.582,8-8c0,0,0,0,0,0
        C89.48,193.182,85.898,189.6,81.48,189.6z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M407.88,189.6h-57.6c-4.418,0-8,3.582-8,8s3.582,8,8,8h57.6c4.418,0,8-3.582,8-8S412.298,189.6,407.88,189.6z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M127.313,287.12c-2.874-3.356-7.924-3.747-11.28-0.873c-0.313,0.268-0.605,0.56-0.873,0.873v-0.16L74.28,328
        c-3.356,2.874-3.747,7.924-0.873,11.28c2.874,3.356,7.924,3.747,11.28,0.873c0.313-0.268,0.605-0.56,0.873-0.873l40.88-40.88
        C129.796,295.526,130.187,290.476,127.313,287.12z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M356.607,56c-2.995-2.565-7.412-2.565-10.407,0l-40.88,40.88c-3.137,3.111-3.158,8.177-0.047,11.314
        c1.513,1.526,3.577,2.379,5.727,2.366l-0.08-0.08c2.126,0.012,4.17-0.823,5.68-2.32l40.88-40.88
        C360.354,63.924,359.963,58.874,356.607,56z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M359.067,329.609c-0.45-0.609-0.984-1.151-1.587-1.609l-40.88-41.04c-2.874-3.356-7.924-3.747-11.28-0.873
        c-3.356,2.874-3.747,7.924-0.873,11.28c0.268,0.313,0.56,0.605,0.873,0.873l40.88,40.88c2.626,3.553,7.636,4.304,11.189,1.678
        S361.693,333.162,359.067,329.609z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M126.44,96.88L85.56,56c-3.356-2.874-8.406-2.483-11.28,0.873c-2.565,2.995-2.565,7.412,0,10.407l40.88,40.88
        c3.356,2.874,8.406,2.483,11.28-0.873C129.005,104.292,129.005,99.875,126.44,96.88z" />
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M215.88,0c-4.418,0-8,3.582-8,8v57.84c-0.133,4.416,3.34,8.104,7.756,8.236c0.081,0.002,0.162,0.004,0.244,0.004
        c4.418,0,8-3.582,8-8V8C223.88,3.582,220.298,0,215.88,0z" />
                                            </g>
                                        </g>
                                    </svg>


                                </div>
                                <h1 id="title-4" class="text-center title rt rotate">Seemless AI</h1>


                            </div>

                            <div id="content-panel-4" class="container tab-container hide justify-content">
                                <h4>+ Leading Data Finder Company</h4>
                                <p>
                                    Organic Search | keywords at first page successfully implemented SEO. Resulting in remarkable outcomes.they achieved an impressive increase in organic search, A significant boost in organic revenue.

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
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
            <section class="industries py-1 my-5">
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
                                <div style="background-color: #5CE1D5;">
                                    <h1 class="text-center">Spato M-commerce Application</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, veritatis!</p>
                                    <a href="{{url('/portfolio/')}}" class="case__study">Read Case Study</a>
                                </div>
                                <div style="background-color: #FFA809;">
                                    <h1 class="text-center">Resturent app development</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, ea?</p>
                                    <a href="{{url('/portfolio/')}}" class="case__study">Read Case Study</a>
                                </div>
                                <div style="background-color: #0A0A0A;">
                                    <h1>E-wallet application</h1>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <a href="{{url('/portfolio/')}}" class="case__study">Read Case Study</a>
                                </div>
                                <div style="background-color: #5CE1D5;">
                                    <h1 class="text-center">Spato E-commerce Project </h1>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <a href="{{url('/portfolio/')}}" class="case__study">Read Case Study</a>
                                </div>
                            </div>
                            <div class="right-slide">
                                <div style="background: url('{{ asset('assets/web/spatoweb.png') }}');">

                                </div>
                                <div style="background:url('{{ asset('assets/web/aplle-wallet-1-removebg-preview.webp') }}'); ">

                                </div>
                                <div style="background: url('{{ asset('assets/web/resturent__app.jpg') }}');">

                                </div>
                                <div style="background: url('{{ asset('assets/web/spatomobile.png') }}');">

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

            <section class="home__address py-5 my-5 d-flex justify-content-center">
                <div class="container">
                    <div class="row address">
                        <div class="col-md-4 d-flex flex-column align-items-center justify-content-center" style="border-radius:70px 0px 0px 70px;"><img src="{{ asset('assets/web/taj-mahal.png') }}" class="image-with-shadow" alt="" srcset="">
                            <p class="text-center fw-bold fs-7">G-75, Sec-63, Noida, Delhi (NCR) India <br>
                                For Sales: +91-9711411002 <br>
                                For HR: +91-8510091128</p>
                        </div>
                        <div class="col-md-4 d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('assets/web/statue-liberty.png') }}" class="image-with-shadow" alt="" srcset="">
                            <p class="text-center fw-bold fs-7">9240 SW 72nd St Miami, FL 33173 <br>
                                For Sales: +1-786-753-7516 <br>
                                Email: sales@nettechnocrats.com</p>
                        </div>
                        <div class="col-md-4 d-flex flex-column align-items-center justify-content-center" style="border-radius:0px 70px 70px 0px;"><img src="{{ asset('assets/web/sydney-opera-house.png') }}" class="image-with-shadow" alt="" srcset="">
                            <p class="text-center fw-bold fs-7">
                                6 Satinay Court Oxenford, QLD 4210, Australia <br>
                                Email: sales@nettechnocrats.com
                            </p>
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


<script>
    jQuery(document).ready(function($) {

        function setFunnelAngles() {
            var windowWidth = $(window).width();
            var el = $(".funnel-wrap");
            var w = el.outerHeight() + 30;
            if (windowWidth > 800) {
                var bw = el.outerWidth() / 3;
            } else {
                var bw = el.outerWidth() / 5;
            }
            el.find('.funnel-before, .funnel-after').css({
                "border-bottom-width": w + "px"
            });
            el.find('.funnel-before').css({
                "border-right-width": bw + "px"
            });
            el.find('.funnel-after').css({
                "border-left-width": bw + "px"
            });
        }

        setFunnelAngles();

        $(window).resize(function() {
            setFunnelAngles();
        });

    });
</script>


<script>
    var flag = true;

    //specifies number of tabs
    var totalTabs = 4;

    function changeSelected(id) {
        if (flag) {
            //We remove the initial configuration
            document.getElementById("panel-1").classList.remove("selected");
        }

        for (var i = 1; i <= totalTabs; i++) {
            document
                .getElementById("panel-" + i)
                .classList.toggle("selected", id === i);
            document
                .getElementById("content-panel-" + i)
                .classList.toggle("hide", id !== i);
            document.getElementById("icon-" + i).classList.toggle("sm-icon", id === i);
            document.getElementById("icon-" + i).classList.toggle("rotate", id !== i);
            document.getElementById("title-" + i).classList.toggle("rotate", id !== i);
            document.getElementById("title-" + i).classList.toggle("rt", id !== i);
            document.getElementById("icon-" + i).classList.toggle("ri", id !== i);
        }
    }
</script>

</html>