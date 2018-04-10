<?php
	 echo "Thank you for entering information about yourself!" . "<br>". "<br>";
	 echo "Your First name is " . $_POST['first_name'] . "<br>";
	 echo "Your Midle name is " . $_POST['middle_name'] . "<br>";
	 echo "Your Last name is " . $_POST['last_name'] . "<br>";
     echo "Your email address is " . $_POST['email']  . "<br>";
	 echo "Your city is " . $_POST['city']  . "<br>";
	 echo "Your state is " . $_POST['state']  . "<br>";
	 echo "Your country is " . $_POST['country']  . "<br>";
	 echo "Your occupation is " . $_POST['occupation']  . "<br>";
	 echo "Your company is " . $_POST['company']  . "<br>";
	 //echo "Your sex is " . $_POST['mySex']  . "<br>";
	 /*echo "Your password is " . $_POST['password']  . "<br>";
	 if (isset($_POST['myTextArea'])) {
     // Escape any html characters
     echo "Your typed text in Text Area is: " .htmlspecialchars($_POST['myTextArea']) . "<br>";
		}
		

        if (array_key_exists ('mailListBox', $_POST))
        {
                 echo "You have requested our newsletter<br>";
        } else {
                echo "You have declined our newsletter<br>";
        }
        
    //echo("Your Interests: "); print_r($_POST['interest']); */
	
?>