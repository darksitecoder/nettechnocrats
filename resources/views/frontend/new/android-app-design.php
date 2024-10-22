<?php include 'include/header.php' ?> 
	<section class="cd-section visible">
        	
            <!-- START HOMEPAGE DESIGN AREA -->
                <div id="home" class="welcome-area site-header web-devlp">     
                    <div class="welcome-image-area seobanner" data-stellar-background-ratio="0.6">
                     	<div class="banner_text">
                        	<h2><span>android</span>  app <br>Design  services</h2>
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
                            <a href="#"><span>Call Now: </span>+1.(786) 472-6045</a>
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
    <section class="android_app">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="getstated_div">
                    	<p>Increase your apps download with top-notch Android app design services</p>
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
                    	<h1><font>Android</font> App Design Services</h1>
                        <p>Being a reputed Android app design company in India, we are dedicated to providing solutions that deliver top-notch User Experience (UX) and is in consistent with your brand image and graphic style.</p>
                    </div>
                
                
                    <div class="col-md-4 col-xs-12">
                        <div class="row">
                            <div class="first_box">
                                <h2>App icon design</h2>
                                <p>A perfect icon is the first thing to invite people for downloading your app. We can help you design the perfect attractive icon for your mobile app that will clearly reflect your business/idea.</p>
                            </div>
                            <div class="first_box">
                                <h2>Mobile App Prototyping</h2>
                                <p>It is the process of developing prototypes that work as the base for developing new, better ideas for your app. Based on the unique ideas, we can design the best prototypes for your app. </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xs-12">
                        <div class="row">
                            <div class="middleimg app-design">
                            	<img src="https://s3.us-east-2.amazonaws.com/nettech-images/androidmiddle.png" alt="image">
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-xs-12">
                        <div class="row">
                             <div class="first_box">
                                <h2>Mobile User Experience (UX) Design</h2>
                                <p>To design a great app, it is very necessary that you understand your users. We study their behavior, where they come from and design accordingly. </p>
                            </div>
                            <div class="first_box">
                                <h2>Visual Design</h2>
                                <p>The design is much more than just good looks. Our experts combine the profound use of graphics, layouts, brand name and icons where every element is refined. </p>
                            </div>
                        </div>
                    </div>
                 </div>   
            </div>
        </div>
    </section>
    
    
    <section class="whychooseus">
    	<div class="leftimg">
        	<img src="https://s3.us-east-2.amazonaws.com/nettech-images/whychoose.png" alt="image">
        </div>
    	<div class="container">
        	<div class="row">
            	<div class="col-md-8 col-md-offset-4">
                	<div class="whychoose_div">
                    	<h1>WHY CHOOSE US?</h1>
                        <p>Backed by a dedicated team of mobile UI designers, we have worked on hundreds of apps so far and know the key to provide a great user experience.</p>
                    
                        <div class="price">
                            <h1>A-Team of Efficient Design Professionals</h1>
                            <p>Our talented designers and professionals have required skills set to match our client's expectation and get the maximum out of the latest technology.</p>                               
                    	</div>
                        
                        <div class="price">
                            <h1>Domain Proficiency</h1>
                            <p>Our practices combine the trusted methods with extensive domain knowledge that help us design stunning app designs and let you reap the benefits of a feature-packed app.</p>                               
                    	</div>
                        <div class="price">
                            <h1>Unique and Innovative Design Principles</h1>
                            <p>Having years of experience of creating unmatchable designs for mobile apps, we create responding and responsive designs at a reasonable price.</p>                               
                    	</div>
                        <div class="price">
                            <h1>Customized Services</h1>
                            <p>We consider usability as a top priority. There is no one size all approach with us hence we customize each solution as per client’s unique business need.</p>                               
                    	</div>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- <section class="androidcycle">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="app_heading">
                    	<h1><font>Android</font> App Development cycle</h1>
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
                    	<h1>Android App Development Popularity</h1>
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
                     <h6>Sales: <a href="callto:+1 (786) 472-6045">+1 (786) 472-6045</a><br>
                        HR: <a href="callto:0120-4137259">0120-4137259</a>
                     </h6>
                  </span>
               </li>
               <li>
                  <img src="https://s3.us-east-2.amazonaws.com/nettech-images/email.png">
                  <span>
                     <h4>SEND MESSAGE</h4>
                     <h6>Sales:  <a href="mailto:sales@nettechnocrats.com">sales@nettechnocrats.com </a><br>
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