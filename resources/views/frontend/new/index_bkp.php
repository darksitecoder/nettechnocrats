<?php include 'include/home_header.php'; ?>
<link rel="shortcut icon" type="image/ico" href="/favicon.ico" />
<section class="banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-text text-center">
            </div>
            <div class="contact-section-home">
               <ul>
                  <li class="phone"><a href="#" data-toggle="modal" data-target="#myModal"><span><i class="fa fa-phone" aria-hidden="true"></i></span>CALL</a></li>
                  <li class="req"><a href="#" data-toggle="modal" data-target="#myModal1" onclick="OpenREQ();"><span><i class="fa fa-file-text-o" aria-hidden="true"></i></span>RFQ</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="call-popup">
      <div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-title text-center" id="CallMessage" style="color: #005401;font-weight: bold;margin-top: 10px;"></div>
               <div class="modal-body">
                  <div class="call-content">
                     <a href="#"><span>Call Now: </span>+1(918) 514-3211</a>
                     <a href="#"><span></span>+91.120.413.7259</a>
                     <form id="callform">
                        <div class="com-md-4 col-sm-4 col-xs-12">
                           <input type="text" name="code" id="code" placeholder="+1" onkeypress="HideErrmsg('nameErr');">
                           <span id="codeErr"></span>
                        </div>
                        <div class="com-md-8 col-sm-8 col-xs-12">
                           <input type="text" name="phoneno" id="phoneno" placeholder="Phone No." onkeypress="HideErrmsg('nameErr');">
                           <span id="phonenoErr"></span>
                        </div>
                        <div class="col-md-12">
                           <input type="button" onclick="CallRequest();" id="Callbtn" Value="Request for Call Back" class="call-btn">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- modal-content -->
         </div>
         <!-- modal-dialog -->
      </div>
      <!-- modal -->
   </div>
   <div class="req-popup">
      <div class="modal left fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               </div>
               <div class="modal-title text-center" id="QueryMessage" style="color: #005401;font-weight: bold;margin-top: 10px;"></div>
               <div class="modal-body">
                  <div class="rfq-content">
                     <form id="queryform">
                        <div class="col-md-12">
                           <input type="text" name="rname" id="rname" placeholder="Name" onkeypress="HideErrmsg('rnameErr');">
                           <span id="rnameErr"></span>
                           <input type="text" name="remail" id="remail" placeholder="Email" onkeypress="HideErrmsg('remailErr');">
                           <span id="remailErr"></span>
                           <textarea row="3" placeholder="Message" name="rmessage" id="rmessage"></textarea>
                           <input type="text" name="vcapcha" id="vcapcha" style="width: 50%;" readonly="readonly" oncopy="return false" onpaste="return false">
                           <label>What code is in the image</label>
                           <input type="text" placeholder="Capcha" name="rcapcha" id="rcapcha" onkeypress="HideErrmsg('rcapchaErr');">
                           <label>Enter the code shows in the image</label>
                           <span id="rcapchaErr"></span>
                           <div class="col-md-5 col-sm-6 col-xs-12">
                              <input type="button" Value="Submit" id="RFQBtn" style="width: 110%;" class="call-btn" onclick="RFQQyery();">
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- modal-content -->
         </div>
         <!-- modal-dialog -->
      </div>
      <!-- modal -->
   </div>
   <div class="main_clients">
      <div class="container">
         <div class="row">
            <div class="col-md-offset-1 col-md-10">
               <div class="col-xs-5 col-sm-2">
                  <ul class="list-inline">
                     <li>
                        <span class="countr">15+ Brands</span>
                        <font>We’ve Worked</font>
                     </li>
                  </ul>
               </div>
               <div class="col-xs-7 col-sm-10">
                  <div class="owl-theme" id="owl-demo">
                     <div class="item">
                        <img src="images/cocacola.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/preapps.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/slim.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/lexus.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/logo1.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/logo2.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/logo3.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/logo4.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/logo5.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/logo6.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/logo7.webp" alt="" />
                     </div>
                     <div class="item">
                        <img src="images/logo8.webp" alt="" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
