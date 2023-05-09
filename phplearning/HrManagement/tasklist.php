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
    header('location: signIn.php');
}
?>
<!-- Show List of Employees -->
<div class="container-fluid">
<?php require_once('assets/includes/sideNav.php');?>
<div class="col py-3 px-5 border border-light  bg-light">
  <h3 class="text-center mb-5 pb-2 pt-2" style="background-color:rgb(228, 221, 212);position:sticky; top: 0;z-index: 999;'"><?php
  echo ($check >0) ? "Employee Profile" : "Employee Task List";
?>
  <spna>   <img src="assets/images/elist.png" width="50" height="50" alt="" class="pl-3"> 
</span></h3>

      <div class="col col-lg-12 col-xl-12">
        <div class="card rounded-3">
          <div class="card-body p-3">
          <div class="container-fluid" style='overflow:scroll'>
        <table class="table mb-4 text-center">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Task</th>
                  <th scope="col">Time Taken</th>
                  <th scope="col">Status</th>
                  <th scope="col" style='<?php echo ($check >0) ?"display:none" : "display:block"?>'>Actions</th>
                </tr>
              </thead>
              <tbody>

      <?php
    $time=0;
    $change=0;
  if ($conn-> query("use ems") === TRUE) 
   $today= date("Y-m-d") . "<br>";
   $record=mysqli_query($conn,"select * from `EmployeeTasks` where `EmpId`='$sid'");
     $sn=1;
     if(mysqli_num_rows($record)<1){
     $record=mysqli_query($conn,"select * from `EmployeeTasks`");
     if(mysqli_num_rows($record)<1){
      echo "<tr><td colspan='10' class='text-center bg-secondary'>No Records Found</td></tr>";
     }
     }
      while($row=mysqli_fetch_array($record)){
        ?>
      <tr>
                   <th scope="row"><?php echo $sn; ?></th>
                  <td><?php echo $row['Task_Name']; ?></td>
                  <td><?php echo $row['EmpId']; ?></td>
                  <td><?php echo $row['Status']; $sn++;?></td>
                  <td style='<?php echo ($check >0) ?"display:none" : "display:block"?>'>
                  <!-- <a href="deletelink"  style='display:none' onclick="return confirm('Are you sure?')">Delete</a> -->
                <button class='btn btn-danger' ><a style='text-decoration:none' class='link-light'  href="deletetask.php?EmpTaskId=<?php echo $row['EmpTaskId']; ?>" onclick="return checkDelete()"><i class="fa fa-trash"></i></a></button>
                <button class='btn btn-success' ><a style='text-decoration:none' class='link-light'  href="deletetask.php?EmpTaskId=<?php echo $row['EmpTaskId']; ?>" onclick="return finished()"><i class="fa fa-check"></i> </a></button>
                  </td>
                </tr> 
                <?php
      }
      ?>
                   <script language="JavaScript" type="text/javascript">
  function checkDelete(){
      return confirm('Are you sure?');
  }

  function save(){
    $time= date("h:i");
    echo $time;
    return true;
  }

  function finished(){
    
      return ;
  }
</script>
              </tbody>
            </table>
            </div>
            </div>
        </div>
      </div>