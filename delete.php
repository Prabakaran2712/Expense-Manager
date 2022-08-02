<?php
$id=$_GET['id'];
include "configy.php";
$sql="delete from income where Personid='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:all.php");
}
else{
    echo mysqli_error($conn);
    echo "Error in deleting";
}
