<?php require_once("connection.php");?>


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
					<h2><a href="#">View Comment</a></h2>
					<h2><a href="insert_data.php ">Insert New Post</a></h2>
					<h2><a href="#">Logout</a></h2>

			</div>

<?php  
		if(isset($_GET['modify'])){
			$id = $_GET['modify'];
		
			$record = "select * from post where post_id ='$id'";
			$result = mysql_query($record);
			
			while($row = mysql_fetch_array($result)){
			
				$id = $row['post_id'];	
				$title = $row['post_title'];	
				$keyword = $row['post_keywords'];		
				$author = $row['post_author'];	
				$image = $row['post_image'];	
				$content = $row['post_content'];	
				
				} // end of while loop
			
			
		} // endl of (isset($_GET['modify']))
?>

		<div id="modify">
				<form method="post" enctype="multipart/form-data" action="modify.php?id_modify=<?php echo $id; ?>">

					<table align="center" width="480" border="0px" height="400" bgcolor="#999999">
    					 
                         <tr>
                         		<td colspan="6" align="center"><h1>Modify Data Here</h1></td>
                         </tr>
     				
                    	<tr height="30"> 
     							<td align="left">Title</td>
            					<td height="30"><input type="text" name="title" value="<?php echo $title; ?>" size="53" style="height:30px;"></td>
      					</tr>
       					
                        <tr> 
     							<td align="left">Author</td>
            					<td><input type="text" name="author" size="53"value="<?php echo $author; ?>" style="height:30px;"></td>
      					</tr>
       				
                    	<tr> 
     							<td align="left">keywords</td>
            					<td><input type="text" name="keywords" value="<?php echo $keyword; ?>" size="53" style="height:30px;"></td>
      					</tr>
       				
                    	<tr> 
     							<td align="left">Image</td>
            					<td ><input type="file" name="image" style="height:40px;">
             						<img src="../images/<?php echo $image; ?>" size="40" height="30" width="90"></td>
      					</tr>
       					
                        <tr> 
     							<td align="left">content</td>
            					<td><textarea  name="content"cols="40" rows="15"><?php echo $content; ?></textarea></td>
      					</tr>
      				
                    	<tr> 
     		
            					<td colspan="6" align="center"><input type="submit" name="submit" value="Modify" ></td>
      					</tr>
       
     
    			</table>

			</form>


	</div>




</body>
</html>


<?php 
		if(isset($_POST['submit'])){
				$id_mod = $_GET['id_modify'];
				$date_mod = date('m-d-y');
				$title_mod = $_POST['title'];
				$author_mod = $_POST['author'];
				$keyword_mod = $_POST['keywords'];
				$image_mod = $_FILES['image']['name'];
				$temp_image =$_FILES['image']['name'];
				$content_mod = $_POST['content'];
		
		if($title_mod=='' or $author_mod=='' or $keyword_mod=='' or $image_mod=='' or $content_mod==''){
				
				echo "<script>alert ('any of the following field Emapty')</script>";
		
		} else
		
		{
			move_uploaded_file($temp_image,"../images/$image_mod");
			$modify_query ="update post set post_title='$title_mod' ,
							post_date='$date_mod' , 
							post_author='$author_mod' , 
							post_image='$image_mod' , 
							post_keywords='$keyword_mod' , 					       			
							post_content='$content_mod'
							where post_id = '$id_mod'";
			if(mysql_query($modify_query)){
				
				echo "<script>alert('Post Has Been Successfully Updated ')</script>";
				echo "<script>window.open('view_post.php','_self')</script>";
				
				} //end of (mysql_query($modify_query))
			
		}	//end of else statement
	}	//  end of (isset($_POST['submit']))



?>