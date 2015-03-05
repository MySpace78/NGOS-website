<?php  include("connection.php");?>

	<?php 
		session_start();
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
 		<title>Admin Login </title>
    	<link rel="stylesheet" href="admin_style.css" media="all" />
	</head>


<body>
		<div id="header_admin">Welcome To Admin Panel
        </div>
		
        <div id="sidebar">

			<h2><a href="view_post.php">View Post</a></h2>
			<h2><a href="insert_data.php?insert=insert">Insert New Post</a></h2>
			<h2><a href="#">View Comment</a></h2>
			<h2><a href="#">Logout</a></h2>
		</div>

<div id="admin_login">
	<form action="login.php" method="post">
			<table width="300" height="200" border="1">
   				<tr>
   					<th align="center"><h3>Welcome To Your Login Page</h3></th>
   				</tr>
   				
                <tr>
    				<td><input type="text" name="username" style="width:290px;height:25px"/> </td>
    			</tr>
    		
            	<tr>
    				<td><input type="password" name="pwd" style="width:290px;height:25px" /></td>
    			</tr>
    		
            	<tr>
    				<td align="center"><input type="submit" name="login" value="Login" style="width:70px;height:30px;" /></td>
    			</tr>
  			</table>
  </form>

</div>


</body>
</html>

<?php
		if(isset($_POST['login'])){
			
			 $user_name = mysql_real_escape_string($_POST['username']);
			 $user_pass =mysql_real_escape_string( $_POST['pwd']);
			 
			
			
			$query = "select * from admin_login where user_name ='$user_name' AND user_password = '$user_pass'";
			$row = mysql_query($query);
			if(mysql_fetch_row($row)>0){
				
				$_SESSION['user_name']=$user_name;
				echo "<script>window.open('index.php','_self')</script>";
				
				}else
				{
				echo "<script>alert('User name Or Password is incorrect')";
					
					
					} //end of else
			
			} //end of if statement
	
?>