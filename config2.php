<?php
$conn=mysqli_connect("localhost","root","",'expensemanager');
if($conn){
    echo "connected";
}
else{
    echo "not connected ";
}
$sql="create table users(name varchar(100),password varchar(100),email varchar(100))";
if(mysqli_query($conn,$sql)){
    echo "table created ";
}
else{
 echo "error in creating table";
}


?>