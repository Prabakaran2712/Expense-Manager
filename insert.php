<?php include "configx.php";
session_start();
$error = "Both passwords do not match please check again";
$uname=$_POST['name'];
$cpwd=$_POST['cpassword'];
$email=$_POST['email'];
$pwd=$_POST['password'];
$sql="select * from users";
$result=mysqli_query($conn,$sql);
$flag=0;
if($result){
    while($row = mysqli_fetch_assoc($result)){
        if($row['name']==$uname){
            $flag=1;
            break;

        }
    }}

if($flag==1){
    $_SESSION["error"] = "User name is already taken ! Please choose another username ";
    header("location:signup.php");

}
else{

if($cpwd==$pwd){
    
$pwd=password_hash($pwd,PASSWORD_DEFAULT);
$sql="insert into users values('$uname','$pwd','$email')";
$result=mysqli_query($conn,$sql);
if($result){
    $_SESSION['dbname']=$uname;
    include "logtable.php";
    include "logtable2.php";
    header("location: index.php");
}
else{$_SESSION["error"] = "Error in Registering the User .Please try again";


    header("location:signup.php");
}
}
else{
    $_SESSION["error"] = $error;
    header("location: signup.php");
}
}