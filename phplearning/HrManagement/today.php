 
<?php 
// session check and Database Connection
session_start();
$sid= $_SESSION['AdminId'];
if(isset($sid))
{
  require_once('assets/includes/titlebar.php'); 
  require_once('connection/dbConnection.php');
}
else{
    header('location: signIn');
}
 if(isset($_POST['todaytask']))
   	{

	require_once('empQueries.php');
	 $empObj->addTaskEmployee($sid);
 	 }

   function runMyFunction($taskId){
    $localhost="127.0.0.1";
    $username= "root";
    $conn = new mysqli($localhost, $username);
    if ($conn-> connect_error) {
      die(" Connection failed: " . $conn->connect_error);
    }
    else {
    if ($conn->query("Create database IF NOT EXISTS ems") === TRUE) {
    if ($conn-> query("use ems") === TRUE) 
    {  
      $qry = "UPDATE `EmployeeTasks` SET  `Status`='Done' WHERE `EmpTaskId` = '$taskId'";
      $result = mysqli_query($conn,$qry);
        if($result == true){
          ?>
          <script>
          alert('task Deleted Successfully');
          window.open('today','_self');
          </script>
        <?php
      }
   }
  }
}
  }
    if (isset($_GET['hello'])) {
      runMyFunction($_GET['hello']);
    }
?>

<!-- Show List of Employees -->
<div class="container-fluid">
<?php require_once('assets/includes/sideNav.php');?>
<div class="col py-3 px-5 border border-light  bg-light">
  <h3 class="text-center mb-5 pb-2 pt-2" style="background-color:rgb(228, 221, 212);position:sticky; top: 0;z-index: 999;'"><?php
  echo ($check >0) ? "Employee Profile" : "Admin Profile";
?>
  <spna>   <img src="assets/images/elist.png" width="50" height="50" alt="" class="pl-3"> 
</span></h3>

      <div class="col col-lg-12 col-xl-12">
        <div class="card rounded-3">
          <div class="card-body p-3">

            <h4 class="text-center my-3 pb-2">Enter Your Tasks</h4>

            <form class="row row-cols-lg-auto g-2 justify-content-center align-items-center mb-2 pb-1"  method="post">
              <div class="col-lg-8">
                <div class="form-outline">
                  <input type="text" id="task"  name='task' class="form-control" placeholder='Enter Task Here' required/>
               
                </div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary" onclick='save()' name='todaytask'>Save</button>
              </div>


            </form>

            <table class="table mb-4 text-center">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Task</th>
                  <th scope="col">Time Taken</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>

      <?php
    $time=0;
    $change=0;
  if ($conn-> query("use ems") === TRUE) 
   $today= date("Y-m-d") . "<br>";
   $record=mysqli_query($conn,"select * from `EmployeeTasks` where `TaskDate`='$today'");
     $sn=1;
     if(mysqli_num_rows($record)<1){
      echo "<tr><td colspan='10' class='text-center bg-secondary'>No Records Found</td></tr>";
     }
      while($row=mysqli_fetch_array($record)){
        ?>
      <tr>
                   <th scope="row"><?php echo $sn; ?></th>
                  <td><?php echo $row['Task_Name']; ?></td>
                  <td><?php echo $row['EmpId']; ?></td>
                  <td><?php echo $row['Status']; $sn++;?></td>
                  <!-- <td>
                  <a href="deletelink"  style='display:none' onclick="return confirm('Are you sure?')">Delete</a>
                  <button class='btn btn-danger' ><a style='text-decoration:none' class='link-light'  href="deletetask.php?EmpTaskId=<?php echo $row['EmpTaskId']; ?>" onclick="return checkDelete()"><i class="fa fa-trash"></i></a></button>
                <button class='btn btn-success' ><a style='text-decoration:none' class='link-light'  href="deletetask.php?EmpTaskId=<?php echo $row['EmpTaskId']; ?>" onclick="return finished()"><i class="fa fa-check"></i> </a></button>

                  </td> -->
                  <th scope="col"><a href="deletelink"  style='display:none' onclick="return confirm('Are you sure?')">Delete</a>
                <button class='btn btn-danger' ><a style='text-decoration:none' href="deletetask?EmpTaskId=<?php echo $row['EmpTaskId']; ?>" class='link-light'  onclick="return checkDelete()"><i class="fa fa-trash"></i></a></button>
                <button class='btn btn-success '><a style='text-decoration:none' class='link-light' href="today.php?hello=<?php echo $row['EmpTaskId']; ?>"><i class="fa fa-check"></i> </a></button>
              </th>
                </tr> 
                <?php
      }
      ?>
   <script >
  function checkDelete(){
      return confirm('Are you sure?');
  }

 
</script>
              </tbody>
            </table>

          </div>
        </div>
      </div>


