<?php

include 'auth.php';
session_start();

function already_logged(){
   if( isset($_SESSION['user_id']) ) return true;
   else return false;
}

function user_exists($username){
    $query="SELECT COUNT(uname) as count FROM usersdata WHERE uname='$username'";
    $result= mysql_query($connect,$query);
    return ($result['count']==1) ?true :false ;
}

function login_perform($username, $password){
	$query="SELECT id FROM usersdata where uname = '$username' AND password = '$password'";
    $result = mysql_query($connect,$query);
    if(mysql_num_rows($result)==1){
         $_SESSION['user_id']= $result['id'];
         $id = $_SESSION['user_id'];
         header('Location: index.php');
         exit();
    }  
}
function get_name($id){
	$query=mysql_query("SELECT CONCAT('fname',' ','lname') as name FROM usersdata WHERE id = $id ");
	$result=mysql_fetch_assoc($query);
	return $result['name'];
}
?>