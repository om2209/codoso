<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="custom.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <?php include 'fonts.php';?>-->
  <title>Codoso</title>
</head>
<body>
<div class="container">
   <div class="container-fluid center head">
      <h1>Codoso</h1>
   </div>
   <div class="container-fluid center main">
    <div id = "log">
       <?php
           include 'includes/auth.inc.php';
           $firstname = $_POST['fname'];
           $lastname = $_POST['lname'];
           $username = $_POST['uname'];
           $emailid = $_POST['email'];
           $pass = $_POST['pass'];
           $cfpass = $_POST['cpass'];
           if(strcmp($pass,$cfpass))  {
               echo '<p>Both passwords do not match. Please enter correct passwords.</p>';
               exit();
           }
           $pass = md5($pass);
           $query = "INSERT INTO `usersdata` (`fname`, `lname`, `uname`, `email`, `password`) VALUES ('$firstname', '$lastname', '$username', '$emailid', '$pass')";
           $res = mysqli_query($connect, $query);
           if(!$res ) {
               echo '<p> Could not enter data</p>';
               exit();
           }
           $last_id = mysqli_insert_id($connect);
           echo '<p>Congrats '.'<span style="text-decoration:underline; color: blue;">'.$firstname.' '.$lastname.' !'.'</span> Now you are a member of Codoso. <p>';
           echo 'Now, Codoso has '.$last_id.' users.';


        ?>
    </div>
    <p><a href="login.php" >Login from Here</a></p>
   </div>
</div>
</body>
</html>