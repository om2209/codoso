<?php

include 'auth.inc.php';
session_start();

function already_logged(){
   global $connect;
   if( isset($_SESSION['user_id']) ) return true;
   else return false;
}

function user_exists($username){
    global $connect;
    $query=" SELECT id FROM usersdata WHERE uname='$username' ";
    $result= mysqli_query($connect,$query);
    if(mysqli_num_rows($result)==1) return true;
    else return false;
}

function login_perform($username, $password){
    global $connect;
	$query=" SELECT id FROM usersdata where uname = '$username' AND password = '$password' ";
    $result = mysqli_query($connect,$query);
    $idx = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)==1){
         $_SESSION['user_id']= $idx['id'];
         $id = $_SESSION['user_id'];
         header('Location: index.php');
         exit();
    }  
}
function get_name($id){
    global $connect;
	$query= " SELECT CONCAT(fname,' ',lname) as name FROM usersdata WHERE id = $id ";
	$result= mysqli_query($connect,$query);
    $names = mysqli_fetch_assoc($result);
	return $names['name'];
}
?>