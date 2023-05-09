<?php
function deleteEmployee(){
 require('connection/dbConnection.php');
if ($conn-> query("use ems") === TRUE) 
    {
      $id=$_REQUEST['EmId'];
      
      // Delete Employee
          
      $qry = "DELETE FROM `Employees` WHERE `EmpId` = '$id'";
      $result = mysqli_query($conn,$qry);
  
      echo "".$result;
      	if($result == true){
          $conn->close();
      		?>
          <script>
      		alert('Data Deleted Successfully');
      		window.open('adminHome','_self');
      		</script>
         <?php
      }
    }
    else{
    header('location: signIn');
    }
}

deleteEmployee();
    ?>