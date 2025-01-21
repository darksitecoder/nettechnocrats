<?php include 'include/header.php'; ?>
<?php include 'include/connection.php'; ?>
<?php //include 'paginationfunction.php';
?>
<link href="https://silviomoreto.github.io/bootstrap-select/dist/css/bootstrap-select.min.css" type="text/css" rel="stylesheet" />
<section class="cd-section visible">
  <div id="home" class="welcome-area site-header">
    <div class="welcome-image-area portfolio-banner" data-stellar-background-ratio="0.6">
      <div class="container">
        <div class="banner_text">
          <h2>SEO-Portfolio</h2>
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
<section class="porfolio_page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="show_portfolio">
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" value="<?php echo BaseUrl; ?>" id="BaseUrl">
</section>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script type="text/javascript">

</script>
<div class="seo-result">
  <div class="container">
    <div class="row">
      <div class="mark-sec-1">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="marketing_section_image">
            <img src="images/marketingadventure.webp" alt="">
            <div class="inisde_image"><img src="images/reput.webp" alt=""></div>
            <div class="seo-arrow"><img src="images/seo-arrow.webp" alt=""></div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="marketing_section_detail">
            <h2>GetRankFirst</h2>
            <div class="table-one table-responsive">
              <table>
                <tbody>
                  <tr>
                    <td>URL</td>
                    <td>:</td>
                    <td>http://dev.localwebtest.com/GetRankFirst/</td>
                  </tr>
                  <tr>
                    <td>category</td>
                    <td>:</td>
                    <td>SEO Validation</td>
                  </tr>
                  <tr>
                    <td>Search engine</td>
                    <td>:</td>
                    <td>Google</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="mark-tbl">
              <div class="table_head">Ranking Report</div>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <th>KEYWORDS</th>
                      <th>(Google.com)</th>
                      <th>LIVE RESULT</th>
                    </tr>

                    <tr>
                      <td>First Rank</td>
                      <td>&nbsp;</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>First Rank</td>
                      <td>&nbsp;</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>First Rank</td>
                      <td>&nbsp;</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>First Rank</td>
                      <td>&nbsp;</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>First Rank</td>
                      <td>&nbsp;</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>First Rank</td>
                      <td>&nbsp;</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>First Rank</td>
                      <td>&nbsp;</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>First Rank</td>
                      <td>&nbsp;</td>
                      <td>1</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="visit_btn"><a target="_blank" href="http://dev.localwebtest.com/GetRankFirst/">Visit Website</a></div>
          </div>
        </div>
      </div>
      <div class="mark-sec-1">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="marketing_section_detail">
            <h2>Marketingadventure</h2>
            <div class="table-one table-responsive">
              <table>
                <tbody>
                  <tr>
                    <td>URL</td>
                    <td>:</td>
                    <td>www.marketingadventure.co.in</td>
                  </tr>
                  <tr>
                    <td>category</td>
                    <td>:</td>
                    <td>Celebrity Reputation </td>
                  </tr>
                  <tr>
                    <td>Search engine</td>
                    <td>:</td>
                    <td>www.marketingadventure.co.in</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="mark-tbl">
              <div class="table_head">Ranking Report</div>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <th>KEYWORDS</th>
                      <th>(Google.com)</th>
                      <th>LIVE RESULT</th>
                    </tr>
                    <tr>
                      <td>Celebrity Reputation </td>
                      <td>&nbsp;</td>
                      <td>8</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="visit_btn2"><a href="http://chemistsworld.com">Visit Website</a></div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="marketing_section_image">
            <img src="images/marketingadventure.webp" alt="Get Rank First">
            <div class="inisde_image"><img src="https://www.getrankfirst.com/resources/assets/seoimage/download.jpg" alt=""></div>
            <div class="seo-arrow2"><img src="images/seo-arrow2.webp" alt=""></div>
          </div>
        </div>
      </div>
      <div class="mark-sec-1">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="marketing_section_image">
            <img src="images/marketingadventure.webp" alt="">
            <div class="inisde_image"><img src="images/Marketingadventure (1).jpg" alt=""></div>
            <div class="seo-arrow"><img src="images/seo-arrow.webp" alt=""></div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="marketing_section_detail">
            <h2>Marketingadventure</h2>
            <div class="table-one table-responsive">
              <table>
                <tbody>
                  <tr>
                    <td>URL</td>
                    <td>:</td>
                    <td>http://www.marketingadventure.co.in/</td>
                  </tr>
                  <tr>
                    <td>category</td>
                    <td>:</td>
                    <td>Celebrity Reputation</td>
                  </tr>
                  <tr>
                    <td>Search engine</td>
                    <td>:</td>
                    <td>www.marketingadventure.co.in</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="mark-tbl">
              <div class="table_head">Ranking Report</div>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <th>KEYWORDS</th>
                      <th>(Google.com)</th>
                      <th>LIVE RESULT</th>
                    </tr>

                    <tr>
                      <td>Celebrity Reputation</td>
                      <td>&nbsp;</td>
                      <td>1</td>
                    </tr>

                    <tr>
                      <td>Seo Corporation</td>
                      <td>&nbsp;</td>
                      <td>2</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="visit_btn"><a target="_blank" href="http://www.marketingadventure.co.in/">Visit Website</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
              <h6>Sales: <a href="callto:+1 (973) 459-4971">+1 (973) 459-4971</a><br>
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