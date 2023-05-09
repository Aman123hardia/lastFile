 
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
?>

<!-- Show List of Employees -->
<div class="container-fluid">
<?php require_once('assets/includes/sideNav.php');?>
<div class="col py-3 px-5 border border-light  bg-light">
  <h3 class="text-center mb-5 pb-2 pt-2" style="background-color:rgb(228, 221, 212)">
  <?php echo ($check==0)? 'Admin Profile':(($check==1 ) ? "Employee Profile" : "User Profile");?>
  <spna>   <img src="assets/images/elist.png" width="50" height="50" alt="" class="pl-3"> 
</span></h3>


<div class="col col-md-12 mb-2 mb-lg-0 mt-5 pt-1 pb-3" >
        <div class="card mb-3" >
				<div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white bg-secondary"
              style="border-top-left-radius: .2rem; border-bottom-left-radius: .2rem;">
              <img src="uploads/<?php echo $row['ProfileImage']; ?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80%;" />
              <h5><?php echo "  ".$row['First_Name'];?></h5>
              <p>Web Designer</p>
              <a href="adminupdate.php?EmId= <?php echo($check==0)? $row['AdminId']:(($check==1 ) ?$row['EmpId'] : $row['UserId']);?>" style='text-decoration:none,color:white'><i class="far fa-edit mb-5" style='color:white' ></i></i></a>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h5 class='text-secondary'>  <?php echo ($check==0)? 'Admin':(($check==1 ) ? "Employee" : "User");?> Information</h5>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                <div class="col-6 mb-3">
                    <h6>First Name</h6>
                    <p class="text-muted"><?php echo "  ".$row['First_Name'];?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Last Name</h6>
                    <p class="text-muted"><?php echo "  ".$row['Last_Name'];?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6><?php echo ($check >0) ?"Employee Id" : "AdminId"?></h6>
                    <p class="text-muted"><?php echo ($check >0) ? $row['EmpId'] : $row['AdminId'];
?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo "  ".$row['Email'];?></p>
                  </div>
                 
                </div>
                <h6>Experience</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Recent</h6>
                    <p class="text-muted">BTech and IIT Bombay </p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Most Viewed</h6>
                    <p class="text-muted">Dolor sit amet</p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                <p class='me-3'>See More admins</p>
                <a href="adminlist.php?EmId=<?php echo $row['AdminId']; ?>" style='text-decoration:none,color:black'><i class='fas fa-chalkboard-teacher me-4 pt-1 pl-5 ' style='font-size:1.8vw;color:red'></i></a>
                  <p class='me-3 text-center ' style='margin-left:8vw'>Contact Us Admins</p>
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
			</div>
      </div>