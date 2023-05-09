<?PHP
  /*check File Is Not empty*/ 
  if(!empty($_FILES['uploaded_file']) && $_FILES["uploaded_file"]["size"]>0)
  {
    /*convert filesize into mb type*/
    $mb= number_format( $_FILES["uploaded_file"]["size"]/1024/1024,1);
    echo $mb; 

    /*Check file is not greater than 5 MB*/
    if ($mb<=5.0) {
      $filename = $_FILES['uploaded_file']['name'];
      $ext =  strtolower(pathinfo($filename, PATHINFO_EXTENSION));
      
      /*File Extension Check*/
      if ($ext == ('png'||'gif'||'jpeg'||'svg'||'jpg')) {
       $path = "uploads/";
       $path = $path . basename( $_FILES['uploaded_file']['name']);
        
         /*Move File */
        if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
         echo "The file ".  basename($filename)." has been uploaded";
        } 
        else{
          echo "There was an error uploading ".$_FILES['filename']['error'];
        }
      }
    }

    else {
      echo "Sorry,file size must be greater than 0 and less than equal 5";
     }
   
  }
 
  else {
    echo "Empty File Not Uploaded";
  }
  
?>