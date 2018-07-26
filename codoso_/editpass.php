<?php
 include 'includes/auth.inc.php';
 include 'includes/allfunctions.inc.php';

 $oldp = $_POST['old'];
 $newp = $_POST['new'];
 $cnfnewp = $_POST['cnfnew'];
 
 $oldp = md5($oldp);
 $sql ="SELECT id from usersdata WHERE password = '$oldp' ";
 $result = mysqli_query($connect,$sql);
 if(!mysqli_num_rows($result)) {
      echo "<p>Old password is not correct. Please enter correct password.</p>";
      exit();
 }
 if(strcmp($newp,$cnfnewp))  {
      echo '<p>New passwords do not match. Please enter correct passwords.</p>';
      exit();
 }
 $result2 = mysqli_fetch_assoc($result);
 $id = $result2['id'];
$newp = md5($newp);
 $query = "UPDATE usersdata SET password = '$newp' WHERE id = $id";
 if(!mysqli_query($connect,$query)){
 	echo "<p>Couldn't change password!</p>";
 	exit();
 }
 else {
 	echo "<script>alert('Password changed successfully!');window.history.back();</script>";
 }

?>