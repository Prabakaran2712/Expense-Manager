<link href="table.css" rel="stylesheet">
<link href="button.css" rel="stylesheet">
<title>Details</title>
<?php
include "manincome.php";

$sql="select * from income";
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
}
?>
<button style="position:absolute;left:200px;top:140px"><a href="manincome.php">Back</a></button>
<style>
    table{
        position: absolute;
        top: 200px;
        left: 200px;
    }
</style>