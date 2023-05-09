<?php
class Admin{
  function UpdateAdmin(){
     require_once('../connection/databaseCon.php');
     if ($conn-> query("use ems") === TRUE) 
      {
          $id=$_POST["EmId"];
          $fname=$_POST["fname"];
          $lname=$_POST["lname"];
          $email=$_POST["email"];
          // $pass=$_POST["password"];
      // $encryptPass = password_hash($pass, PASSWORD_DEFAULT);
  
          $tempname = $_FILES['uploaded_file']['tmp_name'];
          $path = "../website/profile/";
          $filename = $_FILES['uploaded_file']['name'];
          echo "Employee 1".$filename;
  
          // echo "meow meow ayi bili".$filename;
          $path = $path . basename( $filename);
  
          if($filename==''){
              $result= mysqli_query($conn,"select * from `Employees` where `Email`='$email'");  //check email in database
              $row=mysqli_fetch_array($result); 
              $filename =$row['ProfileImage'];
              echo "Employee 2".$filename;
          }
  
          if($filename==''){
              $result= mysqli_query($conn,"select * from `User` where `Email`='$email'");  //check email in database
              $row=mysqli_fetch_array($result); 
              $filename =$row['ProfileImage'];
              echo $filename;
          }
        
          if ($mb<=3.0) {
          if(move_uploaded_file($tempname, $path)) {
            echo "The file ".$path." has been uploaded";
           } 
           else{
             echo "There was an error uploading ".$_FILES['filename']['error'];
           }
          }
  
          echo $id;
          $qry = "UPDATE `Admin` SET `First_Name` = '$fname', `Last_Name` = '$lname', `Email` = '$email', `ProfileImage`='$filename'   WHERE `AdminId` = $id;";
          $result = mysqli_query($conn,$qry);
  
              if($result == true){
                  ?>
                  <script>
                      alert('Data Updated Successfully');
                      window.open('adminHome.php','_self');
                  </script>
                  <?php
              }
      }
    }  
}
?>