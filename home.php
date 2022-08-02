<?php
include "configy.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="icon" href="7.png">
</head>
<body>
<style>
/* Style the sidebar - fixed full height */
.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-image: linear-gradient(to bottom right,lightblue, blue,violet );;
  overflow-x: hidden;
  padding-top: 16px;
}

/* Style sidebar links */
.sidebar a {
  margin-top: 50px;
  padding: 10px 20px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  display: block;
}

/* Style links on mouse-over */
.sidebar a:hover {
  color: #f1f1f1;
  
  color: white;
  opacity: .5;
}
.main :hover{
  opacity: 2;
  font-size: 35px;
}

  
/* Style the main content */
.main {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 900;
  position: relative;
  top: 10px;
  right:30px;
  
  display: flex;
  justify-content: right;
  
}
a{
  text-decoration: none;
}
.con{
  position: absolute;
  top: 200px;
  left:160px ;
}
#hm{
  color: black;
  background-color: white;
}

/* Add media queries for small screens (when the height of the screen is less than 450px, add a smaller padding and font-size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}}
</style>
<div class="sidebar">
  <h1 style="color:white;font-size: 20px;margin-top: 50px;
  padding: 10px 20px 6px 16px;">Dashboard</h1>
  <a href="homep.php" id="hm"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="expensebox.php" id="ex"><i class="fa fa-inr"></i> <i class="fa fa-arrow-circle-down"></i>Expense</a>
  <a href="incomebox.php" id="ic"><i class="fa fa-inr"></i><i class="fa fa-arrow-circle-up"></i> Income</a>
  <a href="statistics.php" id="stat"><i class="fa fa-bar-chart-o"></i> Statistics</a>
</div>

<div class="main">
<h2 class="name" style="margin-right:60px;"><i class="fa fa-user-circle"></i> <?php echo $_SESSION["username"];?> </h2>
<h2 class="name"><a href="logout.php">Log out </a></h2>
</div>
</html>