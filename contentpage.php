<?php
session_start();
?>
<html>
<head>
<title>Simple HTML Form</title>
</head>
<body>
<?php
       
		
        if ($_SESSION['loggedin'] = true)
        {
                echo 'Hello ' .  $_COOKIE['username'];
                echo '</br>'; echo '</br>';                
                echo ' <a href="login.php">Back to LogIn Page</a>';	//links to LogIn Page
                echo '</br>'; echo '</br>';     
        }
        
       else 
{
    echo "Please log in first to see this page.";
}
        
?>






<?php
mysql_connect("localhost", "admin", "adminpassword1!") or die("not connected");
mysql_select_db("login") or die("no db found");

$sql = "Select  * from User_Submitted_Self_Info";

$records=mysql_query($sql);



?>

<html>
<head>
<title>Users' Web Entered Information</title>
</head>

<body>
<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>First_Name</th>
<th>Middle_Name</th>
<th>Last_Name</th>
<th>Email</th>
<th>City</th>
<th>State</th>
<th>Country</th>
<th>Occupation</th>
<th>Company</th>
<th>Company_Location</th>
</tr>


<?php

while($user=mysql_fetch_assoc($records)){

	echo "<tr>";
	
	echo "<td>".$user['First_Name']."</td>";
	echo "<td>".$user['Middle_Name']."</td>";
	echo "<td>".$user['Last_Name']."</td>";
	echo "<td>".$user['Email']."</td>";
	echo "<td>".$user['City']."</td>";
	echo "<td>".$user['State']."</td>";
	echo "<td>".$user['Country']."</td>";
	echo "<td>".$user['Occupation']."</td>";
	echo "<td>".$user['Company']."</td>";
	echo "<td>".$user['Company_Location']."</td>";
	echo "</tr>";
	
}//end while

?>

</body>





</html>