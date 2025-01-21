<?php include 'include/header.php'; ?>
<section class="banner python">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="python_text">
                    <h3>We Don't Just Build IT Solutions<br>We Build Possibilities for You</h3>
                    <h5>A GLOBAL TECHNOLOGY PROVIDER OF<br>OUTSTANDING IT SOLUTIONS</h5>
                </div>
                <div class="contact-section-home">
                    <ul>
                        <li class="phone"><a href="#" data-toggle="modal" data-target="#myModal"><span><i class="fa fa-phone" aria-hidden="true"></i></span>CALL</a></li>
                        <li class="req"><a href="#" data-toggle="modal" data-target="#myModal1" onclick="OpenREQ();"><span><i class="fa fa-file-text-o" aria-hidden="true"></i></span>RFQ</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <div class="python_form">
                    <h3>WE ARE HERE TO HELP!</h3>
                    <p>Guaranteed response within 1 business day.<br>
                        No obligation quote</p>
                    <form>
                        <input type="text" name="" placeholder="Your Name">
                        <input type="email" name="" placeholder="Email">
                        <input type="text" name="" placeholder="Phone Number">
                        <textarea>Write your project details</textarea>
                        <div class="btn_border">
                            <input type="submit" name="" value="Submit">
                        </div>
                    </form>
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
<section id="paython1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1 class="python_heading">PhoneGap <font> Development Services</font>
                    </h1>

                    <h4>Create cross-platform mobile apps for <font>iOS and Android with PhoneGap</font>
                    </h4>
                    <p>Nettechnocrats help you navigate the entire project life-cycle with integrated tools for prototyping, testing, data services, data connectors, in-app feedback, app management, analytics and more. One of the simplest way to get started using PhoneGap. It is used to create apps, and serve those apps to connected mobile devices. Our developer provides an accessible environment for creating mobile apps. </p>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="paython1">
    <div class="container">

        <div class="row top_margin">
            <div class="col-md-4 col-xs-12">
                <div class="pytn_box first">
                    <h1>PhoneGap Desktop App</h1>
                    <img src="https://s3.us-east-2.amazonaws.com/nettech-images/paytn1.webp">
                    <h5>One of the simplest way to get started using PhoneGap. It is used to create apps, and serve those apps to connected mobile devices. Our developer provides an accessible environment for creating mobile apps. </h5>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="pytn_box sec">
                    <h1>PhoneGap Developer</h1>
                    <img src="https://s3.us-east-2.amazonaws.com/nettech-images/python-icon.webp">
                    <h5>We create developer mobile apps to offer you a quick view of your app that how it looks and works. Doing this provides a confidence to you that your app will work in the exact way as you wanted. </h5>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="pytn_box third">
                    <h1>PhoneGap Developer</h1>
                    <img src="https://s3.us-east-2.amazonaws.com/nettech-images/paythonicon3.webp">
                    <h5>We create developer mobile apps to offer you a quick view of your app that how it looks and works. Doing this provides a confidence to you that your app will work in the exact way as you wanted. </h5>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="pytn_box first">
                    <h1>PhoneGap Build</h1>
                    <img src="https://s3.us-east-2.amazonaws.com/nettech-images/paythonicon4.webp">
                    <h5>PhoneGap Build is a cloud service for compiling PhoneGap applications. These docs will get you started, but if your question isn't answered here you can always check out the community forum.</h5>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="pytn_box sec">
                    <h1>Plugin Library</h1>
                    <img src="https://s3.us-east-2.amazonaws.com/nettech-images/paythonicon9.webp">
                    <h5>The PhoneGap Builder includes a user-defined Plugin Library manager that allows the developer to use a plugin that is publicly available from GitHub, NPM or the PhoneGap Plugin Repository. </h5>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="pytn_box third">
                    <h1>Phonegap CMS Service</h1>
                    <img src="https://s3.us-east-2.amazonaws.com/nettech-images/paythonicon6.webp">
                    <h5>We integrate high-end CMS web solutions at an affordable cost in order to assure prolific growth for organizations.</h5>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="paython1" class="paython2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h2 class="python_heading">Why Choose Our Phonegap<font> Development Services?</font>
                    </h2>

                    <p>We have seen technology evolving into the most irrefutable element of human life. Therefore, being the observers of this massive progression in global transformation in Information and Technology, and basic technological evolution in living standards, our conclusion is in accepting the fact that technology </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="python_choosw">
                    <h3 class="why_most">Proficient Developers</h3>
                </div>

                <ul class="paytn_list">
                    <li>
                        <h5>Choice experience and smart developers</h5>
                        <p>Hire our experienced and highly skilled PhoneGap Developers and speed up your app development process.</p>
                    </li>
                    <li>
                        <h5>Unmatched solutions</h5>
                        <p>Our technology maestros blend creativity, experience, and knowledge to produce an excellent quality product. </p>
                    </li>

                </ul>
            </div>

            <div class="col-md-6 col-xs-12">
                <div class="python_choosw payton_sec">
                    <h3 class="why_most">HOW WE MAKE THEM SUCCEED WITH PHONEGAP!!</h3>
                </div>

                <ul class="paytn_list list1">
                    </li>
                    <li>
                        <h5>Well-versed with industry </h5>
                        <p>Technology domain is ever-evolving so we are. We always keep ourselves updated, informed and adaptive with everything PhoneGap.
                        </p>
                    </li>
                    <li>
                        <h5>High ROI guaranteed</h5>
                        <p>We help businesses increase productivity, efficient and in generating 10x profits from the investments and save time as well without compromising on quality.</p>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</section>




<section id="paython1">
    <div class="container">






        <div class="col-xs-12">
            <ul class="client_info list-inline client1">
                <li>
                    <h4>150+</h4>
                    <h2>FULL-TIME EMPLOYEES</h2>
                </li>
                <li>
                    <h4>CMMI LEVEL 1</h4>
                    <h2>STANDARDS.</h2>
                </li>
                <li>
                    <h4>2500+</h4>
                    <h2>PROJECTS DELIVERED</h2>
                </li>
                <li>
                    <h4>3</h4>
                    <h2>STATE OF THE ART DEVELOPMENT CENTERS</h2>
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
                            <h6>Front Desk : <a href="callto:0120-4290824">0120-4290824</a><br>
                                Sales : <a href="callto:9643821002">09643821002 </a></h6>
                        </span>
                    </li>
                    <li>
                        <img src="https://s3.us-east-2.amazonaws.com/nettech-images/email.webp">
                        <span>
                            <h4>SEND MESSAGE</h4>
                            <h6>HR: <a href="mailto:info@nettechnocrats.com">Hr@nettechnocrats.com </a><br>
                                Sales: <a href="mailto:info@nettechnocrats.com">sales@nettechnocrats.com </a></h6>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php include 'include/footer.php'; ?>