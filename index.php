<?php 
include "includes/db.php";
include "includes/header.php";
?>


<!-- Navigation -->
<?php
include "includes/navigation.php";
?>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <!-- Post Content Column -->
      <div class="col-lg-8">
		<?php
			$query="SELECT * FROM posts";
			$result=mysqli_query($connection,$query);
	  
		while($row =mysqli_fetch_assoc($result)){
			$post_title=$row['post_title'];
			$post_author=$row['post_author'];
			$post_date=$row['post_date'];
			$post_image=$row['post_image'];
			$post_content=$row['post_content'];
		?>	
		
		
		       <!-- Title -->
        <h1 class="mt-4"><?php echo $post_title; ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><?php echo $post_author; ?></a> 
        </p>

        <hr>

        <!-- Date/Time -->
        <p><?php echo $post_date; ?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="images/<?php echo $post_image; ?>" alt="">

        <hr>

        <!-- Post Content -->
        <p><?php echo $post_content; ?></p>

               
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Commenter Name</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>
          </div>
        </div>
		
	<?php	} ?>
		
 

      </div>

      <!-- Sidebar Widgets Column -->
   <?php include "includes/sidebar.php"; ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php
  include "includes/footer.php";
  ?>
