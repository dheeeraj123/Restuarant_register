<?php
session_start();
header("Content-Type:application/json");
$conn=mysqli_connect("localhost","root","","restuarant_app");
if(mysqli_connect_error())
{
    die('error in connection');
}
$email=$_POST['email'];
$password = $_POST['password'];
$query = mysqli_query($conn,"SELECT * FROM `login` WHERE `username`='$email' AND `password`='$password'");
if($query){
    $row=mysqli_fetch_assoc($query);
    $count=mysqli_num_rows($query);
    if($count==1){
        $_SESSION['id'] = $row['login_id'];
        $myarray['data']='you are logged in';
    }
    echo json_encode($myarray);
}
?>