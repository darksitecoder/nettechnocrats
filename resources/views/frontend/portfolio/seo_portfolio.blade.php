<!DOCTYPE html>
<html lang="en">

<head>
      <title>Nettechnocrats | Seo Portfolio</title>
      <meta name="description" content="Discover the portfolio of digital marketing and seo services for nettchnocrats. Explore our projects, skills, and experience.">
 
      <link rel="stylesheet" href="{{ asset('style/web/home.css') }}">

      <!-- Libraries Stylesheet -->
      <link rel="stylesheet" href="{{ asset('style/web/lib/animate/animate.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('style/web/lib/lightbox/css/lightbox.min.css') }}">
      <link rel="stylesheet" href="{{ asset('style/web/lib/owlcarousel/assets/owl.carousel.min.css') }}">

      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

      <!-- Vendor CSS Files -->
      <link href="{{ asset('js/vendor/bootstrap-icons/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('js/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

      <link href="{{ asset('js/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
      <link href="{{ asset('js/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

      <!-- Main CSS File -->
      <link href="{{ asset('style/web/seo-services/main.css') }}" rel="stylesheet">




      @include('partial/google_analytics')


</head>

<body>
      @include('partial/header')
<!-- Abvout Start -->
<div class="container-fluid about hero__banner__tech py-5" style="background: url('{{ asset('assets/web/tech__background.webp') }}'); background-repeat:no-repeat; background-size:cover;">
    <div class="container py-5">
        <div class="row g-5 align-items-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-xl-12 wow fadeInLeft">
                <div>
                    <!-- <h4 class="text-primary1">About Us</h4> -->
                    <h1 class="display-5 mb-4 text-white text-center">Case Studies</h1>
                    <p class="mb-4 text-white text-center">Take a look at the following case studies to see the success we have generated for our clients</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">

        <div class="row g-4 pt-5">


            @foreach($portfolio as $blog)


            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item" style="background: url('{{ asset('/' . $blog->image) }}'); background-repeat:no-repeat; background-size:cover;">

                    <div class="service-img">
                        <!-- <img src="{{ asset('assets/web/nettechnocrats-logo.webp') }}" alt="" srcset=""> -->
                    </div>
                    <div class="rounded-bottom  text-center d-flex align-items-center justify-content-center pt-4">
                        <!-- <p class="me-4 text-success"><i class="fa-solid fa-arrow-up"></i></p>
                        <div class="h4 text-center">
                            <p class="fs-1 m-0 p-0 text-white">320%</p>
                            <p class=" m-0 p-0 text-white">Website Leads</p>
                        </div> -->
                    </div>
                    <div class="rounded-bottom text-center" style="padding-top: 70%;">
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url($blog->id.'/portfolio-seo-detail.php')}}">SEE CASE STUDY</a>
                    </div>
                    {{--<div class="rounded-bottom text-center pt-3">
                        <p class="text-center p-0 m-0 fw-bold text-white">{!! \Illuminate\Support\Str::words($blog->company_name, 20) !!}</p>
                        
                        <p class="mb-4 p-0 m-0 fw-bold text-white">| {!! \Illuminate\Support\Str::words( $blog->company_name, 20) !!} |</p>
                    </div>--}}
                </div>
            </div>

            @endforeach

            <div class="pagination">
                {{ $portfolio->links() }}
            </div>


        </div>

    </div>
</div>
</div>

@include('partial/footer')
</body>

</html>
<script>
      const counters = document.querySelectorAll('.counter');
      const speed = 30; // The lower the speed value, the slower the counter animation

      counters.forEach(counter => {
            const updateCount = () => {
                  const target = +counter.getAttribute('data-target');
                  const count = +counter.innerText;

                  // Calculate the increment step
                  const inc = Math.ceil(target / speed);

                  // Check if the current count is less than the target
                  if (count < target) {
                        // Increment the count and update the counter text
                        counter.innerText = count + inc > target ? target : count + inc;
                        // Call the function again after a short delay
                        setTimeout(updateCount, 100);
                  } else {
                        counter.innerText = target; // Ensure the counter ends at the target value
                  }
            };

            updateCount();
      });
</script>
<script src="{{ asset('style/web/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('style/web/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('style/web/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('style/web/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('style/web/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('style/web/lib/owlcarousel/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>