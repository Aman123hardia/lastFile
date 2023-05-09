<?php
require_once('connection/dbConnection.php');
	   $name=$_POST["fname"];
	   $lname=$_POST["lname"];
	   $email=$_POST["email"];
	   $pass=$_POST["password"];
	
	   $encryptPass = password_hash($pass, PASSWORD_DEFAULT);
	   
	   $tempname = $_FILES['uploaded_file']['tmp_name'];
	
	   $dir =mkdir(date("d-m-Y"));
	  echo $dir;
	   $path = "uploads/$dir/";
	   echo $path;
	   $filename = $_FILES['uploaded_file']['name'];
	   $path = $path . basename( $filename);
	   $mb= number_format( $_FILES["uploaded_file"]["size"]/1024/1024,1);
		//  echo $mb; 
		//  echo  $name,$lname,$email, $pass,$filename;
		 /*Check file is not greater than 5 MB*/
	   if ($mb<=3.0) {
	   if(move_uploaded_file($tempname, $path)) {
		 echo "The file ".$path." has been uploaded";
		} 
		else{
		  echo "There was an error uploading ".$_FILES['filename']['error'];
		}
	   }

?>
	