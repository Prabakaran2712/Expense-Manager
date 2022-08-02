


<!DOCTYPE html>
<html lang="en">
    <?php
    include "home.php";
    $id=$_GET['id'];

$sql="select * from expense where Personid='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    $row = mysqli_fetch_assoc($result);
    $category=$row['category'];
    $date=$row['edate'];
    $time=$row['period'];
    $amount=$row['amount'];
    $notes=$row['notes'];

}
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="incbox.css">
</head>


<body>
    
    <style>
        .incbox{
            position: absolute;
             top: 10px;
         left:200px;
        }
        .inpinc{
            position: absolute;
            
            left: 0px;
        }
        #ic{
    color: black;
    background-color: white;
}
#hm{
  color:white;
  background-color: transparent;

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
button:hover{
    background-image: none;
    background-color: white;
    color: black;
    
}
#x{
    color: red;
    font-size: large;
    position: absolute;
    
}
#y{
    color: green;
    font-size: large;
    position: absolute;
}
#mon{
position: absolute;
top: 200px;
left: 800px;
font-family: sans-serif;}
 </style>

   
    <div class="incbox">
        <div class="header"><h1>Update Transaction</h1></div>
        <div class="inpinc">
            <form action="upexp.php" method="POST">
            <label>Amount</label>
             
            <input type="text" name="amount" value="<?php echo "$amount";?>"> 

            <label>category</label>
              
            <select id="Board" name="category" >
            <option value="Food">Food</option>
            <option value="Social Life">Social Life</option>
            <option value="Self-development">Self-development</option>
            <option value="Transportation">Transportation</option>
            <option value="Culture">Culture</option>
            <option value="Household">Household</option>
            <option value="Apparel">Apparel</option>
            <option value="Beauty">Beauty</option>
            <option value="Health">Health</option>
            <option value="Education">Education</option>
            <option value="Gift">Gift</option>
            <option value="Other">Other</option>
            </select>
             
            <label>Date</label>
             
            <input type="date" name="date" id="date" value="<?php echo "$date";?>"> 
            
            <label>Time</label>
             
            <input type="time" name="time" id="time" value="<?php echo "$time";?>"> 

            <label>Notes</label>
             
            <input type="text" name="notes" value="<?php echo "$notes";?>"> 
            <input name="id" value="<?php echo $id;?>"" hidden>
            
            <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span id='x'>$error</span>";
                    }
                    if(isset($_SESSION["success"])){
                        $success = $_SESSION["success"];
                        echo "<span id='y'> $success </span>";
                    }
                ?>  


            <button>Update</button></form>
            <button><a href="manexpense.php">Back</a></button>
        </div>
        
    </div>
    <div id="mon">
    <h1 style="font-weight: 200;font-size:70px">Update your Transaction !</h1>
<br>

    </div>
    <script>
       document.getElementById(<?php echo  "$category";?>).selected = true;
       
    </script>
</body>
</html>
<?php
    unset($_SESSION["error"]);
    unset($_SESSION["success"]);
?>