<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Blog Details</title>
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
  .main-blog-post {
   background-color: var(--white);
   border-radius: 10px;
   padding: 1.5rem;
  }

  .main-blog-post a {
   color: var(--black);
   text-decoration: none;
  }

  .main-blog-post img {
   width: 100%;
   border-radius: 10px;
  }

  .main-blog-post h2 {
   font-weight: 700
  }

  .recent-blog-lists {
   background-color: var(--white);
   padding: 1.5rem 1.5rem;
   border-radius: 10px;

  }

  .recent-blog-lists h4 {
   font-weight: 600;
   font-size: 15px;
  }

  .recent-blog-lists h3 {
   font-size: 20px;
   color: var(--black);
   font-weight: 700;
  }

  .recent-blog-lists .list a {
   color: var(--black);
   text-decoration: none;
  }

  .recent-blog-lists .author__date {
   font-size: 13px;
  }

  .blog__list a {
   color: var(--black);
   text-decoration: none;
   transition: 0.5s ease-in-out;
  }

  .blog__list .blog:hover {
   box-shadow: var(--black) 0px 5px 15px;
  }

  .blog__list .blog {
   padding: 10px;
   margin: 0px 10px;
   background-color: var(--white);
   border-radius: 10px;
   transition: 0.5s ease-in-out;
  }

  .blog__list .blog h6 {
   font-weight: 600;
  }

  .blog__list .blog img {
   width: 100%;
   padding: 10px 0px;
   border-radius: 15px;
  }

  .slider {
   max-width: 1100px;
   display: flex;
  }

  .slider .card {
   flex: 1;
   margin: 20px 10px;
   background: var(--white);
   border-radius: 10px;
   transition: 0.5s ease-in-out;
  }

  .slider .card:hover {
   box-shadow: var(--black) 0px 5px 15px;
  }

  .slider .card a {
   text-decoration: none;
   color: var(--black);
  }

  .slider .card .img {
   height: 200px;
   width: 100%;
  }

  .slider .card .img img {
   height: 100%;
   width: 100%;
   object-fit: cover;
   border-radius: 10px 10px 0px 0px;
  }

  .slider .card .content {
   padding: 10px 20px;
  }

  .card .content .title {
   font-size: 25px;
   font-weight: 600;
  }

  .author__date * {
   color: var(--black);
  }

  hr {
   color: var(--black);
  }

  .pdf__card {
   background-color: var(--white);
   padding: 0.8rem;
   border-radius: 10px;
   transition: 0.5s ease-in-out;
   cursor: pointer;
  }

  .pdf__card:hover {
   box-shadow: var(--black) 0px 5px 15px;
  }

  .pdf__card img {
   width: 100%;
   border-radius: 8px;
   padding-bottom: 10px;
  }

  .pdf__card p {
   padding: 0px;
   margin: 0px;
  }

  .pdf__card .pdf__btn {
   border: 2px solid var(--blue);
   border-radius: 8px;
   margin: 10px 0px;
  }

  .pdf__card .pdf__btn a {
   text-decoration: none;
   font-weight: 600;
   padding: 5px 10px;
   transition: 0.5s ease-in-out;
   width: 100%;
   text-align: center;
  }

  .pdf__card .pdf__btn .preview {
   color: var(--blue);
   background-color: var(--white);
   border-radius: 6px 0px 0px 6px;

  }

  .pdf__card .pdf__btn .preview:hover {
   color: var(--white);
   background-color: var(--blue);
  }

  .pdf__card .pdf__btn .download {
   color: var(--white);
   background-color: var(--blue);
   border-radius: 0px 6px 6px 0px;
  }

  .pdf__card .pdf__btn .download:hover {
   color: var(--blue);
   background-color: var(--white);

  }

  .blog__more__topics .heading h6 {
   font-size: 18px;
   font-weight: 600;
   text-align: center;
  }

  h1 {
   font-size: 35px;
   font-weight: 700;
  }

  @media only screen and (max-width: 600px) {
   h1 {
    font-size: 20px;
    font-weight: 600;
   }
  }

  .blog__more__topics .pdf__card {
   /* background-color: transparent; */
  }

  .subscribe .inputs input {
   height: 80px;
   border: 1px solid var(--blue);
   border-radius: 10px;
   font-size: 22px;
  }

  .subscribe .inputs .btn {
   width: 100%;
   /* height: 50px; */
   color: var(--white);
   background-color: var(--blue);
   border: 1px solid var(--blue);
   border-radius: 10px;
   text-align: center;
   font-size: 27px;
   font-weight: 600;

  }

  .review-heading {
   font-weight: 700;
  }

  .reviews .review textarea {
   margin-left: 0;
  }

  .btn {
   background-color: var(--blue);
   color: var(--white) !important;
   border: 1px solid var(--blue);
   border-radius: 5px;
   font-weight: 600;
   transition: 0.5s;
   font-size: 18px;
   padding: 8px 40px;
  }

  .btn:hover {
   background-color: var(--white);
   border: 1px solid var(--blue);
   color: var(--blue) !important;
   box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }

  .review-submit {
   width: auto;
   margin: 0;
  }

  .users__comments {
   background-color: var(--white);
   border: 2px solid var(--blue);
   border-radius: 10px;
   padding: 10px 20px;
   margin: 10px 0px;
   transition: 0.5s ease-in-out;
  }

  .users__comments:hover {
   border: 2px solid var(--blue);
   box-shadow: var(--black) 0px 5px 15px;
  }

  .users__comments img {
   max-width: 100px;
   border-radius: 100%;
  }

  .users__comments .name {
   font-weight: 600;
   font-size: 20px;
  }

  .users__comments .date {
   font-weight: 600;

  }
 </style>
