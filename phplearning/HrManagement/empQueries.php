<?php


class Employee
{

 function addEmployee()
 {
  require('fileUploading.php');
  $localhost="127.0.0.1";
  $username= "root";

 
   $conn = new mysqli($localhost, $username);

	if ($conn-> connect_error) {
		die(" Connection failed: " . $conn->connect_error);
	}
	else {
	if ($conn->query("Create database IF NOT EXISTS ems") === TRUE) {
    if ($conn->query('use ems') === TRUE){
      $val="('$name','$lname','$email','$encryptPass','$filename')";
      $sql= "INSERT INTO `Employees`( `First_Name`, `Last_Name`, `Email`,`Password`,`ProfileImage`) VALUES $val";
      if ($conn->query($sql) === TRUE) {
        ?>
        <script>
          alert('Employee Add Successfully');
          window.open('addEmp.php','_self');
        </script>
        <?php
   
      } else {
        // echo $sql;
        ?>
        <script>
        alert('Something Went Wrong Try Again');
         window.open('addEmp.php','_self');
        </script>
        <?php
      }
    }
    else echo "select any database "; 
		}
		
	}

 }
 //update Employee
 function updateEmployee()
 { 

  $localhost="127.0.0.1";
  $username= "root";
  $conn = new mysqli($localhost, $username);
    if ($conn-> query("use ems") === TRUE) 
    {
      $id=$_POST["EmId"];
      $fname=$_POST["fname"];
      $lname=$_POST["lname"];
      $email=$_POST["email"];
      $tempname = $_FILES['uploaded_file']['tmp_name'];
      $path = "uploads/";
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
      
      if ($mb<=3.0) {
      if(move_uploaded_file($tempname, $path)) {
        echo "The file ".$path." has been uploaded";
      } 
      else{
        echo "There was an error uploading ".$_FILES['filename']['error'];
      }
      }

      echo $id;
      $qry = "UPDATE `Employees` SET `First_Name` = '$fname', `Last_Name` = '$lname', `Email` = '$email', `ProfileImage`='$filename'   WHERE `EmpId` = $id;";
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
   else
   {
      // header('location: ../webs.php');
   }
 }
 
  
  //add Task Employee
  function addTaskEmployee($sid){
    $localhost="127.0.0.1";
    $username= "root";
    $conn = new mysqli($localhost, $username);
    if ($conn-> connect_error) {
      die(" Connection failed: " . $conn->connect_error);
    }
    else {
    if ($conn->query("Create database IF NOT EXISTS ems") === TRUE) {
    $task=$_POST["task"];
    require_once('connection/dbConnection.php');
    if ($conn-> query("use ems") === TRUE) 
    {
      $val="('$sid','$task','In Progress')";
      $sql= "INSERT INTO `EmployeeTasks`( `EmpId`, `Task_Name`, `Status`) VALUES $val";
      if ($conn->query($sql) === TRUE) {
        ?>
        <script>
          alert('Task Add  Successfully');
          window.open('today','_self');
        </script>
        <?php
   
      } else {
        // echo $;
        ?>
        <script>
        alert('Something Went Wrong Try Again');
        //  window.open('today','_self');
        </script>
        <?php
      }
    }
  
  }
}
  }
  
  // updateTask Employee
  function updateTaskEmployee(){
    require_once('../connection/databaseCon.php');
    if ($conn-> query("use ems") === TRUE) 
    {
      $id=$_REQUEST['EmpTaskId'];
      
      // Delete Employee
          
      $qry = "UPDATE `EmplEmployeesTask` SET  `Task_Name`='' WHERE `EmpTaskId` = '$id'";
      $result = mysqli_query($conn,$qry);
        if($result == true){
          ?>
          <script>
          alert('task Deleted Successfully');
          window.open('today.php','_self');
          </script>
        <?php
  
        
      }
    }

  }

  //delete Task Employee
  function deleteTaskEmployee($taskId){
    require_once('../connection/databaseCon.php');
    if ($conn-> query("use ems") === TRUE) 
    {

      // Delete Employee
          
      $qry = "DELETE FROM `EmployeesTask` WHERE `EmpTaskId` = '$taskId'";
      $result = mysqli_query($conn,$qry);
        if($result == true){
          ?>
          <script>
          alert('task Deleted Successfully');
          window.open('today.php','_self');
          </script>
        <?php
  
        
      }
    }
  }

}

$empObj= new Employee();
?>