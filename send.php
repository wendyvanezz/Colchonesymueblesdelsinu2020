<?php
$servername = "localhost";
$database = "registro";
$username = "prueba";
$password = "1q2w3e4r5t";
	$con=mysqli_connect($servername, $username, $password, $database) or die("Connection failed: " . mysqli_connect_error());
	
	if (mysqli_query($conn, $sql)) {
	      echo "New record created successfully";
	      $sql "INSERT INTO `contactos`(`name`,`phone`,`email`,`message` VALUES(NULL,'thiago','40505000','wendyvaneq@gmail.com','message')";
	    } 
	else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	mysqli_close($conn);



}