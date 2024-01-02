<?php
header("Content-Type:application/json");
$conn=mysqli_connect("localhost","root","","restuarant_app");
if(mysqli_connect_errno())
{
    die('error in connection');
  
}
$username=$_POST['user_name'];
$email=$_POST['email'];
$mobile=$_POST['phone_number'];
$password=$_POST['password'];
$sql=mysqli_query($conn,"INSERT INTO sign_up (`user_name`,`email`,`phone_number`,`password`)VALUES('$username','$email','$mobile','$password')");
$log =mysqli_insert_id($conn);
$sql1 =mysqli_query($conn,"INSERT INTO `login`(`login_id`, `username`, `password`) VALUES ('$log','$email','$password')");
if($sql1)
{
$myarray['message']='added';
}
else{
    $myarray['message']='failed';}
    
echo json_encode($myarray);
?>
