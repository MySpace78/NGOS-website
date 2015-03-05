<?php include("connection.php");?>
<?php 
 		session_start();
 		if(!isset($_SESSION['user_name'])){
 				header("location:login.php");	 
	 
 			}	else
 			
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
				<h2><a href="insert_data.php">Insert New Post</a></h2>
				<h2><a href="#">View Comment</a></h2>
                <h2><a href="logout.php">Logout</a></h2>

		</div>
        
		<div id="welcome">
				<table width="1340" bgcolor="#996600" border="1" bordercolor="#333333">
						<tr>
							<th colspan="10" bgcolor="#CC9900" >View All Detail</th>
						</tr>
					
                    	<tr>

							<th>Post No</th>
							<th>Post Date</th>
							<th>Post Author</th>
							<th>Post Title</th>
							<th>Post Keywords</th>
							<th>Post Image</th>
							<th>Post Cotents</th>
							<th>Delete</th>
							<th>Edit</th>
						</tr>

						<tr>
								<?php
									
									$db_record = "select * from post ORDER BY 1 DESC";
									$result = mysql_query($db_record);
								while($row = mysql_fetch_array($result))
										{
											$id = $row['post_id'];
											$date = $row['post_date'];
											$author = $row['post_author'];
											$title = $row['post_title'];
											$keyword = $row['post_keywords'];
											$image = $row['post_image'];
											$content = substr($row['post_content'],0,100);
								?>

				
                			<td><?php echo $id; ?></td>
							<td style="width:80px"><?php echo $date; ?></td>
							<td style="width:100px"><?php echo $author; ?></td>
							<td><?php echo $title; ?></td>
							<td><?php echo $keyword; ?></td>
							<td><img src="../images/<?php echo $image; ?>" width="80" height="40"/></td>
							<td><?php echo $content; ?></td>
							<td><a href="delete.php?delete=<?php echo $id; ?>">Delete</a></td>
							<td><a href="modify.php?modify=<?php echo $id; ?>">Edit</a></td>
						
                        </tr>

			<?php 
						}  //end of while loop   
			?>
			
            </table>

		</div>

</body>
</html>

		<?php 
				} //end of session else statement
		?>