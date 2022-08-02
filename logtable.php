<?php
session_start();
$uname=$_SESSION['dbname'];
$conn=mysqli_connect("localhost","root","");
if($conn){
    echo "";
}
else{
    echo "not connected ";
}
$sql="create database ".$uname;
if(mysqli_query($conn,$sql)){
    echo "data base created ";
}
else{
    $e=mysqli_error($conn);
 echo "error in creating data base $e";
}