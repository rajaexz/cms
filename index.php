<?php 
 include('include/header.php');

 ?>
 <?php 
 include('include/navbar.php');

 ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">



            <?php
                    $query = "SELECT * FROM posts";
                    $all_query_posts = mysqli_query($connection,$query);
             
                     while ($row = mysqli_fetch_assoc($all_query_posts)){
                         $post_title= $row['post_title'];
                         $post_date= $row['post_date'];
                         $post_author= $row['post_author'];
                         $post_content= $row['post_content'];
                         $post_image= $row['post_image'];

                    
                    ?>





                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#"><?php echo $post_title ;?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ;?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post_date ;?></p>
                <hr>
                <img class="img-responsive" src="image/<?php echo $post_image;?>" alt="">
                <hr>
                <p<?php echo $post_content;?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
                <!-- First Blog Post end -->
            <?php }?>




            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include('include/sidebar.php')?>       


        </div>
        <!-- /.row -->

        <hr>
<?php include('include/footer.php')?>
      