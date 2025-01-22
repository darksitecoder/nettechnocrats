<?php include 'include/header.php';?>
<?php //include 'include/connection.php';?>
<?php //include 'paginationfunction.php';?>
<!--<link href="https://silviomoreto.github.io/bootstrap-select/dist/css/bootstrap-select.min.css" type="text/css" rel="stylesheet" />-->
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
               <div class="port-select">
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
            <div class="row" id="show_portfolio"> 
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
        url: BaseUrl + "/Ajax/GetPortfolio_New.php",
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

</script>

<?php include 'include/info_nettech.php'; ?>
<?php include 'include/footer.php'; ?>
