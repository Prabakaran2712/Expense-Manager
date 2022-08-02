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
$sql="create table income(Personid int NOT NULL AUTO_INCREMENT primary key,category varchar(200),period time,amount float,idate date,notes varchar(300))";
if(mysqli_query($conn,$sql)){
    echo "table created ";
}
else{
 echo "error in creating table";
}
$sql="create table expense(Personid int NOT NULL AUTO_INCREMENT primary key,category varchar(200),period time,amount float,edate date,notes varchar(300))";
if(mysqli_query($conn,$sql)){
    echo "table created ";
}
else{
    $error=mysqli_error($conn);
 echo "$error in creating table";
}

?>