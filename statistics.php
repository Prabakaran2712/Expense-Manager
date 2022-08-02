<?php

include "home.php";

?>
<title>Statistics</title>
<style>
#stat{
    color: black;
    background-color: white;
}
#hm{
  color:white;
  background-color: transparent;

}
#ti1{
  position: absolute;
  left: 300px;
  top: 200px;
}
.con{
  position: absolute;
  top: 100px;
}
#chartContainer{
  position: absolute;
  top: 250px;
  left: 50px;
}

</style>
<?php
$today=date("Y-m-d");
$food=0;

$sql="select amount from expense where category='Food'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $food=$food+floatval($row['amount']);
   
}
}
$social=0;
$sql="select amount from expense where category='Social Life'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $social=$social+floatval($row['amount']);
   
}
}
$self=0;
$sql="select amount from expense where  category='Self-development'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $self=$self+floatval($row['amount']);
   
}
}
$trans=0;
$sql="select amount from expense where  category='Transportation'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $trans=$trans+floatval($row['amount']);
   
}
}
$cult=0;
$sql="select amount from expense where  category='Culture'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $cult=$cult+floatval($row['amount']);
   
}
}
$hh=0;
$sql="select amount from expense where  category='Household'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $hh=$hh+floatval($row['amount']);
   
}
}
$app=0;
$sql="select amount from expense where  category='Apparel'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $app=$app+floatval($row['amount']);
   
}
}
$beauty=0;
$sql="select amount from expense where  category='Beauty'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $beauty=$beauty+floatval($row['amount']);
   
}
}
$health=0;
$sql="select amount from expense where  category='Health'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $health=$health+floatval($row['amount']);
   
}
$edu=0;
$sql="select amount from expense where  category='Education'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $edu=$edu+floatval($row['amount']);
   
}
}
$gift=0;
$sql="select amount from expense where  category='Gift'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $gift=$gift+floatval($row['amount']);
   
}
}
$other=0;
$sql="select amount from expense where  category='Other'";
$result=mysqli_query($conn,$sql);
if($result){
  while($row = mysqli_fetch_assoc($result)){
    $other=$other+floatval($row['amount']);
   
}
}
}
?>
    <?php
     
     $dataPoints = array(
       array("label"=> "Food", "y"=>$food),
       array("label"=> "Social Life", "y"=> $social),
       array("label"=> "Self-development", "y"=> $self),
       array("label"=> "Transportation", "y"=> $trans),
       array("label"=> "Culture", "y"=> $cult),
       array("label"=> "Apparel", "y"=> $app),
       array("label"=> "Beauty", "y"=> $beauty),
       array("label"=> "Health", "y"=> $health),
       array("label"=> "Education", "y"=> $edu),
       array("label"=> "Gift", "y"=> $gift),
       array("label"=> "House Hold", "y"=> $hh),
       array("label"=> "Other", "y"=> $other)
       
     );
       
     ?>
     <!DOCTYPE HTML>
     <html>
     <head>  
     <script>
     window.onload = function () {
      
     var chart = new CanvasJS.Chart("chartContainer", {
       animationEnabled: true,
       exportEnabled: true,
       title:{
         text: "Total Expense in Indian Rupee"
       },
       subtitles: [{
         text: "Currency Used: Indian Rupee"
       }],
       data: [{
         type: "pie",
         showInLegend: "true",
         legendText: "{label}",
         indexLabelFontSize: 16,
         indexLabel: "{label} - #percent%",
         yValueFormatString: "##0",
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
       }]
     });
     chart.render();
      
     }
     </script>
     </head>
     <body>
     <div id="chartContainer" style="height: 370px; width: 100%;"></div>
     <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
     </body>
     </html>                              
<div class="con">
  <header><h1>Statistics</h1></header>
</div>
