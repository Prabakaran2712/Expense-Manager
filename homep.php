<?php

include "home.php";

?>
<title>Home</title>
<style>
.con{
    position:absolute;
    top:100px;
    left: 200px;
    width: 90%;
}
.r{
  color:red;
}
.g{
  color: green;
}
button{
    width: 120px;
    height: 50px;
    border-radius: 10px;
    background-image: linear-gradient(to bottom right,lightblue, blue,violet );
    color: white;
    font-family:Arial, Helvetica, sans-serif ;
    font-weight: 900;
    box-shadow: 5px 5px 2px 1px rgba(0, 0, 255, .2);

}
</style>

<div class="con" >
<h1>Welcome Back</h1><br><br>
<h2 id="ti">Today's income</h2>
<?php
$today=date("Y-m-d");
$sum1=0;

$sql="select amount from income where idate='$today'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $sum1=$sum1+floatval($row['amount']);
   
}
echo "<h2 id='ti1' class='g'>&#8377;$sum1</h2>";
}
?>
<button><a href="manincome.php">Manage Income</a></button><br>
<h2 id="ti">Today's expense</h2>
<?php
$today=date("Y-m-d");
$sum2=0;

$sql="select amount from expense where edate='$today'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $sum2=$sum2+floatval($row['amount']);
   
}
echo "<h2 id='ti1' class='r'>&#8377;$sum2</h2>";
}
?>
<button><a href="manexpense.php">Manage Expense</a></button><br>
<h2 id="ti">Balance Amount</h2>

<?php

$exp=0;

$sql="select amount from expense";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $exp=$exp+floatval($row['amount']);
   
}
}
$inc=0;
$sql="select amount from income";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $inc=$inc+floatval($row['amount']);
   
}

}
$balance=$inc-$exp;
echo "<h2 id='ti1' style='color:grey'>&#8377;$balance</h2>";
?>
<div class="bl">
<h1 >Total Expense</h1>
<h1 class="r"><?php echo "&#8377;$exp";?></h1>
<h1 >Total Income</h1>
<h1 class="g"><?php echo "&#8377;$inc";?></h1>
</div>

</div>