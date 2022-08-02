<?php

include "home.php";

?>
<style>
#ic{
    color: black;
    background-color: white;
}
#hm{
  color:white;
  background-color: transparent;

}
.con{
  position: absolute;
  width: 100%;
  top: 100px;
  left:170px;
  background-color: blue;
}
#ti{
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
  position: absolute;
  top: 100px;
  left:200px;
  background-color: blue;
  
}
#ti1{
  position: absolute;
  top: 150px;
  left:170px;
}
</style>
<div class="con" >
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
echo "<h1 id='ti1'>$sum1</h1>";
}
?>
  
</div>