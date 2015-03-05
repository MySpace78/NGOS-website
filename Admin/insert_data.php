<?php  include("connection.php");  ?>

<?php 
 		session_start();
 			if(!isset($_SESSION['user_name'])){
 				header("location:login.php");	 
	 
 			}	else
 				
				{
 
?>

<html>
		<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<link href="admin_style.css" rel="stylesheet" media="all" />
							<title>Admin Panel</title>
		</head>
	
<body>

				<div id="header_admin">Welcome To Admin Panel</div>
				<div id="welcome">Welcome To Your Admin Panel</div>
                
				<div id="sidebar">
						<h2><a href="view_post.php">View Post</a></h2>
						<h2><a href="insert_data.php?insert=insert">Insert New Post</a></h2>
						<h2><a href="#">View Comment</a></h2>
                        <h2><a href="logout.php">Logout</a></h2>
				</div>

				<div id="modify">
						
                        <form method="post" enctype="multipart/form-data" action="insert_data.php">
									<table align="center" width="480" border="0px" height="400" bgcolor="#999999">
     										<tr>
     											<td colspan="6" align="center"><h1>Insert Data Here</h1></td>
                                             </tr>
     										
                                            <tr height="30"> 
     											<td align="left">Title</td>
            									
                                                <td height="30"><input type="text" name="title" size="53" style="height:30px;"></td>
      										</tr>
       
       										<tr> 
     											<td align="left">Author</td>
            									
                                                <td><input type="text" name="author" size="53" style="height:30px;"></td>
      										</tr>
       										
                                            <tr> 
     											<td align="left">keywords</td>
            									<td><input type="text" name="keywords" size="53" style="height:30px;"></td>
      										</tr>
       										
                                            <tr> 
     											<td align="left">Image</td>
            									<td><input type="file" name="image" size="39" style="height:30px;"></td>
      										</tr>
       										
                                            <tr> 
     											<td align="left">content</td>
            									<td><textarea  name="content"cols="40" rows="15"></textarea></td>
      										</tr>
      										
                                            <tr> 
     											<td colspan="6" align="center"><input type="submit" name="submit" title="Insert"></td>
      										</tr>
       						    </table>
					</form>
				
                </div>
</body>
</html>

<?php
 			if(isset($_POST['submit'])){
			$title = $_POST['title'];
			$date = date('d-m-y');
			$author = $_POST['author'];
			$keywords = $_POST['keywords'];
			$content = $_POST['content'];
			$image = $_FILES['image']['name'];
			$image_temp = $_FILES['image']['tmp_name'];
	
	
				if($title =='' or $author=='' or $keywords=='' or $content=='' or $image ==''){
						echo "<script>alert('Any of the field is empty ')</script>";
						exit();
			
									} //end of inner if statement
			else
		
				{
						move_uploaded_file($image_temp,"../images/$image");
		  					$query = "insert into post(post_title, post_date, 
													   post_author,post_image,post_keywords,post_content 
													   values('$title','$date','$author','$image','$keywords','$content')";
		  
		  	if(mysql_query($query))
					{
			  
			  			echo "<script>alert(' Post has been Publised successfully ')</script>";
			  			echo "<script>window.open('view_post.php', '_self')</script>";
			 		
						} // end of if mysql_query($query)
			
				} //end of else statment
 			
			} // end of (isset($_POST['submit']))
?>

<?php 

		} //end of sessiong if statement


?>