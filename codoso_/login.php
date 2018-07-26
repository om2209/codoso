<?php
include 'includes/auth.inc.php';
include 'includes/allfunctions.inc.php';


if( already_logged() ){
  $id = $_SESSION['user_id'];
  header('Location: index.php?id='.$id.'');
  exit();
}

if(isset($_POST['submit'])){
     
  $username = $_POST['uname'];
  $password = $_POST['pass'];
  
  $password = md5($password);
  if( user_exists($username) ){
      login_perform($username,$password);    
  }
  else echo '<script>alert("You are not registered");</script>';
  
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="custom.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <title>Codoso</title>
</head>
<body>
  <div id="fb-root"></div>
<div class="container">
   <div class="container-fluid center head">
      <h1>Codoso</h1>
   </div>
   <div class="container-fluid center main">
    <div id = "log">
       <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
         
         <label>Username</label><br>
         <input type = "text" name="uname"><br>
         <label>Password</label><br>
         <input type = "password" name="pass"><br>
         <button type="submit" name="submit" >Login </button>
       </form>
       <p>Not a member? <a href="register.php" >Register Here for 5 rupees only!</a></p>
       <div class="fb-login-button center" data-max-rows="2" data-size="xlarge" data-show-faces="true" data-auto-logout-link="true"></div>
    </div>
   </div>
  
</div>
</body>
</html>