<?php
session_start();
$uname=$_SESSION['dbname'];


$conn=mysqli_connect("localhost","root","",$uname);
if($conn){
    echo "connected";
}
else{
    echo "not connected ";
}
?>