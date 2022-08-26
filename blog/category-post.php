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
    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Posts Categories</h4>
                <h2>Other Related Blog Entries</h2>
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
                  <?php
                          // get the page id
                      if (isset($_GET['id'])) 
                      {
                          $cat_id = $_GET['id'];
                      }
                      else
                      {
                          echo "No Category Id found for this post";

                      }   

                    $post = getPostByCatId($conn, $cat_id);
                    foreach ($post as $value) 
                    {
                      
                  ?>
                  
                    <div class="col-lg-6">
                      <div class="blog-post">
                        <div class="blog-thumb" style="height:350px;">
                          <img style="height:100%;" src="data:image/jpeg;base64,<?php echo getPostImageById($conn, $value['id'])?>" />
                        </div>
                        <div class="down-content">
                          <span><?php echo getSingleCategoryById($conn, $value['category_id'])?></span>
                          <a href="post-details?id=<?php echo $value['id']?>"><h4><?php echo $value['title']?></h4></a>
                          <ul class="post-info">
                            <li><a><?php echo $value['author'] ?></a></li>
                            <li><a href="post-details?id=<?php echo $value['id']?>"><?php echo convertDate($value['created_date']) ?></a></li>
                          </ul>

                          <?php
                            echo "<br><br>";
                            $tags =  "<th><tr><td><table><tbody><thead><em><i><blockquote><br><ul><cite><q><address><li><a><b><h1><h2><h3><h4><h5><h6><strong><u>";
                            $message = strip_tags(html_entity_decode($value['content']), $tags);
                            echo cutString($message);
                          ?>
                          
                        </div>
                      </div>
                    </div>
                  
                    <?php 
                    };
                    ?>
                </div>
                  
                <div class="col-lg-12">
                  <ul class="page-numbers">
                  
                  <!-- == create the pagination == -->
                  <?php                    
                  //     if ($page > 1) 
                  //     {
                  //         $calc = ($page-1);
                  //         echo "<li class='paginate_button page-item previous' id='dataTable_previous'>
                  //                   <a href='./posts?page=$calc' aria-controls='dataTable' data-dt-idx='1' tabindex='0' class='page-link'>
                  //                     <i class='fa fa-angle-double-left'></i>
                  //                   </a>
                  //                 </li>
                  //                 ";
                      
                  //     }

                  //     echo paginatorLink(5, './posts', $conn, 'post');
                      
                  //     $total_pages = nextPage(5, $conn, 'post');
                  //     for ($i=1; $i < $total_pages; $i++) 
                  //     { 
                  //         $i;
                  //     }
                  //     if ($i > $page) 
                  //     {
                  //         $calc = ($page+1);
                  //         echo  "<li class='paginate_button page-item previous' id='dataTable_previous'>
                  //                         <a href='./posts?page=$calc' aria-controls='dataTable' data-dt-idx='1' tabindex='0' class='page-link'>
                  //                           <i class='fa fa-angle-double-right'></i>
                  //                         </a>
                  //                   </li>";
                  //     }

                  //   ?>
                  </ul>
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
                            <a href="category-post?id=<?php echo $value['id']?>">- <?php echo $value['cat_name']?></a>
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