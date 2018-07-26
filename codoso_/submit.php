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
  <?php include 'head.php' ?>
  <div class="container mainin">
    <form action="submit.php" method="post">
    <div class="row">
      <div class="col-sm-8 col-md-8 col-lg-8" id="editor">
        <textarea rows="20" cols="100" placeholder="Enter your code here..." name="code">
        </textarea>
        <label>Custom Input:</label>><br>
        <textarea rows="3" cols="100" placeholder="Custom Input" name="input">
        </textarea>
        <label>Output:</label><br>
        <textarea rows="3" cols="100" placeholder="Output" name="output">
        </textarea>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4 center" id="langs">
        <label>Language:</label>><br>
        <select name="lang">
          <option value="c">C</option>
          <option value="cpp">C++</option>
          <option value="py">Python</option>
          <option value="java">Java</option>
        </select>
      </div>
    </div>
      <div class="row center">
         <input type="submit" name="submit" value="Run Your Code">
      </div>
    </form>
    </div>
    <?php
        if(isset($_POST['submit'])) {
            $query_ =" SELECT uname FROM usersdata WHERE id = $id ";
            $result_ = mysqli_query($connect,$query_);
            $result__= mysqli_fetch_assoc($result_);
            $path = implode(",",$result__);
            if(!is_dir($path)){
                //Directory does not exist, so lets create it.
                mkdir($path, 0777);
            }
            $path = $path.'/';
            $files = glob($path . '*.{c,cpp,java,py}');
            if ( $files !== false )
            {
                $filecount = count( $files );
                echo $filecount;
            }
            else
            {
                $filecount = 0;
            }
            $filecount++;
            $halfname = $filecount;
            if(isset($_POST['code'])) {
                $data = $_POST['code'];
            }
            else {
              echo '<script>alert("No code to run!"");</script>';
              die();
            }
            $ext = $_POST['lang'];
            $fullname = $halfname.'.'.$ext;
            $file = fopen($path.$fullname,"w");
            fwrite($file, $data);
            fclose($file);

            if(isset($_POST['input'])) {
                $input = $_POST['input'];
                $inputfile = $halfname.'_in.txt' ;
                $file = fopen($path.$inputfile,"w");
                fwrite($file, $input);
                fclose($file);
            }
            
            $command = 'cd 2>&1 /opt/lampp/htdocs/codoso/'.$path.' 2>&1 gcc '.$halfname.' -o '.$fullname.'2>&1 ./'.$halfname.'2>&1 '.$inputfile;
            $output = shell_exec($command);
            echo $output;
        }
    ?>
  </div>
</div>
</body>
</html>