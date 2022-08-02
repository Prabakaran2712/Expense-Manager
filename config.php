<?php
$conn=mysqli_connect("localhost","root","");
if($conn){
    echo "";
}
else{
    echo "not connected ";
}
$sql="create database expensemanager";
if(mysqli_query($conn,$sql)){
    echo "data base created ";
}
else{
 echo "error in creating data base";
}


?>