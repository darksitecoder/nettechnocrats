<?php include 'include/header.php'; ?>
    <section class="cd-section visible">
            <!-- START HOMEPAGE DESIGN AREA -->
                <div id="home" class="welcome-area site-header">     
                    <div class="welcome-image-area seobanner ui-banner" data-stellar-background-ratio="0.6">
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="banner_text about_banner">
                                    <h1>Let's make your website stand out</h1>
                                  </div>
                                   <div class="contact-section-home">
                                    <ul>
                                        <li class="phone"><a href="#" data-toggle="modal" data-target="#myModal" ><span><i class="fa fa-phone" aria-hidden="true"></i></span>CALL</a></li>
                                        <li class="req"><a href="#" data-toggle="modal" data-target="#myModal1" onclick="OpenREQ();" ><span><i class="fa fa-file-text-o" aria-hidden="true"></i></span>RFQ</a></li>
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
                            <a href="#"><span>Call Now: </span>+1.973.459.4971</a>
                            <a href="#"><span></span>+91.120.413.7259</a>
                            <form id="callform">
                                <div class="com-md-4 col-sm-4 col-xs-12">
                                <input type="text" name="code" id="code" placeholder="+1" onkeypress="HideErrmsg('nameErr');" >
                                <span id="codeErr"></span>
                            </div>
                            <div class="com-md-8 col-sm-8 col-xs-12">
                                <input type="text" name="phoneno" id="phoneno" placeholder="Phone No." onkeypress="HideErrmsg('nameErr');" >
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
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
         <input type="text" name="rcode" id="rcode" placeholder="+1" onkeypress="HideErrmsg('rcodeErr');" >
         <span id="rcodeErr"></span>
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12">
         <input type="text" name="rphoneno" id="rphoneno" placeholder="Phone No." onkeypress="HideErrmsg('rphonenoErr');" >
         <span id="rphonenoErr"></span>
      </div>
      <textarea row="3" placeholder="Message" name="rmessage" id="rmessage"></textarea>
      <input type="text" name="vcapcha" id="vcapcha" style="width: 50%;" readonly="readonly" oncopy="return false" onpaste="return false" >
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
    <section class="android_app ui-app">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="getstated_div">
                        <p>Make Customize Website Designs With A Sharp & Professional Touch For Your Business Growth!</p>
                        <a href="portfolio.php">view our portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popularity ui-development">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="app_heading popular">
                        <h2>Custom Web Design Services</h2>
                        <span>
                          A fully interactive and responsive website design is capable of developing brand identity for a business. If you want to offer interactive web experience to the users, the website is designed with the user’s point of view. The online success for any business can be brought through its website, when it is designed with use of best practices and technologies along with the interactive features which bring more targeted audience. A professional, creative and highly featured web design service gives a way to venture the business.
                        </span>
						<h2>Our features that we offer our clients for web design services:</h2>
						<ul>
						<li>Platform variety</li>
						<li>Compatible and responsive Website Design </li>
						<li>SEO Friendly Website Design</li>
						<li>Web Banner Design</li>
						<li>Flash Design</li>
						<li>Graphics Design</li>
						</ul>

                        <span>
                           The user centric design philosophy in all terms is the key for us to enhance your business through our web designs. Our designing sets and understands your business goals to design custom and high performance websites. Based in India, we have a team of experts, who use their design skills and enriched technical experience to offer you the best possible return for your investment. We create user friendly, easy to navigate and highly featured websites.  
                        </span>
                        <span>
                           We can give your company site a new and professional appearance with our impeccable ideas. As a web designing agency in India, we also offer you to have a unique and outstanding online experience through our best search engine practices. 
                        </span>
						<h2>Our Specific Techniques</h2>
					<span>We utilize advanced responsive design methods and techniques  </span>
						<h2>We Want to Become Your Long-Term Partner </h2>
						<span>We have worked with almost every type of major industries of the world, from small E-commerce websites to huge enterprises. We want to build long-term relationships with our clients. But, don’t </span>
                        
                    </div>                    
                </div>
            </div>
            <div class="row">
            <div class="ui-wrap">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="ui-image">
                        <img src="https://s3.us-east-2.amazonaws.com/nettech-images/ui8.jpg" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 ">
                    <div class="ui-image">
                        <img src="https://s3.us-east-2.amazonaws.com/nettech-images/ui7.jpg" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="ui-image">
                        <img src="https://s3.us-east-2.amazonaws.com/nettech-images/ui6.jpg" class="img-responsive" alt="" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="ui-image">
                        <img src="https://s3.us-east-2.amazonaws.com/nettech-images/ui5.jpg" class="img-responsive" alt="" />
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="whychooseus ui-choose">
        <div class="leftimg">
            <img src="https://s3.us-east-2.amazonaws.com/nettech-images/ui-left.jpg" class="img-responsive" alt="image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div class="whychoose_div">
                        <h1>Why Choose Our Web Designing Company?</h1>
                        <p>
                          Here are some reasons why you have made the best decision for your company by choosing us.
                        </p>
                        <div class="price">
                            <h1>Highly Responsive layouts</h1>
                            <p>
                                We provide a responsive website with smart enough architecture, making it easily compatible to run on multiple devices.
                            </p>                               
                        </div>
                        
                        <div class="price">
                            <h1>User Friendly designs</h1>
                            <p>
                                With a strong focus on custom and user-friendly experience, we develop an intuitive web application that influences the growth of clients' business.
                            </p>                               
                        </div>
                        <div class="price">
                            <h1>Search Engine Friendly coding</h1>
                            <p>
                                SEO has become the key in augmenting the reachability of a website, thus all our web design services are search engine friendly.
                            </p>                               
                        </div>
                        <div class="price">
                            <h1>Dedicated support</h1>
                            <p>
                                In order to serve clients efficiently and get everything right, we provide complete dedicated support even after the successful launch of the website.
                            </p>                               
                        </div>
                        
                        <div class="price">
                            <h1>Valid quality code</h1>
                            <p>
                                All our codes go through an automated code review software to ensure that it meets all accepted best practices.
                            </p>                               
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- <section class="androidcycle uicycle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="app_heading">
                        <h1>ui ux development cycle</h1>
                        <p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="developmentcycle">
                            <h2>Cum sociis penatibus et?</h2>
                            <span>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </span>
                            <ul class="list-inline">
                                <li>Aenean commodo ligula eget dolor.</li>
                                <li>Cum sociis natoque penatibus et magnis dis parturient montes.</li>
                                <li>Nascetur ridiculus mus.</li>
                                <li>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</li>
                                <li>Nulla consequat massa quis enim.</li>
                                <li>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</li>
                                
                            </ul>
                        </div>
                    </div>  
                </div>
                
                 <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="right_img">
                            <img src="images/appcircle.png" alt="image">
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </section> -->
    
     <!-- <section class="popularity">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="app_heading popular">
                        <h1>ui ux development Popularity</h1>
                        <p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis </p>
                        <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</span>
                    </div>
                    
                    <div class="popul_div">
                        <h3>Cum sociis penatibus et?</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.</p>
                    </div>
                    <ul class="list-inline">
                        <li>Aenean commodo ligula eget dolor.</li>
                        <li>Cum sociis natoque penatibus et magnis dis parturient montes.</li>
                        <li>Nascetur ridiculus mus.</li>
                        <li>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
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
                  <h4>8+</h4>
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
               <h5>in the industry 8 Years+</h5>
            </div>
            <ul class="address_div">
               <li>
                  <img src="https://s3.us-east-2.amazonaws.com/nettech-images/buss.png">
                  <span>
                     <h4>VISIT OFFICE</h4>
                     <h6>H-183, Sec-63, Noida,<br>Delhi (NCR) India</h6>
                  </span>
               </li>
               <li>
                  <img src="https://s3.us-east-2.amazonaws.com/nettech-images/calling.png">
                  <span>
                     <h4>CALL US</h4>
                     <h6>Sales: <a href="callto:+1 (973) 459-4971">+1 (973) 459-4971</a><br>
                        HR: <a href="callto:0120-4290824">0120-4137259</a>
                     </h6>
                  </span>
               </li>
               <li>
                  <img src="https://s3.us-east-2.amazonaws.com/nettech-images/email.png">
                  <span>
                     <h4>SEND MESSAGE</h4>
                     <h6>Sales:  <a href="mailto:info@nettechnocrats.com">sales@nettechnocrats.com </a><br>
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
    
     