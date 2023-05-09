<?php

// function databaseConnection(){
  $localhost="127.0.0.1";
  $username= "root";

 
   $conn = new mysqli($localhost, $username);

	if ($conn-> connect_error) {
		die(" Connection failed: " . $conn->connect_error);
	}
	else {
	if ($conn->query("Create database IF NOT EXISTS ems") === TRUE) {
			// echo "Database created successfully <br>";
		} 
	else {			
		if ($conn->query('use ems') === TRUE);
		else echo "select any database "; 
			echo "Error creating database: " . $conn->error;
		}
		/*End Databases */
	}
// }


?>

