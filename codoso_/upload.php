<?php
 include 'includes/auth.inc.php';
 include 'includes/allfunctions.inc.php';

// $valid_file = " "; 
 //if they  uploaded a file...
if(isset($_FILES['photo']))
{
//  $file = $_FILES['photo'];
 // print_r($file);
  //if no errors...
  if(!$_FILES['photo']['error'])
  {
    //now is the time to modify the future file name and validate the file
    $new_file_name = strtolower($_FILES['photo']['name']); //rename file
    if($_FILES['photo']['size'] > (10240000)) //can't be larger than 10 MB
    {
      $valid_file = false;
      $message = '<div style="text-align:center;margin-top:20px;"><p style="color:red; font-size:16px;">Oops!  Your file\'s size is to large.</p></div>';
      echo $message;
    }
    else {
      $valid_file = true;
    }
    
    //if the file has passed the test
    if($valid_file)
    {
      //move it to where we want it to be
      $target = 'img/';
      move_uploaded_file($_FILES['photo']['tmp_name'], $target.$new_file_name);
      $id = $_SESSION['user_id'];
      $query = "INSERT INTO `pics` (`id`, `path`) VALUES ($id, '$new_file_name')";

      $result = mysqli_query($connect,$query) or die('Error in database storing');
     // $message = '<div style="text-align:center;margin-top:20px;"><p style="color:green; font-size:16px;">Congratulations!  Your file was accepted and saved to database.</p></div>';
      echo '<script>alert("Profile picture successfully changed!");window.history.back();</script>';

    }
  }
  //if there is an error...
  else
  {
    //set that to be the returned message
    $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
    echo $message;
  }
}

?>