<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Details</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/web/favicon.png') }}">
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
      box-shadow: var(--black) 0px 5px 15px;
    }

    .main-blog-post h2 {
      font-weight: 700
    }

    .recent-blog-lists {
      background-color: var(--white);
      padding: 1.5rem 1.5rem;
      border-radius: 10px;

    }

    .recent-blog-lists .list a {
      transition: 0.2s ease-in-out;
    }

    .recent-blog-lists .list a:hover {
      color: var(--green) !important;
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

    /* .blog__list {
      box-shadow: var(--black) 0px 5px 15px;
    } */

    .blog__list a {
      color: var(--black);
      text-decoration: none;
      transition: 0.5s ease-in-out;
    }

    .blog__list .blog {
      box-shadow: var(--black) 0px 5px 15px;
    }

    .blog__list .blog:hover {
      box-shadow: none;
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
      border: 1px solid var(--blue);
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
      transition: 0.5s ease-in-out;
    }

    .subscribe .inputs input:focus {
      outline: 0;
      border: 1px solid var(--green);
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

    .subscribe .inputs .btn:hover {
      background-color: transparent;
    }

    .review-heading {
      font-weight: 700;
    }

    .reviews .review textarea {
      margin-left: 0;
      width: 100%;
      padding: 20px 30px;
      border-radius: 15px;
      transition: 0.5s ease-in-out;
    }

    .reviews .review textarea:focus {
      outline: 0;
      border: 1px solid var(--green);
    }

    .btn {

      color: var(--white) !important;
      /* border: 1px solid var(--blue); */
      border-radius: 5px;
      font-weight: 600;
      transition: 0.5s;
      font-size: 18px;
      /* padding: 8px 40px; */
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



    /* Slider */

    #container {
      height: 60vh;
      width: 100%;
      margin: 0;
      padding: 0;
      display: grid;
      place-items: center
    }

    #slider-container {
      height: 100%;
      width: 85vw;
      max-width: 1400px;
      position: relative;
      overflow: hidden;
      padding: 20px;
    }

    #slider-container .btn {
      position: absolute;
      top: calc(50% - 30px);
      height: 30px;
      width: 30px;
      border-left: 8px solid var(--blue);
      border-top: 8px solid var(--blue);
    }

    #slider-container .btn:hover {
      transform: scale(1.2);
    }

    #slider-container .btn.inactive {
      border-color: rgb(153, 121, 126)
    }

    #slider-container .btn:first-of-type {
      transform: rotate(-45deg);
      left: 10px
    }

    #slider-container .btn:last-of-type {
      transform: rotate(135deg);
      right: 10px;
    }

    #slider-container #slider {
      display: flex;
      width: 1000%;
      height: 100%;
      transition: all .5s;
    }

    #slider-container #slider .slide {
      height: 100%;
      margin: auto 10px;
      /* background-color: ; */
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      border-radius: 10px;
      display: grid;
      place-items: center;
    }

    #slider-container #slider .slide img {
      border-radius: 10px;
    }

    #slider-container #slider .slide h6 {
      font-weight: 600;
      color: var(--black);
    }

    #slider-container #slider .slide span {
      color: white;
      font-size: 150px;
    }

    @media only screen and (min-width: 1100px) {

      #slider-container #slider .slide {
        width: calc(2.5% - 20px);
      }

    }

    @media only screen and (max-width: 1100px) {

      #slider-container #slider .slide {
        width: calc(3.3333333% - 20px);
      }

    }

    @media only screen and (max-width: 900px) {

      #slider-container #slider .slide {
        width: calc(5% - 20px);
      }

    }

    @media only screen and (max-width: 550px) {

      #slider-container #slider .slide {
        width: calc(10% - 20px);
      }

    }

    .content ul {
      list-style: disc;
      padding-left: 20px;
    }

    .content li {
      margin-bottom: 5px;
    }
  </style>
</head>

