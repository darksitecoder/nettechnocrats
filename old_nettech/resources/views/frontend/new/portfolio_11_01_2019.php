<?php include 'include/header.php';?>
<?php include 'include/connection.php';?>
<?php //include 'paginationfunction.php';?>
<link href="https://silviomoreto.github.io/bootstrap-select/dist/css/bootstrap-select.min.css" type="text/css" rel="stylesheet" />
<section class="cd-section visible">
   <div id="home" class="welcome-area site-header">
      <div class="welcome-image-area portfolio-banner" data-stellar-background-ratio="0.6">
         <div class="container">
            <div class="banner_text">
               <h2>Portfolio</h2>
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
<section class="porfolio_page">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <!-- <div class="filter_div pull-right"> <a href="javascript:void(0);" id="filt"> <i class="fa fa-sliders" aria-hidden="true"></i> filter</a> <a href="#">request a quote</a> </div> -->
            <div class="clearfix"></div>
            <div class="portfolio_heading">
               <h2>We work to innovate and are proud of what we've created.</h2>
               <h6>SOME OF OUR BEST  PROJECTS ACROSS ALL INDUSTRIES</h6>
               <div class="port-select">
                <select onchange="GetTechnology('WEB');" id="technology_web">
                  <option value="">WEB</option>
                  <option value="PHP">PHP</option>
                  <option value="MVC Frameworks">MVC Frameworks</option>
                  <option value="Open Source">Open Source</option>
                  <option value="Microsoft Technology">Microsoft Technology</option>
                  <option value="AI/Machine Learning">AI/Machine Learning</option>
                </select>
                <select onchange="GetTechnology('MOBILE');" id="technology_mobile">
                  <option value="">MOBILE</option>
                  <option value="Android">Android</option>
                  <option value="iPhone">iPhone</option>
                </select>
                </div>
            </div>
            <div id="show_portfolio"> 
            </div>
         </div>
      </div>
   </div>
   <input type="hidden" value="<?php echo BaseUrl; ?>" id="BaseUrl">
</section>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  var page=1;
  GetProtfolio(page);
});
function GetProtfolio(page)
{
    var numofrecords    = 8;
    var Technology = '';
    var technology_web    =$("#technology_web").val();
    var technology_mobile  =$("#technology_mobile").val();
    if(technology_web!='')
    {
      Technology      = technology_web;       
    }
    else if(technology_mobile!='')
    {
      Technology      = technology_mobile;
    }
    var BaseUrl         = $("#BaseUrl").val(); 
    var dataStr         = {'page':page,'numofrecords':numofrecords,'Technology':Technology};
    $.ajax({
        url: BaseUrl + "/Ajax/GetPortfolio.php",
        type: "POST",
        data: dataStr,
        success: function(data)
        {                  
            $("#show_portfolio").show().html(data);
        }
    }); 
}
function Pagination(page)
{ 
  GetProtfolio(page);
}

function GetTechnology(TYPE)
{
  if(TYPE=='WEB')
  {
    $("#technology_mobile").val('');
  }
  else if(TYPE=='MOBILE')
  {
    $("#technology_web").val('');
  }
  GetProtfolio(1);
}
</script>
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
                  <img src="images/buss.png">
                  <span>
                     <h4>VISIT OFFICE</h4>
                     <h6>H-183, Sec-63, Noida,<br>Delhi (NCR) India</h6>
                  </span>
               </li>
               <li>
                  <img src="images/calling.png">
                  <span>
                     <h4>CALL US</h4>
                     <h6>Sales: <a href="callto:+1 (973) 459-4971">+1 (973) 459-4971</a><br>
                        HR: <a href="callto:0120-4290824">0120-4137259</a>
                     </h6>
                  </span>
               </li>
               <li>
                  <img src="images/email.png">
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
