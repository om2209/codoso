
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
  <div class="container head center">
    <h1>Codoso</h1>
     <button type="button"><a href="index.php">Go Back</a></button>
  </div>
  <div class="container main center">
     <div id="uploader">
       <form action="upload.php" method="post" enctype="multipart/form-data">
          <h3>Change Your Profile Picture:</h3> 
          <input style="margin-left:auto;margin-right:auto;font-size:20px;margin-top:1%;" type="file" name="photo" size="25" />
          <button type="submit">Upload</button>
       </form>
       <form action="editpass.php" method="post" enctype="multipart/form-data">
          <h3>Change Your Password:</h3> 
          <label>Old Password</label>
          <input style="margin-left:auto;margin-right:auto;font-size:20px;margin-top:1%;" type="password" name="old" size="25" /> 
          <label>New Password</label>
          <input style="margin-left:auto;margin-right:auto;font-size:20px;margin-top:1%;" type="password" name="new" size="25" /> 
          <label>Confirm New Password</label>
          <input style="margin-left:auto;margin-right:auto;font-size:20px;margin-top:1%;" type="password" name="cnfnew" size="25" /> 
          <button type="submit">Change</button>
       </form>
     </div>
  </div>
</div>
</body>
</html>