<?php session_start(); 
if(isset($_SESSION['AdminId']))
{
	?>
<script>
    window.open('adminHome','_self');
</script>
	<?php
}

if(isset($_POST['login']))
{

  require_once('connection/dbConnection.php');
  $email=$_POST["email"];
  $pass=$_POST["password"];
  echo $email,$pass;
  if ($conn-> query("use ems") === TRUE) 
  {
    $result= mysqli_query($conn,"select * from `Admin` where `Email`='$email'");  //check email in database
    $row=mysqli_fetch_array($result); 
    $decrypt =$row['Password'];
    $verify=password_verify($pass , $decrypt);

    if($verify){
    
      session_start();
      $_SESSION['AdminId']=$row['AdminId'];
  
      ?>
      <script>
        alert('SignIn Successfully');
        window.open('adminHome','_self');
      </script>
      <?php
    }
    else {
      $result= mysqli_query($conn,"select * from `Employees` where `Email`='$email'");  //check email in database
      $row=mysqli_fetch_array($result); 
      $decrypt =$row['Password'];
      $verify=password_verify($pass , $decrypt);
  
      if($verify){
      
        session_start();
        $_SESSION['AdminId']=$row['EmpId'];
    
        ?>
        <script>
          alert('SignIn Successfully');
          window.open('profile','_self');
        </script>
        <?php
  }
  else{


    $result= mysqli_query($conn,"select * from `User` where `Email`='$email'");  //check email in database
      $row=mysqli_fetch_array($result); 
      $decrypt =$row['Password'];
      $verify=password_verify($pass , $decrypt);
  
      if($verify){
      
        session_start();
        $_SESSION['AdminId']=$row['Email'];
    
        ?>
        <script>
          alert('SignIn Successfully');
          window.open('adminHome','_self');
        </script>
        <?php
  }
  else{
    ?>
    <script>
      alert("email and Password not Math");
      window.open('signIn.php','_self');
    </script>
    <?php
    
  } 
}
  
}
  }
  

}
?>

































<?php  require_once('assets/includes/titlebar.php') ?>

<body class='bg-light'>
  <!-- container start -->
  <div class='container-fluid border border-grey '>	
    <!-- Header start -->
<?php require_once('header.php')?>
    <!-- Header End -->
   
    <div class="row">
      <!-- Right Side Image Start -->
      <div class="col-lg-6 mt-2 mb-5 ">
        <img src='assets/images/sign.png' class="img-fluid " style='height:100%'/>
      </div>
      <!-- Right Side Image End -->
         
      <!-- Sign Up Form Start-->
      <div class="col-lg-6 mt-4 pt-3 bg-light mb-5 p-3">
        
      <form method="post">
       <h2 class='text-center text-dark p-1 text-center' >SignIn Form</h2>
         <div class="mb-3 mt-3 ">
            <label for="email">Email:</label>
            <input type="email" class="form-control p-2" id="email" placeholder="Enter Your Email" name="email">
          </div>

          <div class="mb-3 mt-3 ">
            <label for="email">Password:</label>
            <div class="input-group mb-3">
                <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                  <span class="input-group-text p-3" onclick="showPass();">
                    <i class="fa fa-eye" id="show_eye" aria-hidden="true"></i>
                    <i class="fa fa-eye-slash" id="hide_eye" aria-hidden="true"  style='display:none' ></i>
                  </span>
            </div>
          </div>
            
            <div class="form-check mb-3 pt-3">
             <span class="w-30 bg-blue" style='margin-left:28%'>
               <a href="forget.php" style='text-decoration:none' >Forget Password</a>
              </span>
              <span class="w-30" style='margin-left:5%'>
               <a href="signUp.php" style='text-decoration:none' >SignUp</a>
              </span>
            </div>
          
            <div class="text-center mt-2">
              <button type="submit" class="btn btn-secondary btn-lg btn-block w-50" name='login'>Submit</button>
            </div>
        </form>
          <!-- SignUp Form End -->
    </div>
    <!-- row End-->
  </div>
  <script src='assets/js/pass.js'> </script>
</body>
