<?php
	// connect to the server and select database
	mysql_connect("localhost", "root", "");
	mysql_select_db("login");
	
	$id = $REQUEST('id');
	
	$get = mysql_query ("SELECT * FROM users WHERE ID='$id'");
	$get2 = mysql_fetch_assoc($get);
	$username = $get2('username');
	
	

?>



<html>
<center>
<body>
<br/>
<br/>
<br/>
<br/>

Hello <b><?php echo $username; ?></b>


</body>
</center>
</html>