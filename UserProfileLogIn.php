<?php
	// connect to the server and select database
	mysql_connect("localhost", "root", "");
	mysql_select_db("login");
	
	$button = isset($_POST('button'));
	
	if($button)
	{
		//do this
		$username = $_POST('username');
		$password = $_POST('password');
		
	$get = mysql_query ("SELECT * FROM users WHERE username ='$username' AND password='$password'");
	$get2 = mysql_fetch_assoc($get);
	$id = $get2('id');
	$num = mysql_num_rows($get);
	
	if($num==1)
	{
		//do this if user exists
		header("location:profile.php?id=$id");
		
		
	}
	else
	{
	 	echo "This Username Does Not Exists";
	}
	
	}
	
	
	
?>

<html>
<center>
<body>
<br/>
<br/>
<br/>
<br/>
<form action="UserProfileLogIn.php" method="post">
Username : <input type="text" name="username"/>
<br/>
<br/>
Password: <input type="password" name="password"/>
<br/>
<br/>
<input type="submit" name="button" value="Login"/>

</form>



</body>
</center>
</html>

