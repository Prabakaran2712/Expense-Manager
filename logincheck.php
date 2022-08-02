<?php include "configx.php";
session_start();
$uname=$_POST['name'];
$pwd=$_POST['password'];
$error = "username/password incorrect.Try entering again";
echo"hello";
$sql="select * from users where name='$uname'";
$result=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    $x=$row['password'];
}
if($result){
    echo"success";

}
else{
    echo "$uname"."$pwd";
}
if(password_verify($pwd,$x)){
    $_SESSION["username"] = $uname;
    $_SESSION["dbname"] = $uname;
    header('location: homep.php');

}
else{
    $_SESSION["error"] = $error;
    header("location: index.php");
}
