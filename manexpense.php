<?php

include "home.php";

?>
<link href="button.css" rel="stylesheet">
<title>Details</title>
<style>
.con{
    position:absolute;
    top:10px;
    left: 200px;
}
</style>
<div class="con" >
<h1>Expenditure details</h1>
<form action="" method="POST">
<select name="check">
    <option value="all">All</option>
    <option value="date">Date</option>
    <option value="month">Month</option>
    <option value="year">Year</option>
    </select>
    <button name="h">Fetch</button>
</form>
<?php
if(isset($_POST['h'])){
if($_POST['check']=='all'){
    header("location:all2.php");
}
if($_POST['check']=='date'){
    header("location:date2.php");
}
if($_POST['check']=='month'){
    header("location:month2.php");
}
if($_POST['check']=='year'){
    header("location:year2.php");
}
}
?>
</div>
<button style="position:absolute;left:200px;top:140px"><a href="homep.php">Back</a></button>