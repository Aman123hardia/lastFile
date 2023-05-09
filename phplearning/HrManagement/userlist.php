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
      // header('location: ../website/signIn.php');
  }
?>

<body>
<!-- Show List of Employees -->
<div class="container-fluid">
<?php require_once('assets/includes/sideNav.php');?>
<div class="col py-3 px-5 border border-light  bg-light">
  <h3 class="text-center mb-5 pb-2 pt-2" style="background-color:rgb(228, 221, 212);position:sticky; top: 0;z-index: 999;'">
 User List
  <spna>   <img src="assets/images/elist.png" width="50" height="50" alt="" class="pl-3"> 
</span></h3>


<div class="container col-xs-4 w-50 mb-4">
    <input type="text" id="myInput" onkeyup="myFunction()" class="input form-control w-500" placeholder="Search by names" title="Type in a name">
  </div>
  <div class="container-fluid" style='overflow:scroll'>
<table class="table bg-light text-center" id="myTable">
  <thead class="thead-dark ">
    <tr>
     <th scope="col">S.No</th>
     <th scope="col">Profile</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">UserId</th>
      <th scope="col">JoinDate</th>
      <!-- <th scope="col">UpdatedDate</th> -->
      <th scope="col" style='<?php echo ($check >0) ?"display:none" : "display:block"?>'>Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
  if ($conn-> query("use ems") === TRUE) 
   $result=mysqli_query($conn,"select * from `User`");
     $sn=1;
     if(mysqli_num_rows($result)<1){
      echo "<tr><td colspan='10' class='text-center bg-secondary'>No Records Found</td></tr>";
     }
      while($row=mysqli_fetch_array($result)){
        ?>
      <tr>
        <td><?php echo $sn ;?></td>
        
                <td><img src="uploads/<?php echo $row['ProfileImage']; ?>" alt="hugenerd" width="50" height="50" class="rounded-circle"></td>
                <td><?php echo $row['First_Name']; ?></td>
                <td><?php echo $row['Last_Name'];  ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['UserId']; ?></td>
                <td><?php echo $row['JoinDate'];  $sn++; ?></td>
                <!-- <td><?php  //echo $row['UpdateDate'];  ?></td> -->
                <th scope="col"><button class='btn btn-success '><a style='text-decoration:none' class='link-light' href="updateform.php?EmId=<?php echo $row['UserId']; ?>">Update</a></button>
                <a href="deletelink"  style='display:none' onclick="return confirm('Are you sure?')">Delete</a>
                <button class='btn btn-danger' ><a style='text-decoration:none' class='link-light'  href="deleteEmp.php?EmId=<?php echo $row['UserId']; ?>" onclick="return checkDelete()">Delete</a></button>
              </th>
                <script language="JavaScript" type="text/javascript">
  function checkDelete(){
      return confirm('Are you sure?');
  }

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>
      <?php
      }
?> 
</tbody>
</table>
</div>
</div>
</body>