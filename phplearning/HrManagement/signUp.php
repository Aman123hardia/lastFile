<?php session_start(); 
if(isset($_SESSION['AdminId']))
{
	?>
<script>
    window.open('adminHome','_self');
</script>
	<?php
}
?>
<?php require_once('assets/includes/titlebar.php');?>
<body>
  <!-- container start -->
  <div class='container-fluid  bg-light border border-grey '>	
    <!-- Header start -->
    <?php require_once('header.php') ?>
    <!-- Header End -->
   
    <div class="row">
      <!-- Right Side Image Start -->
      <div class="col-lg-6 mt-1 mb-3">
        <img src='assets/images/sign.png' class="img-fluid " style='height:100%'/>
      </div>
      <!-- Right Side Image End -->
         
      <!-- Sign Up Form Start-->
      <div class="col-lg-6 mt-1 pt-1 bg-light mb-1 p-3">
        
      <form action='assets/includes/signUpDetails.php' method="post" name="signup" enctype="multipart/form-data">
       <h2 class='text-center text-dark p-1 text-center pb-3' >SignUp Form</h2>
        <?php require_once('assets/includes/signUpForm.php')?>
       <div class="text-center mt-2">
          <button type="submit" class="btn btn-secondary btn-lg btn-block w-50" name='register'>Submit</button>
          </div>
        </form>
          <!-- SignUp Form End -->
    </div>
    <!-- row End-->
  </div>
<script src='assets/js/pass.js'> </script>
</body>


