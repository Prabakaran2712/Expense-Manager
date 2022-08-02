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
    header("location:Expensebox.php");
}
elseif(is_numeric($amount)==false){
    $error="Amount must be a numeric value";
    $_SESSION['error']=$error;
    header("location:Expensebox.php");

}
else{
$sql="insert into expense(category,period,amount,edate,notes) values('$category','$time','$amount','$date','$notes')";
$result=mysqli_query($conn,$sql);
if($result){
    $success="Successfully added Rs $amount into your Expenditure log";
    $_SESSION['success']=$success;
    header("location:Expensebox.php");

}
else{
    echo"error";
}
}