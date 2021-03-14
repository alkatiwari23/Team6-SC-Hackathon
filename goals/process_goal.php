<?php

session_start();
$id=$_SESSION['userid'];

$goalname=$_REQUEST['goalname'];
$months=$_REQUEST['months'];
$c_bal=$_REQUEST['c_bal'];
$e_bal=$_REQUEST['e_bal'];

 $join=mysqli_connect("localhost","root","","goals");

$sql = "INSERT INTO `crt_goals`( `goalname`, `months`, `c_bal`, `e_bal`,username) VALUES ('$goalname','$months','$c_bal','$e_bal',$id)";

mysqli_query($join,$sql) or die("error");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Your Goals</h1>
    <?php
    
    $sql = "SELECT * FROM `crt_goals` where username='$id'";
    $rs = mysqli_query($join,$sql) or die("error");
    
    $row = mysqli_fetch_array($rs);
    $target_bal = $row['e_bal'];
    $target_month = $row['months'];
    $installment_amt = $target_bal/$target_month;
   
    echo "<h1>".$row['goalname']."</h1>";
    echo "<br>Target Amount :  ".$target_bal = $row['e_bal'];
    echo "<br>Installment Amount :  ".ceil($installment_amt);
    echo "<br>Required Month :  ". $target_month;
    ?>

</body>
</html>