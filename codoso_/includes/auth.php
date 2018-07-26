<?php
           $db="users";
           $server="localhost";
           $username = "codoso";
           $password = "omkar123";
          
           
           $connect = mysql_connect($server,$username,$password) or die('Error connecting to MySQL');
           mysql_select_db($db);
           if(!$connect){
               echo '<p> Error occured while connecting </p>';
               exit;
           }

?>