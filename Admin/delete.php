<?php include("connection.php"); ?>

<?php
 if(isset($_GET['delete'])){
	 $id = $_GET['delete'];
	 
	$delete_row = "delete from post where post_id = '$id'";
	if(mysql_query($delete_row)){
		
		echo "<script>alert('One Record has been delete')</script>";
		echo "<script>window.open('view_post.php','_self')</script>";
		
		}
	 
	 
	 
	 
	 
	 
	 }






?>