<section id="expert">
   <div class="red_overlay">
      <div class="container">
         <div class="row">
            <div class="col-xs-12">
               <div class="text-center">
                  <h1 class="heading"> Nettechnocrats has made world a small town by providing quality offshore web & IT solutions. </h1>
                  <h2>Come Join us!</h2>
                  <h4>Avail the services of incredible partner like Nettechnocrats, which is an ideal example of attributes like capability, vivid experience and right passion for making your digital dreams turn into reality.</h4>
               </div>
            </div>
         </div>
         <div class="row top_margin">
            <div class="col-sm-3 col-xs-12 block" data-move-y="200px" data-move-x="-200px">
               <div class="expert_box web">
                  <img src="images/web-dev.webp" alt="" />
                  <h3>Advance Web Development</h3>
                  <p>We assist our clients to turn their online presence into a profitable entity by developing a responsive website with emerging technologies and development practices that create a beautiful brand experience. </p>
               </div>
            </div>
            <div class="col-sm-3 col-xs-12 block" data-move-y="200px" data-move-x="-100px">
               <div class="expert_box mobile_dev">
                  <img src="images/mobile-app.webp" alt="" />
                  <h3>Mobile App Development</h3>
                  <p>Our mobile applications cater to the needs of both individual customers and enterprises functioning in multi-platforms (iOS and Android) that makes them stand out in the market and increases productivity.</p>
               </div>
            </div>
            <div class="col-sm-3 col-xs-12 block" data-move-y="200px" data-move-x="200px">
               <div class="expert_box software">
                  <img src="images/software-dev.webp" alt="" />
                  <h3>Software Development</h3>
                  <p>Our adept software developers allow the clients to leverage the power of custom software development solutions that complements their unique business environment and accelerate growth.</p>
               </div>
            </div>
            <div class="col-sm-3 col-xs-12 block" data-move-y="200px" data-move-x="100px">
               <div class="expert_box consultant">
                  <img src="images/it-consulting.webp" alt="" />
                  <h3>Digital Marketing</h3>
                  <p>The Best SEO Services to Increase Your Online Visibility, and Conversions. Standing out in Google is no easy feat, it requires lots of efforts and strategies. But with Nettechnocrats, we will make it happen.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section_team">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="text-center team_heading">
               <h1 class="heading"> Nettechnocrats Nurtures your business online with quality, dedication and flexibility to reduce your technical expenses.</h1>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="top_rated_sec">
            <div class="col-xs-12 col-sm-8">
               <div class="rated_bg">
                  <h3 class="head_1">Our meticulous planning, in-depth knowledge, honest advice and proven track-records ensure that the clients will get a suite of tailored services that will help them to attain their business objectives.</h3>
                  <h3>The Most Promising Mobile Apps Solution Providers Globally.</h3>
                  <div class="whatech">
                     <img src="images/whatech.webp"> <span>2018</span>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-4">
               <div class="nettech"><img src="images/nett.webp" alt=""></div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="top_rated_works">
            <div class="col-sm-3 col-md-3">
               <div class="best_work">
                  <img src="images/top-rated-icon.webp" alt="">
                  <h4>Top Python <br>Development Company</h4>
                  <div class="whatech2">
                     <img src="images/extract.webp" alt=""> <span style="padding-left: 8px;">2018</span>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 col-md-3">
               <div class="best_work">
                  <img src="images/top-rated-icon.webp" alt="">
                  <h4>Best SEO <br>Companies In USA</h4>
                  <div class="whatech2">
                     <img src="images/good_firms.webp" alt=""> <span>2018</span>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 col-md-3">
               <div class="best_work">
                  <img src="images/top-rated-icon.webp" alt="">
                  <h4>Top Rated <br>On Upwork Since 2015</h4>
                  <div class="whatech2">
                     <img src="images/up_work.webp" alt=""> <span>2015</span>
                  </div>
               </div>
            </div>
            <div class="col-sm-3 col-md-3">
               <div class="best_work">
                  <img src="images/top-rated-icon.webp" alt="">
                  <h4>Top Mobile App <br>Development Company</h4>
                  <div class="whatech2">
                     <img src="images/app_futura.webp" alt=""> <span>2018</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="team_project">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="text-center">
               <h1 class="heading">Perfect solution for our clients is pursuit of happiness for Nettechnocrats. </h1>
               <h4>Small, Medium & Big enterprises have chosen <font>Nettechnocrats</font> from across 50+ countries to achieve their goals</h4>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xs-12">
            <ul class="client_info list-inline">
               <li class="block" data-rotate-y="180deg" data-move-z="-200px" data-move-x="-300px">
                  <h4>7+</h4>
                  <h2>years in business</h2>
               </li>
               <li class="block" data-rotate-x="180deg" data-rotate-y="180deg" data-move-z="-700px">
                  <h4>aws</h4>
                  <h2>CONSULTING PARTNER</h2>
               </li>
               <li class="block" data-rotate-x="180deg" data-rotate-y="45deg" data-move-z="-500px">
                  <h4>2500+</h4>
                  <h2>PROJECTS DELIVERED</h2>
               </li>
               <li class="block" data-rotate-y="180deg" data-move-z="-100px" data-move-x="500px">
                  <h4>ISO </h4>
                  <h2>Certified</h2>
               </li>
               <li class="block" data-rotate-y="180deg" data-move-z="-50px" data-move-x="700px">
                  <h4>150+</h4>
                  <h2>FULL-TIME EMPLOYEES</h2>
               </li>
            </ul>
         </div>
      </div>
      <div class="row ">
         <div class="col-xs-12">
            <div class="light_gray">
               <ul class="">
                  <li><img src="images/icon3.webp">
                     <span>Our Value Proposition is that we are solution providers
                     </span>
                  </li>
                  <li><img src="images/icon1.webp">
                     <span> We have dedicated Project Managers to coordinate with clients
                     </span>
                  </li>
                  <li><img src="images/icon5.webp">
                     <span>Global Footprints which makes us reliable outsourcing partners
                     </span>
                  </li>
               </ul>
               <ul>
                  <li><img src="images/icon2.webp">
                     <span>Content Management team who adds glory to projects
                     </span>
                  </li>
                  <li><img src="images/icon4.webp">
                     <span>Futuristic approach of Graphic Designers helps us attain compliment everytime
                     </span>
                  </li>
                  <li><img src="images/icon6.webp">
                     <span>Free Consultation to make you decisive about your business opportunities
                     </span>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="indus_div " id="industries">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="text-center">
               <h1 class="heading"> We're web solution providers with speedy turn around times and high ROI & KPI's. </h1>
               <h4>Team comprises of explicit experience and with consistent developments the staff has evolved themselves to work in almost every industry. Below are the graphical representations of our recently worked Applications.</h4>
            </div>
         </div>
      </div>
      <div class="row top_margin1">
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="">
                  <h4>Automotive</h4>
                  <img src="images/automotive.webp" alt="">
               </a>
            </div>
         </div>
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="/real-state.php">
                  <img src="images/realesta.webp" alt="">
                  <h4>Real Estate</h4>
               </a>
            </div>
         </div>
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="/media-advertisement.php">
                  <h4>Media and Entertainment</h4>
                  <img src="images/madia.webp" alt="">
               </a>
            </div>
         </div>
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="/retailer-wholeseller.php">
                  <img src="images/retails.webp" alt="">
                  <h4>Retail and Ecommerce</h4>
               </a>
            </div>
         </div>
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="/medical-healthcare.php">
                  <h4>Healthcare</h4>
                  <img src="images/health.webp" alt="">
               </a>
            </div>
         </div>
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="#">
                  <img src="images/logistics.webp" alt="">
                  <h4>Logistics and<br>
                     Transportation
                  </h4>
               </a>
            </div>
         </div>
      </div>
      <div class="row bottom_div1">
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="#">
                  <h4>Manufacturing</h4>
                  <img src="images/manufact.webp" alt="">
               </a>
            </div>
         </div>
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="/tour-travel.php">
                  <img src="images/travel.webp" alt="">
                  <h4>Travel and Tourism</h4>
               </a>
            </div>
         </div>
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="#">
                  <h4>Professional Services</h4>
                  <img src="images/professional.webp" alt="">
               </a>
            </div>
         </div>
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="#">
                  <img src="images/indepen.webp" alt="">
                  <h4>Independent Software Vendors</h4>
               </a>
            </div>
         </div>
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="/finance-banking.php">
                  <h4>Banking and Finance</h4>
                  <img src="images/banking.webp" alt="">
               </a>
            </div>
         </div>
         <div class="col-sm-3 col-md-2">
            <div class="industries-text">
               <a href="/education-portal.php">
                  <img src="images/education.webp" alt="">
                  <h4>Education and E-Learning</h4>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="" id="news">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="text-center">
               <h1 class="heading"> Let's put your dreams first!</h1>
               <h4 class="believe">We believe in miracles <i class="fa fa-smile-o" aria-hidden="true"></i></h4>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-7 col-sm-6 col-xs-12">
            <div class="news_div">
               <h2 class="heading2">News</h2>
               <p>Why customers in more than 15+ countries <br> choose Nettechnocrats?</p>
               <div class="news_details">
                  <?php
                  $sql = "select p.post_title,p.post_name,p.post_content,p.post_date,img.guid from wp_posts p join wp_postmeta meta on p.id=meta.post_id join wp_posts img on img.ID=meta.meta_value where p.post_type='post' && p.post_status='publish' && meta.meta_key='_thumbnail_id' ORDER BY p.id DESC LIMIT 0,2";
                  $result = mysqli_query($conn, $sql);
                  while ($res = mysqli_fetch_array($result)) {
                     $img_arr = utf8_encode($res['guid']);
                     //echo $img_arr = explode('.', utf8_encode($blog['guid']));
                     //$blog_img = $img_arr[0].'.'.$img_arr[1].'.'.$img_arr[2].'-150x150.'.$img_arr[3];
                  ?>
                     <div class="bottom_bottom">
                        <div class="news_img">
                           <img src="<?php echo $img_arr; ?>">
                        </div>
                        <div class="news_text">
                           <div class="pull-left">
                              <a href="https://www.nettechnocrats.com/blog/<?php echo $res['post_name']; ?>">
                                 <h2>
                                    <?php echo utf8_encode($res['post_title']); ?>
                              </a>
                           </div>
                           <div class="pull-right">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                           </div>
                           <p> <?php $Length = $res['post_content'];
                                 echo substr(utf8_encode($res['post_content']), 0, 173); ?>......</p>
                           <div class="pull-left">
                              <span>Hits: <font>200</font> Votes: <font>110 </font> Added:
                                 <font><?php echo date('d-m-Y', strtotime($res['post_date'])) ?></font>
                              </span>
                           </div>
                           <div class="pull-right">
                              <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.nettechnocrats.com/blog/<?php echo $res['post_name']; ?>">
                                 <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                              <a href="https://twitter.com/home?status=https://www.nettechnocrats.com/blog/<?php echo $res['post_name']; ?>">
                                 <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                              <a href="https://www.linkedin.com/cws/share?url=https://www.nettechnocrats.com/blog/<?php echo $res['post_name']; ?>">
                                 <i class="fa fa-linkedin" aria-hidden="true"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  <?php } ?>
               </div>
            </div>
         </div>
         <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="news_div news_div1">
               <h2 class="heading2">TESTIMONIALS</h2>
               <p>WHAT OUR CLIENTS SAY?</p>
               <div class="owl-carousel11 owl-theme testi1">
                  <div class="item">
                     <ul class="testimonial">
                        <li>
                           <p class="more">A very professional team with excellent communication and work on time. They have helped me identify errors on website that could potentially be harmful to site. One of the best things about Nettechnocrats is that they go the extra mile. This is the 3rd time i have hired them and look forward to working with them</p>
                           <div class="pull-left">
                              <h6> <i class="fa fa-user" aria-hidden="true"></i> Sean Casto</h6>
                           </div>
                           <div class="pull-right">
                              <h5>CEO - Preapps</h5>
                           </div>
                        </li>
                        <li>
                           <p class="more">Faraz and team Nettechnocrats are hard working, honest, skilled professionals. I appreciate all the progress made in our mobile app</p>
                           <div class="pull-left">
                              <h6> <i class="fa fa-user" aria-hidden="true"></i> Ken</h6>
                           </div>
                           <div class="pull-right">
                              <h5>CEO</h5>
                           </div>
                        </li>
                        <li>
                           <p class="more">highly recommended specialist to work with! Always open to cooperation and ready to help in any case! Excellent job</p>
                           <div class="pull-left">
                              <h6> <i class="fa fa-user" aria-hidden="true"></i> Vahram</h6>
                           </div>
                           <div class="pull-right">
                              <h5>Founder - Zangi</h5>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="item">
                     <ul class="testimonial">
                        <li>
                           <p class="more">Firstly congratulation on producing a really super website for us, we look forward to forward work with you and thank you for your efforts in getting it live as well</p>
                           <div class="pull-left">
                              <h6> <i class="fa fa-user" aria-hidden="true"></i>Victoria </h6>
                           </div>
                           <div class="pull-right">
                              <h5>Managing Director - Affairs Group</h5>
                           </div>
                        </li>
                        <li>
                           <p class="more">Thank you very much for working with me under less than ideal circumstances. I very much like the website and find its use to be elegant, simple, and practical. In other words, the three main elements that I wanted in the first place. Its been a pleasure to work with you and in the future I hope I can contact you again to further build the website with things like a product offering page where people can buy a product that I am in the process of developing. I wish you all the best</p>
                           <div class="pull-left">
                              <h6> <i class="fa fa-user" aria-hidden="true"></i> Addison </h6>
                           </div>
                           <div class="pull-right">
                              <h5>Founder - Moonshot Nutrition </h5>
                           </div>
                        </li>
                        <li>
                           <p class="more">I approached several potential resources, scoping out the mission, and found that Nettechnocrats’s connection, eagerness, and passion was best. They deliver what we ask for and listen to our feedback. They know what they’re doing</p>
                           <div class="pull-left">
                              <h6> <i class="fa fa-user" aria-hidden="true"></i>Luis Gonzalez </h6>
                           </div>
                           <div class="pull-right">
                              <h5>Founder - Luigi Plumber</h5>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-5 col-xs-12">
            <div class="our_partners">
               <h3>Our Partners</h3>
               <div class="partnerd_logo">
                  <img src="images/amazon.webp">
                  <img src="images/paypal.webp">
               </div>
            </div>
         </div>
         <div class="col-md-7 col-xs-12 padding1">
            <div class="our_partners">
               <h3> our certification</h3>
               <div class="owl-carousel1 owl-theme certification_logo">
                  <div class="item">
                     <img src="images/googleadw.webp">
                  </div>
                  <div class="item">
                     <img src="images/certified.webp">
                  </div>
                  <div class="item">
                     <img src="images/pci.webp">
                  </div>
                  <div class="item">
                     <img src="images/certi.webp">
                  </div>
                  <div class="item">
                     <img src="images/certi2.webp">
                  </div>
                  <div class="item">
                     <img src="images/certi3.webp">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="blue_bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="experience">
               <h2>Experience</h2>
               <h5>in the industry 7 Years+</h5>
            </div>
            <ul class="address_div">
               <li>
                  <img src="images/buss.webp">
                  <span>
                     <h4>VISIT OFFICE</h4>
                     <h6>H-183, Sec-63, Noida,<br>Delhi (NCR) India</h6>
                  </span>
               </li>
               <li>
                  <img src="images/calling.webp">
                  <span>
                     <h4>CALL US</h4>
                     <h6>Sales: <a href="callto:+1 (918) 514-3211">+1 (918) 514-3211</a><br>
                        HR: <a href="callto:0120-4290824">0120-4137259</a>
                     </h6>
                  </span>
               </li>
               <li>
                  <img src="images/email.webp">
                  <span>
                     <h4>SEND MESSAGE</h4>
                     <h6>Sales: <a href="mailto:info@nettechnocrats.com">sales@nettechnocrats.com </a><br>
                        HR : <a href="mailto:info@nettechnocrats.com">hr@nettechnocrats.com </a>
                     </h6>
                  </span>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<?php include 'include/footer.php'; ?>