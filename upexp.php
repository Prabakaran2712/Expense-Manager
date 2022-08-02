<?php
include "configy.php";
$id=$_POST['id'];
$category=$_POST['category'];
$date=$_POST['date'];
$notes=$_POST['notes'];
$time=$_POST['time'];
$amount=$_POST['amount'];
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
$sql="update expense set category='$category',period='$time',amount='$amount',edate='$date',notes='$notes' where Personid=$id";
$result=mysqli_query($conn,$sql);
if($result){
    $success="";
    $_SESSION['success']=$success;
    header("location:homep.php");

}
else{
    echo"error";
}
}

?>