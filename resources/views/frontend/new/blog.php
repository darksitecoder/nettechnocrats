<?php
include 'include/connection.php';

$meta_title     = 'Enterprise Web Development & Digital Marketing Strategies - Nettechnocrats';
$meta_description   = 'Stay updated with enterprise web development, mobile app development, digital marketing news, strategies, technology news and much more through our blog page.';
$canonical       = BaseUrl . 'blog/';
$requrls = $_SERVER['REQUEST_URI'];
if ($requrls == '/blog') {
  header("HTTP/1.1 301 Moved Permanently");
  header("Location:https://www.nettechnocrats.com/blog/");
  exit;
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
              <h1>Recent Blogs</h1>
              <p>Global Leaders In Web Development Solutions</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="blog_page_area_main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="Result">
          <div class="col-md-4 col-xs-12">
            <div class="row blog-right">
              <div class="col-xs-12 pp">
                <h3>POPULAR POSTS</h3>
                <ul class="list-unstyled">
                  <?php
                  $sql = 'SELECT name,post_image,slug from tbl_blog where status=1 order by post_date DESC LIMIT 15 ';
                  $sql_query = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_array($sql_query)) {
                    $post_name = nl2br(htmlspecialchars_decode($row['name']));
                    if ($row['post_image']) {
                      $row_img = BaseUrl . 'BlogAdmin/uploads/' . $row['post_image'];
                    } else {
                      $row_img = BaseUrl . 'images/imagenotavailable.webp';
                    }
                  ?>
                    <li>
                      <div class="postimg">
                        <div class="col-xs-3"> <img width="80" height="80" src="<?= $row_img ?>" alt="<?= $post_name ?>" title="<?= $post_name ?>" sizes="100vw"> </div>
                        <div class="col-xs-9">
                          <h4> <a href="<?= BaseUrl . 'blog/' . $row['slug'] . '/' ?>">
                              <?= $post_name ?>
                            </a> </h4>
                        </div>
                      </div>
                    </li>
                  <?php
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>

        </div>

      </div>


    </div>
  </div>
</section>

<?php include('include/footer.php'); ?>
<script type="text/javascript">
  $(document).ready(function() {
    loadData(1);
  });

  function loadData(page) {
    $.ajax({
      url: 'https://www.nettechnocrats.com/pagination.php',
      type: "POST",
      data: {
        Submit: 'Pagination',
        numofrecords: 5,
        page: page
      },
      success: function(a) {
        $("#Result").html(a);
      }
    });
  }

  function Pagination(page) {
    loadData(page);
  }
</script>