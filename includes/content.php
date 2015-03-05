
<?php include("connection.php"); ?>


	<div id="content">

<?php 
   			
			$db_select = "select * from post order by rand() LIMIT 0,2";
   			$query = mysql_query($db_select);
   
   		while($row = mysql_fetch_array($query)){
	   				$id = $row['post_id'];
	   				$title = $row['post_title'];
	   				$date = $row['post_date'];
	   				$author= $row['post_author'];
	   				$image = $row['post_image'];
	   				$content = substr($row['post_content'],0,100);

?>
  					<h1 align="center"><a href="pages.php?id=<?php echo $id;?>"><?php echo $title ?></a></h1>
  					<p align="left"><b>Posted On:</b>&nbsp;&nbsp;<?php echo $date ?></p>
  					<p align="right">Published By</b>:&nbsp;&nbsp;<?php echo $author ?></p>
  					
                    <center>
                    	<img src="images/<?php echo $image; ?>" width="400" height ="200" />¨
                    </center>
   					
                    <p align='justify'><?php echo $content ?></p> 
   					<p align="right"><a href="pages.php?id=<?php echo $id; ?>">Read More</a></p><br /><br />
  
<?php   
		} // End of while loop
		
?>
<h3 align="center">

<?php
		$per_page = 2;
		
		$query = mysql_query("select COUNT('post_id') from post");
		$pages = ceil(mysql_result($query,0)/$per_page);
		
	if(!isset($_GET['page']))
		
		{
			header("location: index.php?page=1");
			
	} 
	else
	{
		$page = $_GET['page'];
		
		}
		
		
	$start = (($page-1)*$per_page);
	$record = mysql_query("select * from post LIMIT $start , $per_page");
	while($row = $record['']){
		
					
		}
		
		for($x = 1; $x<=$pages; $x++){
			
			echo '<a href="?page='.$x.'">'.$x.'</a>';
			}
		echo "<br> Current Page:$page";
?>
</h3>

</div>