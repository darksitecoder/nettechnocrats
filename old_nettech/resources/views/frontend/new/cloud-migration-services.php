<?php include 'include/header.php'; ?>
	<section class="cd-section visible">        	
     <!-- START HOMEPAGE DESIGN AREA -->
        <div id="home" class="welcome-area site-header">     
            <div class="welcome-image-area seobg cloud-banner" data-stellar-background-ratio="0.6">
			<div class="row">
				<div class="col-md-12">
                 <div class="banner_text">
                    <h2>Cloud Migration Services</h2>
                    </h2>
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
    <section class="seoapp">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="getstated_div">
                        <a href="portfolio.php">view our portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="seocontent cloud">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="app_heading seo1">
                    	<h1>Cloud Migration Services</h1>     
<p>Make a confidence move to the cloud with Nettechnocrats.</p>						
                    </div>
                    
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                    	<div class="aboutseo">
                        	<h1>Cloud Migration</h1>
                            <p>With cloud migration services, you can easily migrate your workloads from strategy to execution with zero business disruption. Our migration services help you to do all this with less risk and cost.</p>
                        </div>
                    </div>
                    
                     <div class="col-lg-4 col-sm-6 col-xs-12">
                    	<div class="aboutseo">
                        	<h1>Infrastructure Migration</h1>
                            <p>Whether you're relocating to a new office for downsizing or up-sizing, migrating to a better data operator center, or even moving your entire operation out of the country.</p>
                        </div>
                    </div>
                    
                     <div class="col-lg-4 col-sm-6 col-xs-12">
                    	<div class="aboutseo">
                        	<h1>Data Migration</h1>
                            <p>Your data migration to the cloud needs a careful planning and preparation. From discovery to ongoing management, we help our clients by offering end-to-end cloud migration services.</p>
                        </div>
                    </div>
                    
                     <div class="col-lg-4 col-sm-6 col-xs-12">
                    	<div class="aboutseo">
                        	<h1>Platform Migration</h1>
                            <p>Having good hands-on experience in developing and migrating applications on several leading platforms, we help you to understand and make better use of the options available across cloud.</p>
                        </div>
                    </div>
                    
                     <div class="col-lg-4 col-sm-6 col-xs-12">
                    	<div class="aboutseo">
                        	<h1>Application Migration</h1>
                            <p>Most of the firms have a keen interest to get out of the data center business to cut their costs. We provide the fastest and cost-effective way to migrate your application platforms to the cloud.</p>
                        </div>
                    </div>
                    
                  <!--   <div class="col-lg-4 col-sm-6 col-xs-12">
                    	<div class="aboutseo">
                        	<h1>Optimized Content</h1>
                            <p>Our team of content writers possess experience to give your business zenith heights of success through unique content</p>
                        </div>
                    </div> -->
                 </div>   
            </div>
        </div>
    </section>
    
    
    <section class="whychooseus cloud-why">
    	<div class="leftimg seoimg">
        	<img src="https://s3.us-east-2.amazonaws.com/nettech-images/Cloud-migration.jpg" alt="image">
        </div>
    	<div class="container">
        	<div class="row">
            	<div class="col-md-8 col-md-offset-4">
                	<div class="whychoose_div wordpresschoose">
                    	<h1>WHY CHOOSE US?</h1>
                        
                    
                        <div class="price">
                            <h1>Tailor-made cloud management</h1>
                            <p>We don’t just migrate and leave. Once successfully transferred, we can set up a tailor-made support agreement for regular upgrades and maintenance to your specific cloud services. </p>                               
                    	</div>
                        
                        <div class="price">
                            <h1>Fine tuning for cloud: testing</h1>
                            <p>Testing application quality is high priority in a cloud domain. With different levels of services and different performance attributes, we put your apps through stringent testing to improve performance.</p>                               
                    	</div>
                        <div class="price">
                            <h1>Deep technical skills</h1>
                            <p>Our developers have knowledge of many different technologies. This puts us in a unique position to deep dive into your cloud services to maintain interactions with other systems.</p>                               
                    	</div>
                        <div class="price">
                            <h1>Security and compliance</h1>
                            <p>Not all apps belong in the cloud. We work with you to ensure that whatever path you choose, compliance with your industry regulation and governance standards are not compromised.</p>                     
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
                    	<h1>local-seo Services cycle</h1>
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
                    	<h1>About Us - local-seo Services</h1>
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