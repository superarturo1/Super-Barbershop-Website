<?php
	// Get values passe from form in login.php file
		$username = $_POST['user'];
		$password = $_POST['pass'];
				
		
	// to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	
	// connect to the server and select database
	mysql_connect("localhost", "root", "");
	mysql_select_db("login");
	
	// Query the database for user 
	$result = mysql_query("select * from users where username = '$username' and password = '$password'")
	or die("Failed to query database ".mysql_error());
	$row = mysql_fetch_array($result);
	
	
	

	


	
	
	
	
if ($row['username'] == $username && $row['password'] == $password){
	
		echo "Login success!!! Welcome " .$row['username']; 
		$_SESSION['loggedin'] = true;
		setcookie("username",$username);
    		
    		echo '</br>'; echo '</br>';

			echo ' <a href="contentpage.php">Content Page</a>';	//links to Content page
		} 
		
		
		
		else {
		echo "Failed to login!";
		$_SESSION['loggedin'] = false;
		echo '</br>'; echo '</br>';
		echo ' <a href="login.php">Back to LogIn Page</a>';	//links to LogIn Page
	}
	
?>