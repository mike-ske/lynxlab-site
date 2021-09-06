<?php require 'header.php' ?>
<?php require 'nav.php' ?>
<?php require './inc/function.php' ?>
<?php require './inc/dbconn.php' ?>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel" style="max-height: 420px;overflow: hidden;">
          <?php
            $post = getAllPost($conn, 10);
            foreach ($post as $value) 
            {
              
          ?>
          <div class="item" style="height: 400px;">
              <img src="data:image/jpeg;base64,<?php echo getPostImageById($conn, $value['id'])?>" style="filter: brightness(0.6);height: 100%;background-position:center;"/>
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><?php echo getSingleCategoryById($conn, $value['category_id'])?></span>
                </div>
                <a href="post-details?id=<?php echo $value['id']?>"><h4><?php echo $value['title']?></h4></a>
                <ul class="post-info">
                  <li><a><?php echo $value['author'] ?></a></li>
                  <li><a href="post-details?id=<?php echo $value['id']?>"><?php echo convertDate($value['created_date']) ?></a></li>
                </ul>
              </div>
            </div>
          </div>

          <?php };?>

        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <?php
                  $post = getAllPost($conn, 4);
                  foreach ($post as $value) 
                  {
                    
                ?>
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb" style="height: 400px;overflow:hidden">
                      <img style="height:100%;" src="data:image/jpeg;base64,<?php echo getPostImageById($conn, $value['id'])?>" />
                    </div>
                    <div class="down-content">
                      <span><?php echo getSingleCategoryById($conn, $value['category_id'])?></span>
                      <a href="post-details?id=<?php echo $value['id']?>"><h4><h4><?php echo $value['title']?></h4></a>
                      <ul class="post-info">
                        <li><a href="post-details?id=<?php echo $value['id']?>"><?php echo $value['author'] ?></a></li>
                        <li><a href="post-details?id=<?php echo $value['id']?>"><?php echo convertDate($value['created_date']) ?></a></li>
                      </ul>
                      
                      <?php echo "<br><br>"; ?>
                      <?php  
                      
                      $tags =  "<th><tr><td><table><tbody><thead><em><i><blockquote><br><ul><cite><q><address><li><a><b><h1><h2><h3><h4><h5><h6><strong><u>";
                      $message = strip_tags(html_entity_decode($value['content']), $tags);
                      echo cutString($message);
                      ?>
                     
                    </div>

                    <div class="post-options"></div> 

                  </div> 
                </div>
                
                <?php };?>
                
              </div>
            </div>
            <a href="posts" class="btn btn-primary text-align-center p-2 m-2 col-md-12 button">View All Post</a>
          </div>

          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>

                       <?php
                          $post = getAllPost($conn, 6);
                          foreach ($post as $value) 
                          {
                            
                        ?>

                        <li>
                          <a href="post-details?id=<?php echo $value['id']?>">
                            <h5><?php echo substr(strip_tags(html_entity_decode($value['content'])), 0, 40) ?></h5>
                            <span><?php echo convertDate($value['created_date']) ?></span>
                          </a>
                        </li>

                        <?php };?>

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>

                        <?php
                          $post = getAllCategory($conn);
                          foreach ($post as $value) 
                          {
                            
                        ?>

                        <li>
                          <a href="category-post?id=<?php echo $value['id']?>">- <?php echo $value['cat_name']; ?></a>
                        </li>
                      <?php };?>

                      </ul>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">PSD</a></li>
                        <li><a href="#">Responsive</a></li>
                      </ul>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

<?php require 'footer.php' ?>