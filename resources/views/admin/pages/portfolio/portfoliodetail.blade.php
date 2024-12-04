<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Portfolio</title>
 <!-- <link rel="stylesheet" href="style.css"> -->

 <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">
 <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous"
  referrerpolicy="no-referrer" />



 <!-- Libraries Stylesheet -->
 <link rel="stylesheet" href="{{ asset('style/web/lib/animate/animate.min.css') }}" />
 <link rel="stylesheet" href="{{ asset('style/web/lib/lightbox/css/lightbox.min.css') }}">
 <link rel="stylesheet" href="{{ asset('style/web/lib/owlcarousel/assets/owl.carousel.min.css') }}">



 <style>
  /* Variables */
  :root {
   --height: 17em;
   --width: 90%;
   --transition: ease;
   /* cubic-bezier(0.250, 0.250, 0.660, 1.650); */
  }

  /* Wrapper */
  .showcase {
   position: relative;
   width: var(--width);
   height: 500px;
   margin: 5em auto;
   overflow: hidden;
   background: transparent;
   border-radius: 15px;
   transition: 0.5s ease-in-out;
  }

  .showcase:hover:hover {
   box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
  }

  /* Thumbnails */
  .thumbnail {
   position: absolute;
   height: 100%;
   top: 0;
   left: 0;
   right: 300px;
   z-index: 1;
   background: #293853;
   background-position: 50% 50%;
   background-size: cover;
   transition: right 250ms var(--transition), left 250ms var(--transition);
  }

  /* .thumbnail--awesome {
            background-image: url("https://unsplash.com/photos/a-person-typing-on-a-laptop-on-a-table-slLo94wES2M");
        } */

  .thumbnail__overlay {
   position: relative;
   padding-top: calc(var(--height) / 2 - 0.5em);
   height: 100%;
   background: rgba(0, 0, 0, 0.4);
   text-align: center;
   opacity: 0;
   transition: opacity 250ms var(--transition);
  }

  /* Description */
  .desc {
   position: absolute;
   width: 300px;
   height: 100%;
   top: 0;
   right: 0;
   padding: 160px 20px 20px 20px;
   z-index: 2;
   background: var(--blue);
   text-align: center;
   transition: background 250ms var(--transition), color 250ms, width 250ms var(--transition), padding 250ms var(--transition);
   display: flex;
   flex-direction: column;
   align-items: center;
  }

  .desc * {
   color: #fff;
  }

  .desc:after {
   display: block;
   width: 0;
   height: 0;
   position: absolute;
   top: 50%;
   left: -20px;
   margin-top: -10px;
   border-style: solid;
   border-width: 10px;
   border-color: transparent #fff transparent transparent;
   content: "";
   transition: border-color 250ms;
   /* border: 2px solid var(--green); */
  }

  .showcase:hover .thumbnail {
   right: 325px;
   left: -25px;
  }

  .showcase:hover .thumbnail__overlay {
   opacity: 1;
  }

  .showcase:hover .desc {
   width: 350px;
   padding-left: 45px;
   padding-right: 45px;
   background: #202426;
   color: #fff;

  }

  .showcase:hover .desc:after {
   border-color: transparent #202426 transparent transparent;
  }

  /* Inverted Project */
  .showcase--inverted .thumbnail {
   right: 0;
   left: 300px;
  }

  .showcase--inverted .desc {
   left: 0;
   right: auto;
  }

  .showcase--inverted .desc:after {
   left: auto;
   right: -20px;
   border-color: transparent transparent transparent #fff;
  }

  .showcase--inverted:hover .thumbnail {
   left: 325px;
   right: -25px;
  }

  .showcase--inverted:hover .desc:after {
   border-color: transparent transparent transparent #202426;
  }

  /* Button styling */
  .btn {
   padding: 1em 2em;
   margin: 1rem 0rem;
   border: 0.15em solid #fff;
   color: #fff;
   text-decoration: none;
   font-weight: 700;
   transition: 0.5s ease-in-out;
   background-color: var(--blue);

  }

  .btn i {
   transition: 0.5s ease-in-out;
  }

  .btn:hover {
   background: var(--green);
   color: #fff;
  }

  .btn:hover i {
   margin-left: 10px;
  }

  .case__study__banner {
   width: 100%;
   height: 400px;
  }

  .case__study__banner img {
   border-radius: 10px;
  }

  .case__study p {
   text-align: justify;
  }
 </style>
</head>

