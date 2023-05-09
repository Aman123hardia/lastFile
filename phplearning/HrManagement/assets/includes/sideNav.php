 
<?php 
// session check and Database Connection
session_start();
$sid= $_SESSION['AdminId'];
$check=0;
if(isset($sid))
{
  require_once('assets/includes/titlebar.php'); 
  require_once('connection/dbConnection.php');
  if ($conn-> query("use ems") === TRUE) 
  $data=mysqli_query($conn,"select * from `Admin` where `AdminId`='$sid'");
  $row=mysqli_fetch_array($data);
	if($row==''){
		$data=mysqli_query($conn,"select * from `Employees` where `EmpId`='$sid'");
		$row=mysqli_fetch_array($data);
		$check=1;
	}
	if($row==''){
		$data=mysqli_query($conn,"select * from `User` where `UserId`='$sid'");
		$row=mysqli_fetch_array($data);
		$check=2;

		
	}
	// echo $check;
}
else{
    header('location: ../website/signIn.php');
		
}
?>

<!-- Side Navigation -->

<div class="container-fluid">
  <div class="row flex-nowrap"  >
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark"  style=' position: -webkit-sticky; z-index: 1;'>
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 bg-dark" style=' position: -webkit-sticky; z-index: 1;'>
					<span class="fs-5 d-none d-sm-inline"><?php echo ($check==0)? 'Admin Dashboard':(($check==1 ) ? "Employee Dashboard" : "User Dashboard");?></span>
			
				<ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start  pb-2 " id="menu">
					<li class='pt-4'>
						<a href="<?php echo ($check==1) ?'today' : 'addEmp'?>" class="nav-link px-0"><i class='fas fa-user-edit' style='font-size:15px'></i> <span class="d-none d-sm-inline"><?php echo ($check==1) ?"Today Task" : "Add Employee"?></span></a>
					</li>
				
				<li class='pt-2' style="<?php echo ($check==1) ?'display:none' : '' ?>">
				 <a href="tasklist" class="nav-link px-0"><i class='fa fa-table' style='font-size:15px'></i> <span class="d-none d-sm-inline">Task List</span></a>
				</li>

				<li class='pt-2' style="<?php echo ($check>0) ?'display:none' : '' ?>">
				 <a href="userlist" class="nav-link px-0"><i class='fa fa-table' style='font-size:15px'></i> <span class="d-none d-sm-inline">User List</span></a>
				</li>

				<li class='pt-2'>
					<a href="<?php echo ($check ==1) ?"tasklist" :"adminHome"?>" class="nav-link px-0"><i class='fa fa-table' style='font-size:15px'></i> <span class="d-none d-sm-inline"><?php echo ($check ==1) ?"TaskList" : "Employee List"?></span></a>
				</li>
			
			</ul>
		
			<hr>
			<div class="dropdown pb-4">

				<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
					data-bs-toggle="dropdown" aria-expanded="false">
					<img src="uploads/<?php echo $row['ProfileImage']; ?>" alt="wait" width="40" height="40" class="rounded-circle">
					<span class="d-none d-sm-inline mx-1">
						<?php echo "  ".$row['First_Name'];?>
					</span>
				</a>
				<ul class="dropdown-menu dropdown-menu-dark text-small shadow">
					<li><a class="dropdown-item" href="#">Settings</a></li>
					<li><a class="dropdown-item" href="profile">Profile</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item" href="logout.php">Sign out</a></li>
				</ul>
			</div>
		
            </div>
      </div>

