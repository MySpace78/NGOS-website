
<?php include("connection.php"); ?>


	<div id="sideArea">

			<div id="Search_Record">
					<form action="search.php" method="get" enctype="multipart/form-data">
    					<input type="text" placeholder="search on this site" name="value" size="30" style="height:30px"/>
        				<input type="submit" name="search" value="Search" style="height:30px; width:55px" />
    				</form>
			</div>

			<div id="social_media">
										<h3 align="center">Fullow Us</h3>
					
                    <a href="http://www.facebook.com/nanho.kalho" target="_blank"><img src="images/facebook.jpg"/></a>
						<img src="images/Pin.jpg" />
						<img src="images/twitter.jpg" />
				</div>

										<h2 align="center">Most Recent Post</h2>
				<div id="sidebar_links">

<?php 
		
		
			$query = "select * from post order by 1 DESC LIMIT 0,4";
			$record = mysql_query($query);
		
				while ($row = mysql_fetch_array($record)){
					$id = $row['post_id'];
					$title = $row['post_title'];
					$image = $row['post_image'];
	
						echo "<a href=\"pages.php?id=$id\"> <h3 align='center'>$title</h3>  </a>";	
						echo "<p align='center'><a href=\"pages.php?id=$id\"><img src='images/$image' width='140' height='100'></a></p>";
			
				} // End of While loop
		
?>
			</div>

			</div>