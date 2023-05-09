
<div class="mb-2 mt-2 ">
  <label for="fname">First Name</label>
  <input type="text" class="form-control" id="fname" placeholder="Enter First Name"  name="fname" >
</div>

<div class="mb-3 ">
  <label for="fname">Last Name</label>
  <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
</div>

<div class="mb-3 mt-3 ">
  <label for="email">Email:</label>
  <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email">
</div>

<div class="mb-3 mt-3 ">
  <label for="email">Password:</label>
  <div class="input-group mb-3">
    <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password"
      required="true" aria-label="password" aria-describedby="basic-addon1" />
    <span class="input-group-text p-2" onclick="showPass();">
      <i class="fa fa-eye" id="show_eye" aria-hidden="true"></i>
      <i class="fa fa-eye-slash" id="hide_eye" aria-hidden="true" style='display:none'></i>
    </span>
  </div>
</div>

<div class="mb-3 mt-1 ">
  <label for="profileImage">Upload Your Profile:</label>
  <input type="file"  class="form-control"  name="uploaded_file" accept="image/png,image/jpg,image/svg,image/jpeg,image/gif" required></input>
</div>
          <div class="form-check mb-3">
            <span class="w-30 bg-blue" style='margin-left:28%'>
            <a href="forget.php" style='text-decoration:none' >Forget Password</a>
            </span>
            <span class="w-30" style='margin-left:5%'>
               <a href="signIn.php" style='text-decoration:none' >SignIn</a>
            </span>
          </div>