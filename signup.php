
<head>
<title>Register</title>
<link rel="icon" href="7.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<body>
<style>
    *{
        color: black;
    }
body{
    
    text-align:center;
    background-image: linear-gradient(to bottom right,lightblue, blue,violet );
    background-repeat: no-repeat;
    background-size: 100% 400%;
    }
label{
    margin-bottom: 10px;
    position: absolute;
    left: 43%;
   
    
}
input[type=text]:focus +label{
  border-color: green;
  
  box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
 
}


.box{
    margin-top: 10%;
    padding: 10px;
    background-color: white;
    width: 40%;
    height: 70%;
    margin-left: 27%;
  
}
input{
    margin-bottom: 20px;
    text-decoration: none;
}

.BODY input{
    position: relative;
    background: transparent;
    border: none;
    font-size: 16px;
   
    border-bottom: 2px solid;
    left: 0px;

}
.BODY label{
    position: relative;
    top: 10px;
    left: -90px;
    pointer-events: none;
    display: block;
    transition: 0.5s;
}

input:focus,
select:focus,
textarea:focus,
button:focus {
    outline: none;
}
input:focus{
    border-color: green;
}
.heading{
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 600;
}
#ex{
    border-radius: 20px;
    background-image: linear-gradient(to right,lightblue, blue,violet );
    color: white;
    width: 250px;
    height: 40px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 900;
    opacity: .8;

}
a{
    text-decoration: none;
    color: blue;
}
#x{
   position: relative;
   top:10px;
    color: red;
    font-family: Arial, Helvetica, sans-serif;
}
</style>
<?php session_start(); 
?>
<div class="box
">
<div class="heading">
<h1>REGISTER</h1></div>
<div class="BODY">
<form action="insert.php" method="POST">
<label>Name</label><br>
<i class="fa fa-user"></i>
<input type="text" name="name" placeholder="UserName" required><br>
<label style="position: relative;left: -80px;">Password</label><br>
<i class='fa fa-key'></i>
<input type="password" name="password" placeholder="Password"><br><label style="position: relative;left: -40px;">Confirm Password</label><br>
<i class='fa fa-key'></i>
<input type="password" name="cpassword" placeholder="Re-Enter Password"><br>
<label style="position: relative;left: -90px;">Email</label><br>
<i class='fa fa-envelope'></i>
<input type="email" name="email" placeholder="abc@email.com" required><br>

<button id="ex">Sign Up</button><br>
<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span id='x'>$error</span>";
                    }
                ?>  
</form></div>
<a href="index.php">Back to Login</a> 
</div>
</body>

<?php
    unset($_SESSION["error"]);
?>