<link href="table.css" rel="stylesheet">
<title>Details</title>
<?php
include "manincome.php";

if(isset($_POST['month'])){
$date=$_POST['month'];
$y=explode('-',$date);
if(count($y)==2 && strlen($y[0])==2 && strlen($y[1])==4 && is_numeric($y[0]) && is_numeric($y[1])){
$sql="select * from income";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<table ><tr style='background-color:rgba(0, 10,255, 0.5);color:white'><th>Category</th><th>Amount</th><th>Notes</th><th>Time</th><th>Date</th><th>Delete</th><th>Update</th>";
    while($row = mysqli_fetch_assoc($result)){
        $x=explode('-',$row['idate']);
        $y=explode('-',$date);
    if($x[0]==$y[1] && $x[1]==$y[0]){
    echo"<tr id='n'><th>$row[category]</th><th>$row[amount]</th><th>$row[notes]</th><th>$row[period]</th><th>$row[idate]</th><th><a href='delete.php?id=".$row['Personid']."'><button id='ji'>Delete</button></a></th><th><a href='update.php?id=".$row['Personid']."'><button id='ji'>Update</button></a></th>";
    
    }}
    echo"</table>";
}
else{
    echo mysqli_error($conn);
}}
else{
    $error="Enter a valid month ";
    $_SESSION["error"]=$error;
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
        top: 200px;
        left: 200px;
    }
    #no{
        position: absolute;
        top: 250px;
        left: 200px;
        color: red;

    }
</style>
<form action='' method="POST" id="d">
    <input type="month" name="month" placeholder="MM-YYYY" >
    <button>Check</button>
</form>

<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span id='no'>$error</span>";
                    }
                ?>  
<?php
    unset($_SESSION["error"]);
?>