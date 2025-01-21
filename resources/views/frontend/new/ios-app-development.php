<?php include 'include/header.php'; ?>
<section class="cd-section visible">

    <!-- START HOMEPAGE DESIGN AREA -->
    <div id="home" class="welcome-area site-header">
        <div class="welcome-image-area ipnone" data-stellar-background-ratio="0.6">
            <div class="banner_text ">
                <h2><span>iPhone Apps </span> Development</h2>
                </h2>
            </div>
            <div class="contact-section-home">
                <ul>
                    <li class="phone"><a href="#" data-toggle="modal" data-target="#myModal"><span><i class="fa fa-phone" aria-hidden="true"></i></span>CALL</a></li>
                    <li class="req"><a href="#" data-toggle="modal" data-target="#myModal1" onclick="OpenREQ();"><span><i class="fa fa-file-text-o" aria-hidden="true"></i></span>RFQ</a></li>
                </ul>
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
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <input type="text" name="rcode" id="rcode" placeholder="+1" onkeypress="HideErrmsg('rcodeErr');">
                                <span id="rcodeErr"></span>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <input type="text" name="rphoneno" id="rphoneno" placeholder="Phone No." onkeypress="HideErrmsg('rphonenoErr');">
                                <span id="rphonenoErr"></span>
                            </div>
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
<section class="iphoneapp">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="getstated_div">
                    <p>When it comes to high-performance feature-packed iOS mobile experiences, there is no better choice than Nettechnocrats. </p>
                    <a href="portfolio.php">view our portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="appdevelopment">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="app_heading iphone">
                    <h1>IPHONE APPLICATION DEVELOPMENT SERVICES</h1>
                    <p>Nettechnocrats designs and develops high-quality iPhone and iOS applications that reflect your brand's mission and caters to the specific demand of your end-users. Get tailor made iOS and iPhone Applications for your business to utilize all resources in the best possible way. </p>
                </div>


                <div class="col-md-4 col-xs-12">
                    <div class="row iphonebox">
                        <div class="first_box">
                            <h2>IPHONE GAME DEVELOPMENT</h2>
                            <p>In sync to Apple guidelines, we ensure you to provide the best iPhone game development services that contain an excellent user experience built from scratch.
                            </p>
                        </div>
                        <div class="first_box">
                            <h2>ONLINE BOOKING APPS</h2>
                            <p>We can provide our clients an excellent service in developing intuitive booking applications built specifically for respective businesses. </p>
                        </div>

                        <div class="first_box">
                            <h2>SOCIAL/CHAT APPS</h2>
                            <p>Having ample experience in developing social apps, we promise to deliver a right and advanced social and chat applications running on iPhone platforms.</p>
                        </div>

                        <div class="first_box">
                            <h2>FINANCIAL & E-COMMERCE MOBILE APPLICATION</h2>
                            <p>We assist our clients to quickly get up and running with their E-commerce mobile apps by customizing it to meet all their special demands. </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="row">
                        <div class="middleimg">
                            <img src="https://s3.us-east-2.amazonaws.com/nettech-images/iphonemobile.webp" alt="image">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <div class="row iphonebox">
                        <div class="first_box">
                            <h2>IPOD/IPAD MUSIC APPLICATION</h2>
                            <p>Experience a completely new way of enjoying music with our precisely designed iPhone, iPad, and iPod compatible music applications.</p>
                        </div>
                        <div class="first_box">
                            <h2>EDUCATION APPLICATION DEVELOPMENT</h2>
                            <p>We also excel in the field of developing education applications for almost all iOS/iPhone platforms ensuring better learning experience.</p>
                        </div>
                        <div class="first_box">
                            <h2>APPLICATION SOCIAL MEDIA INTEGRATION</h2>
                            <p>We are expert in delivering a range of integrated social media apps that help our clients in getting the desired social presence that they aim to achieve with their business.</p>
                        </div>
                        <div class="first_box">
                            <h2>TRAVEL APPLICATION</h2>
                            <p>It's now easier to make and manage travel plans with all travel based requirements and widen gateway with our travel application development services. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="whychooseus">
    <div class="leftimg">
        <img src="https://s3.us-east-2.amazonaws.com/nettech-images/ipnonesideimg.jpg" alt="image">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="whychoose_div iphonechoose">
                    <h1>WHY CHOOSE US?</h1>
                    <p>Our unique approach to iOS app development has made us the preferred choice of our clients. </p>

                    <div class="price">
                        <h1>Custom Agile Process</h1>
                        <p>Our iPhone/iOS development process is completed through a custom agile process that minimizes risk, maximizes your speed and also help in business transparency. </p>
                    </div>

                    <div class="price">
                        <h1>Proficient iOS developers</h1>
                        <p>Our team of iOS developers take your idea and transform it into a feature filled iPhone solution with customized features. </p>
                    </div>
                    <div class="price">
                        <h1>End-to-end service</h1>
                        <p>Our iOS development services include right from consulting and product strategy, to UX/UI development testing, development to deployment.</p>
                    </div>
                    <div class="price">
                        <h1>Maintenance & Support</h1>
                        <p>We provide maintenance and support services post-deployment that help you to be on the top of iOS platform updates and upgrades.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- <section class="androidcycle iphonedeve">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="app_heading">
                    	<h1><font>IPHONE APPLICATION DEVELOPMENT </font> cycle</h1>
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
                        	<img src="images/appcircle.webp" alt="image">
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
                    	<h1>IPHONE APPLICATION DEVELOPMENT Popularity</h1>
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
                        <img src="https://s3.us-east-2.amazonaws.com/nettech-images/buss.webp">
                        <span>
                            <h4>VISIT OFFICE</h4>
                            <h6>H-183, Sec-63, Noida,<br>Delhi (NCR) India</h6>
                        </span>
                    </li>
                    <li>
                        <img src="https://s3.us-east-2.amazonaws.com/nettech-images/calling.webp">
                        <span>
                            <h4>CALL US</h4>
                            <h6>Sales: <a href="callto:+1 (973) 459-4971">+1 (973) 459-4971</a><br>
                                HR: <a href="callto:0120-4290824">0120-4137259</a>
                            </h6>
                        </span>
                    </li>
                    <li>
                        <img src="https://s3.us-east-2.amazonaws.com/nettech-images/email.webp">
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