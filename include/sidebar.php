<?php include 'db.php';?>
<div class="col-md-4">

<!-- Blog Search Well -->

<?php
  if(isset($_POST['submit'])){
    $search = $_POST['search'];
$query ="SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
//then we are puting this query in sql ;
$result_search = mysqli_query($connection,$query);
if(!$result_search){
die('some thing is worrg with your connection '.mysqli_error($connection));
}
$count =  mysqli_num_rows($result_search);

if($count == 0){
echo"<h1> No result </h1>";

}
  }
 
?>

<div class="well">
    <h4>Blog Search</h4>
   <form action="search.php" method="POST">
   <div class="input-group">
        <input name="search" type="text" class="form-control">
        <span class="input-group-btn">
            <button name="submit"  type="submit" class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>


   </form>



    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-12">
        <ul class="list-unstyled">
            
        <?php 
         $query = "SELECT * FROM categories LIMIT 3";
         $all_query_catagories = mysqli_query($connection,$query);
             
         while ($row = mysqli_fetch_assoc($all_query_catagories)){

            $store= $row['cat_title'];
            echo "<li><a href='#'>{$store}</a></li>";
        }
        
    ?>
        
       
               
               
            </ul>
        </div>
        <!-- /.col-lg-6 -->
       
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>

</div>
