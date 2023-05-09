<?php
function deleteTask(){
	$id=$_REQUEST['EmpTaskId'];
 require('connection/dbConnection.php');
if ($conn-> query("use ems") === TRUE) 
    {
  
      
      // Delete Employee
          
	  $qry = "DELETE FROM `EmployeeTasks` WHERE `EmpTaskId` = '$id'";
      $result = mysqli_query($conn,$qry);
  
      echo "".$result;
      	if($result == true){
			?>
			<script>
			alert('task Deleted Successfully');
			window.open('today','_self');
			</script>
		<?php
      }
    }
	else{
		echo 'connection error';
	}
}

deleteTask();
    ?>