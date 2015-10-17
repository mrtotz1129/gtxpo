<?php 
		$con = mysql_connect("localhost","root","root"); 
		if (!$con) 
		{ 
			die('Could not connect: ' . mysql_error()); 
		}
		mysql_select_db("my_db", $con);
		/* $ID = $_POST['user']; 
		$Password = $_POST['pass']; 
		*/ 
		function SignIn() 
		{ session_start(); //starting the session for user profile page 
			if(!empty($_POST['Uname'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
			{
				$query = mysql_query("SELECT * FROM Persons where userName = '$_POST[Uname]' AND pass = '$_POST[Pword]'") or die(mysql_error()); 
				$row = mysql_fetch_array($query) or die(mysql_error()); 
				if(!empty($row['Username']) AND !empty($row['Password'])) 
				{ 
					$_SESSION['Username'] = $row['Password']; echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
					} 
				else 
				{ 
					echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
					} 
			} 
		} if(isset($_POST['submit'])) { SignIn(); } 
?>

