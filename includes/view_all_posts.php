<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Author</th>
						<th>Title</th>
						<th>Category</th>
						<th>Status</th>
						<th>Image</th>
						<th>Tags</th>
						<th>Comments</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
	<?php 
		$query="SELECT * FROM posts";
		$result=mysqli_query($connection,$query);

		while($row=mysqli_fetch_assoc($result)){
			$id=$row['post_id'];
			$author=$row['post_author'];
			$title=$row['post_title'];
			$category_id=$row['post_category_id'];
			$status=$row['post_status'];
			$image=$row['post_image'];
			$tags=$row['post_tags'];
			$comment=$row['post_comment_count'];
			$date=$row['post_date'];

	?>
					<tr>
						<td><?php echo $id; ?></td>
						<td><?php echo $author; ?></td>
						<td><?php echo $title; ?></td>
						<td><?php echo $category_id; ?></td>
						<td><?php echo $status; ?></td>
						<td><img class='img-responsive' src='../images/<?php echo $image; ?>' alt='image' height='30px' width='50px'></td>
						<td><?php echo $tags; ?></td>
						<td><?php echo $comment; ?></td>
						<td><?php echo $date; ?></td>
								
				<?php } ?>
					</tr>

				</tbody>
				</table>