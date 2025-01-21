<?php
include 'include/connection.php';
$cat_slug_url = $_GET['post_slug'];
$meta_title     = 'Nettechnocrats Blog - Welcome to our Blog';
$meta_description   = 'Nettechnocrats Blog - Welcome to our Blog';
$canonical       = BaseUrl . 'blog-category/' . $cat_slug_url;
$requrls = $_SERVER['REQUEST_URI'];



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

        </div>

      </div>
      <!--<div class="col-md-4 col-xs-12">
          <div class="row blog-right">
            <div class="col-xs-12 pp">
              <h3>POPULAR POSTS</h3>
              <ul class="list-unstyled">
                <?php
                $sql = 'SELECT name,post_image,slug from tbl_blog where status=1 order by post_date DESC LIMIT 10 ';
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
        </div> -->
    </div>
  </div>
</section>
<?php include('include/footer.php'); ?>
<script type="text/javascript">
  $(document).ready(function() {
    loadData(1);
  });

  function loadData(page) {
    var catname = "<?= $cat_slug_url ?>";
    $.ajax({
      url: '<?= BaseUrl ?>pagination.php',
      type: "POST",
      data: {
        Submit: 'Pagination',
        numofrecords: 5,
        page: page,
        cat: catname
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