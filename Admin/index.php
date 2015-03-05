<?php 
	 session_start();
 	if(!isset($_SESSION['user_name'])){
 	header("location:login.php");	 
	 
 	}else
 		{
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link href="admin_style.css" rel="stylesheet" media="all" />
					<title>Admin Panel</title>
	</head>

<body>
					<div id="header_admin">Welcome To Admin Panel</div>

			
					<div id="sidebar">
							<h2><a href="view_post.php">View Post</a></h2>
							<h2><a href="insert_data.php?insert=insert">Insert New Post</a></h2>
							<h2><a href="#">View Comment</a></h2>
							<h2><a href="logout.php">Logout</a></h2>
					</div>

					<div id="modify">
							<h3><p align="center">Welcome To Your Admin Panel</p></h3>
							<p align="center"> Here You Can Manage Your Web Site and Make Updation In It</p>
					</div>


<?php 
		if(isset($_GET['insert'])){
		include("insert_data.php");
		
		} // end of if statement

?>

</body>
</html>

<?php 

			} //end of seeeion else statement

?>