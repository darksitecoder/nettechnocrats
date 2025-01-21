<?php include 'include/header.php'; ?>
<!--<section class="cd-section visible">   
  
  <div id="home" class="welcome-area site-header">
    <div class="welcome-image-area  career" data-stellar-background-ratio="0.6">      
    </div>
  </div>
</section> -->

<!-- START HOMEPAGE DESIGN AREA -->
<section class="cd-section visible">
  <!-- START HOMEPAGE DESIGN AREA -->
  <div id="home" class="welcome-area site-header">
    <div class="welcome-image-area seobanner ui-banner" data-stellar-background-ratio="0.6">
      <div class="row">
        <div class="col-md-12">
          <div class="banner_text about_banner">
            <h1>Let's make our career</h1>
          </div>
          <div class="contact-section-home">
            <ul>

              <li class="req"><a href="#" data-toggle="modal" data-target="#myModal1" onclick="OpenREQ();"><span><i class="fa fa-file-text-o" aria-hidden="true"></i></span>RFQ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

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
            <a href="#"><span>Call Now: </span>0120-4137259</a>
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

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->
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

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
  </div><!-- modal -->
</div>
<section class="career-contain">
  <div class="container">
    <!-- <div class="row">
    <div class="col-md-12">
    	<h1>We Love Our People</h1>
     </div>           
    </div>   
    <div class="row">
      <div class="col-sm-4">
        <div class="y-video y-video-bottom">
          <iframe src="https://www.youtube.com/embed/bs2U0LehmG0" frameborder="0" allowfullscreen=""></iframe>
          <div class="carrer-text">
          <h5>Our first guest Amol</h5>
          <h6>Web Developer</h6>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="y-video y-video-bottom">
          <iframe src="https://www.youtube.com/embed/bs2U0LehmG0" frameborder="0" allowfullscreen=""></iframe>
           <div class="carrer-text">
          <h5>Our Interns</h5>
          <h6>Founder, The Story LLC</h6>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="y-video y-video-bottom">
          <iframe src="https://www.youtube.com/embed/bs2U0LehmG0" frameborder="0" allowfullscreen=""></iframe>
           <div class="carrer-text">
          <h5>Our Parents</h5>
          <h6>Web Designer</h6>
          </div>
        </div>
      </div>
      
    </div>      -->

    <div class="row">
      <div class="col-md-12">
        <h1>Latest jobs</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <ul class="list-inline carrer-list">
          <li>
            <div class="career-head">
              <h5>Android Developers</h5>
            </div>
            <div class="career-detail">
              <h6>Noida</h6>
              <p>1-4 Years expr</p>
              <div class="join_team"> <a href="/contact.php">Contact Us</a> </div>
            </div>
          </li>

          <li>
            <div class="career-head">
              <h5>Blockchain Developer</h5>
            </div>
            <div class="career-detail">
              <h6>Noida</h6>
              <p>1-4 Years expr</p>
              <div class="join_team"> <a href="/contact.php">Contact Us</a> </div>
            </div>
          </li>

          <li>
            <div class="career-head">
              <h5>Python Developers</h5>
            </div>
            <div class="career-detail">
              <h6>Noida</h6>
              <p>1-4 Years expr</p>
              <div class="join_team"> <a href="/contact.php">Contact Us</a> </div>
            </div>
          </li>

          <li>
            <div class="career-head">
              <h5>Angular JS Developer</h5>
            </div>
            <div class="career-detail">
              <h6>Noida</h6>
              <p>1-5 Years expr</p>
              <div class="join_team"> <a href="/contact.php">Contact Us</a> </div>
            </div>
          </li>

          <li>
            <div class="career-head">
              <h5>PHP Developers</h5>
            </div>
            <div class="career-detail">
              <h6>Noida</h6>
              <p>1-3 Years expr</p>
              <div class="join_team"> <a href="/contact.php">Contact Us</a> </div>
            </div>
          </li>
        </ul>


      </div>
    </div>


  </div>
  </div>
</section>
<section class="culture">
  <div class="culture-left">
    <img src="images/career-left.jpg" alt="" />
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6">
        <div class="culture-text">
          <h3 class="head-con"> Our Culture</h3>
          <p> From B2B to B2E, IT provides multiple projects, which consist of websites and web apps for top brands, medium-level enterprises, and startups. </p>
          <p>There is a considerable amount we From B2B to B2E, IT provides multiple projects, which consist of websites and web apps for top brands, medium-level enterprises, and startups. There is a considerable amount we
          </p>

          <p>From B2B to B2E, IT provides multiple projects, which consist of websites and web apps for top brands, medium-level enterprises, and startups.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="career-join">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <h4 class="head-con">join us</h4>
        <p> READ THE REAL SUCCESS STORIES IN OUR CLIENT’S WORDS
        </p>
      </div>
      <div class="col-sm-5">
        <div class="text-center">
          <a href="/contact.php"><button type="submit" id="submit" name="submit" class="contact-submit">submit</button></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="client_info list-inline client1">
          <li>
            <h4>150+</h4>
            <h2>FULL-TIME EMPLOYEES</h2>
          </li>
          <li>
            <h4>AWS</h4>
            <h2>Consulting Partner.</h2>
          </li>
          <li>
            <h4>2500+</h4>
            <h2>PROJECTS DELIVERED</h2>
          </li>
          <li>
            <h4>ISO</h4>
            <h2>Certified</h2>
          </li>
          <li>
            <h4>7+</h4>
            <h2>YEARS IN BUSINESS</h2>
          </li>
        </ul>
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
              <h6>Sales: <a href="callto:+1 (786) 472-6045">+1 (786) 472-6045</a><br>
                HR: <a href="callto:0120-4137259">0120-4137259</a>
              </h6>
            </span>
          </li>
          <li>
            <img src="images/email.webp">
            <span>
              <h4>SEND MESSAGE</h4>
              <h6>Sales: <a href="mailto:sales@nettechnocrats.com">sales@nettechnocrats.com </a><br>
                HR : <a href="mailto:hr@nettechnocrats.com">hr@nettechnocrats.com </a>
              </h6>
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php include 'include/footer.php'; ?>