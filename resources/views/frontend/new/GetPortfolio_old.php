<?php
include('../include/connection.php') ;
$page=$_POST['page'];
$numofrecords=$_POST['numofrecords'];

$cur_page     = $page;

$Limitpage    = $page-1;
$start        = $Limitpage * $numofrecords;

$sql = "select * from portfolios  LIMIT ".$start." , ".$numofrecords." ";
$query = mysqli_query($conn,$sql); 

$sql2 = "select * from portfolios ";
$query2 = mysqli_query($conn,$sql2); 
$count = mysqli_num_rows($query2);

while ($fetch_member_data = mysqli_fetch_array($query)) 
{
?>
  <div class="col-lg-3 col-sm-6 col-xs-12 paddinglr custom-web-grid" id="web_grid_65">
   <div class="mobile-porfolio-grid">
      <div class="col-sm-12 text-center">
         <div class="mobile-client-logo"> <img src="<?php echo BaseUrl.'NettechAdmin/portfolios/'.$fetch_member_data['logo'];?>" alt="portfolios/<?php echo $fetch_member_data['logo'];?>"> </div>
      </div>
      <div class="col-sm-12">
         <div class="mobile-client-name"> <img src="<?php echo BaseUrl.'NettechAdmin/portfolios/'.$fetch_member_data['banner'];?>" alt="portfolios/<?php echo $fetch_member_data['banner'];?>"> </div>
      </div>
      <div class="clearfix"></div>
      <div class="bottom_text">
         <h3><?php echo $fetch_member_data['name'];?></h3>
         <h5>Other</h5>
      </div>

      <div class="mobilegrid-hover">
         <div class="fs-portfolio-icon"> <a href="javascript:void(0);" onclick="setPopupdata('65');" tabindex="-1"> <span class="fa fa-arrows active" aria-hidden="true"></span> </a> </div>
         <div class="text-center">
            <div class="mobileproject-descrption">
               <div class="mobilep-des-info">
                  <div class="mobile-client-logo"> <img src="images/portfolio/_0007_54.png" alt="images/portfolio/_0007_54.png"> </div>
                  <h2><?php echo $fetch_member_data['name'];?></h2>
                  <h5></h5>
                  <p><?php echo $fetch_member_data['description'];?></p>
                  <ul>
                     <li style="display:none"><a href="" target="_blank"> <i class="fa fa-apple" aria-hidden="true"></i> </a></li>
                     <li style="display:none"><a href="" target="_blank"> <i class="fa fa-android" aria-hidden="true"></i> </a>
                     </li>
                     <li><a href="<?php echo $fetch_member_data['link'];?>" target="_blank"> <i class="fa fa-arrow-up" aria-hidden="true"></i> </a></li>
                  </ul>
                  
            </div>
         </div>
      </div>
   </div>
</div>

<?php
} 
?>

<div class="row">
  <div class="col-md-12">
      <?php echo Links($numofrecords, $count, $page); ?>
  </div>
</div>


<?php
function Links($numofrecords, $count, $page)
{
  $per_page = $numofrecords;
  $previous_btn = true;
  $next_btn = true;
  $first_btn = true;
  $last_btn = true;
  $start = $page * $per_page;
  $cur_page = $page;
  $msg = "";

  $no_of_paginations = ceil($count / $per_page);

  if($count>0)
  {
    if ($cur_page >= 7) {
      $start_loop = $cur_page - 3;
      if ($no_of_paginations > $cur_page + 3)
      $end_loop = $cur_page + 3;
      else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
          $start_loop = $no_of_paginations - 6;
          $end_loop = $no_of_paginations;
      } else {
          $end_loop = $no_of_paginations;
      }
    } else {
      $start_loop = 1;
      if ($no_of_paginations > 7)
          $end_loop = 7;
      else
          $end_loop = $no_of_paginations;
    }
    $msg .= "<div class='pagination page-in'><ul class='list-inline'>";
    /*if ($first_btn && $cur_page > 1) {
        $msg .= "<li p='1' class='active' onclick='Pagination(1)'>First</li>";
    } else if ($first_btn) {
        $msg .= "<li p='1' class='inactive'>First</li>";
    }*/
    if ($previous_btn && $cur_page > 1) {
      $pre = $cur_page - 1;
      $msg .= "<li p='$pre' class='active' onclick='Pagination($pre)'>«</li>";
    } else if ($previous_btn) {
      $msg .= "<li class='inactive'>«</li>";
    }
    for ($i = $start_loop; $i <= $end_loop; $i++) {
      if ($cur_page == $i)
          $msg .= "<li p='$i' class='active current-page'>{$i}</li>";
      else
          $msg .= "<li p='$i' class='active' onclick='Pagination($i)'>{$i}</li>";
      }
        if ($next_btn && $cur_page < $no_of_paginations) {
            $nex = $cur_page + 1;
            $msg .= "<li p='$nex' class='active' onclick='Pagination($nex)'>»</li>";
        } else if ($next_btn) {
            $msg .= "<li class='inactive'>»</li>";
        }

      /*if ($last_btn && $cur_page < $no_of_paginations) {
        $msg .= "<li p='$no_of_paginations' class='active' onclick='Pagination($no_of_paginations)'>Last</li>";
      } else if ($last_btn) {
        $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
      }*/
      $goto = "<input type='text' style='display:none;' class='goto' size='1' style='margin-top:-1px;margin-left:60px;'/><input type='button' id='go_btn' class='go_button' value='Go' style='display:none;'/>";
      /*$total_string = "<span class='total' a='$no_of_paginations'>(page<b>" . $cur_page . "</b> of <b>$no_of_paginations</b> )</span>";
      $msg = $msg . "</ul>" . $goto . $total_string . "</div>";*/
      $msg = $msg . "</ul>" . $goto. "</div>";
      return $msg;
  }
  else
  {
    return '<div class="col-md-12 text-center" style="color:red"><strong>No Record Found</strong></div>';
  }
}
?>
