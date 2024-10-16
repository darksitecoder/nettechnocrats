<?php include 'include/header.php';?>
<?php //include 'include/connection.php';?>
<?php //include 'paginationfunction.php';?>
<link href="css/portfolio.css" type="text/css" rel="stylesheet" />
<section class="cd-section visible">
   <div id="home" class="welcome-area site-header">
      <div class="welcome-image-area portfolio-banner" data-stellar-background-ratio="0.6">
         <div class="container">
            <div class="banner_text">
               <h2>Portfolio</h2>
            </div>
              
         </div>
      </div>
   </div>
</section>



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
            </div>
            
            
      			<div class="portfolio_area">
      				<div class="port_filter">
      					<div class="port_filter_icon">
      						<a href="javascript:void(0)" class="filter_a_open">
      							<span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#212529" viewBox="0 0 24 24"><path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg></span>
      							<label>Filter</label>
      						</a>
      						<a href="javascript:void(0)" class="filter_a_close">
      							<span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#212529" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg></span>
      							<label>Clear Filter</label>
      						</a>
      					</div>
      					<div class="port_filter_cont">
      						<div class="port_select">
      							<select onchange="GetProtfolio(1);" id="technology">
                        <option value="">All Technology</option>
                        <?php
                        $Sql1 = "select * from technology"; 
                        $Query1 = mysqli_query($conn,$Sql1);
                        while ($Technology = mysqli_fetch_array($Query1)) 
                        {
                          ?>
                          <option value="<?php echo $Technology['id']; ?>"><?php echo $Technology['technology']; ?></option>
                          <?php
                        }
                        ?>
                      </select>
      							 <select onchange="GetProtfolio(1);" id="industry">
                        <option value="">All Industry</option>
                        <?php
                        $Sql2 = "select * from industry"; 
                        $Query2 = mysqli_query($conn,$Sql2);
                        while ($Industry = mysqli_fetch_array($Query2)) 
                        {
                          ?>
                          <option value="<?php echo $Industry['id']; ?>"><?php echo $Industry['industry']; ?></option>
                          <?php
                        }
                        ?>
                      </select>
      						</div>
      					</div>
      				</div>
      				<div class="row port_row" id="show_portfolio">

              </div>
      			</div>
         </div>
      </div>
   </div>
   <input type="hidden" value="<?php echo BaseUrl; ?>" id="BaseUrl">
</section>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  GetProtfolio(1);
});
function GetProtfolio(page)
{
    var numofrecords    = 8;
    var Technology  = '';
    var technology  = $("#technology").val();
    var industry    = $("#industry").val();
   
    var BaseUrl         = $("#BaseUrl").val(); 
    var dataStr         = {'page':page,'numofrecords':numofrecords,'technology':technology,'industry':industry};
    $.ajax({
        url: BaseUrl + "/Ajax/GetPortfolio_NewDesign.php",
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

$(".port_filter_icon a").click(function(){
	$(".port_filter").toggleClass("active");
	$(".port_filter_cont").slideToggle();
});

</script>

<?php include 'include/info_nettech.php'; ?>
<?php include 'include/footer.php'; ?>
