<?php include 'include/connection.php';

          
$numofrecords   =  15;
$page           =  $_POST['page'];
$start 			= ($page - 1) * $numofrecords;
$catname= @$_POST['cat'];

$sql='SELECT blog.*,admin.name as post_by, cat.name as catname,cat_slug
from tbl_blog as blog 
join tbl_admin as admin on admin.id=blog.user_id 
left join tbl_category as cat on cat.id= blog.cat_id  where 1';

if($catname){
$sql .=" and cat.cat_slug= '".$catname." ' ";	
}
$sql .=' and blog.status=1 ';
$count_query = mysqli_query($conn,$sql);
$tot_rows = mysqli_num_rows($count_query);
$sql .= " order by blog.post_date DESC LIMIT $start, $numofrecords";
$sql_query = mysqli_query($conn,$sql);
?>
<ul class="blog_listing_main">
<?php 
while ($post = mysqli_fetch_array($sql_query)) {

	$name = nl2br(htmlspecialchars_decode($post['name']));
	//$short_desc = nl2br(htmlspecialchars_decode($post['post_desc']));

  $short_desc = limitTextWords(html_entity_decode(utf8_encode($post['post_desc'])),100, true, true);

	if($post['post_image']){
    $post_img = BaseUrl.'BlogAdmin/uploads/'.$post['post_image'];
		$img = '<img src="'.$post_img.'" class="img-responsive">';
	}else{
		$img = '';
	}
	?>


<li>
<figure><?=$img?>
<span class="cat_name"><a href="<?=BaseUrl.'blog-category/'.$post['cat_slug'].'/'?>"><?=$post['catname'];?></span>
</figure>
<div class="blg_dtl">
<h3><a href="<?=BaseUrl.'blog/'.$post['slug'].'/'?>"><?=$name?></a></h3>
 <ul class="date_admin">
          <li><i class="fa fa-user"></i> <?=$post['post_by']?></li>
          <li><i class="fa fa-calendar"></i> <?=date('M d, Y',strtotime($post['post_date']))?></li>
    
        </ul>
        
        
        
        
<p><?=$short_desc?></p>

</div>
</li>



<?php 
}?>
</ul>
<?php 
echo '<div class="col-md-12">'.FrontAjaxPagination($numofrecords, $tot_rows, $page).'</div>';
function limitTextWords($content = false, $limit = false, $stripTags = false, $ellipsis = false) 
{
  if ($content && $limit) {
    $content = ($stripTags ? strip_tags($content) : $content);
    $content = explode(' ', $content, $limit+1);
    array_pop($content);
    if ($ellipsis) {
      array_push($content, '...');
      //array_push($content, '');
    }
    $content = implode(' ', $content);
  }
  return $content;
}
/*Create Pagination*/ 
function FrontAjaxPagination($numofrecords, $count, $page) {

  $per_page = $numofrecords;
  $previous_btn = true;
  $next_btn = true;
  $first_btn = true;
  $last_btn = true;
  $start = $page * $per_page;
  $cur_page = $page;
  $msg = "";

  $no_of_paginations = ceil($count / $per_page);

  if($count>0){
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
      $msg .= "<div class='blog-pagination'><ul class='list-inline'>";
      if ($first_btn && $cur_page > 1) {
              $msg .= "<li p='1' class='active' onclick='Pagination(1)'>First</li>";
      } else if ($first_btn) {
              $msg .= "<li p='1' class='inactive'>First</li>";
      }
      if ($previous_btn && $cur_page > 1) {
          $pre = $cur_page - 1;
          $msg .= "<li p='$pre' class='active' onclick='Pagination($pre)'>Previous</li>";
      } else if ($previous_btn){
          $msg .= "<li class='inactive'>Previous</li>";
      }
      for ($i = $start_loop; $i <= $end_loop; $i++) {
          if ($cur_page == $i)
              $msg .= "<li p='$i' class='active current-page'>{$i}</li>";
          else
              $msg .= "<li p='$i' class='active' onclick='Pagination($i)'>{$i}</li>";
          }
          if ($next_btn && $cur_page < $no_of_paginations) {
              $nex = $cur_page + 1;
              $msg .= "<li p='$nex' class='active' onclick='Pagination($nex)'>Next</li>";
          } else if ($next_btn) {
              $msg .= "<li class='inactive'>Next</li>";
          }

          if ($last_btn && $cur_page < $no_of_paginations) {
              $msg .= "<li p='$no_of_paginations' class='active' onclick='Pagination($no_of_paginations)'>Last</li>";
          } else if ($last_btn) {
              $msg .= "<li p='$no_of_paginations' class='inactive'>Last</li>";
          }
          $total_string = "<span class='total' a='$no_of_paginations'></span>";
          //$msg = $msg . "</ul>". $total_string . " <b>".$count." Records</b></div>";
          $msg = $msg . "</ul>". $total_string . "</div>";
          return $msg;
  }
  else{
    return '<div class="col-md-12 text-center" style="color:red"><strong>No Record Found</strong></div>';
  }
}

?>