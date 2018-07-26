<div class="container head">
     <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6 center">
          <h1>Codoso</h1>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6 center">
         <div class="row">
           <div class="col-sm-5 col-md-5 col-lg-5"></div>
            <?php
              include 'includes/auth.inc.php';
              include 'includes/allfunctions.inc.php';
              $id = $_SESSION['user_id'];
              $img_path = " ";
              $query_ =" SELECT path FROM pics WHERE id = $id ";
              $result_ = mysqli_query($connect,$query_);
              $result__ = mysqli_fetch_assoc($result_);
              if(!mysqli_num_rows($result_)) $img_path = "img/male.png";
              else $img_path = "img/".$result__['path']; 
              echo '<div class="col-sm-1 col-md-1 col-lg-1">
               <img src="'.$img_path.'" alt="profile_pic" class="img-rounded" style="width:50px;height:50px; margin:50%;">
              </div>
              <div class="col-sm-5 col-md-5 col-lg-5" style="margin-top:0px; margin-left: 0px;">';

              

              if( !already_logged() ){
                header('Location: login.php');
                exit();
              }

              $name = get_name($id);
              
              echo '<b style="color:white; font-size: 16px;">Welcome '.$name.' !</b>';
            ?>
           <a href="logout.php" title="Logout"><button style="border: none;"><span class="glyphicon glyphicon-eject" style="color:white;"></span><button></a>
          </div>
          <div class="col-sm-1 col-md-1 col-lg-1"></div>
          </div>
          </div>
         </div>
      </div>
     </div>
  </div>