<?php
include 'include/connection.php';
$post_slug_url = $_GET['post_slug'];
$sql = "select blog.*,cat.name as category_name,admin.name as post_by,admin.description,admin.image as admin_image from tbl_blog as blog join tbl_admin as admin on admin.id=blog.user_id join tbl_category as cat on cat.id=blog.cat_id where blog.slug= '" . $post_slug_url . "' ";
$Query1 = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($Query1);
if ($rowcount == 0) {
  header('Location: ' . BaseUrl);
  exit();
}

$blog_result = mysqli_fetch_array($Query1);
$meta_title = $blog_result['seo_title'] . ' - Nettechnocrats';
$meta_description = $blog_result['seo_desc'];
$canonical = BaseUrl . 'blog/' . $post_slug_url . '/';

$post_title = $blog_result['name'];
$post_desc = htmlspecialchars_decode(utf8_encode($blog_result['post_desc']));

if ($blog_result['post_image']) {
  $post_img = BaseUrl . 'BlogAdmin/uploads/' . $blog_result['post_image'];
  $img = '<img src="' . $post_img . '" alt="' . $post_title . '" title="' . $post_title . '">';
} else {
  $img = '';
}
$page = 'BlogDetails';
include("include/header.php");

?>

<section class="cd-section visible">
  <div id="home" class="welcome-area site-header">
    <div class="welcome-image-area about" data-stellar-background-ratio="0.6">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_text about_banner">
              <span class="blog_cat">
                <?= $blog_result['category_name'] ?>
              </span>
              <h1>
                <?= $post_title ?>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blog_inner_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <figure>
          <?= $img ?>
        </figure>
        <div class="blog_content_area">
          <?= $post_desc ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="blog-post-bg">
          <figure><img src="<?= BaseUrl . 'BlogAdmin/public/Admin/images/' . $blog_result['admin_image'] ?>" alt="<?= $post_title ?>"> </figure>
          <figcaption>
            <h6>
              <?= $blog_result['post_by'] ?>
            </h6>
            <p>
              <?= $blog_result['description'] ?>
            </p>
          </figcaption>
        </div>
      </div>
    </div>

    <div class="row related-blog">
      <div class="col-md-12">
        <h3>Related Post</h3>
      </div>

      <?php
      $sql = 'SELECT name,post_image,slug from tbl_blog where id!="' . $blog_result['id'] . '" AND status=1 order by post_date DESC LIMIT 3 ';
      $sql_query = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($sql_query)) {
        $post_name = nl2br(htmlspecialchars_decode($row['name']));
        if ($row['post_image']) {
          $row_img = BaseUrl . 'BlogAdmin/uploads/' . $row['post_image'];
        } else {
          $row_img = BaseUrl . 'images/imagenotavailable.webp';
        }
      ?>
        <div class="col-md-4"> <img src="<?= $row_img ?>" alt="<?= $post_name ?>" title="<?= $post_name ?>" alt="<?= $post_title ?>"> <a href="<?= BaseUrl . 'blog/' . $row['slug'] . '/' ?>">
            <h4>
              <?= $post_name ?>
            </h4>
          </a> </div>
      <?php
      }
      ?>
    </div>


  </div>

</section>






<section class="inner_query_area">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="left_side">
          <h2>Now Is The Time To Craft <span>Brilliance Together</span></h2>
          <p>So let`s get in touch and turn your app idea into a brilliant <span>BlockChain solution.</span> </p>
        </div>
        <div class="right_side">
          <h3>Go Ahead & Fill The Form Below</h3>
          <?php include('include/EnquiryForm.php'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
include('include/footer.php');
?>