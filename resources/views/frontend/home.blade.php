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

</head>

<body>
 @include('partial/header')
 <div class="containerd">
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
  <section class="about__seo">
   <div class="row">
    <div class="col-lg-5">
     <img src="{{ asset('assets/web/clutch.png') }}" alt="" srcset="">
    </div>
    <div class="col-lg-7"></div>
   </div>
  </section>
 </div>
 @include('partial/footer')
</body>


<script>
 const menu = document.querySelector(".menu");
 const menuMain = menu.querySelector(".menu-main");
 const goBack = menu.querySelector(".go-back");
 const menuTrigger = document.querySelector(".mobile-menu-trigger");
 const closeMenu = menu.querySelector(".mobile-menu-close");
 let subMenu;
 menuMain.addEventListener("click", (e) => {
  if (!menu.classList.contains("active")) {
   return;
  }
  if (e.target.closest(".menu-item-has-children")) {
   const hasChildren = e.target.closest(".menu-item-has-children");
   showSubMenu(hasChildren);
  }
 });
 goBack.addEventListener("click", () => {
  hideSubMenu();
 })
 menuTrigger.addEventListener("click", () => {
  toggleMenu();
 })
 closeMenu.addEventListener("click", () => {
  toggleMenu();
 })
 document.querySelector(".menu-overlay").addEventListener("click", () => {
  toggleMenu();
 })

 function toggleMenu() {
  menu.classList.toggle("active");
  document.querySelector(".menu-overlay").classList.toggle("active");
 }

 function showSubMenu(hasChildren) {
  subMenu = hasChildren.querySelector(".sub-menu");
  subMenu.classList.add("active");
  subMenu.style.animation = "slideLeft 0.5s ease forwards";
  const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
  menu.querySelector(".current-menu-title").innerHTML = menuTitle;
  menu.querySelector(".mobile-menu-head").classList.add("active");
 }

 function hideSubMenu() {
  subMenu.style.animation = "slideRight 0.5s ease forwards";
  setTimeout(() => {
   subMenu.classList.remove("active");
  }, 300);
  menu.querySelector(".current-menu-title").innerHTML = "";
  menu.querySelector(".mobile-menu-head").classList.remove("active");
 }

 window.onresize = function() {
  if (this.innerWidth > 991) {
   if (menu.classList.contains("active")) {
    toggleMenu();
   }

  }
 }
</script>
<script>
 const links = document.querySelectorAll('.list-item a');
 const image = document.getElementById('image');

 links.forEach(link => {
  link.addEventListener('mouseover', function() {
   image.src = this.getAttribute('data-image');
  });

  link.addEventListener('mouseout', function() {
   image.src = '{{ asset("assets/web/nav-images/seo.png") }}'; // Use double quotes inside the asset function
  });
 });
</script>

</html>