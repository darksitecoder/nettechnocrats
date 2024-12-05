<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog List</title>
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
         background-color: #fff;
         border-radius: 10px;
         padding: 1.5rem;
         box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }

      .main-blog-post a {
         color: #000;
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
         background-color: #fff;
         padding: 1.5rem 1.5rem;
         border-radius: 10px;

      }

      .recent-blog-lists h4 {
         font-weight: 600;
         font-size: 20px;
      }

      .recent-blog-lists h3 {
         color: #000;
         font-weight: 700;
      }

      .recent-blog-lists .list a {
         color: #000;
         text-decoration: none;
      }

      .blog__list a {
         color: #000;
         text-decoration: none;
         transition: 0.5s ease-in-out;
      }

      .blog__list .blog:hover {
         box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      }

      .blog__list .blog {
         padding: 10px;
         margin: 0px 10px;
         background-color: #fff;
         border-radius: 10px;
         transition: 0.5s ease-in-out;
         border: 0.5px solid #c6c6c6;
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
         background: #fff;
         border-radius: 10px;
         transition: 0.5s ease-in-out;
      }

      .slider .card:hover {
         box-shadow: #000 0px 5px 15px;
      }

      .slider .card a {
         text-decoration: none;
         color: #000;
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
         color: #000;
      }

      hr {
         color: #000;
      }

      .pdf__card {
         background-color: #fff;
         padding: 0.8rem;
         border-radius: 10px;
         box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
         transition: 0.5s ease-in-out;
      }

      .pdf__card:hover {
         box-shadow: none;
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
         border: 2px solid #5CE1D5;
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
         color: #5CE1D5;
         background-color: #fff;
         border-radius: 6px 0px 0px 6px;

      }

      .pdf__card .pdf__btn .preview:hover {
         color: #fff;
         background-color: #5CE1D5;
      }

      .pdf__card .pdf__btn .download {
         color: #fff;
         background-color: #5CE1D5;
         border-radius: 0px 6px 6px 0px;
      }

      .pdf__card .pdf__btn .download:hover {
         color: #5CE1D5;
         background-color: #fff;

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
         border: 1px solid #5CE1D5;
         border-radius: 10px;
         font-size: 22px;
      }

      .subscribe .inputs .btn {
         width: 100%;
         /* height: 50px; */
         color: #fff;
         background-color: #5CE1D5;
         border: 1px solid #5CE1D5;
         border-radius: 10px;
         text-align: center;
         font-size: 27px;
         font-weight: 600;

      }
   </style>
</head>

<body>

   @include('partial/header')
   <section class="bloglist">
      <div class="container">
         <section class="main__blog__recent">
            <div class="row">

               <div class="col-lg-6">
                  <div class="main-blog-post ">
                     <a href="{{url('blogdetail/'.$blogLTS[0]->id)}}"> <img src="{{ asset('public/'.$blogLTS[0]->image) }}" alt="Blogs Images" srcset="">
                        <h2>{{ strlen($blogLTS[0]->heading) > 25 ? substr($blogLTS[0]->heading, 0, 25) . '...' : $blogLTS[0]->heading }}</h2>
                     </a>
                     <p>{!! strlen($blogLTS[0]->content) > 60 ? substr($blogLTS[0]->content, 0, 60) . '...' : $blogLTS[0]->content !!}</p>

                     <div class="author__date d-flex">
                        <b>Nettechnocrats </b>&nbsp;&nbsp;
                        <p>{{ $blogLTS[0]->created_at->format('d-m-Y') }}</p>
                     </div>
                  </div>
               </div>

               <div class="col-lg-6">
                  <div class="recent-blog-lists">
                     <h3>Featured Posts</h3>
                     <hr style="color: #5CE1D5; height:5px;" />

                     @foreach($blogLTS->skip('1') as $data)
                        <div class="list">
                           <a href="{{url('blogdetail/'.$data->id)}}">
                              <div class="list__heading d-flex justify-content-between">
                                 <h4>{{ strlen($data->heading) > 35 ? substr($data->heading, 0, 35) . '...' : $data->heading }}</h4> <span style="color: #5CE1D5;">[New]</span>
                              </div>
                           </a>
                           <div class="author__date d-flex justify-content-between">
                              <b>Nettechnocrats </b>&nbsp;&nbsp;
                              <p> {{ $data->created_at->format('d-m-Y') }} </p>
                           </div>
                           <hr />
                        </div>
                     @endforeach
                  </div>
               </div>
            </div>

            <div class="row pt-4">
               @foreach($blogRAN as $data)
                  <div class="col-lg-3">
                     <div class="blog__list">
                        <a href="{{url('blogdetail/'.$data->id)}}">
                           <div class="blog">
                              <img src="{{ asset('public/'.$data->image) }}" alt="Blogs Images" srcset="">
                              <h6>{{ strlen($data->heading) > 25 ? substr($data->heading, 0, 25) . '...' : $data->heading }}</h6>
                              <p>{!! strlen($data->content) > 25 ? substr($data->content, 0, 25) . '...' : $data->content !!}</p>
                              <div class="author__date d-flex justify-content-between">
                                 <b>Nettechnocrats </b>&nbsp;&nbsp;
                                 <p> {{ $data->created_at->format('d-m-Y') }} </p>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               @endforeach
            </div>

         </section>

         <div class="container">
            <section class="blog__more__topics pt-5">
               <div class="heading d-flex justify-content-between align-items-center">
                  <hr style="color:#5CE1D5; width:20%; height:5px;" />
                  <h1>EXPLORE MORE TOPICS</h1>
                  <hr style="color:#5CE1D5; width:20%; height:5px;" />
               </div>
               <!-- <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ipsam ipsum neque molestiae eum! Recusandae.</p> -->
               <div class="row">
                  @foreach($blogTPC as $data)
                     <div class="col-lg-4">
                        <div class="pdf__card">
                           <a href="{{url('blogdetail/'.$data->id)}}">
                              <img src="{{ asset('public/'.$data->image) }}" alt="Blogs Images" srcset="">
                           </a>
                           <p class="text-center">{!! strlen($data->topic) > 25 ? substr($data->topic, 0, 25) . '...' : $data->topic !!}</p>
                        </div>
                     </div>
                  @endforeach
               </div>
            </section>

            <section class="subscribe pt-5">
               <div class="heading d-flex justify-content-between align-items-center">
                  <hr style="color:#5CE1D5; width:8%; height:5px;" />
                  <h1>SUBSCRIBE TO GET UPDATE IN YOUR INBOX</h1>
                  <hr style="color:#5CE1D5; width:8%; height:5px;" />
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894yeTMcEGkYUnw5inS4Yk5PobPbwlZ4dOKF2EUp5k3e54r78Pj+6E+tSGVnNSeQppRlGlo+tu9WdGHU6E2fg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-kvFVyywbHUcEKoEoIZs2orxfJcpLb6Ow/LPps5yOEedM9pKxrKZDB9iP8VfxikiyDknDt0+zYB7ebs3tNp00xA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script>
      $(document).ready(function() {
         $(".slider").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 2],
            itemsMobile: [479, 1],
            navigation: true,
            navigationText: ["<", ">"],
            pagination: true,
            dragEndSpeed: 450
         });
      });
   </script>

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