</head>

<body>
 <section class="bloglist">
  <div class="container">
   <section class="main__blog__recent">
    <div class="row">
     <div class="col-lg-9">

      <div class="main-blog-post ">
       <a href="#"> <img src="{{ asset('assets/web/banner1.png') }}" alt="" srcset="">
        <h2>Lorem, ipsum dolor sit amet consectetur adipisicing </h2>
       </a>
       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi doloribus laudantium repellendus atque, nemo in ducimus ipsa cupiditate, qui at quae, odio perspiciatis optio?</p>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iste eligendi ipsa, eius ducimus esse non sapiente in sit eum numquam doloribus quae, delectus pariatur vitae voluptatem culpa. Magnam distinctio praesentium suscipit voluptate minima aliquam vitae repellat recusandae vero consectetur pariatur quas illum unde provident, nihil dolor repudiandae? Numquam, porro possimus itaque odio tenetur ullam perspiciatis error placeat, hic nisi consectetur obcaecati vel sequi dolorum praesentium repudiandae. Tenetur pariatur nemo alias itaque. Dignissimos labore necessitatibus soluta sit voluptas ullam quae fugit voluptate sunt maxime alias delectus, possimus expedita pariatur dolorum accusamus sed laboriosam tempora eveniet consequuntur libero. Libero, voluptatem ullam.</p>
       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi doloribus laudantium repellendus atque, nemo in ducimus ipsa cupiditate, qui at quae, odio perspiciatis optio?</p>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iste eligendi ipsa, eius ducimus esse non sapiente in sit eum numquam doloribus quae, delectus pariatur vitae voluptatem culpa. Magnam distinctio praesentium suscipit voluptate minima aliquam vitae repellat recusandae vero consectetur pariatur quas illum unde provident, nihil dolor repudiandae? Numquam, porro possimus itaque odio tenetur ullam perspiciatis error placeat, hic nisi consectetur obcaecati vel sequi dolorum praesentium repudiandae. Tenetur pariatur nemo alias itaque. Dignissimos labore necessitatibus soluta sit voluptas ullam quae fugit voluptate sunt maxime alias delectus, possimus expedita pariatur dolorum accusamus sed laboriosam tempora eveniet consequuntur libero. Libero, voluptatem ullam.</p>
       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi doloribus laudantium repellendus atque, nemo in ducimus ipsa cupiditate, qui at quae, odio perspiciatis optio?</p>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iste eligendi ipsa, eius ducimus esse non sapiente in sit eum numquam doloribus quae, delectus pariatur vitae voluptatem culpa. Magnam distinctio praesentium suscipit voluptate minima aliquam vitae repellat recusandae vero consectetur pariatur quas illum unde provident, nihil dolor repudiandae? Numquam, porro possimus itaque odio tenetur ullam perspiciatis error placeat, hic nisi consectetur obcaecati vel sequi dolorum praesentium repudiandae. Tenetur pariatur nemo alias itaque. Dignissimos labore necessitatibus soluta sit voluptas ullam quae fugit voluptate sunt maxime alias delectus, possimus expedita pariatur dolorum accusamus sed laboriosam tempora eveniet consequuntur libero. Libero, voluptatem ullam.</p>
       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi doloribus laudantium repellendus atque, nemo in ducimus ipsa cupiditate, qui at quae, odio perspiciatis optio?</p>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iste eligendi ipsa, eius ducimus esse non sapiente in sit eum numquam doloribus quae, delectus pariatur vitae voluptatem culpa. Magnam distinctio praesentium suscipit voluptate minima aliquam vitae repellat recusandae vero consectetur pariatur quas illum unde provident, nihil dolor repudiandae? Numquam, porro possimus itaque odio tenetur ullam perspiciatis error placeat, hic nisi consectetur obcaecati vel sequi dolorum praesentium repudiandae. Tenetur pariatur nemo alias itaque. Dignissimos labore necessitatibus soluta sit voluptas ullam quae fugit voluptate sunt maxime alias delectus, possimus expedita pariatur dolorum accusamus sed laboriosam tempora eveniet consequuntur libero. Libero, voluptatem ullam.</p>
       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi doloribus laudantium repellendus atque, nemo in ducimus ipsa cupiditate, qui at quae, odio perspiciatis optio?</p>
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda iste eligendi ipsa, eius ducimus esse non sapiente in sit eum numquam doloribus quae, delectus pariatur vitae voluptatem culpa. Magnam distinctio praesentium suscipit voluptate minima aliquam vitae repellat recusandae vero consectetur pariatur quas illum unde provident, nihil dolor repudiandae? Numquam, porro possimus itaque odio tenetur ullam perspiciatis error placeat, hic nisi consectetur obcaecati vel sequi dolorum praesentium repudiandae. Tenetur pariatur nemo alias itaque. Dignissimos labore necessitatibus soluta sit voluptas ullam quae fugit voluptate sunt maxime alias delectus, possimus expedita </p>
       <div class="author__date pt-5 d-flex justify-content-between">
        <b>Nettechnocrats </b>&nbsp;&nbsp;
        <p> 28/09/2024</p>
       </div>
      </div>

     </div>
     <div class="col-lg-3">
      <div class="recent-blog-lists">
       <h3>Featured Posts</h3>
       <hr style="color: var(--blue); height:5px;" />
       <div class="list">
        <a href="#">
         <div class="list__heading d-flex justify-content-between">
          <h4>Lorem ipsum dolor sit amet.</h4> <span style="color: var(--blue);">[New]</span>
         </div>
        </a>
        <div class="author__date d-flex justify-content-between">
         <b>Nettechnocrats </b>&nbsp;&nbsp;
         <p> 28/09/2024</p>
        </div>
        <hr />
       </div>
       <div class="list">
        <a href="#">
         <div class="list__heading d-flex justify-content-between">
          <h4>Lorem ipsum dolor sit amet.</h4> <span style="color: var(--blue);">[New]</span>
         </div>
        </a>
        <div class="author__date d-flex justify-content-between">
         <b>Nettechnocrats </b>&nbsp;&nbsp;
         <p> 28/09/2024</p>
        </div>
        <hr />
       </div>
       <div class="list">
        <a href="#">
         <div class="list__heading d-flex justify-content-between">
          <h4>Lorem ipsum dolor sit amet.</h4> <span style="color: var(--blue);">[New]</span>
         </div>
        </a>
        <div class="author__date d-flex justify-content-between">
         <b>Nettechnocrats </b>&nbsp;&nbsp;
         <p> 28/09/2024</p>
        </div>
        <hr />
       </div>
       <div class="list">
        <a href="#">
         <div class="list__heading d-flex justify-content-between">
          <h4>Lorem ipsum dolor sit amet.</h4> <span style="color: var(--blue);">[New]</span>
         </div>
        </a>
        <div class="author__date d-flex justify-content-between">
         <b>Nettechnocrats </b>&nbsp;&nbsp;
         <p> 28/09/2024</p>
        </div>
        <hr />
       </div>
      </div>
      <section class="blog__more__topics pt-5">
       <div class="heading">
        <h6>EXPLORE MORE TOPICS</h6>
       </div>
       <div class="pdf__card mt-3">
        <img src="{{ asset('assets/web/banner2.png') }}" alt="" srcset="">
        <p class="text-center">Lorem ipsum</p>
       </div>
       <div class="pdf__card mt-3">
        <img src="{{ asset('assets/web/banner1.png') }}" alt="" srcset="">
        <p class="text-center">Lorem ipsum</p>
       </div>
       <div class="pdf__card mt-3">
        <img src="{{ asset('assets/web/banner2.png') }}" alt="" srcset="">
        <p class="text-center">Lorem ipsum</p>
       </div>
       <div class="pdf__card mt-3">
        <img src="{{ asset('assets/web/banner2.png') }}" alt="" srcset="">
        <p class="text-center">Lorem ipsum</p>
       </div>
       <div class="pdf__card mt-3">
        <img src="{{ asset('assets/web/banner1.png') }}" alt="" srcset="">
        <p class="text-center">Lorem ipsum</p>
       </div>
       <div class="pdf__card mt-3">
        <img src="{{ asset('assets/web/banner2.png') }}" alt="" srcset="">
        <p class="text-center">Lorem ipsum</p>
       </div>
      </section>
     </div>
    </div>

    <section class="reviews">
     <div class="row mt-4 mb-4" id="SCREEN_VIEW_CONTAINER">
      <div class="col-md-9">
       <form id="reviewForm">
        <div class="review mt-5" id="SCREEN_VIEW_CONTAINER">
         <h3 class="review-heading">WRITE A COMMENT</h3>
         <textarea name="reviewComment" id="reviewComment" placeholder="Write Here...." cols="30" rows="5"></textarea>
         <span class="msg_err" id="reviewComment_err" style="color:red;  font-size:13px;"></span>

         <div class="cart mt-4 review-submit" id="SCREEN_VIEW_CONTAINER">
          <button type="button" id="reviewButton" class="btn">SUBMIT</button>
         </div>
        </div>
       </form>
      </div>
      <div class="col-md-6"></div>
     </div>

     <div class="comments">
      <div class="row">
       <div class="col-lg-6">
        <div class="users__comments">
         <div class="d-flex justify-content-between align-items-center">
          <img src="{{ asset('assets/frontEnd/web/images/user.gif') }}" alt="" srcset="">
          <p class="name">User Name</p>
         </div>
         <p class="comment pt-2">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia inventore tenetur dolore? Corporis, perspiciatis iusto?
         </p>
         <div class="date d-flex justify-content-end">
          <p>02/10/2024</p>
         </div>
        </div>
       </div>
       <div class="col-lg-6">
        <div class="users__comments">
         <div class="d-flex justify-content-between align-items-center">
          <img src="{{ asset('assets/frontEnd/web/images/user.gif') }}" alt="" srcset="">
          <p class="name">User Name</p>
         </div>
         <p class="comment pt-2">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia inventore tenetur dolore? Corporis, perspiciatis iusto?
         </p>
         <div class="date d-flex justify-content-end">
          <p>02/10/2024</p>
         </div>
        </div>
       </div>
      </div>
     </div>
    </section>
    <div class="row pt-4">
     <div class="heading d-flex justify-content-between align-items-center">
      <hr style="color:var(--blue); width:20%; height:5px;" />
      <h1>VIEW MORE BLOGS</h1>
      <hr style="color:var(--blue); width:20%; height:5px;" />
     </div>
     <div class="col-lg-3">
      <div class="blog__list">
       <a href="#">
        <div class="blog">
         <img src="{{ asset('assets/web/banner1.png') }}" alt="" srcset="">
         <h6>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h6>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
         <div class="author__date d-flex justify-content-between">
          <b>Nettechnocrats </b>&nbsp;&nbsp;
          <p> 28/09/2024</p>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div class="col-lg-3">
      <div class="blog__list">
       <a href="#">
        <div class="blog">
         <img src="{{ asset('assets/web/banner2.png') }}" alt="" srcset="">
         <h6>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h6>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
         <div class="author__date d-flex justify-content-between">
          <b>Nettechnocrats </b>&nbsp;&nbsp;
          <p> 28/09/2024</p>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div class="col-lg-3">
      <div class="blog__list">
       <a href="#">
        <div class="blog">
         <img src="{{ asset('assets/web/banner1.png') }}" alt="" srcset="">
         <h6>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h6>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
         <div class="author__date d-flex justify-content-between">
          <b>Nettechnocrats </b>&nbsp;&nbsp;
          <p> 28/09/2024</p>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div class="col-lg-3">
      <div class="blog__list">
       <a href="#">
        <div class="blog">
         <img src="{{ asset('assets/web/banner2.png') }}" alt="" srcset="">
         <h6>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</h6>
         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
         <div class="author__date d-flex justify-content-between">
          <b>Nettechnocrats </b>&nbsp;&nbsp;
          <p> 28/09/2024</p>
         </div>
        </div>
       </a>
      </div>
     </div>
    </div>

   </section>

   <div class="container">

    <section class="subscribe pt-5">
     <div class="heading d-flex justify-content-between align-items-center">
      <hr style="color:var(--blue); width:8%; height:5px;" />
      <h1>SUBSCRIBE TO GET UPDATE IN YOUR INBOX</h1>
      <hr style="color:var(--blue); width:8%; height:5px;" />
     </div>

     <div class="inputs">

      <input type="email" class="form-control" placeholder="Your Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2">

      <button class="btn mt-4">SUBSCRIBE</button>

     </div>
    </section>

   </div>
 </section>

 <!-- Footer -->
 @include('partial/footer')
 <!-- Footer -->
 <script>
  $(".slider").owlCarousel({
   loop: true,
   autoplay: true,
   autoplayTimeout: 2000, //2000ms = 2s;
   autoplayHoverPause: true,
  });
 </script>
</body>

</html>