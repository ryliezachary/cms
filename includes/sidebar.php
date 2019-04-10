   <div class="col-md-4">
        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
		  <div class="card-body">
		  <form action="search.php" method="post">
            <div class="input-group">
              <input name="search" type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button name="submit" class="btn btn-secondary" type="submit">Go!</button>
              </span>
            </div>
           </form>
		   </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
                 <div class="col-lg-12">
                <ul class="list-unstyled mb-0">
                 
		<?php 
			$query="SELECT * from categories";
			$result=mysqli_query($connection,$query);
	
			while($row=mysqli_fetch_assoc($result)){
			$cat_title=$row['cat_title'];			
				echo "<li>
                    <a href='#'>{$cat_title}</a>
                  </li>";
  				}
		?>
				</ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
		  <?php include "widget.php"; ?>
        

      </div>