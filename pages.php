<?php require_once("includes/connection.php"); ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <link rel="stylesheet" href="projectOne_style.css" media="all"  />
                <title>Welcome to ProjectOne</title>
		</head>

<body>

	<?php include("includes/header.php"); ?>
	<?php include("includes/navigation.php");?>

	<div id="content">
			<?php 

				if(isset($_GET['id'])){
	
					$id = $_GET['id'];
	
   						$select_post = "select * from post where post_id ='$id'";
   						$query = mysql_query($select_post);
   				
				while($row = mysql_fetch_array($query)){
	   					$id = $row['post_id'];
	   					$title = $row['post_title'];
	   					$date = $row['post_date'];
	   					$author= $row['post_author'];
	   					$image = $row['post_image'];
	   					$content = $row['post_content'];
	   
	     ?>
         
  				<h1 align="center"><a href="pages.php?id=<?php echo $id;?>"><?php echo $title ?></a></h1>
  				<p align="left"><b>Posted On:</b>&nbsp;&nbsp;<?php echo $date ?></p>
  				<p align="right">Published By</b>:&nbsp;&nbsp;<?php echo $author ?></p>
  				<center><img src="images/<?php echo $image; ?>" width="400" height ="200"</center>
   				<p align='justify'><?php echo $content ?></p> 
   				<p align="center"><a href="index.php">Back To Home page</a></p>
  
  		<?php   
			
			} // End of While loop 
				
				} //(isset($_GET['id']))
		?>
	
    </div>

	<?php include("includes/sideArea.php"); ?>
	<?php include("includes/footer.php"); ?>


</body>
</html>