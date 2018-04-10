<?php
$link=mysqli_connect("localhost", "admin", "adminpassword1!") or die("not connected");
mysqli_select_db($link, "dropdown") or die("no db found");
?>

<?php include "header.php"; ?>

<meta charset="UTF-8" />
<title>Contact Us</title>
<script src="modernizr-1.5.js"></script>
<link href="CSS/RegisterStyles.css" rel="stylesheet" type="text/css" />
<script src="formsubmit.js"></script>
<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="JS/ContactUs.js"></script>
<script src="JS/lettering.js"></script>
<script src="js/animation.js" type="text/javascript"></script>
<script src="js/validation.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/RegisterStyles2.css" type="text/css" />
</head>


<h1 class="fancy_title">Register</h1> <br>
<form method="post" name="myform" action="Register.php"  onsubmit="return validateForm()">
<ul>
	<li class="title">Who Are You?</li>
	<li class="fields">
		<label>*First Name:</label><br />
		<input name="first_name" id="first_name" class="req" type="text" /><br />
		<label>Middle Name:</label><br />
		<input name="middle_name" id="middle_name" type="text" /><br />
		<label>Last Name:</label><br />
		<input name="last_name" id="last_name" type="text" /><br />
		<label>*Email:</label><br />
		<input name="email" id="email" class="req" type="text" /><br />
	</li>
	<li class="title">Where Are You?</li>
	<li class="fields">
		<label>City:</label><br />
		<input  name="city" id="city" type="text" /><br />
		
		
	
	<label>State:</label><br />	  
	<select type="text" name="state">
	<?php
	$res=mysqli_query($link, "select * from states");
	while($row=mysqli_fetch_array($res))
	{
	?>
	<option> <?php echo $row["Name"]; ?></option>
	<?php
	}
	?>
	</select>
		
	
		
	
		
		
		<label>Country:</label><br />
				
	<select type="text" name="country">
	<?php
	$res=mysqli_query($link, "select * from countries");
	while($row=mysqli_fetch_array($res))
	{
	?>
	<option value="<?php echo $row['Name'];?>"> <?php echo $row['Name'];?></option>
	<?php
	}
	?>
	</select>
	
	
	
	
	</li>
	<li class="title">What Do You Do?</li>
	<li class="fields">
		<label>
		*Occupation:</label><br />
		<input name="occupation" id="occupation" class="req" type="text" /><br />
		<label>Company:</label><br />
		<input name="company" type="text" /><br />
		<label>Company Location:</label><br />
		<input name="location" type="text" /><br />
	</li>
</ul>
<br>

<input name="submit" id ="submitbutton" type="submit" value="Submit Form" />
</form>

<br>

<?php
mysql_connect("localhost", "admin", "adminpassword1!") or die("not connected");
mysql_select_db("login") or die("no db found");


if(isset($_POST['submit'])){
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$occupation = $_POST['occupation'];
	$company = $_POST['company'];
	$location = $_POST['location'];
	
	
	$query = "insert into User_Submitted_Self_Info ( First_Name, Middle_Name, Last_Name, Email, City, State, Country, Occupation, Company, Company_Location) values ('$first_name', '$middle_name', '$last_name', '$email', '$city', '$state', '$country', '$occupation', '$company', '$location')";
	if(mysql_query($query))
	{
		echo "Your information is inserted successfully into our database.  ";
	}
}
?>




<?php include "footer.php"; ?>

<script>
$(document).ready(function() {
$(".fancy_title").lettering();
});
</script>

<!--Animated Menu -->
<script>

var sse50 = function () {
    return {
        initMenu: function () {
            var m = document.getElementById('sses50');
            if (!m) return;
            m.style.width = m.getElementsByTagName("ul")[0].offsetWidth + 1 + "px";
            var url = document.location.href.toLowerCase();
            var a = m.getElementsByTagName("a");
            var k = -1;
            var l = -1;
            var hasEnd = 0; 
            for (var i = 0; i < a.length; i++) {
                if (a[i].href && url.indexOf(a[i].href.toLowerCase()) != -1 && a[i].href.length > l) {
                    k = i;
                    l = a[i].href.length;
                }
                if (a[i].className == "end")
                    hasEnd = 1;
            }
            if (k == -1 && /:\/\/(?:www\.)?[^.\/]+?\.[^.\/]+\/?$/.test) {
                for (var i = 0; i < a.length; i++) {
                    if (a[i].getAttribute("maptopuredomain") == "true") {
                        k = i;
                        break;
                    }
                }
                if (k == -1 && a[0].getAttribute("maptopuredomain") != "false")
                    k = 0;
            }
            if (k > -1) {
                a[k].className = 'current';
            }
            l = a.length;
            if (hasEnd) l--;
            for (i = 0; i < l; i++) {
                a[i].onmouseover = function () {
                    for (j = 0; j < l; j++) {
                        a[j].className = '';
                    }
                    this.className = 'current';
                };
                a[i].onmouseout = function () {
                    for (j = 0; j < l; j++) {
                        a[j].className = '';
                        if (k > -1) {
                            a[k].className = 'current';
                        }
                    }
                };
            }
        }
    };
} ();

if (window.addEventListener) {
    window.addEventListener("load", sse50.initMenu, false);
}
else if (window.attachEvent) {
    window.attachEvent("onload", sse50.initMenu);
}
else {
    window["onload"] = sse50.initMenu;
}
</script>





















