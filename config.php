<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "money_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		$registration = " 
        CREATE TABLE registration ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(225) NOT NULL , `email` VARCHAR(225) NOT NULL , `mobile` VARCHAR(225) NOT NULL , `password` VARCHAR(225) NOT NULL , `cpassword` VARCHAR(225) NOT NULL, PRIMARY KEY (`id`));";
        mysqli_query($conn, $registration);
	}

?>