<?php
           $db="codoso";
           $server="localhost";
           $username = "codoso";
           $password = "omkar123";
          
           
           $connect = mysqli_connect($server,$username,$password,$db) or die('Error connecting to MySQL');
          /* if(!$connect){
               echo '<p> Error occured while connecting </p>';
               exit;
           }*/

?>