<body>
 @include('partial/header')
 <!-- Abvout Start -->
 <div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.png') }}'); background-repeat:no-repeat; background-size:cover;">
  <div class="container py-5">
   <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-xl-12 wow fadeInLeft">
     <div>
      <!-- <h4 class="text-primary1">About Us</h4> -->
      <h1 class="display-5 mb-4 text-white">Nettechnocrats Case study</h1>
      <p class="mb-4 text-white">
      </p>
     </div>
    </div>
   </div>
  </div>
 </div>
 <div class="container-fluid about py-5">
  <div class="container p-0">
   <div class="row">
    <div class="col-md-12 d-flex justify-content-center case__study__banner">
     <img src="{{ asset('assets/web/smm-banner.png') }}" alt="" srcset="">
    </div>
   </div>
   <div class="row">
    <div class="col-md-12 case__study">
     <h1 class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, officiis.</h1>
     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus ab magni, officia fugit officiis dolorem repellendus quae eveniet facere? Labore velit error dicta deleniti ex provident dolorum asperiores molestiae vero.</p>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente error possimus illo! Aspernatur, ad. Animi pariatur eaque eius deserunt at, cumque illo molestiae odit quos voluptatem quisquam. Ratione expedita sapiente aspernatur sunt similique voluptates cupiditate adipisci natus. Nobis possimus, optio quos doloremque, totam error harum cumque fugit, quis architecto sapiente?</p>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit laudantium nostrum sint consectetur mollitia in quod itaque explicabo magnam, ducimus facilis quibusdam doloribus, vel dolores! Beatae deserunt perspiciatis architecto, saepe iste accusamus suscipit inventore quis incidunt corporis. Dolorum, assumenda earum! Voluptate amet rem ad dolores eos, quidem temporibus adipisci distinctio similique, eum ea excepturi! Molestiae libero voluptate, tenetur in quo laudantium, nostrum debitis eum accusantium, hic cumque quidem repellat culpa voluptatibus deserunt. Animi minus debitis illum amet tempora blanditiis nemo, delectus recusandae incidunt non architecto quia quo magni cum itaque error! Veniam dolorem sapiente ex dolores magnam voluptatibus cum enim!</p>
     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad fugiat laboriosam et aspernatur praesentium repellendus, sed cum deserunt facilis aperiam veniam! Ipsum, incidunt modi explicabo nulla dignissimos nam dolor. Omnis quia unde totam ad consequuntur tenetur placeat laborum doloribus delectus quod aperiam autem natus facere, inventore veritatis necessitatibus perspiciatis eum magni eos amet cumque quo quae quas? Fugit praesentium nobis voluptatem molestias quam, inventore fuga quo perferendis! Fuga vitae, doloremque, perferendis numquam ipsam commodi cupiditate veniam, quam alias in earum vel modi iure voluptatem? Eius sapiente, harum itaque deleniti minus consectetur earum laborum eaque cum voluptate cumque ullam dolorum saepe praesentium nesciunt dolor voluptatem perferendis culpa sint adipisci asperiores? Impedit similique, velit quia at alias est sequi eaque vitae quisquam ad quos non libero quibusdam illo fugit ipsa, magni hic necessitatibus assumenda vero! Expedita nostrum numquam error eaque illo aperiam dolores a, quos omnis fugit sequi autem nihil officia non vel nemo, quod voluptatum voluptate tempore enim. Eligendi dolor nulla animi libero, quidem, aliquam pariatur incidunt sit nemo quaerat non, cumque praesentium optio eveniet quas nihil aperiam cum officiis atque culpa a iusto debitis et facere. Doloremque dolorum itaque voluptates corporis ut maiores deserunt voluptatem unde nisi id. Ipsum sint consectetur nostrum culpa asperiores dignissimos quos eum, veniam eaque ex, delectus amet modi atque quis quia. Laboriosam nihil rem tenetur ipsum voluptates debitis iste a labore quae molestiae, dolores minima rerum accusantium voluptatibus soluta ullam natus! Ea possimus neque in fuga delectus quos, at perspiciatis aspernatur itaque odio, quam cumque.</p>

     <button class="btn">View More Case studies <i class="fa-solid fa-angles-right"></i></button>
    </div>
   </div>
  </div>
 </div>
 <!-- About End -->



 @include('partial/footer')
</body>

</html>

<script src="{{ asset('style/web/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('style/web/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('style/web/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('style/web/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('style/web/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('style/web/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>