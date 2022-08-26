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
      <?php 
        if(isset($_GET['id']))
        {
          $id = $_GET['id'];
        }
      ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Post Details</h4>
                <h2>Single blog post</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <!-- Banner Ends Here -->

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <div class="col-lg-12">

                <?php
                  $post = viewPostById($conn, $id);
                  
                ?>

                  <div class="blog-post">
                    <div class="blog-thumb">
                        <img style="height:100%;" src="data:image/jpeg;base64,<?php echo getPostImageById($conn, $post['id'])?>" />  
                    </div>
                    <div class="down-content">
                      <span><?php echo getSingleCategoryById($conn, $post['category_id'])?></span>
                      <a href="post-details?id=<?php echo $post['id']?>"><h4><?php echo $post['title']?></h4></a>
                      <ul class="post-info">
                        <li><a href="post-details?id=<?php echo $post['id']?>"><?php echo $post['author'] ?></a></li>
                        <li><a href="post-details?id=<?php echo $post['id']?>"><?php echo convertDate($post['created_date']) ?></a></li>
                      </ul>
                      <?php echo "<br><br>"; ?>
                      <?php 
                          $tags =  "<th><tr><td><table><tbody><thead><em><i><blockquote><br><ul><cite><q><address><li><a><b><h1><h2><h3><h4><h5><h6><strong><u>";
                          echo strip_tags(html_entity_decode($post['content']), $tags); 
                      ?>
                      <div class="post-options">
                        <!-- <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="#">Best Templates</a>,</li>
                              <li><a href="#">TemplateMo</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="#">Facebook</a>,</li>
                              <li><a href="#"> Twitter</a></li>
                            </ul>
                          </div>
                        </div> -->
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
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
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require 'footer.php' ?>