<?php 
	$con = mysql_connect("localhost","root","root"); 
	if (!$con) 
	{ 
		die('Could not connect: ' . mysql_error()); 
	} 
	mysql_select_db("my_db", $con); 
	$sql="INSERT INTO Persons (FirstName, LastName, Username, Password, email) VALUES 	('$_POST[firstname]','$_POST[lastname]','$_POST[age]','$_POST[Uname]','$_POST[Pword]', '$_POST[Email]')"; 
	if (!mysql_query($sql,$con)) 
	{ 
		die('Error: ' . mysql_error()); 
	} 
	echo "1 record added"; header("Location: index.html");
	mysql_close($con); 
?>