<body>
  @include('partial/header')
  <section class="bloglist">
    <div class="container">
      <section class="main__blog__recent">
        <div class="row">
          <div class="col-lg-9">

            <div class="main-blog-post ">
              <a href="#"> <img src="{{ asset('/'.$blogFND->image) }}" alt="Blogs Images" srcset="">
                <h2 class="pt-4">{{$blogFND->heading}}</h2>
              </a>
              <div class="content">
                {!! $blogFND->content !!}
              </div>
              <div class="author__date pt-5 d-flex justify-content-between">
                <b>Nettechnocrats </b>&nbsp;&nbsp;
                <p> {{ $blogFND->created_at->format('d-m-Y') }} </p>
              </div>
            </div>

          </div>
          <div class="col-lg-3">
            <div class="recent-blog-lists">
              <h3>Featured Posts</h3>
              <hr style="color: var(--blue); height:5px;" />
              @foreach($blogLTS as $data)
              <div class="list">
                <a href="{{url('blogdetail/'.$data->slug) }}">
                  <div class="list__heading d-flex justify-content-between">
                    <h4>{{ strlen($data->heading) > 35 ? substr($data->heading, 0, 35) . '...' : $data->heading }}</h4> <span style="color: var(--green);">[New]</span>
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
            <section class="blog__more__topics pt-5">
              <div class="heading">
                <h6>EXPLORE MORE TOPICS</h6>
              </div>
              @foreach($blogTPC as $data)
              <div class="pdf__card mt-3">
                <a href="{{url('blogdetail/'.$data->slug) }}">
                  <img src="{{ asset('/'.$data->image) }}" alt="Blogs Images" srcset="">
                </a>
                <p class="text-center">{!! strlen($data->topic) > 25 ? substr($data->topic, 0, 25) . '...' : $data->topic !!}</p>
              </div>
              @endforeach
            </section>
          </div>
        </div>

        {{--
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
                    <img src="{{ asset('assets/frontEnd/web/images/user.gif') }}" alt="Blogs Images" srcset="">
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
          <img src="{{ asset('assets/frontEnd/web/images/user.gif') }}" alt="Blogs Images" srcset="">
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
  --}}
  <div class="row pt-4">
    <div class="heading d-flex justify-content-between align-items-center pb-4">
      <hr style="color:var(--blue); width:20%; height:5px;" />
      <h1>VIEW MORE BLOGS</h1>
      <hr style="color:var(--blue); width:20%; height:5px;" />
    </div>
    <!-- @foreach($blogRAN as $data)
            <div class="col-lg-3">
                <div class="blog__list">
                  <a href="{{url('blogdetail/'.$data->id)}}">
                      <div class="blog">
                        <img src="{{ asset('/'.$data->image) }}" alt="Blogs Images" srcset="">
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
          @endforeach -->
    <div id="container">
      <div id="slider-container">
        <span onclick="slideRight()" class="btn"></span>
        <div id="slider">
          @foreach($blogRAN as $data)
          <div class="slide">
            <img src="{{ asset('/'.$data->image) }}" alt="" class="mt-2" srcset="" style="height: 200px; width:90%;">
            <a href="{{url('blogdetail/'.$data->slug) }}">
              <h6>{{ strlen($data->heading) > 25 ? substr($data->heading, 0, 25) . '...' : $data->heading }}</h6>
              <div class="author__date d-flex justify-content-between">
                <b>Nettechnocrats </b>&nbsp;&nbsp;
                <p> {{ $data->created_at->format('d-m-Y') }} </p>
              </div>
            </a>
          </div>
          @endforeach
        </div>
        <span onclick="slideLeft()" class="btn"></span>

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

  <script>
    var container = document.getElementById('container')
    var slider = document.getElementById('slider');
    var slides = document.getElementsByClassName('slide').length;
    var buttons = document.getElementsByClassName('btn');


    var currentPosition = 0;
    var currentMargin = 0;
    var slidesPerPage = 0;
    var slidesCount = slides - slidesPerPage;
    var containerWidth = container.offsetWidth;
    var prevKeyActive = false;
    var nextKeyActive = true;

    window.addEventListener("resize", checkWidth);

    function checkWidth() {
      containerWidth = container.offsetWidth;
      setParams(containerWidth);
    }

    function setParams(w) {
      if (w < 551) {
        slidesPerPage = 1;
      } else {
        if (w < 901) {
          slidesPerPage = 2;
        } else {
          if (w < 1101) {
            slidesPerPage = 3;
          } else {
            slidesPerPage = 4;
          }
        }
      }
      slidesCount = slides - slidesPerPage;
      if (currentPosition > slidesCount) {
        currentPosition -= slidesPerPage;
      };
      currentMargin = -currentPosition * (100 / slidesPerPage);
      slider.style.marginLeft = currentMargin + '%';
      if (currentPosition > 0) {
        buttons[0].classList.remove('inactive');
      }
      if (currentPosition < slidesCount) {
        buttons[1].classList.remove('inactive');
      }
      if (currentPosition >= slidesCount) {
        buttons[1].classList.add('inactive');
      }
    }

    setParams();

    function slideRight() {
      if (currentPosition != 0) {
        slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
        currentMargin += (100 / slidesPerPage);
        currentPosition--;
      };
      if (currentPosition === 0) {
        buttons[0].classList.add('inactive');
      }
      if (currentPosition < slidesCount) {
        buttons[1].classList.remove('inactive');
      }
    };

    function slideLeft() {
      if (currentPosition != slidesCount) {
        slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
        currentMargin -= (100 / slidesPerPage);
        currentPosition++;
      };
      if (currentPosition == slidesCount) {
        buttons[1].classList.add('inactive');
      }
      if (currentPosition > 0) {
        buttons[0].classList.remove('inactive');
      }
    };
  </script>
</body>

</html>