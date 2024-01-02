<?php
$conn=new mysqli("localhost","root","","restuarant_app");
if($conn){
    echo"success";
}
else{
    echo"fail";
}
?>