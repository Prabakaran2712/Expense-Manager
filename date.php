<link href="table.css" rel="stylesheet">
<title>Details</title>
<?php
include "manincome.php";

if(isset($_POST['date'])){
$date=$_POST['date'];
$sql="select * from income where idate='$date'";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<table ><tr style='background-color:rgba(0, 10,255, 0.5);color:white'><th>Category</th><th>Amount</th><th>Notes</th><th>Time</th><th>Date</th><th>Delete</th><th>Update</th>";
    while($row = mysqli_fetch_assoc($result)){
    
    echo"<tr id='n'><th>$row[category]</th><th>$row[amount]</th><th>$row[notes]</th><th>$row[period]</th><th>$row[idate]</th><th><a href='delete.php?id=".$row['Personid']."'><button id='ji'>Delete</button></a></th><th><a href='update.php?id=".$row['Personid']."'><button id='ji'>Update</button></a></th>";
    
    }
    echo"</table>";
}
else{
    echo mysqli_error($conn);
}}
?>
<style>
  
    table{
        position: absolute;
        top: 300px;
        left: 200px;
    }
    #d{
        position: absolute;
        top: 150px;
        left: 200px;
    }
</style>
<form action='' method="POST" id="d">
    <br>
    <br>
    <input type="date" name="date">
    <button>Check</button>
</form>
