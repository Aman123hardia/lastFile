
<?php 
	session_start();
	if(!isset($_SESSION['AdminId']))
	{
		header('location: ../website/signIn.php');
	
	}
    require_once('assets/includes/sideNav.php');
	if(isset($_POST['addEmp']))
   	{
	require_once('empQueries.php');
	 $empObj->addEmployee();
 	 }
?>
<!--Container-->
<!-- <div class="col py-3"> -->
<div class="col py-3 px-5 border border-light  bg-light" style='overflow:scroll'>
	<!-- Header -->
	<div class='header' style='position:sticky; top: 0;z-index: 999;'>
	<h3 class=" text-center mb-5 pb-2 pt-2" style="background-color:rgb(228, 221, 212)">Add Employee
		<spna> <img src="assets/images/addEm.png" width="50" height="50" alt="" class="pl-3"></span>
	</h3>
   
	<!-- Add Employee Form -->
	<form   method="post" name="signup" enctype="multipart/form-data">
	<?php require_once('assets/includes/signUpForm.php')?>

	<!-- show hide password function  -->
	
	<script src='assets/js/pass.js'></script>
	<div class="text-center mt-5">
			<button type="submit" class="btn btn-success text-white btn-lg btn-block w-50" name='addEmp'>Add</button>
		</div>
	</form>
</div>
</div>
