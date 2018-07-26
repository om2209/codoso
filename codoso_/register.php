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
       <form action="validate.php" method="post">
         <label>First Name</label><br>
         <input type = "text" name="fname"><br>
         <label>Last Name</label><br>
         <input type = "text" name="lname"><br>
         <label>Username</label><br>
         <input type = "text" name="uname"><br>
         <label>Email id</label><br>
         <input type = "email" name="email"><br>
         <label>Password</label><br>
         <input type = "password" name="pass"><br>
         <label>Confirm Password</label><br>
         <input type = "password" name="cpass"><br>
         <button type="submit">Sign Up</button>
       </form>
       <p>Already a member? <a href="login.php" >Login Here</a></p>
    </div>
   </div>
</div>
</body>
</html>