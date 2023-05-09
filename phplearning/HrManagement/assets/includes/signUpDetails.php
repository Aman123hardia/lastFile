<?php 
 
  require_once('../../connection/dbConnection.php');
  // $user=$_POST["user"];
  $name=$_POST["fname"];
  $lname=$_POST["lname"];
  $email=$_POST["email"];
  $pass=$_POST["password"];
  // echo 'User'.$user;
  echo  $name,$lname,$email, $pass;
  $encryptPass = password_hash($pass, PASSWORD_DEFAULT);
  
  $tempname = $_FILES['uploaded_file']['tmp_name'];
  $path = "../";
  $filename = $_FILES['uploaded_file']['name'];
  echo $filename;
  $path = $path . basename( $filename);
  $mb= number_format( $_FILES["uploaded_file"]["size"]/1024/1024,1);
    echo $mb; 

    /*Check file is not greater than 3 MB*/
  if ($mb<=3.0) {
  if(move_uploaded_file($tempname, $path)) {
    echo "The file ".$path." has been uploaded";
   } 
   else{
     echo "There was an error uploading ".$_FILES['filename']['error'];
   }
  }

  if ($conn-> query("use ems") === TRUE) 
  {
    $val="('$name','$lname','$email','$encryptPass','$filename')";
    $sql= "INSERT INTO `User`( `First_Name`, `Last_Name`, `Email`,`Password`,`ProfileImage`) VALUES $val";
    if ($conn->query($sql) === TRUE) {
      ?>
      <script>
        alert('SignUp Successfully');
        window.open('signIn.php','_self');
      </script>
      <?php
 
    } else {
      echo $sql;
      ?>
      <script>
      alert('Something Went Wrong Try Again');
       window.open('signUp.php','_self');
      </script>
      <?php
    }
}
?>  

