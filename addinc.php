<?php
$amount=$_POST['amount'];
$date=$_POST['date'];
$time=$_POST['time'];
$category=$_POST['category'];
$notes=$_POST['notes'];
include "configy.php";
if($amount=='' || $date=='' || $time=='' ||$category=='' ||$notes==''){
    $error="All fields are Mandatory";
    $_SESSION['error']=$error;
    header("location:incomebox.php");
}
elseif(is_numeric($amount)==false){
    $error="Amount must be a numeric value";
    $_SESSION['error']=$error;
    header("location:incomebox.php");

}
else{
$sql="insert into income(category,period,amount,idate,notes) values('$category','$time','$amount','$date','$notes')";
$result=mysqli_query($conn,$sql);
if($result){
    $success="Successfully added Rs $amount into your income log";
    $_SESSION['success']=$success;
    header("location:incomebox.php");

}
else{
    echo"error";
}
}