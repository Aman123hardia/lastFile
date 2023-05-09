
<?php 
	session_start();
	$user=0;
	if(isset($_SESSION['AdminId']))
	{
		require_once('assets/includes/titlebar.php'); 
		require_once('assets/includes/sideNav.php'); 
		require_once('connection/dbConnection.php');
		$EmId = $_GET['EmId'];
		if ($conn-> query("use ems") === TRUE) 
		$qur = "SELECT * FROM `Employees` WHERE `EmpId` = '$EmId'";
		$run = mysqli_query($conn,$qur);
		$record=mysqli_fetch_assoc($run);
	
		if ($record=='') {
		
		$qur = "SELECT * FROM `User` WHERE `UserId` = '$EmId'";
		$run = mysqli_query($conn,$qur);
		$record=mysqli_fetch_assoc($run);	
		$user=1;
		}	
	}
	   

	else{
		header('location:signIn.php');
	}

	if(isset($_POST['updateDetails']))
	{
		echo 'yash updation called';
		require_once('empQueries.php');
	// 	require_once('userQueries.php');
	 $updation =($user==1) ?'updateUser':'updateEmployee' ;
	 echo $updation;
	  $empObj->updateEmployee();
	}
?>


<div class="col py-3 px-5 border border-light  bg-light">
	 <!-- UPDATE HEADER  -->
	<h3 class="text-center mb-5 pb-2 pt-2" style="background-color:rgb(228, 221, 212)">Update Information
		<spna> <img src="assets/images/addEm.png" width="50" height="50" alt="" class="pl-3"></span>

	</h3>

<!-- update Form  -->
	<form enctype="multipart/form-data"  method="post">
		<div class="mb-3 mt-3 ">
			<label for="EmId">EmpId:</label>
			<input type="number"   readonly="readonly" class="form-control" id="EmId" name="EmId" value="<?php echo $_REQUEST['EmId']; ?>">
		</div>

		<div class="mb-2 mt-2 ">
			<label for="fname">First Name</label>
			<input type="text" class="form-control" id="fname" value=<?php echo $record['First_Name'] ?> name="fname"
			required>
		</div>

		<div class="mb-3 ">
			<label for="fname">Last Name</label>
			<input type="text" class="form-control" id="lname" value=<?php echo $record['Last_Name'] ?> name="lname">
		</div>

		<div class="mb-3 mt-3 ">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" value=<?php echo $record['Email'] ?> name="email">
		</div>
		
		<div class="mb-3 mt-1 ">
  		<label for="profileImage">Upload Your Profile:</label>
		  <img src="../website/profile/<?php echo $record['ProfileImage']; ?>" alt="hugenerd" width="50" height="50"  id='blah' class="rounded-circle">


		 <span class='pl-5 w-50' style='margin-left:2vw'>
			<label for="files" class="btn text-white bg-secondary">Change Profile Image</label>
		   <input type="file"  name="uploaded_file" style="visibility:hidden" class="form-control" onchange="readURL(this)" id="files" accept="png,jpg,svg,jpeg,gif,jfif" value="<?php echo $record['ProfileImage']; ?>" alt=''>
      </span>

</div>
		<div class="text-center mt-3">
			<button type="submit" class="btn btn-success text-white btn-lg btn-block w-50" name='updateDetails'>Update</button>
		</div>
	</form>
</div> 

<script>

function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah')
				.attr('src', e.target.result)
		};

		reader.readAsDataURL(input.files[0]);
	}
}
 </script>