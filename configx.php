<?php
$conn=mysqli_connect("localhost","root","",'expensemanager');
if($conn){
    echo "connected";
}
else{
    echo "not connected ";
}
?>