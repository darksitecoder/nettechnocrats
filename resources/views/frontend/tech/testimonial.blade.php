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

  .hero-slider .item img {
   width: 90%;
   height: 50px !important;
   cursor: default;
  }

  .hero-slider .item:hover {
   box-shadow: none;
   cursor: default;
  }

  .hero-slider {
   box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
   border-radius: 20px;
   background-color: var(--white);
   height: 100px;
   padding: 1.5rem 0rem;
   margin-top: -3rem;
  }

  @media only screen and (max-width: 768px) {
   .roll-unroll-elements {
    display: none;
   }

   .industries {
    display: none;
   }
  }
 </style>
</head>

<body>
 @include('partial/header')


 <section class="testimonial__video">
  <div class="row">
   <div class="col-lg-6">
    <a href="https://youtu.be/f-MAIzGxWc0"><img src="{{ asset('assets/web/maxresdefault (1).png') }}" alt="" srcset="" style="width: 100%; border-radius:10px; box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
    </a>
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