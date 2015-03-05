
<?php include("includes/connection.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <link rel="stylesheet" href="projectOne_style.css" media="all"  />
							<title>Welcome to ProjectOne</title>
		</head>

<body>
	
		<?php include("includes/header.php"); ?>
		<?php include("includes/navigation.php"); ?>

				<div id="content">
						<h3 align="center"> Your Search Result Is Here </h3>
		<?php
	
				if(isset($_GET['search'])){
    
     					$value = $_GET['value'];
     
	 				$query = " select * from post where post_content like '%$value%' LIMIT 0,5";
	 				$record = mysql_query($query);
     
	 			while($row = mysql_fetch_array($record)){
					
					$id = $row['post_id'];
					$title = $row['post_title'];
					$image = $row['post_image'];
					
				
		 ?>
    
    
  			<center> 
          
    				<a href="pages.php?id=<?php echo $id; ?>">
					<h3> <?php echo $title; ?></h3>
					</a>
					<img src="images/<?php echo $image; ?>" width="400" height="100" />
             	
			</center>
			

		<?php 	 
				
		
				}  // End of While loop
					
					} // End of (isset($_GET['search']))
		?>
	
    		</div>


		<?php include("includes/sideArea.php"); ?>
		<?php include("includes/footer.php"); ?>


</body>
</html>
